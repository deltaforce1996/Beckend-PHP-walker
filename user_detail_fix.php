<?php
require ("db_funtion.php");

if(isset($_POST['userEmail'])){

    $userEmail = $_POST['userEmail'];
    // $userEmail = "yy";

    $result = getDataDetail($userEmail);
    
    if($result){

        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($num_row = 1){

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
            $response["massage"] = "Get Data success";
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