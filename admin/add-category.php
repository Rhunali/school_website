<?php
include('includes/connection.php');
include('includes/allfunction.php');

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];

    $data = array(
        "category_name" => $category_name
    );

    insert('categories', $data);
    header('location:all-category.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Category</title>

    <?php include_once('includes/css.php'); ?>

</head>

<body>
    <div class="container-scroller">
        <?php include_once('includes/header.php'); ?>

        <div class="container-fluid page-body-wrapper">
            <?php include_once('includes/sidebar.php'); ?>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category</h4>

                    <form class="forms-sample" method="post">
                        <div class="form-group">
                            <label for="exampleInputCategory">Category Name</label>
                            <input type="text" class="form-control" id="exampleInputCategory" name="category_name" placeholder="Category Name">
                        </div>

                        <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.php'); ?>
    </div>

    <?php include_once('includes/script.php'); ?>

</body>

</html>