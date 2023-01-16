<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");
$connection = new mysqli("localhost", "root", "", "ardina");
    $id = $_POST['id'];
    $result = mysqli_query($connection, "delete from zahiro where id=".$id);
    if($result){
        echo json_encode([
            'message' => 'Data delete successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to delete'
        ]);
    }