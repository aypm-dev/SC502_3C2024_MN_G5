// @ts-check
/**
 * @typedef CallMetadata
 * @prop {string} user
 */

/**
 * @typedef MessageMetadata
 * @prop {string} user
 * @prop {string} message
 */


let userId = "user-2-2"
let peerClient;

let createdConnection = null;
let receiveConnection = null;
let createdCall = null;
let receiveCall = null;
/**@type {MediaStream | null} */
let userStream = null;

function closeCall() {
	if (peerClient) peerClient.destroy();
	if (createdConnection) createdConnection.close();
	if (receiveConnection) receiveConnection.close();
}


console.log("hello?")

window.addEventListener("beforeunload", closeCall)
window.addEventListener("DOMContentLoaded", () => {
	const peerForm = /**@type{HTMLFormElement}*/(document.getElementById("peerForm"))
	/**@ts-ignore */
	console.log(peerForm);

	peerForm.addEventListener("submit", createPeer)
	
	const callForm = /**@type{HTMLFormElement}*/(document.getElementById("callForm"))
	/**@ts-ignore */
	callForm.addEventListener("submit", startCall)

	const messageForm = /**@type{HTMLFormElement}*/(document.getElementById("messageForm"))
	/**@ts-ignore */
	messageForm.addEventListener("submit", sendMessage)
})


async function createPeer(event) {
	console.log("CREATING PEEEEEEEEEEEEEEEEEEEEEER");
	
	event.preventDefault();
	const form = event.target;
	const formData = new FormData(form);

	
	const userIdValue = /**@type {string | null} */ (formData.get('userId'));
	console.log("creating", userIdValue)
	if (!userIdValue) { form.userId?.focus(); return };

	peerClient = new Peer(userIdValue, {host: 'localhost', port: 9000});
	userId = userIdValue;
	console.log(peerClient, userId, "listening to calls")
	await listenToCalls();
}

async function startCall(event) {
	if (!peerClient) {
		alert("Peer Client Not Created, create it first")
	}

	event.preventDefault();
	const form = event.target;
	const formData = new FormData(form);

	const callerId = /**@type {string | null} */ (formData.get('callerId'));
	if (!callerId) { form.callerId?.focus(); return };

	await awaitPeer()
	await makeACall(callerId);
}


async function awaitPeer() {
	return await new Promise((resolve) => {
		peerClient.on('open', (id2) => {
			resolve();
		});
	});
}


async function makeACall(callerId) {

	const callerVideo = /**@type {HTMLVideoElement} */ (document.getElementById('callerVideo'));
	const userVideo = /**@type {HTMLVideoElement} */ (document.getElementById('userVideo'));

	if (!callerVideo || !userVideo) {
		alert("ERROR Mostrando media")
		return
	}

	/**@type {CallMetadata} */
	const metadata = {
		user: 'user-1-1'
	}
	createdConnection = peerClient.connect(callerId, {
		metadata
	});

	createdConnection.on('open', async () => {
		// Receive messages
		const peer1Stream = await navigator.mediaDevices.getDisplayMedia({ video: true });
		createdCall = peerClient.call(callerId, peer1Stream);
		userVideo.srcObject = userStream;

		createdCall.on('stream', (remoteStream) => {
			callerVideo.srcObject = remoteStream;
		});

		createdConnection.on('data', messageData => {
			displayMessage(messageData)
		});
	});
}

async function listenToCalls() {
	await awaitPeer()

	const callerVideo = /**@type {HTMLVideoElement} */ (document.getElementById('callerVideo'));
	const userVideo = /**@type {HTMLVideoElement} */ (document.getElementById('userVideo'));

	if (!callerVideo || !userVideo) {
		alert("ERROR Mostrando media")
		return
	}

	peerClient.on('connection', (connection) => {
		/**@type {CallMetadata} */
		const metadata = connection.metadata;
		receiveConnection = connection;

		if (!confirm(`THIS USER IS CALLING YOU: ${metadata.user}`)) {
			connection.close();
		}

		connection.on('open', function () {
			showCallInterface(metadata)

			peerClient.on('call', async (callValue) => {
				userStream = await navigator.mediaDevices.getDisplayMedia({ video: true });
				callValue.answer(userStream);
				userVideo.srcObject = userStream;

				receiveCall = callValue;
				receiveCall.on('stream', (remoteStream) => {
					callerVideo.srcObject = remoteStream;
				});
			});


			connection.on('data', function (messageData) {
				displayMessage(messageData)
			});
		});
	});
}

/**@param {MessageMetadata} metadata */
function showCallInterface(metadata) {
	document.getElementById("callInterface")?.classList.remove("hidden")
	document.getElementById("loadingInterface")?.classList.add("hidden")

	const callerTag = document.getElementById("callerTag")
	if (callerTag) {
		callerTag.insertAdjacentHTML("beforeend", `<span>${metadata.user}</span>`)
	}
}

/** @param {SubmitEvent & { target: HTMLFormElement }} event */
function sendMessage(event) {
	if (!createdConnection) {
		alert("ERROR MANDANDO MENSAJE, HUBO UN PROBLEMA CON LA CONEXION")
	}

	event.preventDefault();
	const form = event.target;
	const formData = new FormData(form);


	const message = /**@type {string | null} */ (formData.get('message'));
	if (!message) { form.message?.focus(); return };

	/**@type{MessageMetadata} */
	const messageData = { user: userId, message }
	createdConnection?.send(messageData);
	form.reset()
}

/** @param {MessageMetadata} messageData */
function displayMessage(messageData) {
	const messageContainer = document.getElementById('messageContainer');
	if (!messageContainer) return

	const messageHtml = `<div><strong>${messageData.user}:</strong> ${messageData.message}</div>`
	messageContainer.insertAdjacentHTML("afterbegin", messageHtml)
}



