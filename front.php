<?php
    
    require 'connection.inc.php';
    require 'functions.inc.php';
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $table = "chat_".$id;
  

    
    $sql = mysqli_query($con,"SELECT * FROM `$table` ORDER BY `id` DESC");
    if ($sql){
        $arr = array();
        $names = array();
        $i = 0;
        $j = 0;
        $k = 0;
        while ($row = mysqli_fetch_assoc($sql)){
            
            if($row['type'] == 1){
            $arr[$i] = $row['to_id'];
            $i++;

            }else{
                $arr[$i] = $row['from_id'];
                $i++;
            }
            
        }
        $arr = array_unique($arr);
        
        
      

        while ($j < count($arr)){
            $k = $arr[$j];
            $user = mysqli_query($con,"SELECT * FROM `user` WHERE `id` = '$k'");
            $row = mysqli_fetch_assoc($user);
            $name = $row['fname']." ".$row['lname'];
            $to = $row['id'];
            
            echo '
                    <a class="text-reset nav-link p-0 mb-6" href="chat.php?by='.$id.'&to='.$to.'">
                    <div class="card card-active-listener">
                        <div class="card-body">
                
                            <div class="media">
                
                                <div class="avatar avatar-online mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                </div>
                
                
                                <div class="media-body overflow-hidden">
                                    <div class="d-flex align-items-center mb-1">
                                        <h6 class="text-truncate mb-0 mr-auto">'.$name.'</h6>
                                        <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                    </div>
                                    <div class="text-truncate">is typing<span
                                            class="typing-dots"><span>.</span><span>.</span><span>.</span></span>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                
                
                    </div>
                </a>';
            
            
            $j++;

        }
    }
}
    


?>