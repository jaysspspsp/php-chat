<?php
    require 'connection.inc.php';
    require 'functions.inc.php';
    
    $id = $_POST['id'];
    $to = $_POST['to'];
    $table = 'chat_'.$id;

   
    
        
    $sql = mysqli_query($con,"SELECT * FROM `$table` Where `to_id` = '$to'");
    
    $arr = array();
    $i = 0;
    while ($row = mysqli_fetch_assoc($sql)){
         $arr[$i] = $row;
         $i++;
    }
    
   
    $json = json_encode($arr);
    echo $json;
    
   
?>