
<?php
    require 'connection.inc.php';
    require 'functions.inc.php';
    if(isset($_POST['submit'])){
        $username = strtolower(get_safe_value($con,$_POST['username']));
        $phone = get_safe_value($con,$_POST['phone']);
        $email = get_safe_value($con,$_POST['email']);
        $password = get_safe_value($con,$_POST['password']);
        $fname = get_safe_value($con,$_POST['fname']);
        $lname = get_safe_value($con,$_POST['lname']);

        $sql = "INSERT INTO `user` (`id`, `username`, `phone`, `email`, `password`, `fname`, `lname`) VALUES (NULL, '$username', '$phone', '$email', '$password', '$fname', '$lname')";
        $res = mysqli_query($con,$sql);

        $get_id = mysqli_query($con,"SELECT * FROM `user` WHERE `username` = '$username'");
        $get = mysqli_fetch_array($get_id);
        $chat_id = "chat_".$get['id'];

        
        $chat_sql = mysqli_query($con,"CREATE TABLE `chat`.`$chat_id` ( `id` BIGINT NOT NULL AUTO_INCREMENT ,  `from_id` BIGINT NOT NULL ,  `to_id` BIGINT NOT NULL ,  `type` TINYINT(2) NOT NULL ,  `text` TEXT NOT NULL ,  `images` VARCHAR(255) NOT NULL ,  `voice_notes` VARCHAR(255) NOT NULL ,  `data` VARCHAR(255) NOT NULL ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `time` TIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `status` TINYINT(3) NOT NULL ,    PRIMARY KEY  (`id`))");
        echo '
        <script>
        window.location.href = "signin.php";
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

        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Sign up</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>

                        <!-- Form -->
                        <form class="mb-6" method="POST">

                            <!-- Name -->
                            <div class="form-group">
                                <label for="fname" class="sr-only">First Name</label>
                                <input type="text" name="fname" class="form-control form-control-lg" id="fname" placeholder="Enter your First Name">
                            </div>
                            <div class="form-group">
                                <label for="lname" class="sr-only">Last Name</label>
                                <input type="text" name="lname" class="form-control form-control-lg" id="lname" placeholder="Enter your Last Name">
                            </div>
                            <div class="form-group">
                                <label for="uname" class="sr-only">UserName</label>
                                <input type="text" name="username" class="form-control form-control-lg" id="uname" placeholder="Enter your Username">
                            </div>
                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone" class="sr-only">Phone</label>
                                <input type="number" name="phone" class="form-control form-control-lg" id="phone" placeholder="Enter your Phone number">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Enter your email">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" name="submit" type="submit">Sign up</button>
                        </form>

                        <!-- Text -->
                        <p class="text-center">
                            Already have an account? <a href="signin.php">Sign in</a>.
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