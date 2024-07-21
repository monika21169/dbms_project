<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    // Sanitize input to prevent SQL injection
    $brand_title = mysqli_real_escape_string($con, $brand_title);

    //select data from database
    $select_query = "SELECT * FROM brands WHERE brand_name='$brand_title'";
    $run_query = mysqli_query($con, $select_query);

    // Check if query executed successfully
    if(!$run_query) {
        // Handle query execution failure
        echo "<script>alert('Error: ". mysqli_error($con) ."')</script>";
    } else {
        // Check if any rows were returned
        $number = mysqli_num_rows($run_query);

        if($number > 0){
            echo "<script>alert('Brand already exists')</script>";
        } else {
            //insert data into database
            $insert_query = "INSERT INTO brands (brand_name) VALUES ('$brand_title')";
            $run_insert_query = mysqli_query($con, $insert_query);

            if($run_insert_query){
                echo "<script>alert('Brand inserted successfully')</script>";
            } else {
                // Handle insertion failure
                echo "<script>alert('Error: ". mysqli_error($con) ."')</script>";
            }
        }
    }
}

?>

<h2 class="text-center">Add Brand</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fas fa-receipt"></i></span>
    <input type="text" class="form-control" name="brand_title"placeholder="Insert brands" aria-label="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert brands">
    
    </div>
</form>