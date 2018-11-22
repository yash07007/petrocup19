<?php
session_start();
// REGISTER USER
// receive all input values from the form
// initializing variables
// $db = "";
$errors = array();

if (isset($_POST['submit'])) {
    // connect to the database
    // $db = mysqli_connect('localhost', 'flareslp_Encode', 'encode', 'flareslp_petro');
    $college = "";
    $r_name = "";
    $r_email = "";
    $r_phone = "";
    $f_name = "";
    $f_email = "";
    $f_phone = "";
    $accomodation = "";
    $events = array();
    $event_string = "";
    // $db = mysqli_connect('localhost', 'root', '', 'petroreg');
    $db = mysqli_connect('localhost', 'flareslp_Encode', 'encode', 'flareslp_petro');

    if (!$db) {
        die("Connection failed: " . $db->connect_error);
    }


    $college = mysqli_real_escape_string($db, $_POST['collegeName']);
    $r_name = mysqli_real_escape_string($db, $_POST['r-name']);
    $r_email = mysqli_real_escape_string($db, $_POST['r-email']);
    $r_phone = mysqli_real_escape_string($db, $_POST['r-phone']);
    $f_name = mysqli_real_escape_string($db, $_POST['f-name']);
    $f_email = mysqli_real_escape_string($db, $_POST['f-email']);
    $f_phone = mysqli_real_escape_string($db, $_POST['f-phone']);
    $events = $_POST['events'];
    $accomodation = mysqli_real_escape_string($db, $_POST['accomodation']);
    foreach ($events as $event) {
        $event_string = $event_string ." ". $event;
    }

    if($college == ""){
        array_push($errors, "College Name Cannot be Empty");
    } elseif($r_name == "" || $f_name == "") {
        array_push($errors, "Name Cannot Be Empty");
    } elseif($r_email == "" || $f_email == "") {
        array_push($errors, "Email Cannot Be Empty");
    } elseif($r_phone == "" || $f_phone == "") {
        array_push($errors, "Phone Cannot Be Empty");
    } elseif(!$events[0]) {
        array_push($errors, "Atleast Select One Event");
    }

    if(empty($errors)){
        $query = "INSERT INTO regdata (college, rname, rphone, remail, fname, fphone, femail, events, accomodation) VALUES('$college', '$r_name', '$r_phone', '$r_email', '$f_name', '$f_phone', '$f_email', '$event_string', '$accomodation')";
        $x = mysqli_query($db, $query);
        if (!$x) {
            echo "Error: " . $x . "<br>" . $query . "<br> aa" .mysqli_error($db);
        }
    }
}
?>
