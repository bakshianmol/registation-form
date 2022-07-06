<?php
include("connection.php");
?>

<?php

if (isset($_POST["submit"])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Form</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <form action="#" method="POST">

            <div class="title">
            REGISTRATION Form
            </div>
            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>



                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>


                <div class="input_field">
                    <label>Email</label>
                    <input type="email" class="input" name="email" required>
                </div>


                <div class="input_field">
                    <label>Contact </label>
                    <input type="text" class="input" name="contact" required>
                </div>


                <div class="input_field">
                    <label>Profile Image</label>
                    <input type="file" class="input" name="Image">
                </div>


                <div class="input_field">
                    <label>Country</label>
                    <select class="select" name=" country">

                        <option value="Not selected " value="">Select</option>
                        <option>India</option>
                        <option>Usa</option>
                        <option>France</option>
                        <option>China</option>
                        <option>Albania</option>
                        <option>Australia</option>
                        <option>Belgium</option>
                        <option>Brazil</option>
                        <option>Colombia</option>
                    </select>
                </div>


                <div class="input_field">
                    <label>State</label>
                    <select class="select" name="state">
                        <option value="Not selected ">Select</option>
                        <option>Madhya Pradesh</option>
                        <option>Tamil nadu</option>
                        <option>west bengal</option>
                        <option>Punjab</option>
                        <option>Delhi</option>
                        <option>Uttar Pradesh</option>
                        <option>Rajasthan</option>
                        <option>Jammu & Kashmir</option>
                        <option>daman and diu</option>
                    </select>
                </div>


                <div class="input_field">
                    <label>City</label>
                    <select class="select" name="city">

                        <option value="Not selected ">Select</option>
                        <option>Indore</option>
                        <option>Bhopal</option>
                        <option>Ujjan</option>
                        <option>Mumbai</option>
                        <option>noida</option>
                        <option>Bangalore</option>
                        <option>Hyderabad</option>
                        <option>Lucknow</option>
                        <option>Kolkata</option>
                    </select>
                </div>


                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required><span class="Error"> </span></br>
                </div>

                <p>Enter same password here ! </p>

                <div class="input_field">
                    <label>Confirm password</label>
                    <input type="password" class="input" name="Cpassword" required><span class="Error"> </span></br>

                </div>
                

                <div class="input_field">

                    <input type="submit" value="SUBMIT" class="btn" name="submit">

                </div>


        </form>
    </div>
</body>

</html>

<?php

error_reporting(0);

if ($_POST['submit']) {

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $image = $_POST['Image'];
    $pass = $_POST['password'];
    $cpass = $_POST['Cpassword'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $duplicate = mysqli_query($connection, "SELECT * FROM form WHERE  email='$email' ");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email has Already Taken');</script> ";
    } else {
        if ($firstName != "" && $lastName != "" && $contact != "" && $email != "" && $image != "" && $pass != ""  && $cpass != "" && $country != "" && $state != "" && $city != "") {

            if ($pass == $cpass) {

                $query = "INSERT INTO form VALUES('$firstName','$lastName','$email','$contact','$image','$country','$state','$city','$pass','$cpass')";

                $data = mysqli_query($connection, $query);
                // if ($data) {
                //     echo "<script>alert('Data Inserted into Database')</script>";
                // } else {
                //     echo "Failed";
                // }
            } else {
                echo "<script>alert('Password and Confirm Password are not same ! ')</script>";
            }
        } else {
            echo "<script>alert('Please Fill Form First ')</script>";
        }
    }
}

?>