<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<br>
		<h4 class="text-center">Players Performance in Match Form</h4>
		<div class="container">
		<form action="" method="post">

			
		   <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="Match id">Match id </label>
		      <input type="INTEGER" class="form-control" name="match_id" id="Match id" placeholder="Match id ">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Venue Id ">Venue Id </label>
		      <input type="INTEGER" class="form-control" name="venue_id" id="Venue Id " placeholder="Venue Id ">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="start_date">Date of the Match </label>
		      <input type="date" class="form-control" name="m_date"  id="start_date" placeholder="(DD-MM-YYYY)  ">
		    </div>
		    <table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Team1</th>
		      <th scope="col">Total wickets</th>
		      <th scope="col">Total runs</th>
		      <th scope="col">Outstanding performance(Player)</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		       <td><input class="form-control" type="VARCHAR" name="tname1" id=""></td>
		      <td><input class="form-control" type="INTEGER" name="twicket" id=""></td>
		      <td><input class="form-control" type="INTEGER" name="trun" id=""></td>
		      <td><input class="form-control" type="VARCHAR" name="tname" id=""></td>
		    </tr>

		  </tbody>
			<thead>
				<tr>
					<th scope="col">Team2</th>
					<th scope="col">Total wickets</th>
					<th scope="col">Total runs</th>
					<th scope="col">Outstanding performance(Player)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input class="form-control" type="VARCHAR" name="tname2" id=""></td>
					<td><input class="form-control" type="INTEGER" name="twicket2" id=""></td>
					<td><input class="form-control" type="INTEGER" name="trun2" id=""></td>
					<td><input class="form-control" type="VARCHAR" name="tname3" id=""></td>
				</tr>

			</tbody>
		</table>
		</div>
		<br>


			<h4 align="center">Player performance</h4>
		   <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="Event id ">Event id </label>
		      <input type="INTEGER" class="form-control" name="eventid" id="Event id " placeholder="Event id ">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Venue Id ">Venue Id </label>
		      <input type="INTEGER" class="form-control" name="venue_id" id="Venue Id " placeholder="Venue Id ">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="start_date">Date of the Match </label>
		      <input type="date" class="form-control" name="m_date"  id="start_date" placeholder="(DD-MM-YYYY)  ">
		    </div>
		    <table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Match id</th>
		      <th scope="col">Man-of-the match</th>
		      <th scope="col">Umpires </th>

		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><input class="form-control"  type="INTEGER" name="match_id" id=""></td>
		      <td><input class="form-control" type="VARCHAR" name="mom" id=""></td>
		      <td><input class="form-control" type="VARCHAR" name="u_name" id=""></td>

		    </tr>

		  </tbody>
		</table>
		</div>

		    <br>
		    <div style="text-align:center">
		    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
		 </div>
		 <br>
		</form>

		</div>

		<?php include 'footer.php'; ?>

	</body>
</html>
<?php
include_once('database.php');
if(isset($_POST['submit'])){
	$match_id= $_POST['match_id'];
	$venue_id= $_POST['venue_id'];
	$m_date= $_POST['m_date'];
	$tname1= $_POST['tname1'];
	$twicket= $_POST['twicket'];
	$trun= $_POST['trun'];
	$tname= $_POST['tname'];
	$tname2= $_POST['tname2'];
	$twicket2= $_POST['twicket2'];
	$trun2= $_POST['trun2'];
	$tname3= $_POST['tname3'];
	$eventid= $_POST['eventid'];
	$mom= $_POST['mom'];
	$u_name= $_POST['u_name'];
	
	$result= "INSERT INTO Players_Performance(matchid,venueid,matchdate,teamname1,totalwicket,
						totalrun,Outstanding,teamname2,totalwicket2,totalrun2,Outstanding2,eventid,
						manofthematch,umpirename)VALUES('$match_id','$venue_id','$m_date','$tname1',
							'$twicket','$trun','$tname','$tname2','$twicket2','$trun2','$tname3',
							'$eventid','$mom','$u_name')";

	$result = mysqli_query($conn,$result);

  echo "<h1 align='center'>  Information Added </h1>";

}
 ?>
