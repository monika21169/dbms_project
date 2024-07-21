<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "eCartBazzar"; ?></title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="./images/logo.jpeg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><sup><?php
        getcartitem();
        ?></sup></a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php totalprice();?>Rs.</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<?php
cart()
?>
<!-- secong child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_login.php">Login</a>
        </li>
    </ul>
    </nav>
    <!-- third child -->
    <div class="br-bright">
        <h3 class="text-center">Welcome to eCartBazzar</h3>
        <p class="text-center">Here you get all the products you want!! Explore our website....</p>
    </div>

    <!-- fourth child -->
    <div class="row px-4">
        <div class="col-md-10">
    <!-- products -->
            <div class="row">
              <!-- fetching products -->
              <?php
              getproducts();
              getuniquecategories();
              getuniquebrands();
              // $ip = getIPAddress();  
              // echo 'User Real IP Address - '.$ip; 
              ?>
             <!--row end  -->
            </div>
              <!--col end  -->
        </div>
    <div class="col-md-2 bg-secondary p-0">
<!-- sbrans displayed -->
        <ul class="navbar-nav me-auto">
            <li class="nav-item bg-info text-center">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php
            displaybrands();
            

            ?>
        </ul>
        <!-- categories displayed -->
        <ul class="navbar-nav me-auto">
            <li class="nav-item bg-info text-center">
            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
            <?php
            displaycategory();
            ?>
        </ul>
     </div>
    </div>




    <!-- lass child -->
    <!-- include footer -->
    <?php
    include('./includes/footer.php');
    ?>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

