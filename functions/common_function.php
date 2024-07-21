<?php


function getproducts(){
    global $con;
    // cond to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
           
    $sql = "SELECT * FROM products order by rand() LIMIT 0,6";
              $result = mysqli_query($con, $sql);
              while($row = mysqli_fetch_array($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_price = $row['product_price'];
                $product_image1 = $row['product_image1'];
                $product_category = $row['category_id'];
                $product_brand = $row['brand_id'];
                echo "<div class='col-md-4  mb-2'>
                <div class='card'>
                    <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                         <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-price'>Price: $product_price</p>   
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>
                </div>";

            }
}}}

// getting all products
function getallproduct(){
    global $con;
    // cond to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
           
    $sql = "SELECT * FROM products order by rand()";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_price = $row['product_price'];
    $product_image1 = $row['product_image1'];
    $product_category = $row['category_id'];
    $product_brand = $row['brand_id'];
    echo "<div class='col-md-4  mb-2'>
    <div class='card'>
        <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <p class='card-price'>Price: $product_price</p> 
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
        </div>
    </div>";

}
}}}

function getuniquecategories(){
    global $con;
    // cond to check isset or not
    if(isset($_GET['category'])){
    $category_id = $_GET['category'];
           
    $sql = "SELECT * FROM products where category_id='$category_id'";
              $result = mysqli_query($con, $sql);
              $num_of_rows=mysqli_num_rows($result);
              if($num_of_rows==0){
                echo "<script>alert('No products in this category')</script>";
                echo "<h2> No products found in this category</h2>";
                exit();
              }
              while($row = mysqli_fetch_array($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_price = $row['product_price'];
                $product_image1 = $row['product_image1'];
                $product_category = $row['category_id'];
                $product_brand = $row['brand_id'];
                echo "<div class='col-md-4  mb-2'>
                <div class='card'>
                    <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                         <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-price'>Price: $product_price</p> 
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>
                </div>";

            }
}}


function displaybrands(){
    global $con;
    $select_brands="SELECT * FROM brands";
$run_brands=mysqli_query($con,$select_brands);
while($row_brands=mysqli_fetch_array($run_brands)){
    $brand_id=$row_brands['brand_id'];
    $brand_title=$row_brands['brand_name'];
    echo "<li class='nav-item text-center'>
    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
    </li>";
}
}
function getuniquebrands(){
    global $con;
    // cond to check isset or not
    if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
           
    $sql = "SELECT * FROM products where brand_id='$brand_id'";
              $result = mysqli_query($con, $sql);
              $num_of_rows=mysqli_num_rows($result);
              if($num_of_rows==0){
                echo "<script>alert('No products in this brand')</script>";
                echo "<h2> No products found in this brand</h2>";
                exit();
              }
              while($row = mysqli_fetch_array($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_price = $row['product_price'];
                $product_image1 = $row['product_image1'];
                $product_category = $row['category_id'];
                $product_brand = $row['brand_id'];
                echo "<div class='col-md-4  mb-2'>
                <div class='card'>
                    <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                         <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-price'>Price: $product_price</p> 
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>
                </div>";

            }
}}

function displaycategory(){
    global $con;
    $select_categories="SELECT * FROM categories";
$run_categories=mysqli_query($con,$select_categories);
while($row_categories=mysqli_fetch_array($run_categories)){
    $category_id=$row_categories['category_id'];
    $category_title=$row_categories['category_title'];
    echo "<li class='nav-item text-center'>
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
}
}

//searching products
function searchproduct(){
    global $con;
    if(isset($_GET['search_data_product'])){
    $value = $_GET['search_data'];
    $sql = "SELECT * FROM products where product_title like '%$value%'";
    $result = mysqli_query($con, $sql);
    $num_of_rows=mysqli_num_rows($result);
    if($num_of_rows==0){
        echo "<script>alert('No products in this brand')</script>";
        echo "<h2> No products found in this brand</h2>";
        exit();
      }
    while($row = mysqli_fetch_array($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_price = $row['product_price'];
    $product_image1 = $row['product_image1'];
    $product_category = $row['category_id'];
    $product_brand = $row['brand_id'];
    echo "<div class='col-md-4  mb-2'>
    <div class='card'>
        <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <p class='card-price'>Price: $product_price</p> 
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
        </div>
    </div>";

}
}}

// view details
function viewdetails(){
    global $con;
    // cond to check isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];
    $sql = "SELECT * FROM products where product_id = $product_id";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_price = $row['product_price'];
    $product_image1 = $row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    $product_category = $row['category_id'];
    $product_brand = $row['brand_id'];
    echo "<div class='col-md-4  mb-2'>
    <div class='card'>
        <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <p class='card-price'>Price: $product_price</p> 
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
        </div>
    </div>
    <div class='col-md-8'>
        <div class='row'>
            <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>related products</h4>
            </div>
            <div class='col-md-6'>
                <img src='./images/$product_image2' class='card-img-top' alt='$product_title'>
            </div>
            <div class='col-md-6'>
                <img src='./images/$product_image3' class='card-img-top' alt='$product_title'>
            </div>
        </div>
    </div>";

}
}}}
}

// getting ip_address

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 


//cart func

function cart(){
if(isset($_GET['add_to_cart'])){
global $con;
$ip = getIPAddress();  
$product_id=$_GET['add_to_cart'];
$sql = "SELECT * FROM cart_details where ip_address='$ip' AND product_id='$product_id'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Product already added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}else{
    $insert_query = "INSERT INTO cart_details(ip_address,product_id,quantity) VALUES('$ip','$product_id',0)";
    $result = mysqli_query($con, $insert_query);
    echo "<script>alert('Product added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

}
}}

//func to get cart item numn

function getcartitem(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $ip = getIPAddress();  
        $sql = "SELECT * FROM cart_details where ip_address='$ip'";
        $result = mysqli_query($con, $sql);
        $count_cart_item=mysqli_num_rows($result);
    }else{
        global $con;
        $ip = getIPAddress();  
        $sql = "SELECT * FROM cart_details where ip_address='$ip'";
        $result = mysqli_query($con, $sql);
        $count_cart_item=mysqli_num_rows($result);        
        }
        echo $count_cart_item;
}

//total price func

function totalprice(){
    global $con;
    $ip = getIPAddress();
    $total=0;
    $sql = "SELECT * FROM cart_details where ip_address='$ip'";
    $result = mysqli_query($con, $sql);
     while ($row=mysqli_fetch_array($result)){
         $product_id=$row['product_id'];
         $sql1 = "SELECT * FROM products where product_id='$product_id'";
         $result1 = mysqli_query($con, $sql1);
         while ($row1=mysqli_fetch_array($result1)){
             $product_price=array($row1['product_price']);
             $product_values=array_sum($product_price);
             $total=$total+$product_values;
         }
     }
    echo $total;
}
?>