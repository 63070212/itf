<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="winth=divice-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  p.ex1 {
    margin-top: 25px;
  }
  </style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'max13.mysql.database.azure.com', 'Pear@max13', 'Satin2545', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <div class="from">
        <p class="ex1"><h1><center></center></h1></p>
    </div>
<table class="table table-dark table-striped" width="600" border="1">
  <thead>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
   </thead>
  </tbody>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
      <td><center><a href="form edit.html"><input type="submit" value="EDIT" class="btn btn-outline-danger"></a>&nbsp;<a href="form delete.html"><input type="submit" value="DELETE" class="btn btn-outline-info"></a></center></td>
  </tr>
<?php
}
?>
  </tbody>
</table>
<?php
mysqli_close($conn);
?>
<a target="_blank" href="https://chikage.azurewebsites.net/form.html" class="btn btn-outline-info">INSERT</a>
</body>
</html>
