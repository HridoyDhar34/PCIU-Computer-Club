<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "eventdata";

$con = new mysqli($sname, $unmae, $password, $db_name);

if (!$con) {
    echo "Connection failed!";
}

$Name=$_POST[ 'fullname'];
$number=$_POST[ 'number'];
$link=$_POST[ 'link'];

$qry = "INSERT INTO `data_table`(`Name`, `number`, `link`) VALUES ('$Name','$number','$link')" ;
$insert = mysqli_query($con, $qry);

if (!$insert) {
    echo "Data insertion failed!";
} else {
    // Redirect to the read data page
    header("Location: event.php");
    exit();
}

?>
