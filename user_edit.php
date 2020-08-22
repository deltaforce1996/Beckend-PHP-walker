<?php
require ("db_funtion.php");

if(isset($_REQUEST['eName_user'])&&isset($_REQUEST['e_Age'])&&isset($_REQUEST['e_picc'])&&isset($_REQUEST['userEmail'])){

    $userName = $_REQUEST['eName_user'];
    $userEmail = $_REQUEST['userEmail'];
    $userImg = $_REQUEST['e_picc'];
    $userAge = $_REQUEST['e_Age'];
   
    $result_select = SelectID($userEmail);

    while($row = mysqli_fetch_array($result_select)){
        $id =  $row["userID"];
    }
   
    $path = "uploadsImage/$id.png";
    $urlPath = "http://192.168.15.105/Test_php/$path";

    $result = EditPofileData ($userName,$userAge,$urlPath,$userEmail);

    if($result){
        file_put_contents($path,base64_decode($userImg));
        $response["success"] = 1;
        $response["massage"] = "successfully Edit";
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