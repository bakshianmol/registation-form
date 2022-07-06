<?php

session_start();

?>


<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login By Anmol bakshi </title>
    <link rel="stylesheet" href="login.css">

</head>

<body>

    <div class="center">
        <h1>Login</h1>

        <form action="#" method="POST">

            <div class="form">

                <input type="text" name="username" class="field" placeholder="Username">

                <input type="password" name="password" class="field" placeholder="Password">

                <span class="forgetpassword">

                    <a href="#" class="link" onclick="message()"> Forget Password ? </a>

                </span>

                <div>

                    <input type="submit" name="login" value="Login" class="btn">

                </div>

                <span class="signup">

                    <a href="./form.php" class="link" >New Account ? </a>
                </span>
            </div>
    </div>
    </form>

    <script>
        function message() {
            alert("Remember Password Please ! ");
        }
    </script>
</body>

</html>



<?php

include("connection.php");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $Query = "SELECT * FROM form WHERE  Email = '$username' && Password = '$pwd' ";

    $Data = mysqli_query($connection, $Query);

    $Total = mysqli_num_rows($Data);

    if ($Total == 1) {
         
       $_SESSION['user_name'] = $username;

?>
        <meta http-equiv='refresh' content='0; url = http://localhost/login/display.php ' />
<?php

    }
     else
    {
        echo "<script>alert('Failed ! Please enter Correct Id and password ')</script>";
    }
}

?>