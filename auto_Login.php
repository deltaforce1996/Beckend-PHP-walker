<?php
session_start();
require ("db_funtion.php");
error_reporting(~E_NOTICE);
if($_SERVER['REQUEST_METHODE'] == 'GET'){

    // $userEmail = $_SESSION["status_user"];
    // $userPass = $_SESSION["status_pass"];
    $userEmail = "tt";
    $userPass = "ttt";

    $result = login($userEmail,$userPass);

        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($num_row == 1){

            $json = array(
                "userID" => $row["userID"],
                "userName" => $row["userName"],
                "userEmail" => $row["userEmail"],
                "userPass" => $row["userPass"],
                "userAge" => $row["userAge"],
                "userGender" => $row["userGender"],
                "userLevel" => $row["userLevel"],
                "userImg" => $row["userImg"],
                "deviceID" => $row["deviceID"]
            ); 

            $response["success"] = 1;
            $response["massage"] = "Login success ".$_SESSION["status_pass"];
            $response["userDetail"] = $json ;
            echo json_encode($response);
          
            
        }else{
            $response["success"] = 0;
            $response["massage"] = "Username and Pass is incorrect!, Please create new user";
            echo json_encode($response);
        }
    

}else{
    $response["success"] = 0;
    $response["massage"] = "Not GET Request";
    echo json_encode($response);
}
?>