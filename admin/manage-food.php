<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <br /><br /><br />
                <a href="<?php echo SITEURL;?>admin/add-food.php" class="btn-primary">Add Food</a>
                <br /><br /><br />
                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if(isset($_SESSION['no-food-found']))
                    {
                        echo $_SESSION['no-food-found'];
                        unset($_SESSION['no-food-found']);
                    }
                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                    if(isset($_SESSION['remove']))
                    {
                        echo $_SESSION['remove'];
                        unset($_SESSION['remove']);
                    }
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                
                
                ?>
                <table class="tbl-full">
                    <tr>
                        <th>S no.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                        $sql = "SELECT * FROM tbl_food";
                        $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);

                        $sn=1;
                        if($count>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $description = $row['description'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td width="100px" height="100px"><?php echo $title; ?></td>
                                    <td width="150px" height="150px">
                                        <?php 
                                            if($description=="")
                                            {
                                                echo "<div class='error'>Description Unavailable</div>";
                                            }
                                            else
                                            {
                                                echo $description;
                                            }
                                        ?>
                                    </td>
                                    <td>₹<?php echo $price; ?></td>
                                    <td>
                                        <?php 
                                            if($image_name=="")
                                            {
                                                echo "<div class='error'>Image not Added</div>";
                                            }
                                            else
                                            {
                                                ?>
                                                <img class="borderimg" src="<?php echo SITEURL; ?>images/food/<?php echo $image_name?>" width="150px">
                                                <?php
                                            }
                                        
                                        ?>
                                    </td>
                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id;?>" class="btn-secondary">Update Food</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id;?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>

                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            echo "<tr> <td colspan='7' class='error'>Food not Added Yet.</td> </tr>";
                        }
                    
                    ?>
                    
                </table>
    </div>
<?php include('partials/footer.php'); ?>