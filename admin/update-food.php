<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>
        <br><br>
        <?php 
            if(isset($_GET['id']))
            {
                // echo " Getting the data";
                $id = $_GET['id'];
                $sql2 = "SELECT * FROM tbl_food WHERE id=$id";
                $res2 = mysqli_query($conn,$sql2);
                $count = mysqli_num_rows($res2);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res2);
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $current_image = $row['image_name'];
                    $category_id = $row['category_id'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
                else
                {
                    $_SESSION['no-food-found'] = "<div class='error'>Food not found.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');

                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-food.php');
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" ><?php echo $description; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category">

                        <?php 
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                            $res = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($res);
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'];
                                    $title = $row['title'];

                                    ?>

                                    <option value=<?php echo $id;?>><?php echo $title;?></option>
                                    
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="0">No category Found</option>
                                <?php
                            }

                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td>₹ 
                        <input type="number" name="price" value="<?php echo $price; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>Current Image: </td>
                    <td>
                        <!-- Image will be displayed here -->
                        <?php 
                            if($current_image != "")
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $current_image; ?>" width="150px" class="borderimg">
                                <?php
                            }
                            else
                            {
                                echo "<div class='error'>Image not Added.</div>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>New Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input <?php if($featured=="Yes"){echo "checked";}?> type="radio" name="featured" value= "Yes">Yes

                        <input <?php if($featured=="No"){echo "checked";}?> type="radio" name="featured" value= "No">No
                    </td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td>
                    <input <?php if($active=="Yes"){echo "checked";}?> type="radio" name="active" value= "Yes">Yes

                    <input <?php if($active=="No"){echo "checked";}?> type="radio" name="active" value= "No">No
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Food" class="btn-secondary"> 
                    </td>
                </tr>
            </table>
        </form>
        <?php 
            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $current_image = $_POST['current_image'];
                $category_id = $_POST['category'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];

                if(isset($_FILES['image']['name']))
                {
                    $image_name= $_FILES['image']['name'];
                    if($image_name != "")
                    {
                        $ext=end(explode('.',$image_name));

                        $image_name="Food-Name-".rand(000,999).'.'.$ext;

                        $source_path= $_FILES['image']['tmp_name'];
                        $destination_path = "../images/food/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false)
                        {
                            $_SESSION['upload']="<div class='error'>Failed to Upload Image.</div>";
                            header('location:'.SITEURL.'admin/manage-food.php');
                            die();
                        }
                        if($current_image!="")
                        {
                            $remove_path = "../images/food/".$current_image;

                            $remove = unlink($remove_path);
                            if($remove==false)
                            {
                                $_SESSION['failed-remove'] = "<div class ='error'>Failed to remove current Image. </div>";
                                header('location:'.SITEURL.'admin/manage-food.php');
                                die();
                            }
                        }
                        
                    }
                    else
                    {
                        $image_name = $current_image;
                    }
                }
                else
                {
                    $image_name = $current_image;
                }


                $sql2 = "UPDATE tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = '$price',
                    image_name = '$image_name',
                    category_id = '$category',
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id 
                ";
                $res2 = mysqli_query($conn,$sql2);
                if($res2==true)
                {
                    $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    $_SESSION['update'] = "<div class='error'>Failed to Update Category.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                
                
            }
            
        
        
        ?>
    </div>
</div>




<?php include('partials/footer.php'); ?>