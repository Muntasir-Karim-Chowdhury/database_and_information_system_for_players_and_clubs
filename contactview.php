<?php
include_once("database.php");
//fetching data in descending order (lastest entry first)
$result = " SELECT *
 FROM contract_form";
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
<table class="table border border-primary rounded">
<thead class="thead-success">
  <tr>
    <th>Club ID</th>
    <th >Club Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Player Id</th>
    <th>Authorizer_firstname</th>
    <th>Authorizer_middlename</th>
    <th>Authorizer_lastname</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Ammount</th>
    <th>Serial No</th>
    <th>Due Date</th>
    <th>Payment Date</th>
    <th>Payment amount</th>
    <th>Contract withness1</th>
    <th>Contract withness2</th>
  </tr>
</thead> 
<tbody>
    <?php
    while($res = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $res['club_id']; ?></td>
    <td><?php echo $res['club_name'];?></td>
    <td><?php echo $res['firstname'];?></td>
    <td><?php echo $res['middlename'];?></td>
    <td><?php echo $res['lastname'];?></td>
    <td><?php echo $res['player_id'];?></td>
    <td><?php echo $res['Authorizer_firstname'];?></td>
    <td><?php echo $res['Authorizer_middlename'];?></td>
    <td><?php echo $res['Authorizer_lastname'];?></td>
    <td><?php echo $res['start_date'];?></td>
    <td><?php echo $res['end_date'];?></td>
    <td><?php echo $res['Amount'];?></td>
    <td><?php echo $res['Serial_Number'];?></td>
    <td><?php echo $res['due_date'];?></td>
    <td><?php echo $res['Payment_date'];?></td>
    <td><?php echo $res['Payment_amount'];?></td>
    <td><?php echo $res['Contrac_withness1'];?></td>
    <td><?php echo $res['Contrac_withness2'];?></td>
    </tr>
    <?php
    }
    ?>

</tbody>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
