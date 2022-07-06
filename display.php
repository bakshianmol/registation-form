<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="display.css">
  
</head>

<a href="./logout.php"><input type="submit" name="" value="Logout" class="logout"></a>
</html>

<?php

include("connection.php");
error_reporting(0);

$user = $_SESSION['user_name'];

if ($user == true) {
} else {
?>
    <meta http-equiv='refresh' content='0; url = http://localhost/login/login.php?username=&password=&login=Login#' />
<?php
}

$quary = "SELECT * FROM form";

$data = mysqli_query($connection, $quary);

$totalrecords = mysqli_num_rows($data);

if ($totalrecords != 0) {

?>

    <h1> Dashboard </h1>

    <table border="3" cellspacing="1" width=100%>
        <tr>

            <th width="8%"> First Name</th>
            <th width="8%"> Last Name</th>
            <th width="18%"> Email</th>
            <th width="8%"> Contact</th>
            <th width="10%"> Profile</th>
            <th width="8%"> Country</th>
            <th width="8%"> State</th>
            <th width="8%"> City</th>
           
        </tr>

    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo "   <tr>

    <td> " . $result['FirstName'] . " </td>
    <td> " . $result['LastName'] . "</td>
    <td>" . $result['Email'] . " </td>
    <td>" . $result['Contact'] . " </td>
    <td>" . $result['Image'] . " </td>
    <td>" . $result['Country'] . " </td>
    <td>" . $result['State'] . " </td>
    <td>" . $result['City'] . " </td>
    
</tr>";
    }
} else {
    echo "No records found ";
}

    ?>
    </table>