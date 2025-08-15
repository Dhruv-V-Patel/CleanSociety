<?php 
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}
include './_dbconnect.php'; 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_email = $_SESSION['Username'];
    $sql = "SELECT * FROM `Official_list` WHERE Email = '$user_email' OR User_ID ='$user_email'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    $c = $row['City'];
    if ($num == 1 && ($row['User_ID'] == "ADMIN") ) {
        $query = "SELECT Status, COUNT(*) as count FROM `complaint_list` GROUP BY Status";
        $result = mysqli_query($conn,$query);

        // Prepare data array
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [$row['Status'], (int)$row['count']];
        }
        
        // Return JSON response
        echo json_encode($data);
     } else {
         $query = "SELECT Status, COUNT(*) as count FROM `complaint_list` WHERE City = '$c' GROUP BY Status";
         $result = mysqli_query($conn,$query);
         // Prepare data array
         $data = [];
         while ($row = mysqli_fetch_assoc($result)) {
             $data[] = [$row['Status'], (int)$row['count']];
         
         }
         // Return JSON response
         echo json_encode($data);
        
    }
}
?>