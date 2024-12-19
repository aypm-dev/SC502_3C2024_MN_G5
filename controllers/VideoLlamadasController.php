<?php
require_once '../models/User.php';
require_once '../models/VideoLlamadas.php';

switch ($_GET["op"]) {
    case 'obtenerTraductoresDisponibles':
        $modelo = new User();
        $traductores = $modelo->getAllOnlineTranslators();
        echo json_encode($traductores);
        break;

    case 'obtenerLlamadasCliente':
        $modelo = new VideoLlamadas();
        $llamadas = $modelo->getAllFromClient($_POST["clienteId"]);

        $data = array();
        foreach ($llamadas as $reg) {
            $data[] = array(
                "id_videollamada" => $reg['id_videollamada'],
                "id_cliente" => $reg['id_cliente'],
                "id_traductor" => $reg['id_traductor'],
                "fecha" => $reg['fecha'],
                "nombre_traductor" => $reg['nombre_traductor'],
                "duracion" => $reg['duracion'],
                "estado" => $reg['estado']
            );
        }
        $resultados = array(
            "sEcho" => 1, ##informacion para datatables
            "iTotalRecords" => count($data), ## total de registros al datatable
            "iTotalDisplayRecords" => count($data), ## enviamos el total de registros a visualizar
            "aaData" => $data
        );

        echo json_encode($resultados);

        break;
    case 'obtenerLlamadasTraductor':
        $modelo = new VideoLlamadas();
        $llamadas = $modelo->getAllFromTranslator($_POST["traductorId"]);

        $data = array();
        foreach ($llamadas as $reg) {
            $data[] = array(
                "id_videollamada" => $reg['id_videollamada'],
                "id_cliente" => $reg['id_cliente'],
                "id_traductor" => $reg['id_traductor'],
                "fecha" => $reg['fecha'],
                "nombre_cliente" => $reg['nombre_cliente'],
                "duracion" => $reg['duracion'],
                "estado" => $reg['estado']
            );
        }
        $resultados = array(
            "sEcho" => 1, ##informacion para datatables
            "iTotalRecords" => count($data), ## total de registros al datatable
            "iTotalDisplayRecords" => count($data), ## enviamos el total de registros a visualizar
            "aaData" => $data
        );

        echo json_encode($resultados);

        break;
    case 'crearLlamada':
        try {
            //code...
        
            $modelo = new VideoLlamadas();

            $llamada = $modelo->createVideocall( (int) $_POST["idCliente"],  (int) $_POST["idTraductor"], rand(10, 30));
            
            echo var_dump($llamada);
        } catch (\Throwable $th) {
            echo var_dump($th);

        }
        break;

    default:
        # code...
        break;
}
?>