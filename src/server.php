<?php
session_start();

// initializing variables
$college = "";
$r_name = "";
$r_email = "";
$r_phone = "";
$f_name = "";
$f_email = "";
$f_phone = "";
$accomodation = "";
$errors = array();
$event_string = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'flareslp_petro');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $college = mysqli_real_escape_string($db, $_POST['collegeName']);
  $r_name = mysqli_real_escape_string($db, $_POST['r-name']);
  $r_email = mysqli_real_escape_string($db, $_POST['r-email']);
  $r_phone = mysqli_real_escape_string($db, $_POST['r-phone']);
  $f_name = mysqli_real_escape_string($db, $_POST['f-name']);
  $f_email = mysqli_real_escape_string($db, $_POST['f-email']);
  $f_phone = mysqli_real_escape_string($db, $_POST['f-phone']);
  $events = $_POST['events'];
  $accomodation = mysqli_real_escape_string($db, $_POST['accomodation']);


  echo $college,$r_name,$r_email,$r_phone,$f_name,$f_email,$f_phone,$accomodation;
  foreach ($events as $error){
    echo $event_string = $event_string ." ". $error;
    }
}

  	$query = "INSERT INTO regdata (college, rname, rphone, remail, fname, fphone, femail, events, accomodation)
  			  VALUES('$college', '$r_name', '$r_phone', '$r_email', '$f_name', '$f_phone', '$f_email', '$event_string', '$accomodation')";
  	mysqli_query($db, $query);

// DROP TABLE IF EXISTS `regdata`;
// CREATE TABLE IF NOT EXISTS `regdata` (
//   `college` varchar(100) NOT NULL,
//   `rname` varchar(100) NOT NULL,
//   `rphone` varchar(100) NOT NULL,
//   `remail` varchar(100) NOT NULL,
//   `fname` varchar(100) NOT NULL,
//   `fphone` varchar(100) NOT NULL,
//   `femail` varchar(100) NOT NULL,
//   `events` varchar(400) NOT NULL,
//   `accomodation` int(11) NOT NULL
// ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
?>
