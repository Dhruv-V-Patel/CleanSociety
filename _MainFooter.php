<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }
        .container-footer{
            max-width: 1100px;
            margin: auto;
        }
        .footer-col ul{
            list-style: none;
            padding-left: 0;
        }
        .container-footer .row{
            display: flex;
            flex-wrap: wrap;
            padding-bottom: 10px;
        }
        .footer{
            /*background-color: #35C055; */
            background-color: #323642; 
            padding: 70px 0 20px 0;
            margin-bottom: 0;
        }
        .footer-col{
            width: 50%;
            padding: 0 15px;
        }
        .footer-col h4{
            font-size: 20px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #81BD4A;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            /* color: #d9d9d9; */
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #81BD4A;;
            padding-left: 8px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin:0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }
        .container-footer{
            color:#ffffff; 
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: 700;
        }
        /* Responsive */
        @media(max-width: 750px){
            .footer-col{
                width:50%;
                margin-bottom: 30px;
            }
            .container-footer .row{
                padding-left: 50px;
            }
        }
        @media(max-width: 574px){
            .footer-col{
                width:100%;
            }
        }
        @media(min-width: 751px){
            .container-footer .row{
                padding-left: 50px;
            }
        }
    </style>
  </head>
  <body>
    <footer class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick Link</h4>
                    <ul>
                        <li><a href="https://swachhbharatmission.ddws.gov.in/">Swachh Bharat Mission</a></li>
                        <li><a href="https://moef.gov.in/">Ministry of Environment, Forest and Climate Change, Government of India</a></li>
                        <li><a href="https://sbmurban.org/">Swachh Bharat Mission (Urban)</a></li>
                        <li><a href="https://www.hspcb.org.in/uploads/laws/MSW_Rules.pdf">Solid Waste Management Rules, 2016</a></li>
                        <li><a href="https://mohua.gov.in/upload/uploadfiles/files/Part1%281%29.pdf">Municipal Solid Waste Management Manual</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="./_AboutUS.php">About Us</a></li>
                        <li><a href="./_ContactUS.php">Contact Us</a></li>
                        <li><a href="./_Complaints.php">Register Complaint</a></li>
                        <li><a href="./_Blog.php">Blog</a></li>
                    </ul>
                </div>
                <!-- <div class="footer-col">
                    <h4>Follow US</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div> -->
            </div>
            <h6 class="text-center">Copyright &copy 2025 CleanSociety - Empowering Communities for a Cleaner, Greener Future || All Rights Reserved</h6>
        </div>
    </footer>
  </body>
</html>