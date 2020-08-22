<?php
require ("db_funtion.php");
date_default_timezone_set("Asia/Bangkok");
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json', true); 

$level = $_POST['LEVEL'];
$email = $_POST['EMAIL'];
$step = $_POST['STEP'];
$time = $_POST['TIME'];
$dis = $_POST['DISTANCE'];

$TimeNotify=date("Y-m-d");

// echo $TimeNotify;

// $level = "1";
// $email = "Test@gmail.com";

// $step = 5;
// $time = 1500;
// $dis = 1;

$sql = "INSERT INTO `tracing`(`Email`, `StepsNumber`, `Time`, `Distance`, `Date`, `Level`) VALUES ('$email','$step','$time','$dis','$TimeNotify','$level')";

$sql2 = "UPDATE `user_table` SET `userLevel`='$level' WHERE `userEmail`='$email'";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql2);


if($result&&$sql2){

    $response["success"] = 1;
    $response["massage"] = "Get Detail save";
    echo json_encode($response);

}else{

    $response["success"] = 0;
    $response["massage"] = "Can not Update";
    echo json_encode($response);
}


?>