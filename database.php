<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, "");
// Check connection
if ($conn == false) {
  die("Connection failed: " . $conn->connect_error);
}
$db = mysqli_select_db($conn, "cricket_club");
if (empty($db)) {
  // code...
  $sql = "CREATE DATABASE cricket_club";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br />";
  }
}
$db = mysqli_select_db($conn, "cricket_club");
$table = "select * from Player_Registration";
$checktable = mysqli_query($conn, $table);
if (!$checktable) {
  $sql = "CREATE TABLE playerprofile (
player_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
middlename VARCHAR(30),
lastname VARCHAR(30) NOT NULL,
fathername VARCHAR(30),
mothername VARCHAR(30),
houseno FLOAT(10),
location VARCHAR(50),
village VARCHAR(20),
thana VARCHAR(20),
district VARCHAR(20),
postcode INTEGER(10),
Permanent_Add TEXT(50),
dob date,
club_name VARCHAR(30),
previous_club VARCHAR(30),
present_club VARCHAR(30),
Total_runs INTEGER(5),
total_wicket INTEGER(5),
Team_leader TEXT(30),
cl_name VARCHAR(30),
cl_opponent VARCHAR(30),
Event_id  INTEGER(5),
Match_id  INTEGER(5),
Runs INTEGER(5),
wickets INTEGER(5),
Degree TEXT(30),
Institute TEXT(30),
University TEXT(30),
passing_year TEXT(6),
Result FLOAT(7),
Signature TEXT(50),
Today_date date
)";
  if ($conn->query($sql) === TRUE) {
    echo "Table clubregistration created successfully";
  }
}
$db1 = mysqli_select_db($conn, "cricket_club");
$table1 = "select * from club_registration";
$checktable1 = mysqli_query($conn, $table1);
if (!$checktable1) {
  $sql1 = "CREATE TABLE club_registration(
    club_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    club_name VARCHAR(50),
    Establisment_date Date,
    houseno FLOAT(10),
    location VARCHAR(50),
    village VARCHAR(20),
    thana VARCHAR(20),
    district VARCHAR(20),
    postcode INTEGER(10),
    president_name VARCHAR(50)
  )";
  if ($conn->query($sql1) === TRUE) {
    echo "Table clubregistration created successfully";
  }
}
$table2 = "select * from contract_form";
$checktable2 = mysqli_query($conn, $table2);
if (!$checktable2) {
  $sql2 = "CREATE TABLE contract_form(
    club_id INT(6) PRIMARY KEY,
    club_name VARCHAR(50),
    firstname VARCHAR(30) NOT NULL,
    middlename VARCHAR(30),
    lastname VARCHAR(30) NOT NULL,
    player_id INT(6),
    Authorizer_firstname VARCHAR(30) ,
    Authorizer_middlename VARCHAR(30),
    Authorizer_lastname VARCHAR(30) ,
    Designation VARCHAR(50),
    start_date Date,
    end_date Date,
    Amount INTEGER(7),
    Serial_Number INTEGER(4),
    due_date Date,
    Payment_date Date,
    Payment_amount INTEGER(6),
    Contrac_withness1 VARCHAR(50),
    Contrac_withness2 VARCHAR(50)

  )";
  if ($conn->query($sql2) === TRUE) {
    echo "Table clubregistration created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}
$table3 = "select * from team_information";
$checktable3 = mysqli_query($conn, $table3);
if (!$checktable3) {
  $sql3 = "CREATE TABLE team_information(
    club_id INT(6) PRIMARY KEY,
    player_id INT(6),
    team_formation_date Date,
    eventid INTEGER(5),
    Team_leader_id INTEGER(6),
    Team_leader_name VARCHAR(30),
    Coach_id INTEGER(5),
    Coach_name VARCHAR(30),
    Club_player_id INTEGER(6),
    Club_player_name VARCHAR(30)
  )";
  if ($conn->query($sql3) === TRUE) {
    echo "Table team_information created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}
$table4 = "select * from Players_Performance";
$checktable4 = mysqli_query($conn, $table4);
if (!$checktable4) {
  $sql4 = "CREATE TABLE Players_Performance(
    matchid INTEGER(5) PRIMARY KEY,
    venueid INTEGER(5),
    matchdate date,
    teamname1 VARCHAR(30),
    totalwicket INTEGER(5),
    totalrun INTEGER(5),
    Outstanding VARCHAR(30),
    teamname2 VARCHAR(30),
    totalwicket2 INTEGER(5),
    totalrun2 INTEGER(5),
    Outstanding2 VARCHAR(30),
    eventid INTEGER(5),
    manofthematch VARCHAR(30),
    umpirename VARCHAR(30)
  )";
  if ($conn->query($sql4) === TRUE) {
    echo "Table Players_Performance created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}
?>