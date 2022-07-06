<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "responsiveform";

   $connection = mysqli_connect($servername,$username,$password,$dbname);

   if ($connection) {
    // echo "Connection ok ";
   }else {
    echo "Connection failed".mysqli_connect_error();
   }
 ?>