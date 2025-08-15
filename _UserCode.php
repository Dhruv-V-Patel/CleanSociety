<?php
session_start();
include './_dbconnect.php';

/*----------------------------------------- User Edit Data Code Start Here  ----------------------------------------------*/

if(isset($_POST['update_btn'])){
    $id = $_POST['id'];
    $FName = $_POST['FName'];
    $MName = $_POST['MName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $City = $_POST['City'];
    $Pin = $_POST['Pin'];

    $query = "UPDATE `user_list` SET `FName`= '$FName',`MName`= '$MName', `LName` = '$LName', `Email`='$Email', `Phone`='$Phone',`City`='$City', `Pincode`='$Pin',`DateTime`=current_timestamp() WHERE `id`= '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo $result = "Updated Successfully";
    }else{
        echo $result = "Something West Wrong";
    }
}

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM user_list WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) == 1){
        $user = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'User Fetch Successfully by ID',
            'data' => $user
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            'status' => 404,
            'message' => 'User ID not Found'
        ];
        echo json_encode($res);
        return false;
    }
}

/*----------------------------------------- User Edit Data Code End Here  ------------------------------------------------*/

/*----------------------------------------- User Delete Data Code Start Here  ----------------------------------------------*/
    if(isset($_POST['user_delete_btn'])){
        $delete_id = $_POST['delete_id'];
        $query1 = "DELETE FROM user_list WHERE id = '$delete_id'";
        $query_run1 = mysqli_query($conn, $query1);

        if($query_run1){
            echo $result = "User Data Deleted";
        }
        else{
            echo $result = "User Data Not Deleted";
        }
    }

/*----------------------------------------- User Delete Data Code End Here  ------------------------------------------------*/

/*----------------------------------------- Official Edit Data Code Start Here  ----------------------------------------------*/

if(isset($_POST['update_official_btn'])){
    $id = $_POST['id'];
    $U_id = $_POST['UserId'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $City = $_POST['City'];
    $Pin = $_POST['Pin'];
    $Dis = $_POST['Dis'];


     $query = "UPDATE `official_list` SET `User_ID`= '$U_id', `Email`='$Email', `Phone`='$Phone',`City`='$City', `Pincode`='$Pin',`District`='$Dis',`DateTime`=current_timestamp() WHERE `id`= '$id'";
     $query_run = mysqli_query($conn, $query);
     if($query_run){
         echo $result = "Updated Successfully";
     }else{
         echo $result = "Something West Wrong";
     }
}

if(isset($_GET['uid'])){
    $id = mysqli_real_escape_string($conn, $_GET['uid']);

    $query = "SELECT * FROM official_list WHERE ID = '$id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) == 1){
        $user = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'User Fetch Successfully by ID',
            'data' => $user
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            'status' => 404,
            'message' => 'User ID not Found'
        ];
        echo json_encode($res);
        return false;
    }
}

/*----------------------------------------- Official Edit Data Code End Here  ------------------------------------------------*/

/*----------------------------------------- User Delete Data Code Start Here  ----------------------------------------------*/
if(isset($_POST['official_delete_btn'])){
    $delete_official_id = $_POST['delete_official_id'];
    $query_del = "DELETE FROM official_list WHERE ID = '$delete_official_id'";
    $query_run_del = mysqli_query($conn, $query_del);

    if($query_run_del){
        echo $result = "Official Data Deleted";
    }
    else{
        echo $result = "Official Data Not Deleted";
    }
}

/*----------------------------------------- User Delete Data Code End Here  ------------------------------------------------*/
