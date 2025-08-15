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
    <title>About US</title>
    <link rel="stylesheet" href="./Assets/CSS/AboutUS.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include './_MainHeader.php'; ?>
    <div class="title">
        <h1>About US</h1>
    </div>

    <div class="content">
        Clean Society Waste Management Monitoring Committee has been constituted by the orders of Hon'ble NGT dated
        12.10.2022 passed in OA No. 606 of 2022 in the matter of Compliance of Municipal Waste Management Rules, 2022 in
        pursuance of the order passed in OA No. 306/2016 (Social Action for Forest and Environment (SAFE) vs Union of
        India &Ors) & M.A. No. 380/2017 (D. K. Joshi Vs. Chief Secretary of U.P. &Ors.). Directions for Regional
        Monitoring Committees by the orders of Hon'ble NGT dated 31.10.2018 passed in OA No. 606 of 2018 In the matter
        of Compliance of Municipal Waste Management Rules, 2016. <br><br>

        1. Action plans to be prepared in terms of Rules 2016 may now be submitted latest by 31.10.2018. Action plans be
        executed in the outer deadline of 31.12.2019. The same should be overseen by the Principal Secretaries of Urban
        Development and Rural Development. There should be periodic monitoring at least once in three months. (Para 10)
        <br>
        <br>
        2. All the States and Union Territories across the board ought to deal with the legacy waste in accordance with
        the procedure laid down in clause J of Schedule I to the Solid Waste Management Rules, 2016. (Para 12)
        <br>
        <br>
        For convenience, the said clause is reproduced below:
        <br>
        <br>
        "J. Closure and Rehabilitation of Old Dumps-
        <br>
        <br>
        Solid waste dumps which have reached their full capacity or those which will not receive additional waste after
        setting up of new and properly designed landfills should be closed and rehabilitated by examining the following
        options:
        <br>
        <br>
        (i) Reduction of waste by bio mining and waste processing followed by placement of residues in new landfills or
        capping as in (ii) below.
        <br>
        <br>
        (ii) Capping with solid waste cover or solid waste cover enhanced with geomembrane to enable collection and
        flaring / utilisation of greenhouse gases.
        <br>
        <br>
        (iii) Capping as in (ii) above with additional measures (in alluvial and other coarse grained soils) such as
        cut- off walls and extraction wells for pumping and treating contaminated ground water.
        <br>
        <br>
        (iv) Any other method suitable for reducing environmental impact to acceptable level.
        <br>
        <br>
        3. Most of the States have no plans to deal with solid wastes in rural areas and hilly terrains effectively.
        What is required to be done is to come out with integrated plans on scientific lines to manage the solid waste
        which may vary from place to place. For this purpose, it is necessary that a detailed study and consultation
        with the experts is initiated in right earnest without further delay.
        <br>
        <br>
        4. The Regional Monitoring Committees may specially consider compliance of the mandate of the Rules, 2016 at or
        around railway platform, railway tracks, bus stands or other places frequented by public. The Ministry of
        Railway may appoint Nodal Officers at Central, Zonal or other levels having specific responsibility of
        compliance of the Rules, 2016. The Regional Monitoring Committees may interact with such officers at appropriate
        intervals.
        <br>
        <br>
        5. The Regional Monitoring Committees shall also ensure that mixing of bio-medical waste with municipal solid
        waste does not take place and bio- medical waste and processed in accordance with The Bio-Medical Waste
        Management Rules, 2016. (Para 18)
        <br><br>
        6. The State Committees will take a call on technical and policy issues in accordance with the Rules, 2016
        consistent with directions of Apex and Regional Monitoring Committees.
        <br><br>
        7. Instead of every Local Body individually floating tenders for different services, standards and technical
        specifications of available services may be specified by the Department of Urban Development and adopted by
        Local Bodies. Such services may be hired on laid down standard norms to save time.
        <br><br>
        8. Best practices may be compiled including setting up of Control Rooms where citizens can upload photos of
        garbage which may be looked into by an accountable person specified by the Local Bodies at the Local Level and
        by State Bodies at the State Level. Such information may be made available by the States on the website of the
        State Committees and if possible on the websites of Local Bodies also.
        <br><br>
        9. The Committees may also consider, wherever viable, guidelines for using CCTV cameras already installed or
        installation of fresh CCTV cameras wherever necessary at dumping or other suitable sites and footage of CCTV
        Cameras may be viewed at regular basis by suitable authorities.
        <br><br>
        10. All garbage collection van may be GPS enabled to monitor its regular collection and performance audit may be
        considered and guidelines laid down.<br>
        <br><br>
        11. Performance Audit parameters suggested by Ministry of Urban Development

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