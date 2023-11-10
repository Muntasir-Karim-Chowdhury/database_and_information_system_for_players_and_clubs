<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <br>
    <h4 class="text-center">Team Information Form</h4>
    <br>
    <div class="container">
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="c_id">Club Id</label>
          <input type="INTEGER" class="form-control" name="club_id" id="c_id" placeholder="Club Id">
        </div>
        <div class="form-group col-md-6">
          <label for="p_id">Player Id</label>
          <input type="INTEGER" class="form-control" name="player_id" id="p_id" placeholder="Player Id">
        </div>
        <div class="form-group col-md-6">
          <label for="t_date">Team formation date </label>
          <input type="Date" class="form-control" name="t_date" id="t_date" placeholder="(DD/MM/YYYY)">
        </div>
        <div class="form-group col-md-6">
          <label for="event">Event name / event id </label>
          <input type="INTEGER" class="form-control" name="eventid" id="event" placeholder="Event name / event id ">
        </div>

        <div class="form-group col-md-6">
          <label for="t_id">Team leader id (Player id)  </label>
          <input type="INTEGER" class="form-control" id="t_id" name="tl_id" placeholder="Team leader id (Player id) ">
        </div>
        <div class="form-group col-md-6">
          <label for="p_name">Player Name</label>
          <input type="VARCHAR" class="form-control" id="p_name" name="tl_name" placeholder="Player Name">
        </div>

            <div class="form-group col-md-6">
          <label for="c_id">Coach id </label>
          <input type="INTEGER" class="form-control" name="c_id" id="c_id" placeholder="Coach id ">
        </div>
        <div class="form-group col-md-6">
          <label for="c_name">Coach Name</label>
          <input type="VARCHAR" class="form-control" name="co_name" id="c_name" placeholder="Coach Name">
        </div>

         <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Player id</th>
          <th scope="col">Name</th>
          </tr>
      </thead>
      <tbody>
        <tr>
           <td><input type="INTEGER" name="plid" id=""></td>
          <td><input type="VARCHAR" name="plname" id=""></td>
        </tr>

      </tbody>
    </table>
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
  include_once('database.php');
  if(isset($_POST['submit'])){
    $club_id= $_POST['club_id'];
    $player_id= $_POST['player_id'];
    $t_date= $_POST['t_date'];
    $eventid= $_POST['eventid'];
    $tl_id= $_POST['tl_id'];
    $tl_name= $_POST['tl_name'];
    $c_id= $_POST['c_id'];
    $co_name= $_POST['co_name'];
    $plid= $_POST['plid'];
    $plname= $_POST['plname'];

    $result= "INSERT INTO team_information(club_id,player_id,team_formation_date,eventid,
      Team_leader_id,Team_leader_name,Coach_id,Coach_name,Club_player_id,Club_player_name)
      VALUES('$club_id','$player_id','$t_date','$eventid','$tl_id','$tl_name','$c_id',
        '$co_name','$plid','$plname')";

    $result = mysqli_query($conn,$result);

    echo "<h1 align='center'>  Information Added </h1>";

  }
?>
