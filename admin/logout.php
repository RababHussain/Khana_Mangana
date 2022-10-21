<?php
    include('../config/constants.php');
    //destroy session
    session_destroy();
    //unsets $_session['user']
    //redirect to login page
    header('location:'.SITEURL.'admin/login.php');
?>