<?php
include 'memberdata_collect';
if(isset($_GET['deleteid'])){
    $StudentID=$_GET['deleteid'];
    $sql="delete from 'memeberdata_collect' where id=$StudentID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:member.php');
    }else{
        die(mysqli_error($con));
    }
}