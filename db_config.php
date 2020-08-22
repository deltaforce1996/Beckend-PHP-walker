<?php

     $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database_walker";

 $con = mysqli_connect($servername, $username, $password, $dbname);
 mysqli_set_charset($con, "utf8");


    if($con ==  false){
        echo "No connection";
    }

?>