<?php
include('includes/connection.php');
include('includes/allfunction.php');

if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $delresult = deletedata('categories', $delid);
    if ($delresult) {
        header('location:all-category.php');
    } else {
        echo '<script>alert("Failed to delete category.")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Categories</title>

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
                    <h4 class="card-title">All Categories</h4>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $categories = fetchalldata('categories');

                            $i = 1;
                            while ($data = mysqli_fetch_array($categories)) {
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['category_name']; ?></td>
                                    <td>
                                        <a href="edit-category.php?editid=<?php echo $data['id']; ?>">Edit</a>
                                        <a href="all-category.php?delid=<?php echo $data['id']; ?>" onclick="return confirm('Do you want to delete this data')">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.php'); ?>
    </div>

    <?php include_once('includes/script.php'); ?>

</body>

</html>