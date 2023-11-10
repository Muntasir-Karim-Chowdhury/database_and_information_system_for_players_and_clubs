<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <br>
    <h4 class="text-center">Contact Form</h4>
    <div class="container">
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="c_id">Club Id</label>
          <input type="INTEGER" class="form-control" name="c_id" id="c_id" placeholder="Club Id">
        </div>
        <div class="form-group col-md-6">
          <label for="c_name">Club Name</label>
          <input type="VARCHAR" class="form-control" name="c_name" id="c_name" placeholder="Club Name">
        </div>
      </div>
      <br>
      <h4>Name of the player</h4>
       <div class="form-row">
        <div class="form-group col-md-4">
          <label for="f_name">First Name</label>
          <input type="VARCHAR" class="form-control" name="f_name" required id="f_name" placeholder="First Name">
        </div>
        <div class="form-group col-md-4">
          <label for="m_name">Middle Name</label>
          <input type="VARCHAR" class="form-control" name="m_name" id="m_name" placeholder="Middle Name">
        </div>
        <div class="form-group col-md-4">
          <label for="l_name">Last Name</label>
          <input type="VARCHAR" class="form-control" name="l_name" required id="l_name" placeholder="Last Name">
        </div>
        <div class="form-group col-md-4">
          <label for="player_id">Player Id</label>
          <input type="INTEGER" class="form-control" name="pid" id="player_id" placeholder="Player Id">
        </div>
        </div>

        <h4>Authorized Person</h4>
       <div class="form-row">
        <div class="form-group col-md-4">
          <label for="af_name">First Name</label>
          <input type="VARCHAR" class="form-control" name="af_name"  id="af_name" placeholder="First Name">
        </div>
        <div class="form-group col-md-4">
          <label for="am_name">Middle Name</label>
          <input type="VARCHAR" class="form-control" name="am_name" id="am_name" placeholder="Middle Name">
        </div>
        <div class="form-group col-md-4">
          <label for="al_name">Last Name</label>
          <input type="VARCHAR" class="form-control" name="al_name" id="al_name" placeholder="Last Name">
        </div>
        <div class="form-group col-md-4">
          <label for="Designation">Designation</label>
          <input type="VARCHAR" class="form-control" name="des" id="Designation" placeholder="Designation">
        </div>
        </div>

         <h4>Contract Period </h4>
       <div class="form-row">
        <div class="form-group col-md-6">
          <label for="start_date">Start Date </label>
          <input type="Date" class="form-control" name="sd" id="start_date" placeholder="(DD-MM-YYYY)  ">
        </div>
        <div class="form-group col-md-6">
          <label for="end_date">End Date </label>
          <input type="Date" class="form-control" name="ed" id="end_date" placeholder="(DD-MM-YYYY) ">
        </div>
        <div class="form-group col-md-4">
          <label for="Amount">Contract Amount </label>
          <input type="INTEGER" class="form-control" name="amount" id="Amount" placeholder="Amount ">
        </div>
        </div>

        <h4>Payment Schedule</h4>
        <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Serial Number</th>
          <th scope="col">Due date</th>
          <th scope="col">Payment date</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
           <td><input class="form-control" type="INTEGER" name="sl" id=""></td>
          <td><input class="form-control" type="Date" name="ddate" id="ddate"></td>
          <td><input class="form-control" type="date" name="pdate" id="pdate"></td>
          <td><input class="form-control" type="INTEGER" name="amou" id=""></td>
        </tr>

      </tbody>
    </table>
       <div class="form-group col-md-4">
          <label for="signature">Contract witness 1</label>
          <input type="VARCHAR" class="form-control" name="wname1" id="signature" placeholder="">
        </div>
        <div class="form-group col-md-4">
          <label for="date">Contract witness 2: </label>
          <input type="VARCHAR" class="form-control" id="date" name="wname2" placeholder="">
        </div>
        <br>
        <div style="text-align:center">
        <button type="submit" class="btn btn-primary" name="submit" aligh="center">Sign in</button>
     </div>
     <br>
    </form>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
<?php
include_once("database.php");
if (isset($_POST['submit'])){
  $c_id= $_POST['c_id'];
  $c_name= $_POST['c_name'];
  $f_name= $_POST['f_name'];
  $m_name= $_POST['m_name'];
  $l_name= $_POST['l_name'];
  $pid= $_POST['pid'];
  $af_name= $_POST['af_name'];
  $am_name= $_POST['am_name'];
  $al_name= $_POST['al_name'];
  $des= $_POST['des'];
  $sd= $_POST['sd'];
  $ed= $_POST['ed'];
  $amount= $_POST['amount'];
  $sl= $_POST['sl'];
  $ddate= $_POST['ddate'];
  $pdate= $_POST['pdate'];
  $amou= $_POST['amou'];
  $wname1= $_POST['wname1'];
  $wname2= $_POST['wname2'];
  $result = "INSERT INTO contract_form(club_id,club_name,firstname,middlename,lastname,player_id,
            Authorizer_firstname,Authorizer_middlename,Authorizer_lastname,Designation,start_date,
            end_date,Amount,Serial_Number,due_date,Payment_date,Payment_amount,Contrac_withness1,
            Contrac_withness2) VALUES('$c_id','$c_name','$f_name','$m_name','$l_name','$pid',
            '$af_name','$am_name','$al_name','$des','$sd','$ed','$amount','$sl','$ddate',
          '$pdate','$amou','$wname1','$wname2')";
  $result = mysqli_query($conn,$result);
  echo "<h1 align='center'>  Information Added </h1>";
}
 ?>
