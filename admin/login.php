<?php include('../config/constants.php'); ?>
<html>
    <head>
        <title>Login - Khana Mangana</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body class="background">
        <div class="login center">
            <h1 class="text-center">Login</h1>
            <br>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset ($_SESSION['login']);
                }
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset ($_SESSION['no-login-message']);
                }
            ?>
            <!--Login starts here-->
            <form action="" method="POST" class="text-center">
                Username:
                
                <input type="text" name="username" placeholder="Enter Your Username">
                <br><br>
                Password:
                
                <input type="password" name="password" placeholder="Enter Your Password">
                <br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br>
            </form>
            <br>
            <p class="text-center">Created By:<a href="#">Rabab Fatima</a></p>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        //  Getting data from login form
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn,$raw_password);
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
        $res= mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            $_SESSION['login']= "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;
            //Check if user is logged in or not, logout will unset it.
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $_SESSION['login']= "<div class='error text-center'>Login Failed, Username and password did not match.</div>";
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>