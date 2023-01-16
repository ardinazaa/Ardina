<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");

   $connection = new mysqli("localhost", "root", "", "ardina");
   $title      = $_POST['title']; 
   $content    = $_POST['content'];
   $id         = $_POST['id'];
       
   $result = mysqli_query($connection, "update zahiro set title='$title', content='$content' where id='$id'");
       
   if($result){
       echo json_encode([
           'message' => 'Data edit successfully'
       ]);
   }else{
       echo json_encode([
           'message' => 'Data Failed to update'
       ]);
   }