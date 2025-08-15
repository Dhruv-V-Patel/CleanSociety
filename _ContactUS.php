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
    <title>Contact US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/CSS/ContactUS.css" type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script src="./Assets/JS/_ContactUs.js"></script>
    <script type="text/javascript">
    (function() {
        emailjs.init("kXHebRu2keaKB_Zm3");
    })();
    </script>
  </head>
  <body>
  <?php include './_MainHeader.php'; ?>
  <div class="title">
        <h1>Contact US</h1>
    </div>

    <div class="contaxt-form">
        <div class="first-container">
            <div class="info">
                <div>
                    <img src="./Assets/Images/email.png" class="center">
                </div>
                <div>
                    <h5>if you have question or just want to get in touch, use the from given. we look forword to hearing from you!</h5>
                </div>
            </div>
        </div>

        <div class="sec-container">
            <h2>Send Us Inquiry</h2>
            <div class="form">
                <div class="form-group">
                    <label>Tell us your Name*</label>
                    <input type="text" id="Fname" name="Fname" placeholder="Your Name">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="form-group">
                    <label>Enter your Email</label>
                    <input type="email" id="email" name="email" placeholder="youremail@gmail.com" required>
                    <div class="error" id="emailErr"></div>
                </div>
                <div class="form-group">
                    <label>Enter your Phone No</label>
                    <input type="text" id="phone" name="phone" placeholder="99000 98000" maxlength="10" required>
                    <div class="error" id="phoneErr"></div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="msg" id="msg" placeholder="Write us a message" required></textarea>
                    <div class="error" id="msgErr"></div>
                </div>
                <button onclick="validationForm()">Send Message</button>
            </div>
        </div>
    </div>

    <?php include './_MainFooter.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>