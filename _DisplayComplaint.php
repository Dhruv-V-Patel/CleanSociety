<?php 
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}
include './_dbconnect.php'; 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    
    <title>Complaints Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-icons.css">
</head>

<body>
<?php include './_MainHeader.php'; ?>

<!-- <div class="container" style="width: 2000px;"> -->
        <div class="row border rounded mx-3 mt-5 p-2 shadow-lg">
                <div class="card " style="width: 1500px;">
                    <div class="card-header text-center">
                        <h2>Complaint Dashboard
                            <a href="./_Complaints.php"><button type="button" class="btn btn-primary float-right ml-2"><i class="bi bi-plus"></i> Register New Complaint</button></a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped text-center">
                            <tr>
                                <th>Complaint ID</th>
                                <th><i class="bi bi-file-person-fill"></i> Name</th>
                                <th><i class="bi bi-telephone-fill"></i> Phone</th>
                                <th>Waste Type</th>
                                <th>Location</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Photos</th>
                                <th>Status</th>
                                <th>Complaint Date</th>
                            </tr>
                            <tr>
                            <?php 
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    $user_email = $_SESSION['Username'];
                                    $sql = "SELECT * FROM `user_list` WHERE Email = '$user_email'";
                                    $query = mysqli_query($conn, $sql);
                                    $result = mysqli_fetch_assoc($query);
                                    $u_email = $result['Email']; 


                                    $ql1 = "SELECT * FROM `complaint_list` WHERE Email = '$u_email'";
                                    $que1 = mysqli_query($conn, $ql1);
                                    $res = mysqli_num_rows($que1);

                                   for($i=1; $i<=$res;$i++){
                                    $row=mysqli_fetch_array($que1);
                                     
                                        ?>
                                    <td>
                                        <?php echo $row['Complaint_ID'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Phone'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Waste_Type'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['City'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Pincode'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['District'] ?>
                                    </td>
                                    <td>
                                        <?php 
                                        foreach(json_decode($row['Photos']) as $image):
                                        ?>
                                        <img src="./Assets/Uploads/<?php echo $image;?>" alt="" style="width:100px; height:100px; object-fit: cover;">
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Status'] ?>
                                    </td>  
                                    <td>
                                        <?php echo $row['DateTime'] ?>
                                    </td>                              
                            </tr>
                            <?php } } ?>
                        </table>
                        <a href="./index.php" class="badge badge-info p-2" style="text-decoration: none;">BACK</a>
                    </div>
                </div>
        </div>
        <!-- </div>-->

    <!------------------------------------------------ Main Body End here ------------------------------------------------->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
        
</body>

</html>
