<?php


function fetchalldata($tablename)
{
  global $conn; // Add global keyword to access the global $conn variable

  $sql = "SELECT * FROM $tablename";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    return $result;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
function fetchImagesByCategoryId($category_id)
{
  global $conn;

  $sql = "SELECT * FROM images WHERE category_id = $category_id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    return $result;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
function insert($tablename, $data)
{
  global $conn;

  $columns = implode(", ", array_keys($data)); // Use implode to join array keys
  $values = "'" . implode("', '", array_values($data)) . "'"; // Implode array values with quotes

  $sql = "INSERT INTO $tablename ($columns) VALUES ($values)";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 'inserted';
  } else {
    // Check if the error is due to a foreign key constraint violation
    if (mysqli_errno($conn) == 1452) {
      echo '<script>alert("Invalid category ID. Please select a valid category.")</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

function selectdatabyid($tablename, $id)
{
  global $conn;

  $sql = "SELECT * FROM $tablename WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $data = mysqli_fetch_array($result);
    return $data;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

function update($table, $data, $where)
{
  global $conn;

  $updates = [];
  foreach ($data as $column => $value) {
    $updates[] = "$column = '$value'";
  }

  $setClause = implode(", ", $updates);
  $sql = "UPDATE $table SET $setClause WHERE id = '$where'";
  mysqli_query($conn, $sql);
}

function deletedata($tablename, $id)
{
  global $conn;

  $sql = "DELETE FROM $tablename WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 'deleted';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
