<?php 
    include('../config/constants.php');
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        //echo "get value";
        $id = $_GET['id'];
        $image_name= $_GET['image_name'];

        if($image_name!="")
        {
            $path = "../images/food/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['remove']="<div class='error'>Failed to remove Food Image</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
                
            }
        }
        
        $sql = "DELETE FROM tbl_food WHERE id=$id";
        $res = mysqli_query($conn,$sql);
        if($res==true)
        {
            $_SESSION['delete']="<div class='success'>Food Item is Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else
        {
            $_SESSION['delete']="<div class='error'>Failed to Delete Food Item.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        
    }
    else
    {
        header('location:'.SITEURL.'admin/manage-food.php');
    }


?>