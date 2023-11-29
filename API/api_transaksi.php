<?php

header ('Content-Type: application/json');

include '../koneksi.php';
//db a_vioscake_test

$request_method = $_SERVER['REQUEST_METHOD'];

if (isset($_GET['action'])){
    $action = $_GET['action'];

    switch ($request_method){
        case 'GET' :
            break;
        case 'POST' :
            break;
        case 'PUT' :
            break;
        case 'DELETE' :
            break;
        default:
            //metode http tidak didukung
            http_response_code(405);
            echo json_encode(array("message" => "Method not allowed"));
            break;
    }
} else {
    //action tidak diatur
    http_response_code(400);
    echo json_encode(array("message" => "'action' parameter is missing"));
}

$koneksi -> close();

?>