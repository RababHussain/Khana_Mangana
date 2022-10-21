<?php include('partials/menu.php'); ?> 
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>




<?php include('partials/footer.php'); ?>

<?php
    //Process the value from form and save in the database
    //Check whether the submit button is cilicked or not
    
    if(isset($_POST['submit']))
    {
        //Button clicked
        //echo "Button clicked";
        //step #1: Get data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with md5

        //step #2: SQL query to save data to database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
        
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if($res==TRUE)
        {
            //echo "Data Inserted";
            $_SESSION['add']= "<div class='success'>Admin Added Successfully!</div>";
            //Redirect page to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //echo "Failed to Insert Data";
            $_SESSION['add']= "<div class='error'>Failed to Add Admin.</div>";
            //Redirect page to add admin
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }
    
?>