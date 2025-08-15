<?php 
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true){
    header("location: _Login&SignUp.php");
}
include './_dbconnect.php'; 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_email = $_SESSION['Username'];
    $sql = "SELECT * FROM `user_list` WHERE Email = '$user_email'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $name1 = $result['FName'].' '. $result['MName'].' '. $result['LName'];
    $phone = $result['Phone'] ;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $Type = $_POST["Type"];
    $location = $_POST["Location"];
    $city = $_POST["City"];
    $pincode = $_POST["Pincode"];
    $district = $_POST["District"];
    $code = rand(0, 999999);
    $cmp_id = "CMTID" . $code;

    $totalFiles = count($_FILES['my_image']['name']);
    $filesArray = array();
    for($i = 0; $i < $totalFiles; $i++){
        $imagename = $_FILES["my_image"]["name"][$i];
        $tmp_name = $_FILES["my_image"]["tmp_name"][$i];

        $imageExtension = explode('.', $imagename);
        $imageExtension = strtolower(end($imageExtension));

        $newImageName = uniqid() . '.' . $imageExtension;

        $folder = "./Assets/Uploads/".$newImageName;
        move_uploaded_file($tmp_name,$folder);
        $filesArray[] = $newImageName;
    }
    
    $filesArray = json_encode($filesArray);

    // Check whether this username Exists
    $sql = "INSERT INTO `complaint_list` (`Complaint_ID`, `Name`, `Email`, `Phone`, `Waste_Type`, `Location`, `City`, `Pincode`, `District`,`Photos`, `Status`,`DateTime`) VALUES ( '$cmp_id','$name','$email','$phone','$Type','$location','$city','$pincode','$district','$filesArray','Pending', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo"<script> alert('Success! Your Complaint is Successfully Registered');</script>";
    }
    else {
        echo"<script> alert('Error! Complaint is not Registered');</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Complaint</title>
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Assets/CSS/Complaint.css" type="text/css" />

    <style>
    
    </style>
</head>

<body>
    <?php include './_MainHeader.php'; ?>
    <div class="container">
        <div class="row border rounded mx-auto my-5 p-2 shadow-lg">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Register Complaint</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validation()" name="myfrm">
                            <table class="table table-striped text-left" style=" border-collapse:separate;">
                                <tr>
                                    <th><i class="bi bi-file-person-fill"></i> Name :<br>
                                        <input class="form-control" type="text" id="Name" name="Name"
                                            value="<?php echo $name1 ?>" readonly>
                                    </th>
                                    <th><i class="bi bi-envelope-fill"></i> Email :<br>

                                        <input class="form-control" type="text" id="Email" name="Email"
                                            value="<?php echo $user_email ?>" readonly>

                                    </th>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-telephone-fill"></i> Phone :<br>
                                        <input class="form-control" type="text" id="Phone" name="Phone"
                                            value="<?php echo $phone ?>" readonly>
                                    </th>
                                    <th><i class="bi bi-list-ul"></i> Waste Type :<br>
                                        <select class="form-control ml-2" aria-label="Default select example"
                                            name="Type" id="Type" required>
                                            <option value="">-- Select Waste Type --</option>
                                            <option value="Solid Waste">Solid Waste</option>
                                            <option value="E-Waste">E-Waste</option>
                                            <option value="Organic Waste">Organic Waste</option>
                                            <option value="Recyclable Waste">Recyclable Waste</option>
                                            <option value="Hazardous Waste">hazardous waste</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-geo-alt-fill"></i> Location :<br>
                                        <input class="form-control" type="text" id="Location" name="Location" value=""
                                            required>
                                    </th>
                                    <th> City :<br>
                                        <input class="form-control" type="text" id="City" name="City" value=""
                                            required>
                                    </th>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-geo-fill"></i> Pincode :<br>
                                        <input class="form-control" type="text" id="Pincode" name="Pincode" value=""
                                            required>
                                    </th>
                                    <th> District :<br>
                                        <select class="form-control ml-2" aria-label="Default select example"
                                            name="District" id="District" required>
                                            <option value="">--Select District--</option>
                                            <option value="ahmedabad">Ahmedabad</option>
                                            <option value="amreli">Amreli</option>
                                            <option value="anand">Anand</option>
                                            <option value="aravalli">Aravalli</option>
                                            <option value="banaskantha">Banaskantha</option>
                                            <option value="bharuch">Bharuch</option>
                                            <option value="bhavnagar">Bhavnagar</option>
                                            <option value="botad">Botad</option>
                                            <option value="chhotaudepur">Chhota Udepur</option>
                                            <option value="dahod">Dahod</option>
                                            <option value="dang">Dang</option>
                                            <option value="devbhoomidwarka">Devbhoomi Dwarka</option>
                                            <option value="gandhinagar">Gandhinagar</option>
                                            <option value="gir-somnath">Gir Somnath</option>
                                            <option value="jamnagar">Jamnagar</option>
                                            <option value="junagadh">Junagadh</option>
                                            <option value="kachchh">Kachchh</option>
                                            <option value="kheda">Kheda</option>
                                            <option value="mahisagar">Mahisagar</option>
                                            <option value="mehsana">Mehsana</option>
                                            <option value="morbi">Morbi</option>
                                            <option value="narmada">Narmada</option>
                                            <option value="navsari">Navsari</option>
                                            <option value="panchmahal">Panchmahal</option>
                                            <option value="patan">Patan</option>
                                            <option value="porbandar">Porbandar</option>
                                            <option value="rajkot">Rajkot</option>
                                            <option value="sabarkantha">Sabarkantha</option>
                                            <option value="surat">Surat</option>
                                            <option value="surendranagar">Surendranagar</option>
                                            <option value="tapi">Tapi</option>
                                            <option value="vadodara">Vadodara</option>
                                            <option value="valsad">Valsad</option>
                                        </select>
                                    </th>

                                </tr>
                                <tr>
                                    <th colspan="2"><i class="bi bi-images"></i> Photos : <br> <span
                                            style="font-size: 12px; color:lightslategray; padding-top:0;">Upload Minimum
                                            2 Photos</span>
                                        <!-- <div class="hero">
                                            <label for="input-file" id="drop-area">
                                                <input type="file" accept="image/*" id="input-file" name="img" required
                                                    multiple hidden>
                                                <div id="img-view">
                                                    <img src="./Assets/Images/icon.png" alt="">
                                                    <p>Drag and drop or click here <br>to upload image</p>
                                                </div>
                                            </label>
                                        </div> -->
                                       <!-- <div class="container">
                                            <div class="img-area">
                                            <i class="fa-solid fa-cloud-arrow-up icon"></i>
                                            <h3>Upload Images</h3>
                                            <p>Image size must be less than <span>2MB</span></p>
                                            </div>
                                        </div> -->
                                        <div class="container1">
                                            <input type="file" accept="image/*" id="input-file" name="my_image[]" onchange="preview()" required multiple>
                                            <!-- <input type="file" accept="image/*" id="input-file" name="my_image1" onchange="preview()" required > -->
                                            <label for="input-file">
                                                <i class="fa-solid fa-cloud-arrow-up icon"></i> &nbsp; Choose A Photo
                                            </label>
                                            <p id="num-of-files">No Files Chosen</p>
                                            <div id="images">

                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </table>

                            <div class="p-2">
                                <button type="submit" class="btn btn-primary float-right" name="submit"
                                    id="submit">Submit</button>
                                <a href="./"><button type="button" class="btn btn-secondary ml-2">Back</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include './_MainFooter.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    function validation() {
        var phone = document.forms['myfrm']['Phone'];
        var get_num = String(phone.value).charAt(0);
        var first_num = Number(get_num);

        if (isNaN(phone.value) || phone.value.length != 10 || first_num < 6) {
            alert('Invalid Phone Number');
            return false;
        }
        return true;
    }

    let fileInput = document.getElementById("input-file");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview(){
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for(i of fileInput.files){
             let reader = new FileReader();
             let figure = document.createElement("figure");
             let figCap = document.createElement("figcaption");
             figCap.innerText = i.name;
             figure.appendChild(figCap);
             reader.onload=()=>{
                let img = document.createElement("img");
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);
             }
             imageContainer.appendChild(figure);
             reader.readAsDataURL(i);
        }
    }
    </script>
</body>

</html>