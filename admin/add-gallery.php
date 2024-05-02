<?php
include('includes/connection.php');
include('includes/allfunction.php');

if (isset($_POST['submit'])) {
  // Validate inputs
  if (empty($_FILES['image']['name']) || empty($_POST['name']) || empty($_POST['category']) || !isset($_POST['status'])) {
    // Handle empty fields
    echo '<script>alert("Please fill out all fields.")</script>';
  } else {
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    // Check if file is an image
    $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (!in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
      echo '<script>alert("Only JPG, JPEG, PNG, and GIF files are allowed.")</script>';
    } else {
      // Move uploaded file
      $uploadDir = 'uploads/';
      $uploadPath = $uploadDir . $filename;
      if (!move_uploaded_file($tempname, $uploadPath)) {
        echo '<script>alert("Failed to upload file.")</script>';
      } else {
        // Sanitize inputs
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $category_id = intval($_POST['category']);
        $status = intval($_POST['status']);

        // Insert data into the images table
        $data = array(
          "category_id" => $category_id,
          "image_path" => $uploadPath,
          "name" => $name,
          "uploaded_at" => date('Y-m-d h:i:s'),
          "status" => $status,
          "image_name" => $filename
        );

        // Insert data into the images table
        insert('images', $data);
        echo '<script>alert("Gallery item added successfully.")</script>';
        header('location:all-gallery.php');
      }
    }
  }
}

// Fetch all categories
$categories = fetchalldata('categories');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Gallery</title>

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
          <h4 class="card-title">Add Gallery</h4>

          <form class="forms-sample" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Image upload</label>
              <input type="file" name="image" required>
            </div>

            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
              <label for="exampleSelectCategory">Category</label>
              <select name="category" class="form-control" id="exampleSelectCategory" required>
                <option value="" disabled selected>Select Category</option>
                <?php foreach ($categories as $category) : ?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleSelectGender">Status</label>
              <select class="form-control" id="exampleSelectGender" name="status" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
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