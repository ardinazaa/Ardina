<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");
 $connection = new mysqli("localhost", "root", "", "ardina");
 $title      = $_POST['title']; 
 $content    = $_POST['content'];
 $date       = date('Y-m-d');
 
 $result = mysqli_query($connection, "insert into zahiro set title='$title', content='$content', date='$date'");
 
 if($result){
     echo json_encode([
         'message' => 'Data input successfully'
     ]);
 }else{
     echo json_encode([
         'message' => 'Data Failed to input'
     ]);
 }