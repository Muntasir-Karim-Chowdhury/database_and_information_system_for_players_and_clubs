<?php
include_once("database.php");
//fetching data in descending order (lastest entry first)
$result = " SELECT *
 FROM club_registration";
$result = mysqli_query($conn, $result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      
  <h1 class="Dispaly-1" style="text-align:center">Club Information</h1>
<hr>
<table class="table"><tr>
<th>Club ID</th>
<th >Club Name</th>
<th>Establisment date</th>
<th>House NO</th>
<th>lacation</th>
<th>villaage</th>
<th>thana</th>
<th>district</th>
<th>postcode</th>
<th>president name</th>
</tr>
<?php
while($res = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $res['club_id']; ?></td>
<td><?php echo $res['club_name'];?></td>
<td><?php echo $res['Establisment_date'];?></td>
<td><?php echo $res['houseno'];?></td>
<td><?php echo $res['location'];?></td>
<td><?php echo $res['village'];?></td>
<td><?php echo $res['thana'];?></td>
<td><?php echo $res['district'];?></td>
<td><?php echo $res['postcode'];?></td>
<td><?php echo $res['president_name'];?></td>
</tr>
<?php
}
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
