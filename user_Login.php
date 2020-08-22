<?php
session_start();
require ("db_funtion.php");
if(isset($_POST['userEmail'])&&isset($_POST['userPass'])){

    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];

    $result = login($userEmail,$userPass);
    
    if($result){

        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($num_row == 1){

            $_SESSION["status_user"] = $row["userEmail"];
            $_SESSION["status_pass"] = $row["userPass"];
            session_write_close();

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
            $response["massage"] = "Login success  ".$_SESSION["status_pass"];
            $response["userDetail"] = $json ;
            echo json_encode($response);
          
            
        }else{
            $response["success"] = 0;
            $response["massage"] = "Username and Pass is incorrect!, Please create new user";
            echo json_encode($response);
        }
    
    }else{

        $response["success"] = 0;
        $response["massage"] = "Username and Pass is incorrect!!! , Please create new user";
        echo json_encode($response);
    }

   
}else{
    $response["success"] = 0;
    $response["massage"] = "Required field(s) is missing";
    echo json_encode($response);
}


?>