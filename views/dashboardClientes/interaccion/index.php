<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://unpkg.com/peerjs@1.5.4/dist/peerjs.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<style>
		.blurredbackground {
			backdrop-filter: blur(8px);
		}
	</style>

</head>

<body>
	<?php include '../../assets/components/navDashboardClientes.php'; ?>

	<div class="relative container-fluid mt-4 mb-4">
		<!-- LOADING SCREEN -->
		<div id="loadingInterface" class="row animate-pulse">
			<!-- Meeting Screen (left column) -->
			<?php include './loadingInterface.php'; ?>

		</div>


		<div id="callInterface" class="row hidden">
			<!-- Meeting Screen (left column) -->
			<div class="col-lg-9 col-md-9 col-sm-12 h-100 ">
				<div class="border border-black rounded-3 rounded-3 overflow-hidden position-relative">
					<video id="callerVideo" autoplay class="aspect-video w-full "></video>

					<div
						class="absolute left-full ring-4 ring-white top-full max-h-[24rem] w-[16rem] -translate-x-full -translate-y-full bg-white">
						<video id="userVideo" autoplay class=""></video>
					</div>

					<span style="top: 0.5rem; left: 0.5rem;" class="position-absolute d-flex gap-2 text-white">
						<div id="callerTag" class="blurredbackground rounded-3 bg-dark p-1 px-2 shadow-sm"
							style="--bs-bg-opacity: .5;">

							<i class="bi bi-person"></i>

						</div>
						<button class="blurredbackground rounded-3 bg-dark p-1 px-2 border-0 text-white shadow-sm"
							style="--bs-bg-opacity: .5;">
							<i class="bi bi-heart"></i>
						</button>
					</span>


					<span
						style="top: 0.5rem; left: auto; transform: translate(calc(-100% - 0.5rem), 0px); text-wrap: nowrap; --bs-bg-opacity: .5;"
						class="position-absolute blurredbackground rounded-3 bg-dark p-1 px-2 shadow-sm text-white">
						Español -> Lesco
						<i class="bi bi-hand-thumbs-up"></i>
					</span>
				</div>

			</div>

			<!-- Right Column (controls and chat) -->
			<div class="col-lg-3 col-md-3 col-sm-12  d-flex flex-column">
				<!-- Meeting Controls (top section of the right column) -->
				<div class="d-flex gap-2 mb-2">
					<button onclick="closeCall()" type="button" class="btn btn-danger">
						<i class="bi bi-telephone-fill"></i>
						Terminar
					</button>

					<button style="margin-left: auto;" type="button" class="btn btn-primary"><i
							class="bi bi-camera-fill"></i></button>
					<button type="button" class="btn btn-primary"><i class="bi bi-headphones"></i></button>
				</div>

				<!-- Chat (bottom section of the right column) -->
				<div class="d-flex flex-column border border-black rounded-3 gap-1 bg-light p-3 h-100">
					<h6>
						Chat De La Interraccion
					</h6>

					<section id="messageContainer" class="h-100 d-flex flex-column-reverse">


						<span class="opacity-50">
							(Conectado con Maria Suarez, saluda <i class="bi bi-emoji-laughing"></i>!)
						</span>
					</section>

					<form id="messageForm" class="d-flex gap-2 align-items-end mt-auto">
						<input required class="form-control" name="message" aria-describedby="message"
							placeholder="(Mandar un mensaje)" class="w-100">

						<button type="button" class="btn btn-outline-secondary">
							<i class="bi bi-emoji-smile"></i>
						</button>
						<button type="submit" class="btn btn-primary">
							<i class="bi bi-send"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include '../../assets/components/footer.php'; ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</body>

<script>
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
	// @ts-check
	const ID_PREFIX = "LESCONNECT-"

	let userId = "user-2-2"
	let traductorId = "user-2-2"
	let peerClient;

	let connection = null;
	let createdCall = null;
	let receiveCall = null;
	/**@type {MediaStream | null} */
	let userStream = null;


	$(document).ready(async () => {
		window.addEventListener("beforeunload", closeCall)


		console.log($('#clientesTabla'))
		const urlParams = new URLSearchParams(window.location.search);
		userId = ID_PREFIX + urlParams.get('id');
		traductorId = urlParams.get('traductorId') ? ID_PREFIX + urlParams.get('traductorId') : null;

		console.log(userId, traductorId)

		createPeer();
		await awaitPeer()

		if (traductorId) {
			await makeCall(userId);
		} else {
			await listenToCalls();
		}
	});

	window.addEventListener("DOMContentLoaded", () => {
		const messageForm = /**@type{HTMLFormElement}*/(document.getElementById("messageForm"))
		/**@ts-ignore */
		messageForm.addEventListener("submit", sendMessage)
	})


	async function createPeer() {
		console.log("creating", userId)
		if (!userId) { return; };

		peerClient = new Peer(userId)
	}

	async function awaitPeer() {
		if (peerClient.open) {
			return
		}

		return await new Promise((resolve) => {
			peerClient.on('open', (id2) => {
				setTimeout(() => {
					resolve();
				}, 1000)
			});
		});
	}


	async function makeCall() {
		console.log("Making call", userId);
		const callerVideo = /**@type {HTMLVideoElement} */ (document.getElementById('callerVideo'));
		const userVideo = /**@type {HTMLVideoElement} */ (document.getElementById('userVideo'));

		if (!callerVideo || !userVideo) {
			alert("ERROR Mostrando media")
			return
		}

		/**@type {CallMetadata} */
		const metadata = {
			userId: userId,
			nombre: "angel xd"
		}

		console.log("Calling", traductorId)
		connection = peerClient.connect(traductorId, {
			metadata
		});
		console.log("Calling 2", traductorId, connection)

		connection.on('open', async (traductorMetadaData) => {
			console.log(traductorMetadaData)
			showCallInterface(metadata)


			// Receive messages
			const userStream = await navigator.mediaDevices.getDisplayMedia({ video: true });
			createdCall = peerClient.call(traductorId, userStream);
			userVideo.srcObject = userStream;

			createdCall.on('stream', (remoteStream) => {
				callerVideo.srcObject = remoteStream;
			});

			connection.on('data', messageData => {
				displayMessage(messageData)
			});
		});
	}

	async function listenToCalls() {

		const callerVideo = /**@type {HTMLVideoElement} */ (document.getElementById('callerVideo'));
		const userVideo = /**@type {HTMLVideoElement} */ (document.getElementById('userVideo'));

		if (!callerVideo || !userVideo) {
			alert("ERROR Mostrando media")
			return
		}

		console.log("listener awating for connection")
		peerClient.on('connection', (connectionValue) => {
			/**@type {CallMetadata} */
			connection = connectionValue;
			const metadata = connection.metadata;

			if (!confirm(`THIS USER IS CALLING YOU: ${metadata.nombre ?? ""}`)) {
				connection.close();
			}

			connection.on('open', function () {
				showCallInterface(metadata)

				peerClient.on('call', async (callValue) => {
					console.log(await window.mediaDevices.getDisplayMedia({ video: true }), "gettig the screen")
					userStream = await window.mediaDevices.getDisplayMedia({ video: true }); //                await window.mediaDevices.getDisplayMedia({ video: true });
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
		if (!connection) {
			alert("ERROR MANDANDO MENSAJE, HUBO UN PROBLEMA CON LA CONEXION")
		}

		event.preventDefault();
		const form = event.target;
		const formData = new FormData(form);


		const message = /**@type {string | null} */ (formData.get('message'));
		if (!message) { form.message?.focus(); return };

		/**@type{MessageMetadata} */
		const messageData = { user: userId, message }
		displayMessage({ user: userId, message })
		connection?.send(messageData);
		form.reset()
	}

	/** @param {MessageMetadata} messageData */
	function displayMessage(messageData) {
		const messageContainer = document.getElementById('messageContainer');
		if (!messageContainer) return

		const messageHtml = `<div><strong>${messageData.user}:</strong> ${messageData.message}</div>`
		messageContainer.insertAdjacentHTML("afterbegin", messageHtml)
	}

	function closeCall() {
		if (peerClient) peerClient.destroy();
		if (connection) connection.close();
	}


</script>

</html>