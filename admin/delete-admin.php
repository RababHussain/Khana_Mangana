<?php 
    include('../config/constants.php');
    //step1 get id
    //pass sql query
    //redirect to manange admin page
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE)
    {
        //echo "Success";
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully!</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "Error";
        $_SESSION['delete'] = "<div class='error'>Failed to delete admin. Try again later.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }        


?>