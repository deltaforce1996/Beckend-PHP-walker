<?php
require ("db_funtion.php");

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json', true); 


$sql = "SELECT * FROM `templateslevel`";
$result = mysqli_query($con,$sql);


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