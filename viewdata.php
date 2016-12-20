
<?php
include ('connection.php');

$sql="select * from doctor_info";
$result=mysqli_query($con, $sql);



?>

<table class="table table-bordered" >

    <tr>
        <th>SL</th>
        <th>Doctor name</th>
        <th>Speciality</th>
        <th>Hospital</th>
        <th>Contact Number</th>
        <th>District</th>
        <th>P/S</th>
        <th>Type</th>
        <th>Profile</th>
        <th>Action</th>
    </tr>

    <?php
    $count=1;
    while ($row=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row['d_name'] ?></td>
            <td><?php echo $row['d_spciality']?></td>
            <td><?php echo $row['d_hospital']?></td>
            <td><?php echo $row['d_contact']?></td>
            <td><?php echo $row['d_district']?></td>
            <td><?php echo $row['d_ps']?></td>
            <td><?php echo $row['d_type']?></td>
            <td><a target="_blank" href="doctor-personal-info.php?id=<?php echo $row['id'] ?>"><button class="btn btn-warning">View Profile</button></a></td>
            <td style="text-align:center"> 
                <button class="btn btn-info" data-panel-id="<?= $row['id'] ?>" id="myBtn"  onclick="selectid(this)">Edit</button> &nbsp;&nbsp;|&nbsp;&nbsp; 
                <button class="btn btn-danger" data-panel-id="<?= $row['id'] ?>" id="myBtn2" onClick="deletedc(this)">Delete</button> 
            </td>

        </tr>
        <?php

        $count=$count+1;
    }


    ?>
</table>



