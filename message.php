<?php
    require 'connection.inc.php';
    require 'functions.inc.php';
    
    $id = $_POST['id'];
    $to = $_POST['to'];
    $text = $_POST['text'];
    $chat1 = "chat_".$id;
    $chat2 = "chat_".$to;
    
    mysqli_query($con,"INSERT INTO `$chat1` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES (NULL, '', '$to', '1', '$text', '', '', '', 'current_timestamp()', 'current_timestamp()', '')");
    mysqli_query($con,"INSERT INTO `$chat2` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES (NULL, '$to', '', '0', '$text', '', '', '', 'current_timestamp()', 'current_timestamp()', '')");
    


?>