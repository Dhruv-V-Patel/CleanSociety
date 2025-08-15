<?php
$showAlert = false;
$showError = false;
$login = false;
include './_dbconnect.php';

// Registration backend code
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $Fname = $_POST["FName"];
    $Mname = $_POST["MName"];
    $Lname = $_POST["LName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $pincode = $_POST["pin"];
    $password = $_POST["pass"];
    $cpassword = $_POST["cpass"];

    // Check whether this username Exists
    $existSql = "SELECT * FROM user_list WHERE Email = '$email' OR Phone = '$phone'";
    $existresult = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($existresult);
    if($numExistRows > 0){
        //$exists = true;
        //$showError = "Error! Your Email Address OR Phone is Already Exists";
        echo"<script> alert('Error! Your Email Address OR Phone is Already Exists');</script>";
    }
    else{
        $exists = false;

        // Check Password is match and Exists = false
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user_list` (`FName`, `MName`, `LName`, `Email`, `Phone`, `City`, `Pincode`, `Password`,`DateTime`) VALUES ( '$Fname', '$Mname', '$Lname', '$email', '$phone', '$city', '$pincode', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                //$showAlert = true;
                echo"<script> alert('Success! Your account is now created and you and login');</script>";
            }
        } else {
        // $showError = "Password do not match";
            echo"<script> alert('Error! Password do not match');</script>";
        }
    } 
}

//login backend code 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Login"])) {
    $Username = $_POST["Uname"];
    $Pass = $_POST["Password"];
    $sql = " SELECT * From `user_list` WHERE Email='$Username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($Pass, $row['Password'])) {
                //$login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['Username'] = $Username;
                echo"<script> alert('Success! You are logged in');
                document.location.href = 'index.php';
                </script>";
                //header("location: index.php");
            }
            else{
                //$showError = "Invalid Credentials";
                echo"<script> alert('Error! Invalid Credentials');</script>";   
            }
        }
        
    }
    else{
        if($num == 0){
            $sql1 = " SELECT * From `official_list` WHERE (Email='$Username' OR User_ID='$Username')";
            $res = mysqli_query($conn, $sql1);
            $num1 = mysqli_num_rows($res);
            if ($num1 == 1) {
                while($row = mysqli_fetch_assoc($res)){
                    if(password_verify($Pass, $row['Password'])) {
                        ///$login = true;
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['Username'] = $Username;
                        //header("location: dashboard.php");
                        echo"<script> alert('Success! You are logged in CleanSociety');
                            document.location.href = 'index.php';
                         </script>";
                    }
                    else{
                        //$showError = "Invalid Credentials";
                        echo"<script> alert('Error! Invalid Credentials');</script>";   
                    }
                }
                
            }
            else{
                //$showError = "Invalid Credentials";
                echo"<script> alert('Error! Invalid Credentials');</script>";   
            }
        }
        // else{
        //     //$showError = "Invalid Credentials";
        //     echo"<script> alert('Error! Invalid Credentials');</script>";
        // }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Assets/CSS/LoginSignup.css" type="text/css" />
    <style>

    </style>
</head>

<body>
    <?php
    if ($showAlert) {
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you and login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>'. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container1">
        <div class="form-box login">
            <h1>Login as</h1>
            <!-- <div class="row">
                <div class="col-4">
                    <button class="btn official-btn">Official</button>
                </div>
                <div class="col-4">
                    <button class="btn citizen-btn active">Citizen</button>
                </div>
            </div> -->
            <form action="" method="POST">
                <div class="input-box user-id">
                    <input type="text" placeholder="insert User ID / Email as Username" id="Uname" name="Uname"
                        required><i class="bi bi-person-fill"></i>
                </div>
                <div class="input-box">
                    <input type="Password" placeholder="Enter Password" id="Password" name="Password" required><i
                        class="bi bi-lock-fill"></i>
                </div>
                <div class="forgot-link">
                    <a href="./_PassRest.php">Forgot Password?</a>
                </div>
                <button type="submit" name="Login" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box register">
            <form action="" method="POST">
                <h1>Registration</h1>
                <div class="input-box">
                    <div class="input-group">
                        <div class="form-floating">
                            <input type="text" aria-label="First name" class="form-control" id="FName" name="FName"
                                required placeholder="First Name">
                            <label for="floatingInput">First Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" aria-label="Middle name" class="form-control" id="MName" name="MName"
                                required placeholder="Middle Name">
                            <label for="floatingInput">Middle Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" aria-label="Last name" class="form-control" id="LName" name="LName"
                                required placeholder="Last Name"><i class="bi bi-person-fill"></i>
                            <label for="floatingInput">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Enter Email Address" id="email" name="email" required><i
                        class="bi bi-envelope-fill"></i>
                </div>
                <div class="input-box">
                    <input type="phone" placeholder="Enter Phone" id="phone" name="phone" required><i
                        class="bi bi-telephone-fill"></i>
                </div>
                <div class="input-box">
                    <div class="input-group">
                        <div class="form-floating">
                            <input type="text" aria-label="City" class="form-control" id="city" name="city" required
                                placeholder="Enter City Name">
                            <label for="floatingInput">City Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" aria-label="Pincode" class="form-control" id="pin" name="pin" required
                                placeholder="Enter pincode"><i class="bi bi-geo-alt-fill"></i>
                            <label for="floatingInput">Pincode</label>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <input type="Password" placeholder="Enter Password" id="pass" name="pass" required><i
                        class="bi bi-lock-fill"></i>
                </div>
                <div class="input-box">
                    <input type="Password" placeholder="Enter Confirm Password" id="cpass" name="cpass" required><i
                        class="bi bi-lock-fill"></i>
                </div>
                <button type="submit" name="submit" class="btn">Register</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p class="text">Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script src="./Assets/JS/_login&signup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>