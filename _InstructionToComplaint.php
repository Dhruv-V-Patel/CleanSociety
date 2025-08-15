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
    <title>Instruction To Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    .title {
        width: 100%;
        height: 50px;
        display: flex;
        align-items: bottom;
        padding: 80px;
        margin-top: 10px;
        background-color: lightslategray;
    }

    .title h1 {
        text-align: left;
        font-size: 40px;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
        margin-left: 50px;
    }

    .content {
        margin-left: 100px;
        margin-right: 100px;
        margin-top: 10px;
        height: 550px;
        border-style: ridge;
        background-color: white;
    }

    .heading1 {
        height: 30px;
        color: white;
        background-color: #0aa89e;
        font-size: 20px;
        padding-left: 10px;
    }

    .content .head {
        text-align: center;
        text-decoration: underline;
        color: #265CC0;
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 20px;
    }

    .head1 {
        font-size: 30px;
        /*color: rgb(10, 168, 158);*/
        color: #0aa89e;
        margin-left: 10px;
    }

    .content .step {
        color: #313534;
        margin-left: 30px;
    }
    </style>
</head>

<body>
    <?php include './_MainHeader.php'; ?>
    <div style="background-color: #e5e6e6;">

        <div class="title">
            <h1>INSTRUCTION HOW TO REGISTER COMPLAIN..</h1>
        </div>
        <div class="content">
            <div class="heading1"> Suggection Of Fill Up Form </div>
            <p class="head">How to register the complain </p>
            <p class="head1"><strong> To register complaint through website.</strong></p>

            <p class="step">Step 1 :- First of all sign with gmail.
                <br><br>
                Step 2 :- Login with your respective gamil and password.
                <br><br>
                Step 3 :- Open the register option if you any query to face related garbage.
                <br><br>
                Step 4 :- Fill up the Mendatory fields and Fill up other details if you wish.
                <BR><br>
                Step 5 :- Mention the garbage location and if you face problem to find out place you can use google map
                which we provide in Website.
                <br><br>
                Step 6 :- Enter your waste type and upload photo.
                <br><br>
                Step 7 :- Photo is compulsary and make sure your photo size is less than 1KB and ip (.jpg , .jpeg ,
                .png)
                formate.
                <br><br>
                step 8 :- Submit the form and wait 72 hours to resolve your problem.
            </p>
        </div>
        <div style="height: 430px;" class="content">

            <p style="margin-top: 30px;" class="head1"><strong> Not given any Responce or taken action by authorities. </strong></p>

            <P style="color: #313534; margin-left: 30px;">Step 1 :- After submit the responce you will wait for the next
                48
                hours.
                <br><br>
                Step 2 :- After 72 hours pass , not any action taken by the Government you should wait due to too muck
                trafic.
                <br><br>
                Step 3 :- Passed few hours and not did by the authorities open website and login.
                <br><br>
                Step 4 :- Go to Contact Us page.
                <BR><br>
                Step 5 :- Then you written the letter and please mention your email account and some furthar.
                <br><br>
                Step 6 :- Send Message to us and wait 2 to 3 working days.
                <br><br>
                Step 7 :- Thank you!.
            </P>
        </div>
    </div>

    <?php include './_MainFooter.php'; ?>

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