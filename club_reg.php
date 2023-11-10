<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <br>
    <h4 class="text-center mb-5">Club Registration</h4>
    <div class="container ">
    <form  action="" method="post">
        <div class="form-inline">
          <label for="f_name">Name of the Club</label>
          <input type="VARCHAR" class="form-control mr-5 " name="c_name"  id="f_name" placeholder="First Name">
          <label class="text-right" for="inputAddres">Date Of Establisment</label>
          <input type="date" class="form-control text-right" name="dob" id="inputAddres" placeholder="Date of Establisment">
        </div>
        <h4>address: </h4>
        <div class="form-group">
        <label for="house_no">House No</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="h_no" id="house_no" placeholder="House No">
      
        <label for="location">Location</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="loc" id="location" placeholder="Location">

        <label for="village">Village</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="vill" id="village" placeholder="Village">
        <label for="thana">Thana</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="thana" id="thana" placeholder="Thana">

        <label for="district">District</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="dis" id="district" placeholder="District">

        <label for="post_code">Post Code</label>
        <input class="form-control mr-5 " type="VARCHAR" class="form-control" name="pos" id="post_code" placeholder="Post Code">

            <label for="signature">Name of the president</label>
            <input type="VARCHAR" class="form-control" name="president" id="signature" placeholder="">
        </div>

        <div style="text-align:center">
          <button type="submit" name="submit" class="btn btn-primary" aligh="center">Sign in</button>
        </div>
    </form>
    </div>
    <?php include 'footer.php'; ?>

  </body>
</html>
<?php
  include_once("database.php");
  if (isset($_POST['submit'])){
  $c_name= $_POST['c_name'];
  $dob= $_POST['dob'];
  $h_no = $_POST['h_no'];
  $loc= $_POST['loc'];
  $vill= $_POST['vill'];
  $thana= $_POST['thana'];
  $dis= $_POST['dis'];
  $pos = $_POST['pos'];
  $president= $_POST['president'];
  $result= "INSERT INTO club_registration(club_name,Establisment_date,houseno,location,
            village,thana, district, postcode, president_name) VALUES('$c_name','$dob','$h_no',
            '$loc','$vill','$thana','$dis','$pos','$president')";
  $result = mysqli_query($conn,$result);

  echo "<h1 align='center'>  Information Added </h1>";

}
 ?>
