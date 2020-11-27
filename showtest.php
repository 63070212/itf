<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070212_pear, 'YIVfyv86', 'it63070212_itf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test_example');
?>
<table width="600" border="1" class="table table-dark table-striped">
  <tr>
    <th width="100"> <div align="center">A</div></th>
    <th width="350"> <div align="center">B</div></th>
    <th width="150"> <div align="center">C</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['bmi'];?></td>
  </tr>
<?php
}
?>
</table>
<form action="inserttest.php" class="was-validated" method = "post" id="Form2" >
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="weight">weight:</label>
          <input type="text" class="form-control" name = "weight" id="weight" placeholder="Enter weight" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="height">height:</label>
          <input type="text" class="form-control" name = "height" id="height" placeholder="Enter height" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary" id="commentButton">Submit</button>
      </form>

<?php
mysqli_close($conn);
?>
</body>
</html>