<?php
require ("db_funtion.php");
require ("db_config.php");
date_default_timezone_set("Asia/Bangkok");

if(isset($_REQUEST['userEmail'])&&isset($_REQUEST['userName'])&&isset($_REQUEST['userPass'])&&isset($_REQUEST['userAge'])&&isset($_REQUEST['userGender'])){

    $userName = $_REQUEST['userName'];
    $userEmail = $_REQUEST['userEmail'];
    $userPass = $_REQUEST['userPass'];
    $userAge = $_REQUEST['userAge'];
    $userGender = $_REQUEST['userGender'];

    $stepsNumber="0";
    $time="0";
    $distance="0";
    $timeNotify=date("Y-m-d");
    $level="1";

    $result = insertData($userName,$userEmail,$userPass,$userAge,$userGender);

    $sqlR = "INSERT INTO `tracing`(`Email`, `StepsNumber`, `Time`, `Distance`, `Date`, `Level`) VALUES ('$userName','$stepsNumber','$time','$distance','$timeNotify','$level')";

    if($result&&$con->query($sqlR) === TRUE){

        $response["success"] = 1;
        $response["massage"] = "successfully save";
        echo json_encode($response);
    }else{
        $response["success"] = 0;
        $response["massage"] = "Oops! An error accurred";
        echo json_encode($response);
    }

}else{
    $response["success"] = 0;
    $response["massage"] = "Required field(s) is missing";
    echo json_encode($response);

}

?>