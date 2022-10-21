<?php include('partials-front/menu.php'); ?>
    <section>
        <div class="container">
        <h1>Contact Us</h1>
        <br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        <fieldset class="contact">
                    <legend class="legend">Fill up this form to send us your message!</legend>
                    <div class="contact-label">Full Name: </div>
                    <input type="text" name="name" placeholder="E.g. Salman Khan" class="input-responsivecontact" required>

                    <div class="contact-label">Phone Number: </div>
                    <input type="tel" name="number" placeholder="E.g. 9843xxxxxx" class="input-responsivecontact" required>

                    <div class="contact-label">Email: </div>
                    <input type="email" name="email" placeholder="E.g. hi@email.com" class="input-responsivecontact" required>

                    <div class="contact-label">Message: </div>
                    <textarea name="address" rows="5" placeholder="E.g. Street, City, Country" class="input-responsivecontact" required></textarea>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </fieldset>
        
            <div class="clearfix"></div>
        </div>
    </section>
<?php include('partials-front/footer.php'); ?>
<?php
    //Process the value from form and save in the database
    //Check whether the submit button is cilicked or not
    
    if(isset($_POST['submit']))
    {
        //Button clicked
        //echo "Button clicked";
        //step #1: Get data from form
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //step #2: SQL query to save data to database
        $sql = "INSERT INTO tbl_contact SET
            name='$name',
            number='$number',
            email='$email',
            message='$message'
        ";
        
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if($res==TRUE)
        {
            //echo "Data Inserted";
            $_SESSION['add']= "<div class='success'>Message sent Successfully!</div>";
            //Redirect page to contact page
            header("location:".SITEURL.'contact.php');
        }
        else
        {
            //echo "Failed to Insert Data";
            $_SESSION['add']= "<div class='error'>Failed to send message.</div>";
            //Redirect page to contact page
            header("location:".SITEURL.'contact.php');
        }
    }
    
?>