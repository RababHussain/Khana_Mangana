<?php include('partials/menu.php'); ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Messages</h1>
                    <br /><br /><br />
                    <table class="tbl-full">
                        <tr>
                            <th>S no. </th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Contact Number</th>
                            <th class="text-center"> Email </th>
                            <th class="text-center">Message</th>
                        </tr>
    <?php
        $sql = "SELECT * FROM tbl_contact";
                                $res = mysqli_query($conn,$sql);
                                if($res==TRUE)
                                {
                                    //Count rows to check if we have data in db
                                    $count = mysqli_num_rows($res); //function to get number of rows in db
                                    
                                    $sn=1;
                                    //check the num of rows 
                                    if($count>0)
                                    {
                                        //we have data in db
                                        while($rows=mysqli_fetch_assoc($res))
                                        {
                                            $name=$rows['name'];
                                            $number=$rows['number'];
                                            $email=$rows['email'];
                                            $message=$rows['message'];

                                            //Display values in table
                                            ?>
                                                                
                                            <tr>
                                                <td><?php echo $sn++; ?></td>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $message; ?></td>
                                                
                                            </tr>

                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        //we do not have data in db
                                    }
                                }
                            ?>
                            </table>
            </div>
<?php include('partials/footer.php'); ?>
