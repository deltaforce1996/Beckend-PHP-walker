<?php
require ("db_funtion.php");
date_default_timezone_set("Asia/Bangkok");

$email=$_POST['email'];
// $email= 'Asus@gmail.com';
$TimeNotify=date("Y-m-d");

$date = $TimeNotify;
$date = strtotime($date);
$date = strtotime("-7 day",$date);
$final_day = date('Y-m-d',$date);

// echo $final_day;

 $sql = "SELECT SUM(StepsNumber) AS StepSum,`Email`,`Date` FROM tracing WHERE Date BETWEEN '$final_day' AND '$TimeNotify' AND `Email`='$email' GROUP BY Date";
$result = mysqli_query($con,$sql);
$json=array();

if($result){

    while($row =  mysqli_fetch_assoc($result)){
        $json[] = $row;
    }

    $response["success"] = 1;
    $response["massage"] = "Get Detail";
    $response["Report"]=$json;
    echo json_encode($response);

}else{

    $response["success"] = 0;
    $response["massage"] = "Can not Get";
    echo json_encode($response);
}


?>