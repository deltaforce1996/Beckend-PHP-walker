<?php
require ("db_funtion.php");
// date_default_timezone_set("Asia/Bangkok");

$email=$_POST['email'];
// $email= 'Acer@gmail.com';
// $TimeNotify=date("Y-m-d");

$sql = "SELECT * FROM `tracing` WHERE `Email`='$email' ORDER BY `Number` DESC LIMIT 1";
$result = mysqli_query($con,$sql);
$json=array();

if($result){

        
    while($row =  mysqli_fetch_assoc($result)){
        $json[] = $row;
    }

    $response["success"] = 1;
    $response["massage"] = "Get Detail save";
    $response["userDetail"] = $json ;
    echo json_encode($response);

}else{

    $response["success"] = 0;
    $response["massage"] = "Can not Get";
    echo json_encode($response);
}


?>