<html>
<head>
<title>ITF Lab</title>
   <meta charset="utf-8">
   <meta name="viewport" content="winth=divice-widtg, initial-scale=1">
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
<table width="600" border="1" class="table table-dark table-striped" class="center" class="ex1">
  <tr class="info">
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><center><?php echo $Result['Name'];?></center></td>
    <td><center><?php echo $Result['Comment'];?></center></td>
    <td><center><a herf="from edit.html"><input type="submit" value="Edit" class="btn btn-warning"></a>&nbsp;&nbsp;<a href="form delete.html"><input type="submit" value="DELETE" class="btn btn-danger"></a></center></td>
  </tr>
<?php
}
?>
</table>
<center><a herf="form insert.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
<?php
mysqli_close($conn);
?>
</body>
</html>
