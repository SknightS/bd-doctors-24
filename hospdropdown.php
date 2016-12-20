<?php
include ('connection.php');
extract($_POST);

//
//if(isset($_POST['ps'])){
//
//
//    $sql="select * from hospital WHERE d_ps='$ps' ORDER BY d_hospital";
//    $result=mysqli_query($con , $sql);
//    echo "<option value=\"\" selected disabled>Select Hospital</option>";
//    while ($data_row=mysqli_fetch_array($result))
//    { echo "<option value='".$data_row['d_hospital']."'>".$data_row['d_hospital']."</option>";
//
//    }
//
//}else
$sql="select * from hospital WHERE 	d_district = '$dst2' ORDER BY d_hospital";
$result=mysqli_query($con , $sql);
echo "<option value=\"\" selected disabled>Select Hospital</option>";
while ($data_row=mysqli_fetch_array($result))
{ echo "<option value='".$data_row['d_hospital']."'>".$data_row['d_hospital']."</option>";

}

?>