<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br><br>
        <?php 
            //get id of selected admin
            $id = $_GET['id'];
            //get sql query
            $sql="SELECT * FROM tbl_admin WHERE id=$id";
            //execute query
            $res=mysqli_query($conn,$sql);
            if($res==TRUE)
            {
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    //get data
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else
                {
                    //redirect to manage admin
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            
        ?>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php

    //check whether the submit btn is clicked or not
    if(isset($_POST['submit']))
    {
        //echo "Button Clicked";
        //Get all values from the form to update 
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        //create sql query to update admin data
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username' 
        WHERE id='$id'
        ";

        //Execute query 
        $res = mysqli_query($conn,$sql);

        if($res==TRUE)
        {
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');

        }
        else
        {
            //Failed to update admin
            $_SESSION['update'] = "<div class='error'>Failed to Update Admin.</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>