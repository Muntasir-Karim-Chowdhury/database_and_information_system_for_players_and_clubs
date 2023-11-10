<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <br>
    <h4 class="text-center">Player Registration</h4>
    <div class="container">
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="f_name">First Name</label>
          <input type="VARCHAR" class="form-control" name="fname"  id="f_name" placeholder="First Name">
        </div>
        <div class="form-group col-md-4">
          <label for="m_name">Middle Name</label>
          <input type="VARCHAR" class="form-control" name="mname" id="m_name" placeholder="Middle Name">
        </div>
        <div class="form-group col-md-4">
          <label for="l_name">Last Name</label>
          <input type="VARCHAR" class="form-control" name="lname" id="l_name" placeholder="Last Name">
        </div>
        <div class="form-group col-md-6">
          <label for="father_name">Fathers Name</label>
          <input type="VARCHAR" class="form-control" name="f_name" id="father_name" placeholder="Fathers Name">
        </div>
        <div class="form-group col-md-6">
          <label for="mother_name">Mothers Name</label>
          <input type="VARCHAR" class="form-control" name="m_name" id="mother_name" placeholder="Mothers Name">
        </div>

          <div class="form-group col-md-4">
          <label for="house_no">House No</label>
          <input type="VARCHAR" class="form-control" name="h_no" id="house_no" placeholder="House No">
        </div>
        <div class="form-group col-md-4">
          <label for="location">Location</label>
          <input type="VARCHAR" class="form-control" name="loc" id="location" placeholder="Location">
        </div>
        <div class="form-group col-md-4">
          <label for="village">Village</label>
          <input type="VARCHAR" class="form-control" name="vill" id="village" placeholder="Village">
        </div>
        <div class="form-group col-md-4">
          <label for="thana">Thana</label>
          <input type="VARCHAR" class="form-control" name="thana" id="thana" placeholder="Thana">
        </div>
        <div class="form-group col-md-4">
          <label for="district">District</label>
          <input type="VARCHAR" class="form-control" name="dis" id="district" placeholder="District">
        </div>
        <div class="form-group col-md-4">
          <label for="post_code">Post Code</label>
          <input type="VARCHAR" class="form-control" name="pos" id="post_code" placeholder="Post Code">
        </div>
        <br>
        <h4>Permanent Address</h4>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="padd" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddres">Date Of Birth</label>
        <input type="date" class="form-control" name="dob" id="inputAddres" placeholder="Date of Birth">
      </div>
      <br>
      <h4>Previous History</h4>

      <table class="table table-hover">
      <thead>
        <tr>
          <th  scope="col">Club Name</th>
          <th scope="col">From</th>
          <th scope="col">To</th>
          <th scope="col">Total Runs</th>
          <th scope="col">Total Wickets</th>
          <th scope="col" >Team Leader</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><input class="form-control"  type="VARCHAR" name="c_name" id=""></td>
          <td><input class="form-control" type="VARCHAR" name="c_from" id=""></td>
          <td><input class="form-control" type="VARCHAR" name="c_to" id=""></td>
          <td><input class="form-control" type="INTEGER" name="t_run" id=""></td>
          <td><input class="form-control" type="INTEGER" name="t_wicket" id=""></td>
          <td><input class="form-control" type="text" name="t_leader" id=""></td>
        </tr>



      </tbody>
    </table>
    <h4>Best Performance</h4>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Club Name</th>
          <th scope="col">Opponent Club Name</th>
          <th scope="col">Event id</th>
          <th scope="col">Match id</th>
          <th scope="col">Runs</th>
          <th scope="col">Wickets</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><input class="form-control" type="VARCHAR" name="cl_name" id=""></td>
          <td><input class="form-control" type="VARCHAR" name="cl_op" id=""></td>
          <td><input class="form-control" type="INTEGER" name="eid" id=""></td>
          <td><input class="form-control" type="INTEGER" name="mid" id=""></td>
          <td><input class="form-control" type="INTEGER" name="runs" id=""></td>
          <td><input class="form-control" type="INTEGER" name="wickets" id=""></td>
        </tr>



      </tbody>
    </table>
    <h4>Educational Qualifications</h4>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Name of degree</th>
          <th scope="col">Institute/Department</th>
          <th scope="col">Board/University</th>
          <th scope="col">Year</th>
          <th scope="col">Result</th>

        </tr>
      </thead>
      <tbody>
        <tr>

          <td><input class="form-control" type="text" name="deg" id=""></td>
          <td><input class="form-control" type="text" name="ins" id=""></td>
          <td><input class="form-control" type="text" name="bod" id=""></td>
          <td><input class="form-control" type="text" name="year" id=""></td>
          <td><input class="form-control" type="FLOAT" name="gpa" id=""></td>

        </tr>



      </tbody>
    </table>
    <h4>Membership</h4>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="iccb" id="inlineCheckbox1" value="iccb">
      <label class="form-check-label" for="inlineCheckbox1">ICCB</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="bccb" id="inlineCheckbox2" value="bccb">
      <label class="form-check-label" for="inlineCheckbox2">BCCB</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="accb" id="inlineCheckbox3" value="accb">
      <label class="form-check-label" for="inlineCheckbox3">ACCB</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="other" id="inlineCheckbox4" value="other">
      <label class="form-check-label" for="inlineCheckbox4">Others</label>
    </div>
    <br>
    <br>
    <div class="form-group col-md-4">
          <label for="signature">Signature of the Player</label>
          <input type="text" class="form-control" name="signature" id="signature" placeholder="">
        </div>
        <div class="form-group col-md-4">
          <label for="date">Date</label>
          <input type="date" class="form-control" name="tdob" id="date" placeholder="">
        </div>



        <input class="btn btn-primary" type="submit" name="submit" value="submit">
    <br>
    <br>
    </form>
</div>


    <?php include 'footer.php'; ?>

  </body>
</html>
<?php
include_once("database.php");
if (isset($_POST['submit'])) {
  // code...
  //  $id= $_POST['id'];
  echo "dkdfdflfdsdsdsdds";
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $h_no = $_POST['h_no'];
    $loc= $_POST['loc'];
    $vill= $_POST['vill'];
    $thana= $_POST['thana'];
    $dis= $_POST['dis'];
    $pos = $_POST['pos'];
    $padd= $_POST['padd'];
    $dob= $_POST['dob'];
    $c_name= $_POST['c_name'];
    $c_from= $_POST['c_from'];
    $c_to= $_POST['c_to'];
    $t_run= $_POST['t_run'];
    $t_wicket= $_POST['t_wicket'];
    $t_leader= $_POST['t_leader'];
    $cl_name= $_POST['cl_name'];
    $cl_op= $_POST['cl_op'];
    $eid = $_POST['eid'];
    $mid= $_POST['mid'];
    $runs= $_POST['runs'];
    $wickets= $_POST['wickets'];
    $deg = $_POST['deg'];
    $ins = $_POST['ins'];
    $bod = $_POST['bod'];
    $year = $_POST['year'];
    $gpa = $_POST['gpa'];
    $signature = $_POST['signature'];
    $tdob = $_POST['tdob'];


    $result= " INSERT INTO playerprofile(firstname, middlename, lastname, fathername,
              mothername, houseno, location, village, thana, district, postcode,Permanent_Add, dob,club_name,previous_club,
              present_club,Total_runs, total_wicket, Team_leader, cl_name, cl_opponent, Event_id, Match_id, Runs,
            wickets, Degree, Institute, University,passing_year, Result,  Signature, Today_date)
              VALUES( '$fname', '$mname', '$lname', '$f_name', '$m_name', '$h_no', '$loc',
              '$vill', '$thana', '$dis', '$pos','$padd' ,'$dob','$c_name','$c_from','$c_to','$t_run','$t_wicket',
              '$t_leader','$cl_name','$cl_op','$eid','$mid','$runs','$wickets','$deg','$ins','$bod','$year','$gpa',
              '$signature','$tdob')";

    $result = mysqli_query($conn,$result);

  echo "<h1 align='center'>  Information Added </h1>";
}
 ?>
