<?php

require 'connection.inc.php';

$id = $_SESSION['id']
$to = $_POST['to'];

$table = 'chat_'.$id;  
    $sql = mysqli_query($con,"SELECT * FROM `$table` where `to_id` = '$to'");
    return mysqli_num_rows($sql);
?>