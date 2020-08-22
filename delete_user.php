<?php 
require("db_funtion.php");
if(isset($_POST['email_user'])){

    $userEmail = $_POST['email_user'];
    $result = deleteData($userEmail);

    if($result){

        $response["success"] = 1;
        $response["massage"] = "successfully delete";
        echo json_encode($response);

    }else{

        $response["success"] = 0;
        $response["massage"] = "failed delete";
        echo json_encode($response);
    }
}
?>