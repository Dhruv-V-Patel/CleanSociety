<?php 
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}
include './_dbconnect.php'; 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Page</title>
    <link rel="stylesheet" href="./Assets/CSS/Blog.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
    </style>
</head>

<body>
    <?php include './_MainHeader.php'; ?>
    <div class="title"></div>
    <div class="container">
        <div class="box-container">
            <div class="box">
                <img src="./Assets/Images/blog1.png">
                <p>
                It is an annual global social action program. The next World Cleanup Day is 20 September
                2025.
                </p>
                <a href="https://www.worldcleanupday.org/" class="btn">Read More</a>
            </div>

            <div class="box">
                <img src="./Assets/Images/SMC Logo.jpeg">
                <p>
                Under the mission, all villages, Districts, States and Union Territories in India declared
                themselves.
                </p>
                <a href="https://ruraldev.gujarat.gov.in/Index" class="btn">Read More</a>
            </div>

            <div class="box">
                <img src="./Assets/Images/blog3.png">
                <p>
                On 2nd October 2014, Swachh Bharat Mission was launched throughout breadth of the country as
                a national movement.
                </p>
                <a href="https://www.pmindia.gov.in/en/major_initiatives/swachh-bharat-abhiyan/" class="btn">Read
                    More</a>
            </div>
        </div>
    </div>
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
</body>

</html>