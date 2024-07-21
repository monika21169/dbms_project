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
    <style>
      .cart_img{
        width: 80px;
        height: 80px;
        object-fit: contain;
 
      }
    </style>
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
       
      </ul>
      
    </div>
  </div>
</nav>
<?php
cart()
?>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</nav>
    <!-- third child -->
<div class="br-bright">
    <h3 class="text-center">Welcome to eCartBazzar</h3>
    <p class="text-center">Here you get all the products you want!! Explore our website....</p>
</div>

    <!-- fourth child -->
<div class="container">
  <div class="row">
    <form action="" method="post">
    <table class="table table-bordered text-center">
      
      <tbody>
        <?php
        $ip = getIPAddress();
        $sql = "SELECT * FROM cart_details where ip_address='$ip'";
        $result = mysqli_query($con, $sql);
        $num_of_rows=mysqli_num_rows($result);
        if($num_of_rows>0){
          echo "<thead>
          <tr>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Remove</th>
            <th colspan='2'>Operations</th>
          </tr>
        </thead>";
        while ($row=mysqli_fetch_array($result)){
            $product_id=$row['product_id'];
            $sql1 = "SELECT * FROM products where product_id='$product_id'";
            $result1 = mysqli_query($con, $sql1);
            while ($row1=mysqli_fetch_array($result1)){
                $product_price=array($row1['product_price']);
                $price_table=$row1['product_price'];
                $product_title=$row1['product_title'];
                $product_image1=$row1['product_image1'];
                $product_values=array_sum($product_price);
                $total=$total+$product_values;
              

        ?>
        <tr>
          <td><?php echo $product_title ?></td>
          <td><img src="./images/<?php echo $product_image1?>" alt="" class="cart_img"></td>
          <td><input type="text" name="qty" class="form-input w-50"></td>
          <!-- update cart total price by multiplyinh total *quantity rtype in quantity block -->
            <?php
            $ip = getIPAddress();
            if(isset($_POST['update_cart'])){
                $qty=$_POST['qty'];
                $update_qty="update cart_details set quantity='$qty' where product_id='$product_id' and ip_address='$ip'";
                $run_qty=mysqli_query($con,$update_qty);
                $total=$total*$qty;
            } 
            ?>
  
          <td><?php echo $price_table ?>Rs.</td>
          <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
          <td>
            <!-- <button class="bg-info px-3 py-2 border=0 mx-3">Update</button> -->
            <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border=0 mx-3" name="update_cart">
            <!-- <button class="bg-info px-3 py-2 border=0 mx-3">Remove</button> -->
            <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border=0 mx-3" name="remove_cart">
          </td>
        </tr>
        <?php
        }}
        }
      else{
        echo "<h2 class='text-center text-danger'>CART IS EMPTY</h2>";
      }?>
      </tbody>
    </table>
    <!-- subtotal -->
    <div CLASS="d-flex mb-5">
    <?php
    global $con;
        $ip = getIPAddress();
        $sql = "SELECT * FROM cart_details where ip_address='$ip'";
        $result = mysqli_query($con, $sql);
        $num_of_rows=mysqli_num_rows($result);
        if($num_of_rows>0){
        echo "<h4 class='px-4'>
        Subtotal: <strong class='text-info'>$total Rs.</strong>
      </h4>
      <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border=0 mx-3' name='continue_shopping'>
      <button class='bg-secondary px-3 py-2 border=0 '><a href='./users_area/checkout.php' class='text-light text-decoration-none'>checkout</a></button>";
    }
    else{
      echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border=0 mx-3' name='continue_shopping'>";
    }
    if(isset($_POST['continue_shopping'])){
      echo "<script>window.open('index.php','_self')</script>";

    }?>
    </div>
  </div>
</div>
</form>
<?php
// function to remove item

function remove_cart_item(){
  global $con;
  $ip = getIPAddress();
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_product="delete from cart_details where product_id='$remove_id' and ip_address='$ip'";
      $run_delete=mysqli_query($con,$delete_product);
      if($run_delete){
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}
echo $remove_item=remove_cart_item();

?>


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

