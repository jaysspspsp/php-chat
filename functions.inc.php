<?php
    require 'connection.inc.php';
    session_start();
    function pr($arr){
        echo '<pre>';
        print_r($arr);
    }
    
    function prx($arr){
        echo '<pre>';
        print_r($arr);
        die();
    }
    function get_safe_value($con,$str){

        if($str!=''){
            $str=trim($str);
            return mysqli_real_escape_string($con,$str);
        }
    }

    function get_chat($by,$to){
        require 'connection.inc.php';
        $id = $by;
        $table = 'chat_'.$id;
        $html = '';
        
        $sql = mysqli_query($con,"SELECT * FROM `$table`");
        
        
        while($row = mysqli_fetch_assoc($sql)){
            if($row['type'] != '1' && $row['from_id'] = $to){
                $html = $html.'
                <div class="message">
                <!-- Avatar -->
                <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-2-info">
                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="">
                </a>

                <!-- Message: body -->
                <div class="message-body">

                    <!-- Message: row -->
                    <div class="message-row">
                        <div class="d-flex align-items-center">

                            <!-- Message: content -->
                            <div class="message-content bg-light">
                                <div>'.$row['text'].'</div>

                                <div class="mt-1">
                                    <small class="opacity-65">8 mins ago</small>
                                </div>
                            </div>
                            <!-- Message: content -->

                            <!-- Message: dropdown -->
                            <div class="dropdown">
                                <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-more-vertical"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Edit <span class="ml-auto fe-edit-3"></span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Share <span class="ml-auto fe-share-2"></span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Delete <span class="ml-auto fe-trash-2"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Message: dropdown -->

                        </div>
                    </div>
                    <!-- Message: row -->

                </div>
                <!-- Message: Body -->
                </div>
                <!-- Message -->';
            }
            if($row['type'] != '0' && $row['to_id'] = $to){
                $html = $html.'
                <div class="message message-right">
                        <!-- Avatar -->
                        <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                            <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                        </div>

                        <!-- Message: body -->
                        <div class="message-body">

                            <!-- Message: row -->
                            <div class="message-row">
                                <div class="d-flex align-items-center justify-content-end">

                                    <!-- Message: dropdown -->
                                    <div class="dropdown">
                                        <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe-more-vertical"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Edit <span class="ml-auto fe-edit-3"></span>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share <span class="ml-auto fe-share-2"></span>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Delete <span class="ml-auto fe-trash-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Message: dropdown -->

                                    <!-- Message: content -->
                                    <div class="message-content bg-primary text-white">
                                        <div>'.$row['text'].'</div>

                                        <div class="mt-1">
                                            <small class="opacity-65">8 mins ago</small>
                                        </div>
                                    </div>
                                    <!-- Message: content -->

                                </div>
                            </div>
                            <!-- Message: row -->

                        </div>
                        <!-- Message: body -->
                    </div>
                ';
            }
            
        }

        return $html;
    }
    function chat_rows($by,$to){
        require 'connection.inc.php';

        $table = 'chat_'.$by;  
            $sql = mysqli_query($con,"SELECT * FROM `$table` where `to_id` = '$to'");
            return mysqli_num_rows($sql);
    }
?>