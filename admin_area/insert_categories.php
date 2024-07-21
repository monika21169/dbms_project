<?php
include('../includes/connect.php');
if(isset($_POST['insert_cart'])){
    $category_title = $_POST['cart_title'];

    // Sanitize input to prevent SQL injection
    $category_title = mysqli_real_escape_string($con, $category_title);

    //select data from database
    $select_query = "SELECT * FROM categories WHERE category_title='$category_title'";
    $run_query = mysqli_query($con, $select_query);

    // Check if query executed successfully
    if(!$run_query) {
        // Handle query execution failure
        echo "<script>alert('Error: ". mysqli_error($con) ."')</script>";
    } else {
        // Check if any rows were returned
        $number = mysqli_num_rows($run_query);

        if($number > 0){
            echo "<script>alert('Category already exists')</script>";
        } else {
            //insert data into database
            $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
            $run_insert_query = mysqli_query($con, $insert_query);

            if($run_insert_query){
                echo "<script>alert('Category inserted successfully')</script>";
            } else {
                // Handle insertion failure
                echo "<script>alert('Error: ". mysqli_error($con) ."')</script>";
            }
        }
    }
}

?>
<h2 class="text-center">Add Category</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fas fa-receipt"></i></span>
    <input type="text" class="form-control" name="cart_title"placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cart" value="Insert categories">
   
    </div>
</form>