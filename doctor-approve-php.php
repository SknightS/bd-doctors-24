<?php
include ('connection.php');

extract($_POST);
extract($_GET);

//
//echo $id;
$sql ="select * from `doctor_for_appv` where id = '$id'";
$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($result)){

    $dname= $row['d_name'];
    $spec=  $row['d_spciality'];
    $d_degree= $row['d_degree'];
    $d_detail= $row['d_detail'];
    $hosp= $row['d_hospital'];
    $d_chamber=$row['d_chamber'];
    $d_fees_np= $row['d_fees_np'];
    $d_fees_rp= $row['d_fees_rp'];
    $cnum= $row['d_contact'];
   $dst3= $row['d_district'];
    $ps= $row['d_ps'];
    $fileName= $row['d_image'];

$sql1 = "INSERT INTO `doctor_info`(`d_name`, `d_spciality`, `d_degree`, `d_detail`, `d_hospital`, `d_chamber`, `d_fees_np`, `d_fees_rp`, `d_contact`, `d_district`, `d_ps`, `d_image`, `d_type`) VALUES ('$dname','$spec', '$d_degree', '$d_detail', '$hosp', '$d_chamber', '$d_fees_np', '$d_fees_rp', '$cnum','$dst3','$ps','$fileName','')";

$result1 = mysqli_query($con, $sql1);

$sql2="delete from doctor_for_appv WHERE  id = '$id'";
$result2=mysqli_query($con,$sql2);
}

?>
<script>
    window.location ="doctor-approve.php"
</script>
