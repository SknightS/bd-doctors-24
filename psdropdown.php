<?php

include ('connection.php');
extract($_POST);
$sql="select * from pollice_station WHERE d_district ='$dst' ORDER BY d_ps";
$result=mysqli_query($con , $sql);
echo "<option value=\"\" selected disabled>Select P/S</option>";
while ($data_row=mysqli_fetch_array($result))
{
    echo "<option value='".$data_row['d_ps']."'>".$data_row['d_ps']."</option>";

}

?>


