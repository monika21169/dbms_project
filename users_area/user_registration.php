<!-- connect file -->
<?php   
include('../functions/common_function.php');
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body class="bg-light">
<div class="container-fluid my-3">
    <h2 class="text-center">New User Registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outlined mb-4">
        <!-- username field -->
        <label for="user_username" class="form-label">Username</label>
        <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter Username" autocomplete="off" required />
    </div>
    <!-- email field -->
    <div class="form-outlined mb-4">
        <label for="user_email" class="form-label">Email</label>
        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter Email" autocomplete="off" required />
    </div>
    <!-- users image field-->
    <div class="form-outline mb-4">
        <label for="user_image" class="form-label">Image</label>
        <input type="file" name="user_image" id="user_image" class="form-control" required />
    </div>
    
    <!-- password field -->
    <div class="form-outlined mb-4">
        <label for="user_password" class="form-label">Password</label>
        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Password" autocomplete="off" required />
    </div>
    <!-- confirm password field -->
    <div class="form-outlined mb-4">
        <label for="user_confirm_password" class="form-label">Confirm Password</label>
        <input type="password" name="user_confirm_password" id="user_confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required />
    </div>
    <!-- user address field -->
    <div class="form-outline mb-4">
        <label for="user_address" class="form-label">Address</label>
        <input type="text" name="user_address" id="user_address" class="form-control" placeholder="Enter Address" autocomplete="off" required />
    </div>
    <!-- contact field -->
    <div class="form-outline mb-4">
        <label for="user_contact" class="form-label">Contact</label>
        <input type="text" name="user_contact" id="user_contact" class="form-control" placeholder="Enter Contact" autocomplete="off" required />
    </div>
    <!-- submit button -->
    <div class="mt-4 pt-2">
        <input type="submit" name="user_register" value="Register" class="bg-info py-2 px-3 border-0" />
        <p class="small fw-bold mt-2 pt-1">Already have an account? <a href="./user_login.php" class="text-danger"> Login</a></p>
    </div>
</form>


        </div>
    </div>
</div>



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

if (isset($_POST['user_register'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_confirm_password = $_POST['user_confirm_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip= getIPAddress();

    // Check if passwords match
    if ($user_password !== $user_confirm_password) {
        echo "<script>alert('Passwords do not match')</script>";
        exit; // Stop further execution
    }

    // Insert query
    move_uploaded_file($user_image_tmp, "./user_images/$user_image");
    $query = "INSERT INTO user_table (username, user_email, user_password, user_address, user_mobile, user_image, user_ip) VALUES ('$user_username', '$user_email', '$user_password', '$user_address', '$user_contact', '$user_image', '$user_ip')";
    $result = mysqli_query($con, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<script>alert('User registered successfully')</script>";
        echo "<script>window.open('user_login.php','_self')</script>";
    } else {
        echo "<script>alert('User registration failed')</script>";
        // Display MySQL error if any
        echo "Error: " . mysqli_error($con);
    }
}
?>
