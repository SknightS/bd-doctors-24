

<?php
include ('connection.php');
extract($_GET);
extract($_POST);


$sql= "DELETE FROM `doctor_for_appv`  WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);


if ($result){

    ?>
<script>
    window.location="doctor-approve.php"
</script>
    <?php
}