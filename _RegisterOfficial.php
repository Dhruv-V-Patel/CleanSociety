<?php
$showAlert = false;
$showError = false;
$login = false;
include './_dbconnect.php';

// Registration backend code
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Singup"])) {

    $user_ID = $_POST["User_ID"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $city = $_POST["city"];
    $pincode = $_POST["pin"];
    $dis = $_POST["dis"];
    $password = $_POST["Password"];
    $cpassword = $_POST["C_Password"];

    // Check whether this username Exists
    $existSql = "SELECT * FROM `official_list` WHERE User_ID = '$user_ID' OR Email = '$email' OR Phone = '$phone'";
    $existresult = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($existresult);
    if($numExistRows > 0){
        //$exists = true;
        //$showError = "Error! Your Email Address OR Phone is Already Exists";
        echo"<script> alert('Error! Account is Already Exists');</script>";
    }
    else{
        $exists = false;

        // Check Password is match and Exists = false
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `official_list` (`User_ID`, `Email`, `Phone`, `City`, `Pincode`,`District`, `Password`,`DateTime`) VALUES ( '$user_ID', '$email', '$phone', '$city', '$pincode','$dis', '$hash', current_timestamp())";
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
}?>
    <!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="SignupModalLabel">Register Official's Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label"><i class="fa-solid fa-user"></i> User_ID</label>
                        <input type="text" class="form-control" id="User_ID"  name="User_ID">
                    </div>
                    <div class="row">
                        <div class="col-8 mb-3">
                            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-envelope"></i>
                                Email address</label>
                            <input type="email" class="form-control" id="Email"  name="Email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleInputMobile1" class="form-label"><i class="fa-solid fa-phone"></i>
                                Phone</label>
                            <input type="text" class="form-control" id="Phone" name="Phone" placeholder="9999555111"
                                required>
                            <div id="emailHelp" class="form-text text-muted">Phone should be of only 10 digit.</div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="mb-3">
                    <label for="exampleInputName" class="form-label"><i class="fa-solid fa-location-dot"></i> City, Pincode & District</label>
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="text" aria-label="City" class="form-control" id="city" name="city" required
                                    placeholder="Enter City Name">
                                <label for="floatingInput">City Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" aria-label="Pincode" class="form-control" id="pin" name="pin"
                                    required placeholder="Enter pincode">
                                <label for="floatingInput">Pincode</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" aria-label="Pincode" class="form-control" id="dis" name="dis"
                                    required placeholder="Enter District">
                                <label for="floatingInput">District</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i>
                            Password</label>
                        <input type="password" class="form-control" id="Password" name="Password">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i>
                            Confirm Password</label>
                        <input type="password" class="form-control" id="C_Password" name="C_Password">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="Singup">Create Account</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
    </div>
</div>
</div>