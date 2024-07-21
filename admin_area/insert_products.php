̌<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_status="true";
    //accesing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    //accesing images temp names
    $temp_name1 = $_FILES['product_image1']['tmp_name'];
    $temp_name2 = $_FILES['product_image2']['tmp_name'];
    $temp_name3 = $_FILES['product_image3']['tmp_name'];
    //checking empty fields
    if($product_title=='' OR $product_desc=='' OR $product_keywords=='' OR $product_category=='' OR $product_brand=='' OR $product_price=='' OR $product_image1=='' OR $product_image2=='' OR $product_image3==''){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }
    else{
        //uploading images to its folder
        move_uploaded_file($temp_name1,"./product_images/$product_image1");
        move_uploaded_file($temp_name2,"./product_images/$product_image2");
        move_uploaded_file($temp_name3,"./product_images/$product_image3");
        //inserting data into database
        $insert_product = "INSERT INTO products (category_id,brand_id,product_title,product_price,product_description,product_image1,product_image2,product_image3,product_keywords,date,status) VALUES ('$product_category','$product_brand','$product_title','$product_price','$product_desc','$product_image1','$product_image2','$product_image3','$product_keywords',NOW(),'$product_status')";
        $run_product = mysqli_query($con,$insert_product);
        if($run_product){
            echo "<script>alert('Product inserted successfully')</script>";
        }
        else{
            echo "<script>alert('Error: ". mysqli_error($con) ."')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Adim</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product Tile</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required">
        </div>
        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" name="product_desc" id="product_desc" class="form-control" placeholder="enter product description" autocomplete="off" required="required">
        </div>
        <!-- product keywords -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="enter product keywords" autocomplete="off" required="required">
        </div>
        <!-- select categories -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="product_category" class="form-select" required="required">
                <option value="">Select Category</option>
                <?php
                $get_carts = "SELECT * FROM categories";
                $run_carts = mysqli_query($con, $get_carts);
                while($row_carts = mysqli_fetch_array($run_carts)){
                    $category_id = $row_carts['category_id'];
                    $category_title = $row_carts['category_title'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                ?>
            </select>
        </div>
        <!-- select brands -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brand" id="product_brand" class="form-select" required="required">
                <option value="">Select Brand</option>
                <?php
                $get_brands = "SELECT * FROM brands";
                $run_brands = mysqli_query($con, $get_brands);
                while($row_brands = mysqli_fetch_array($run_brands)){
                    $brand_id = $row_brands['brand_id'];
                    $brand_title = $row_brands['brand_name'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?>
            </select>
        </div>
        <!-- product image 1-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">Product Image</label>
            <input type="file" name="product_image1" id="product_image2" class="form-control" required="required">
        </div>
        <!-- product image 2-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">Product Image</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
        </div>
        <!-- product image 3 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label">Product Image</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
        </div>
        <!-- product price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter product price" autocomplete="off" required="required">
        </div>
        <!-- insert product -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" value="Insert Product" class="btn btn-info form-control">
        </div>
</form>
    </div>





<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>