<?php
error_reporting(0);
include ('connection.php');
extract($_POST);
extract($_GET);
echo $id;

    $sql1="UPDATE `doctor_info` SET `d_name`='$dname', `d_spciality`='$spec', `d_degree`='$d_degree', `d_detail`='$d_detail', `d_hospital`='$hosp', 
    `d_chamber`='$d_chamber', `d_fees_np`='$d_fees_np', `d_fees_rp`='$d_fees_rp', `d_contact`='$cnum', `d_district`='$dst', `d_ps`='$ps', `d_type`='$type' WHERE `id`='$id'";
    $result1=mysqli_query($con, $sql1);

?>

<script>
    alert('Data Edited Successfully');
    window.location = "doctor-database.php";
</script>
