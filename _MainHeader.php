<?php 
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .navbar-brand img {
        width: 35px;
        height: 35px;
    }

    .container-fluid .heading a {
        font-weight: bold;
        color: white;
    }

    .navbar {
        background-color: #6DDA86;
    }

    #navbarNav .navbar-nav .nav-item .nav-link {
        color: white;
    }

    #navbarNav .navbar-nav .nav-item .nav-link:hover {
        color: #323642;
    }

    .container-fluid .button {
        position: absolute;
        left: 85%;
    }

    .dropdownProfile {
        position: absolute;
        right: 2%;
    }

    .profile {
        display: flex;
        align-items: center;
        padding-left: 15px;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .float {
        padding-top: 0px;
        padding-bottom: 0px;
        height: 50px;
    }

    .profile h4 {
        font-family: 'Franklin Gothic Medium', Poppins, 'Arial Narrow', Arial, sans-serif;
        font-size: 25px;
        margin-left: 10px;
        margin-top: 10px;
    }

    .btn-group .dropdown-menu i {
        font-size: 20px;
        margin-right: 10px;
    }

    .btn-group .dropdown-menu a {
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
    }
    </style>
</head>

<body>
    <?php
        include './_RegisterOfficial.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_email = $_SESSION['Username'];
    $sql = "SELECT * FROM `user_list` WHERE Email = '$user_email'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num == 1) {
        $result = mysqli_fetch_assoc($query);
        $name = $result['FName'].' '. $result['LName'];
        echo '<nav class="navbar navbar-expand-lg py-1">
        <div class="container-fluid">
            <div class="heading">
                <a class="navbar-brand" href="#"><img src="./Assets/Images/logo.png" alt="Logo"> CleanSociety</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./_Complaints.php">Register Complaint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./_InstructionToComplaint.php">Instruction to Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./_AboutUS.php">About Us</a></li>
                            <li><a class="dropdown-item" href="./_ContactUS.php">Contact Us</a></li>
                            <li><a class="dropdown-item" href="./_Blog.php">Blog</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img src="Assets\Images\no-image.jpg" style="width:35px;height:35px; border-radius:50%; cursor:pointer;" >
                            </button>
                            <ul class="dropdown-menu" style="width: 300px; left:-280%">
                                <div class="float">
                                    <div class="profile">
                                        <img src="assets\images\no-image.jpg" style="width:40px;height:40px; border-radius:50%; cursor:pointer;" >
                                        <h4>' . $name . '</h4>
                                    </div>
                                </div>
                                <hr style="width:100%; height:3px; border-width:0; color:gray; background-color:gray">
                                <li><a class="dropdown-item" href="./_DisplayComplaint.php"><i class="fa-solid fa-location-dot"></i>Track Complaint</a></li>
                                <li><a class="dropdown-item" href="./_PasswordReset.php"><i class="fa-solid fa-lock"></i>Change Password</a></li>
                                <div class="dropdown-divider"></div>
                                <a role="button" href="./_Logout.php" class="btn btn-outline-primary mx-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                            </ul>
                        </div>
                        </div>
    </nav>';
    }else{
        $sql1 = " SELECT * From `official_list` WHERE Email='$user_email'OR User_ID='$user_email'";
        $res = mysqli_query($conn, $sql1);
        $num1 = mysqli_num_rows($res);
        if ($num1 == 1) {
            $result = mysqli_fetch_assoc($res);
            $name = $result['User_ID'];
            echo '<nav class="navbar navbar-expand-lg py-1">
        <div class="container-fluid">
            <div class="heading">
                <a class="navbar-brand" href="#"><img src="./Assets/Images/logo.png" alt="Logo"> CleanSociety</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./_ViewAllComplaints.php">Manage Complaints</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./_InstructionToComplaint.php">Instruction to Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./_AboutUS.php">About Us</a></li>
                            <li><a class="dropdown-item" href="./_ContactUS.php">Contact Us</a></li>
                            <li><a class="dropdown-item" href="./_Blog.php">Blog</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img src="Assets\Images\no-image.jpg" style="width:35px;height:35px; border-radius:50%; cursor:pointer;" >
                            </button>
                            <ul class="dropdown-menu" style="width: 300px; left:-280%">
                                <div class="float">
                                    <div class="profile">
                                        <img src="assets\images\no-image.jpg" style="width:40px;height:40px; border-radius:50%; cursor:pointer;" >
                                        <h4>' . $name . '</h4>
                                    </div>
                                </div>
                                <hr style="width:100%; height:3px; border-width:0; color:gray; background-color:gray">
                                <li><a class="dropdown-item" href="./_ViewAllComplaints.php"><i class="fa-solid fa-location-dot"></i>Manage Complaints</a></li>
                                <li><a class="dropdown-item" href="./_PasswordReset.php"><i class="fa-solid fa-lock"></i>Change Password</a></li>';
                                if ($result['User_ID'] == "ADMIN"){
                                echo ' <li><a class="dropdown-item" href="./_UserRecords.php"><i class="fa-solid fa-users"></i>Manage Users</a></li>
                                <button type="button" class="btn btn-outline-primary mx-3" data-bs-toggle="modal" data-bs-target="#SignupModal">
                                Register Official
                                </button>';}
                               echo '<div class="dropdown-divider"></div>
                                <a role="button" href="./_Logout.php" class="btn btn-outline-primary mx-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                            </ul>
                        </div>
                        </div>
    </nav>
            ';
            
        }
    }
}
   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>