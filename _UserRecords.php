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
    <title>User Records - CleanSociety</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        include './_dbconnect.php'; 
        include './_MainHeader.php'; 
    ?>

    <!------------------------------------------------ User Edit Modal Start here --------------------------------------------->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">User Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="error-message-edit">

                        </div>
                        <form method="POST" action="./_UserCode.php">
                        <input type="hidden" name="id" id="id" class="form-control" >

                        <div class="mb-3">
                            <label for=""> First Name</label>
                            <input type="text" name="FName" id="FName" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for=""> Middle Name</label>
                            <input type="text" name="MName" id="MName" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for=""> Last Name</label>
                            <input type="text" name="LName" id="LName" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for=""> Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for=""></i> Phone NO.</label>
                            <input type="text" name="Mobile" id="Mobile" class="form-control" placeholder="Mobile No.">
                        </div>
                        <div class="mb-3">
                            <label for="">City</label>
                            <input type="text" name="City" id="City" class="form-control" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="">Pincode</label>
                            <input type="text" name="Pin" id="Pin" class="form-control" placeholder="Pincode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" name="Update" id="Update" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!------------------------------------------------ User Edit Modal End here ----------------------------------------------->

<!------------------------------------- ---------- User Delete Modal Start here --------------------------------------------->

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm and Delete User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" lass="form-control" name="delete_id" id="delete_id">
            <h5>Are you sure, you want to delete this data...?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="confirm_delete">YES..! Delete</button>
        </div>
        </div>
    </div>
    </div>
<!------------------------------------------------ User Delete Modal End here ----------------------------------------------->

<!------------------------------------------------ Official Edit Modal Start here --------------------------------------------->

        <div class="modal fade" id="officialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Official Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="error-message-edit">

                        </div>
                        <form method="POST" action="./_UserCode.php">
                        <input type="hidden" name="Uid" id="Uid" class="form-control" >

                        <div class="mb-3">
                            <label for=""> User ID</label>
                            <input type="text" name="UserId" id="UserId" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for=""> Email</label>
                            <input type="text" name="UEmail" id="UEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for=""></i> Phone NO.</label>
                            <input type="text" name="UPhone" id="UPhone" class="form-control" placeholder="Phone No.">
                        </div>
                        <div class="mb-3">
                            <label for="">City</label>
                            <input type="text" name="UCity" id="UCity" class="form-control" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="">Pincode</label>
                            <input type="text" name="Pincode" id="Pincode" class="form-control" placeholder="Pincode">
                        </div>
                        <div class="mb-3">
                            <label for="">District</label>
                            <input type="text" name="Dis" id="Dis" class="form-control" placeholder="District">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" name="Update_official" id="Update_oficial" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!------------------------------------------------ Official Edit Modal End here ----------------------------------------------->

<!------------------------------------- ---------- Official Delete Modal Start here --------------------------------------------->

<div class="modal fade" id="deleteofficialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm and Delete Official</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" lass="form-control" name="delete_official_id" id="delete_official_id">
            <h5>Are you sure, you want to delete this data...?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="confirm_official_delete">YES..! Delete</button>
        </div>
        </div>
    </div>
    </div>
<!------------------------------------------------ User Delete Modal End here ----------------------------------------------->


    <section id="Userlist">
        <div class="container mt-4">
            <h2 class="text-center"> Users Records</h2>
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    Users Records
                </div>
                <div class="card-body">
                    <div class="message-show">
                        
                    </div>
                    <table class="table table-striped" id="user_data">
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
                                <td class="user_id"> <?php echo $row['id'] ?> </td>
                                <td> <?php echo $row['FName'] ?> </td>
                                <td> <?php echo $row['MName'] ?> </td>
                                <td> <?php echo $row['LName'] ?> </td>
                                <td> <?php echo $row['Email'] ?> </td>
                                <td> <?php echo $row['Phone'] ?> </td>
                                <td> <?php echo $row['City'] ?> </td>
                                <td> <?php echo $row['Pincode'] ?> </td>
                                <td>
                                    <button type="button" value="<?=$row['id'];?>" class="btn btn-primary btn-sm edit_btn">Edit</button>
                                    <button type="button" value="<?=$row['id'];?>"  class="btn btn-danger btn-sm delete_btn">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="Officiallist">
        <div class="container mt-4">
            <h2 class="text-center"> Official Records</h2>
            <div class="card mt-3">
                <div class="card-header bg-info text-white">
                    Official Records
                </div>
                <div class="card-body">
                    <div class="message-show-official">
                        
                        </div>
                    <table class="table table-striped" id="official_data">
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

                            for($i=1; $i<=$res ;$i++){
                            $row=mysqli_fetch_array($que1);
                            
                        ?>
                                <td> <?php echo $row['User_ID'] ?> </td>
                                <td> <?php echo $row['Email'] ?> </td>
                                <td> <?php echo $row['Phone'] ?> </td>
                                <td> <?php echo $row['City'] ?> </td>
                                <td> <?php echo $row['Pincode'] ?> </td>
                                <td> <?php echo $row['District'] ?> </td>
                                <td>
                                    <button type="button" value="<?=$row['ID'];?>" class="btn btn-primary btn-sm edit_official_btn">Edit</button>
                                    <button type="button" value="<?=$row['ID'];?>" class="btn btn-danger btn-sm delete_official_btn">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <?php 
        include './_MainFooter.php'; 
    ?>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    

<script>

/*-------------------------------------- User Edit Data JQuery Code Start Here -----------------------------------------------*/

$(document).on('click', '.edit_btn', function(){
    var id = $(this).val();
    //alert(id);

    $.ajax({
        type: "GET",
        url: "_UserCode.php?id="+ id,
        success: function(response){

            var res = jQuery.parseJSON(response);
            if(res.status == 422){
                alert(res.message);
            }else if(res.status == 200){
                $('#id').val(res.data.id);
                $('#FName').val(res.data.FName);
                $('#MName').val(res.data.MName);
                $('#LName').val(res.data.LName);
                $('#email').val(res.data.Email);
                $('#Mobile').val(res.data.Phone);
                $('#City').val(res.data.City);
                $('#Pin').val(res.data.Pincode);

                $('#exampleModal').modal('show');

            }
        }
    });

});

$(document).ready(function() {
   $('#Update').click(function(e){
    e.preventDefault();

    var id = $('#id').val();
    var FName = $('#FName').val();
    var MName = $('#MName').val();
    var LName = $('#LName').val();
    var Email = $('#email').val();
    var Phone = $('#Mobile').val();
    var City = $('#City').val();
    var Pin = $('#Pin').val();

    console.log(id);

    if(FName != '' & MName != '' & LName != '' & Email != '' & Phone != '' & City != '' & Pin != '' ){
        $.ajax({
            type: "POST",
            url: "_UserCode.php",
            data:{
                'update_btn':true,
                'id': id,
                'FName' : FName,
                'MName' : MName,
                'LName' : LName,
                'Email' : Email,
                'Phone' : Phone,
                'City' : City,
                'Pin' : Pin,
            },
            success: function(response){
                $('#exampleModal').modal('hide');
                $('.message-show').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>'+response+'</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
                $('#user_data').load(location.href + " #user_data");
            }
        });
    }else{
        $('.error-message-edit').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>All Fields are Mandatory!</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
    }
    });
});

/*-------------------------------------- Official Edit Data JQuery Code Start Here -----------------------------------------------*/

$(document).on('click', '.edit_official_btn', function(){
    var uid = $(this).val();
    console.log(id);

    $.ajax({
        type: "GET",
        url: "_UserCode.php?uid="+ uid,
        success: function(response){

            var res = jQuery.parseJSON(response);
            if(res.status == 422){
                alert(res.message);
            }else if(res.status == 200){
                $('#Uid').val(res.data.ID);
                $('#UserId').val(res.data.User_ID);
                $('#UEmail').val(res.data.Email);
                $('#UPhone').val(res.data.Phone);
                $('#UCity').val(res.data.City);
                $('#Pincode').val(res.data.Pincode);
                $('#Dis').val(res.data.District);

                $('#officialModal').modal('show');

            }
        }
    });

});

$(document).ready(function() {
   $('#Update_oficial').click(function(e){
    e.preventDefault();

    var id = $('#Uid').val();
    var UserId = $('#UserId').val();
    var Email = $('#UEmail').val();
    var Phone = $('#UPhone').val();
    var City = $('#UCity').val();
    var Pin = $('#Pincode').val();
    var Dis = $('#Dis').val();


    //console.log(UserId);

    if(UserId != '' & Email != '' & Phone != '' & City != '' & Pin != '' & Dis != '' ){
        $.ajax({
            type: "POST",
            url: "_UserCode.php",
            data:{
                'update_official_btn':true,
                'id': id,
                'UserId' : UserId,
                'Email' : Email,
                'Phone' : Phone,
                'City' : City,
                'Pin' : Pin,
                'Dis' : Dis,

            },
            success: function(response){
                $('#officialModal').modal('hide');
                $('.message-show-official').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>'+response+'</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
                $('#official_data').load(location.href + " #official_data");
            }
        });
    }else{
        $('.error-message-edit').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>All Fields are Mandatory!</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
    }
    });
});


/*-------------------------------------- User Delete Data JQuery Code Start Here -----------------------------------------------*/

$(document).on('click', '.delete_btn', function(){
    var id = $(this).val();
    //alert(id);

    $('#delete_id').val(id);
    $('#deleteModal').modal('show');
            
});

$(document).ready(function() {
   $('#confirm_delete').click(function(e){
    e.preventDefault();

    var delete_id = $('#delete_id').val();
    //alert(delete_id);
    $.ajax({
            type: "POST",
            url: "_UserCode.php",
            data:{
                'user_delete_btn':true,
                'delete_id': delete_id,
            },
            success: function(response){
                $('#deleteModal').modal('hide');
                $('.message-show').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>'+response+'</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
                $('#user_data').load(location.href + " #user_data");
            }
        });
    });
});

/*-------------------------------------- Official Delete Data JQuery Code Start Here -----------------------------------------------*/

$(document).on('click', '.delete_official_btn', function(){
    var id = $(this).val();
    //alert(id);

    $('#delete_official_id').val(id);
    $('#deleteofficialModal').modal('show');
            
});

$(document).ready(function() {
   $('#confirm_official_delete').click(function(e){
    e.preventDefault();

    var delete_official_id = $('#delete_official_id').val();
    // alert(delete_official_id);
    $.ajax({
            type: "POST",
            url: "_UserCode.php",
            data:{
                'official_delete_btn':true,
                'delete_official_id': delete_official_id,
            },
            success: function(response){
                $('#deleteofficialModal').modal('hide');
                $('.message-show-official').append('\<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>'+response+'</strong>\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>');
                $('#official_data').load(location.href + " #official_data");
            }
        });
    });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>