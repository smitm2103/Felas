<?php
    include_once("../files/config/dbconnect.php");
    session_start();
    session_destroy();
    header("Location: ../Admin/admin_login.php");
    ?>