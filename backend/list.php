<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");

$connection = new mysqli("localhost","root","","ardina");
    $data       = mysqli_query($connection, "select * from zahiro");
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);