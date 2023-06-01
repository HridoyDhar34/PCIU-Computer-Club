<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "my_db";

$con = new mysqli($sname, $unmae, $password, $db_name);

if (!$con) {
    echo "Connection failed!";
}

$name = $_POST['name'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$contact = $_POST['contact'];
$nid = $_POST['nid'];
$blood = $_POST['blood'];
$date = $_POST['date'];
$id = $_POST['id'];
$batch = $_POST['batch'];
$email = $_POST['email'];

$qry = "INSERT INTO `collect_data`(`name`, `fathername`, `mothername`, `contact`, `nid`, `blood`, `date`, `id`, `batch`, `email`) 
        VALUES ('$name','$fathername','$mothername','$contact','$nid','$blood','$date','$id','$batch','$email')";

$insert = mysqli_query($con, $qry);

if (!$insert) {
    echo "Data insertion failed!";
} else {
    // Redirect to the read data page
    header("Location: member.php");
    exit();
}

?>
