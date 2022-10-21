<?php
    
    //AUTHORIZATION (ACCESS CONTROL)
    //(check whether user is logged in or not)
    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Please login to access admin panel.<div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>