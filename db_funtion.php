<?php

require ("db_config.php");

function insertData($userEmail,$userName,$userPass,$userAge,$userGender){
    global $con;
    
    $sql = "SELECT * FROM user_table WHERE userEmail ='$userEmail' OR userPass ='$userPass'";
    $check = mysqli_fetch_array(mysqli_query($con,$sql));

    if(isset($check)){
       

    }else{
        
    $sql2 = "INSERT INTO user_table(userName, userEmail, userPass, userAge, userGender) VALUES ('$userName','$userEmail','$userPass',$userAge,'$userGender')";
    $result = mysqli_query($con,$sql2) or die(mysqli_error);
    return $result;
    }
}

function login($userEmail,$userPass){
    global $con;
    $sql = "SELECT * FROM user_table WHERE userEmail ='$userEmail' AND userPass ='$userPass'";
    $result = mysqli_query($con,$sql);
    return $result;

}

function getUserData(){
    global $con;

    //  $sql="SELECT * FROM `user_table` WHERE userEmail='delta@gmail.com'";
   $sql = "SELECT * FROM user_table ";
    $result = mysqli_query($con,$sql) or die(mysqli_error);
    return $result;
}

function getDataDetail($userEmail){
    global $con;
    $sql = "SELECT * FROM user_table WHERE userEmail ='$userEmail'";
    $result = mysqli_query($con,$sql);
    return $result;
}

function deleteData($userEmail){
    global $con;
    $sql = "DELETE FROM user_table WHERE userEmail = '$userEmail'";
    $result = mysqli_query($con,$sql) or die(mysqli_error);
    return $result;
}

///////////////////////////////////////////////////////////////////////////////////////////////

function EditPofileData($userName,$userAge,$urlPath,$userEmail){
    global $con;

    ///////////////////////////////////////////////////////////////////////////
    $sql = "UPDATE user_table SET  userName = '$userName', userAge = '$userAge',userImg = '$urlPath' WHERE userEmail ='$userEmail' ";
    $result = mysqli_query($con,$sql) or die(mysqli_error);
    return $result;
}

function SelectID($userEmail){
    global $con;
    $sql_select = "SELECT * FROM user_table WHERE userEmail = '$userEmail'";
    $result_select = mysqli_query($con,$sql_select) or die(mysqli_error);
    return $result_select;
}




?>