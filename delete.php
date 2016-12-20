<?php
include ('connection.php');
extract($_POST);
$sql = "DELETE FROM `doctor_info` WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);
if ($result){
    echo 'Data Deleted';
}