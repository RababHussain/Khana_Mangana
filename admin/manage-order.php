<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>
        
                <br /><br /><br />
                <?php
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                 
                <table class="tbl-full">
                    <tr>
                        <th>S no. </th>
                        <th class="text-center">Food </th>
                        <th class="text-center">Price </th>
                        <th class="text-center" width=90px> Qty </th>
                        <th class="text-center" width=50px>Total </th>
                        <th class="text-center" width=120px>Order Date </th>
                        <th class="text-center" width=90px>Status </th>
                        <th class="text-center">Customer Name </th>
                        <th class="text-center" width=120px>Contact </th>
                        <th class="text-center" width=120px>Email </th>
                        <th class="text-center" width=120px>Address </th>
                        <th class="text-center">Actions </th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM tbl_order ORDER BY id DESC";
                        $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $food = $row['food'];
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $status = $row['status'];
                                $customer_name= $row['customer_name'];
                                $customer_contact = $row['customer_contact'];
                                $customer_email = $row['customer_email'];
                                $customer_address = $row['customer_address'];
                                ?>
                                    <tr>
                                        <td class="text-left"><?php echo $sn++; ?>.</td>
                                        <td class="text-left"><?php echo $food; ?></td>
                                        <td class="text-center"><?php echo $price; ?></td>
                                        <td class="text-center"><?php echo (int)$quantity; ?> </td>
                                        <td class="text-left"><?php echo $total; ?></td>
                                        <td class="text-center"><?php echo $order_date; ?></td>
                                        <td class="text-left">
                                            <?php
                                                if($status=="Ordered")
                                                {
                                                    echo "<label>$status</label>";
                                                }
                                                elseif($status=="On delivery")
                                                {
                                                    echo "<label style='color:orange;'>$status</label>";
                                                }
                                                elseif($status=="Delivered")
                                                {
                                                    echo "<label style='color:green;'>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color:red;'>$status</label>";
                                                }
                                            ?>
                                        </td>
                                        <td class="text-left"><?php echo $customer_name; ?></td>
                                        <td class="text-left"><?php echo $customer_contact; ?></td>
                                        <td class="text-left"><?php echo $customer_email; ?></td>
                                        <td class="text-left"><?php echo $customer_address; ?></td>
                                        
                                        <td width=125px>
                                            <a href="<?php echo SITEURL;?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>

                                        </td>
                                    </tr>
                                <?php

                                
                            }
                        }
                        else
                        {
                            echo "<tr><td colspan = '12' class='error'>Orders not Available.</td></tr>";
                        }
                    ?>
                    
                </tr>
                </table>
                    </div>
    </div>
<?php include('partials/footer.php'); ?>