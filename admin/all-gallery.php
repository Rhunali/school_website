<?php
include('includes/connection.php');
include('includes/allfunction.php');

if (isset($_GET['delid'])) {
  $delresult = deletedata('images', $_GET['delid']);
  if ($delresult) {
    header('location:all-gallery.php');
  } else {
    echo "Failed to delete data.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>All Gallery</title>

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
          <h4 class="card-title">All Gallery</h4>

          <table class="table">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Added Date</th>
                <th>Name</th>
                <th>Category ID</th>
                <th>Image Path</th>
                <th>Status</th>
                <th>Modified Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $imagesdata = fetchalldata('images');
              if ($imagesdata && mysqli_num_rows($imagesdata) > 0) {
                $i = 1;
                while ($data = mysqli_fetch_array($imagesdata)) { ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['added_date']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['category_id']; ?></td>
                    <td><img src="<?php echo $data['image_path']; ?>" style="height:80px; width:auto; border-radius:0;"></td>
                    <td> <?php
                          if ($data['status'] == 1) { ?>
                        <label class="badge badge-success">Active</label>
                      <?php } else { ?>
                        <label class="badge badge-danger">Inactive</label>
                      <?php } ?>
                    </td>
                    <td><?php echo $data['modified_date']; ?></td>
                    <td>
                      <a href="edit-gallery.php?editid=<?php echo $data['id']; ?>">Edit</a>
                      <a href="all-gallery.php?delid=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                    </td>
                  </tr>
              <?php
                  $i++;
                }
              } else {
                echo "<tr><td colspan='8'>No data found</td></tr>";
              }
              ?>

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