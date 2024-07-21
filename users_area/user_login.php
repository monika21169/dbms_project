<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body class="bg-light">
<div class="container-fluid my-3">
    <h2 class="text-center">User Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6 mt-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outlined mb-4">
                    <!-- username field -->
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter Username" autocomplete="off" required="required" id="user_username" />
                </div>
                
                
                <!-- password field -->
                <div class="form-outlined mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Password" autocomplete="off" required="required" id="user_password" />
                </div>
               
                <!-- submit button -->
                <div class="mt-4 pt-2">
                    <input type="submit" name="insert_user" value="Login" class="bg-info py-2 px-3 border-0" />
                    <p class="small fw-bold mt-2 pt-1">Dont't have an account? <a href="./user_registration.php" class="text-danger"> Register</a></p>
                </div>

                </div>
               
            </form>

        </div>
    </div>
</div>



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>