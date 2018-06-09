<?php
require "dbconnect.php";
if(isset($_POST['firstInput'])){
$firstInput=$_POST['firstInput'];

$allTerms=mysqli_query($link, "SELECT * FROM rustoest WHERE russian='$firstInput' ");

}
?>
<html>
<head>
  <meta charset="utf-8" />
  <title>Russian - Estonian translator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
  <form name="myForm" action="" method="post">
  <div class="container">
    <div class="row justify-content-center">
      <h1>Russian - Estonian translator</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-4">
        <input type="text" name="firstInput" class="form-control" placeholder="дом">
      </div>
      <input class="btn btn-primary" type="submit" value="Translate">
    <?php
    if(isset($_POST['firstInput'])){
      while ($oneTerm=mysqli_fetch_assoc($allTerms)) {
        echo '<div class="col-4">
        <input type="text" value="'.$oneTerm['estonian'].'" name="secondInput" class="form-control">
        </div>';
      }
    }
  ?>
    </div>
  </div>
</form>
<div class="container">
  <div class="row row justify-content-center">
    <a href="estonianToRussian.php">Estonian - Russian translator</a>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
