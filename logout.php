<?php
    require 'connection.inc.php';
    require 'functions.inc.php';
    session_destroy();
    echo '
    <script>
    window.location.href = "dashboard.php";
    </script>';
?>