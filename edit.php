<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'max13.mysql.database.azure.com', 'Pear@max13', 'Satin2545', 'ITFLab', 3306);
if (mysqli_connect_erron($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "UPDATE guestbook SET Comment='$comment' WHERE Name='$name'";

if (mysqli_query($conn, $sql)) {
    echo "Edit successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
