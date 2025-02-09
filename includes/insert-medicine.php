<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db_connect.php');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$username = $_REQUEST['username'];
$medication_name = $mysqli->real_escape_string($_REQUEST['medication_name']);
$medication_dose = $mysqli->real_escape_string($_REQUEST['medication_dose']);
$medication_frequency = $mysqli->real_escape_string($_REQUEST['medication_frequency']);
$prescription_begin = $mysqli->real_escape_string($_REQUEST['prescription_begin']);
$prescription_end = $mysqli->real_escape_string($_REQUEST['prescription_end']);
$medication_link = $mysqli->real_escape_string($_REQUEST['medication_link']);
$medication_warnings = $mysqli->real_escape_string($_REQUEST['medication_warnings']);


// Attempt insert query execution
$sql = "INSERT INTO medicine (username, medication_name, medication_dose, medication_frequency, prescription_begin, prescription_end, medication_link, medication_warnings) VALUES ('$username', '$medication_name', '$medication_dose', '$medication_frequency', '$prescription_begin', '$prescription_end', '$medication_link', '$medication_warnings')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: ../medical/medicine.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>