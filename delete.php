<?php
include("config.php");

$getid = $_GET['deleteid'];

$sel = "DELETE FROM records WHERE `enrollment_number` = '$getid'"; 
$qry = mysqli_query($conn, $sel);

?>