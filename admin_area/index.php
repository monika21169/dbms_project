<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dassboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin-image{
        width: 100px;
        object-fit: contain;
        }
        /* .footer{
            position: absolute;
            bottom:0;

        } */
    
    </style>
</head>
<body>
    <div class="container-fluid p-0" >
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpeg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome</a>
                    </li>
                </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="a"><img src="../images/diary2.jpeg" alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert Products</a></button><button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button><button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button><button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button><button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button><button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button><button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button><button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button><button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button><button><a href="" class="nav-link text-light bg-info my-1">Log Out</a></button>
                </div>
            </div>
        </div>

        <!-- fourth child -->
        <div class="conatiner my-3 px-5">
            <?php
            if(isset($_GET['insert_category'])){
                include("insert_categories.php");
            }
            if(isset($_GET['insert_brand'])){
                include("insert_brands.php");
            }
            ?>
        </div>

        <!-- last child -->
    <div class="bg-info p-3 text-center footer">
        <p>All rights reserved Designed by Monika</p>

    </div>
    </div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>