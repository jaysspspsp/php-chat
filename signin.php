<?php
    require 'connection.inc.php';
    require 'functions.inc.php';
    
    $msg="";
    if(isset($_POST['submit'])){
        $username = strtolower(get_safe_value($con,$_POST['username']));
        $password = get_safe_value($con,$_POST['password']);
        // AND `password` = '$password'
       
        $sql = "SELECT * FROM `user` WHERE `username` = '$username' ";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
            $check = mysqli_num_rows($row = mysqli_query($con,"SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'"));
            if($check == 1){
                // logged in 
                $data = mysqli_fetch_assoc($row);
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['lname'] = $data['lname'];
                $_SESSION['id'] = $data['id'];
            
                // prx($_SESSION);
            
            }
            else{
                $msg = '<div class="alert alert-danger" role="alert">
                Incorrect Password.
                </div>';
            }
        }else{
            $msg = '<div class="alert alert-danger" role="alert">
            NO user Found with username '.$username.'
            </div>';
        }

    }
    if(isset($_SESSION['id'])){
        echo '
    <script>
    window.location.href = "dashboard.php";
    </script>';
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>PCHAT</title>

        <!-- Template core CSS -->
        
        <link href="assets/css/template.min.css" rel="stylesheet">
        <link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">
        
        
        
    </head>
    <!-- Head -->

    <body>
        <?php
            echo $msg;
        ?>
        <div class="layout">

            <div class="container d-flex flex-column">
            
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Sign in</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>

                        <!-- Form -->
                        <form class="mb-6" method='POST'>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="name" class="sr-only">Username</label>
                                <input type="name" name="username" class="form-control form-control-lg" id="name" placeholder="Enter your username">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name = "password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember">
                                    <label class="custom-control-label" for="checkbox-remember">Remember me</label>
                                </div>
                                <a href="./password-reset.html">Reset password</a>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" name="submit" type="submit">Sign in</button>
                        </form>

                        <!-- Text -->
                        <p class="text-center">
                            Don't have an account yet <a href="signup.php">Sign up</a>.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->

        <!-- Scripts -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- Scripts -->

    </body>
</html>