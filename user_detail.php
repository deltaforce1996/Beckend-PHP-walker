<?php
require ("db_funtion.php");
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json', true); 

    $result = getUserData();

    $num_row = mysqli_num_rows($result);

    $json = array();

    if($num_row > 0){

        
        while($row =  mysqli_fetch_assoc($result)){
            $json[] = $row;
        }

        $response["success"] = 1;
        $response["massage"] = "successfully save";
        $response["userDetail"] = $json ;
        echo json_encode([$response]);

    }else{

        $response["success"] = 0;
        $response["massage"] = "Username and Pass is incorrect!, Please create new user";
        echo json_encode($response);
    }

?>