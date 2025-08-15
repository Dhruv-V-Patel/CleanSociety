<?php 
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CleanSociety</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/CSS/MainStyle.css" type="text/css" />
    <style>
      .MapLocation{
        width: 100%;
        height: 300px;
      }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(fetchDataAndDrawChart);

      function fetchDataAndDrawChart() {
        fetch('./_Chart.php') // Call the PHP API
          .then(response => response.json())
          .then(data => {
            var chartData = [['Status', 'Number of Complaints'], ...data];

            var options = {
              title: 'Complaint Status',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(google.visualization.arrayToDataTable(chartData), options);
          })
          .catch(error => console.error('Error fetching data:', error));
      }
    </script>
</head>

<body>
    <?php 
        include './_dbconnect.php'; 
        include './_MainHeader.php'; 
    ?>

    <!--scroll up code Start here -->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <!--scroll up code end here -->

    <!-- Welcome - <?php //echo $_SESSION['Username'] ?> -->

    <!---------------------------------------------------------- side area Start here ---------------------------------------------------------->

    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Assets/Images/banner4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./Assets/Images/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./Assets/Images/banner6.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./Assets/Images/banner5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!------------------------------------------------------- side area End here --------------------------------------------------------------->
    <?php 
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_email = $_SESSION['Username'];
    $sql = "SELECT * FROM `user_list` WHERE Email = '$user_email'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num == 1) { ?>
    <!------------------------------------------------------- Map area Start here --------------------------------------------------------------->

    <div class="map">
        <div class="inner">
            <p class="header">GIVEN MAP IS HELP TO IDENTIFY THE PERFECT LOCATION OF GARBAGE.</p>
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73481.04610944117!2d72.3969437345832!3d23.77155331090798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c5e92a90bc923%3A0x8c46edde038af419!2sUnjha%2C%20Gujarat%20384170!5e0!3m2!1sen!2sin!4v1740744883672!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218301.96347909514!2d72.37685288402787!3d23.641882605928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c422caf789ef5%3A0x170bbc90b8be8bdc!2sMehsana%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1741781310695!5m2!1sen!2sin"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!------------------------------------------------------- Map area End here --------------------------------------------------------------->

    <!----------------------------------------------------- Fature area Start here ------------------------------------------------------------->

    <div class="feature">
        <div class="box-container">
            <div class="box">
                <a href="./_Complaints.php"> <i class="fa-brands fa-telegram"></i>
                    <h3>Register Compalint</h3>
                </a>
                <p class="p3">Easy Communication between concerned Department Officers</p>
            </div>
            <div class="box">
                <a href="./_Feedback.php.php"> <i class="fa-solid fa-thumbs-up"></i>
                    <h3>Rating Us</h3>
                </a>
                <p class="p3">You can simply rate us through this and guid or motivate us using this..</p>
            </div>
            <div class="box">
                <a href="./_AboutUS.php"> <i class="fa-solid fa-circle-info"></i>
                    <h3>Information</h3>
                </a>
                <p class="p3">You simply know that who can built this web and which tools to use for it </p>
            </div>
            <div class="box">
                <a href="./_InstructionToComplaint.php"> <i class="fa-solid fa-circle-question"></i>
                    <h3>Instruction</h3>
                </a>
                <p class="p3">In this section you can get the Suggection of fill form</p>
            </div>
        </div>
    </div>

    <!----------------------------------------------------- Fature area End here ------------------------------------------------------------->
    <?php }else{
        $sql1 = " SELECT * From `official_list` WHERE Email='$user_email'OR User_ID='$user_email'";
        $res = mysqli_query($conn, $sql1);
        $num1 = mysqli_num_rows($res);
        if ($num1 == 1) { ?>
    <div class="container mt-4">

        <h2 class="text-center">Municipal Team Dashboard</h2>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Complaints Status
            </div>
            <div class="card-body" style="align-items: center; display: flex; justify-content:center;">
                <div id="piechart" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
        <!--------------------------------------------------------- Complaint Overview Start here --------------------------------------------------->
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Complaint Overview
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Pincode</th>
                            <th>Waste Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 

                    $ql1 = "SELECT * FROM `complaint_list`";
                    $que1 = mysqli_query($conn, $ql1);
                    $res = mysqli_num_rows($que1);

                    for($i=1; $i<= 3;$i++){
                    $row=mysqli_fetch_array($que1);
                    
                ?>
                            <td> <?php echo $row['Complaint_ID'] ?> </td>
                            <td> <?php echo $row['Name'] ?> </td>
                            <td> <?php echo $row['Location'] ?> </td>
                            <td> <?php echo $row['Pincode'] ?> </td>
                            <td> <?php echo $row['Waste_Type'] ?> </td>
                            <td> <?php echo $row['Status'] ?> </td>
                            <td>
                                <button class="btn btn-primary btn-sm">In Progress</button>
                                <button class="btn btn-success btn-sm">Resolved</button>
                                <button class="btn btn-danger btn-sm">Rejected</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="./_ViewAllComplaints.php"><button type="button" class="btn btn-primary float-right ml-2">View
                        All Complaints </button></a>

            </div>
        </div>

        <!--------------------------------------------------------- Complaint Overview End here --------------------------------------------------->

        <!------------------------------------------------ Complaint Details & Assignment Start Here-------------------------------------------------->
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Complaint Details & Assignment
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="complaintID" class="form-label">Complaint ID</label>
                        <input type="text" class="form-control" id="complaintID" name="complaintID"
                            placeholder="Enter Complaint ID">
                    </div>
                    <div class="mb-3">
                        <label for="assignTo" class="form-label">Assign To</label>
                        <select class="form-control" id="assignTo" name="assignTo">
                            <option>Waste Management Team A</option>
                            <option>Waste Management Team B</option>
                            <option>Waste Management Team C</option>
                            <option>Waste Management Team D</option>
                        </select>
                    </div>
                    <button type="submit" name="Assign" class="btn btn-primary">Assign</button>
                </form>
            </div>
        </div>

        <!------------------------------------------------- Complaint Details & Assignment End Here--------------------------------------------------->

        <!------------------------------------------------------- Map area Start here --------------------------------------------------------------->

        <div class="card mt-3">
            <div class="card-header bg-danger text-white">
                Map Integration (Complaint Locations)
            </div>
            <div class="card-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218301.96347909514!2d72.37685288402787!3d23.641882605928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c422caf789ef5%3A0x170bbc90b8be8bdc!2sMehsana%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1741781310695!5m2!1sen!2sin"
                    width="100%" height="300" style="border:0;" class="MapLocation" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <!------------------------------------------------------- Map area End here --------------------------------------------------------------->

        <!-------------------------------------------------- User Records area Start here ------------------------------------------------------------>

        <?php
    $sql1 = " SELECT * From `official_list` WHERE Email='$user_email' OR User_ID='$user_email'";
    $res = mysqli_query($conn, $sql1);
    $num1 = mysqli_num_rows($res);
    $result = mysqli_fetch_assoc($res);
    if ($result['User_ID'] == "ADMIN"){ ?>
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Users Records
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 

                    $ql1 = "SELECT * FROM `user_list`";
                    $que1 = mysqli_query($conn, $ql1);
                    $res = mysqli_num_rows($que1);

                    for($i=1; $i<=$res;$i++){
                    $row=mysqli_fetch_array($que1);
                    
                ?>
                            <td> <?php echo $row['id'] ?> </td>
                            <td> <?php echo $row['FName'] ?> </td>
                            <td> <?php echo $row['MName'] ?> </td>
                            <td> <?php echo $row['LName'] ?> </td>
                            <td> <?php echo $row['Email'] ?> </td>
                            <td> <?php echo $row['Phone'] ?> </td>
                            <td> <?php echo $row['City'] ?> </td>
                            <td> <?php echo $row['Pincode'] ?> </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="./_UserRecords.php#Userlist"><button type="button"
                        class="btn btn-primary float-right ml-2">View All
                        Users </button></a>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Official Records
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>District</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 

                    $ql1 = "SELECT * FROM `official_list`";
                    $que1 = mysqli_query($conn, $ql1);
                    $res = mysqli_num_rows($que1);

                    for($i=1; $i<=3 ;$i++){
                    $row=mysqli_fetch_array($que1);
                    
                ?>
                            <td> <?php echo $row['User_ID'] ?> </td>
                            <td> <?php echo $row['Email'] ?> </td>
                            <td> <?php echo $row['Phone'] ?> </td>
                            <td> <?php echo $row['City'] ?> </td>
                            <td> <?php echo $row['Pincode'] ?> </td>
                            <td> <?php echo $row['District'] ?> </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="./_UserRecords.php#Officiallist"><button type="button"
                        class="btn btn-primary float-right ml-2">View All
                        Official </button></a>

            </div>
        </div>
        <?php } ?>

    </div>
    <!--------------------------------------------------- User Records area End here ------------------------------------------------------------->

    <?php }  } }?>
    <!--------------------------------------------------- Banner area Start here ------------------------------------------------------------->

    <div class="banner">
        <img src="./Assets/Images/banner2.jpg" alt="">
        <div class="text">
            <h2>CLEAN THE <span>CITY</span>, SAVE THE <span>PLANT </span></h2>
        </div>
    </div>

    <!----------------------------------------------------- Banner area End here ------------------------------------------------------------->


    <?php include './_MainFooter.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-------------------------------------------------------- Scrolling Javascript Start------------------------------------------------------------->

    <script>
    let calcScrollvalue = () => {
        let scrollProgress = document.getElementById("progress");
        let progressValue = document.getElementById("progress-value");
        let pos = document.documentElement.scrollTop;
        let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrollvalue = Math.round((pos * 100) / calcHeight);

        if (pos > 100) {
            scrollProgress.style.display = "grid";
        } else {
            scrollProgress.style.display = "none";
        }
        scrollProgress.addEventListener("click", () => {
            document.documentElement.scrollTop = 0;
        });
        scrollProgress.style.background = `conic-gradient(#03cc65 ${scrollvalue}%, #d7d7d7 ${scrollvalue}%)`;
    };

    window.onscroll = calcScrollvalue;
    window.onload = calcScrollvalue;
    </script>

    <!-------------------------------------------------------- Scrolling Javascript End -------------------------------------------------------------->

</body>

</html>