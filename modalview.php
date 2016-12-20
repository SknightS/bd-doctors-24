<?php
include('connection.php');
    extract($_POST);
    extract($_GET);



    $sql="select * from doctor_info WHERE `id`='$id' ";
    $result=mysqli_query($con, $sql);
    while ($row=mysqli_fetch_array($result)) {

        ?>
        <form action="editpage.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
            Doctor Name: <input class="form-control" type="text" name="dname" value="<?php echo $row['d_name']?>"><br>
            Speciality: <select class="form-control" name="spec" >
                <option selected="selected" value="<?php echo $row['d_spciality']?>"><?php echo $row['d_spciality']?></option>
                <?php
                
                $sql2="select * from spec";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['spect']."'>".$data_row['spect']."</option>";
                }
                ?>
            </select><br>
            Hospital: <select class="form-control" name="hosp" >
                <option selected="selected" value="<?php echo $row['d_hospital']?>"><?php echo $row['d_hospital']?></option>
                <?php

                $sql2="select * from hospital";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['d_hospital']."'>".$data_row['d_hospital']."</option>";
                }
                ?>
            </select><br>
            Contact Number: <input class="form-control" type="text" name="cnum" value="<?php echo $row['d_contact']?>"><br>
            District: <select class="form-control"  name="dst" >
                <option selected="selected" value="<?php echo $row['d_district']?>"><?php echo $row['d_district']?></option>
                <?php
                
                $sql2="select * from district";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['d_district']."'>".$data_row['d_district']."</option>";
                }
                ?>
            </select><br>
            Pollice Station: <select class="form-control" name="ps" >
                <option selected="selected" value="<?php echo $row['d_ps']?>"><?php echo $row['d_ps']?></option>
                <?php
                
                $sql2="select * from pollice_station";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['d_ps']."'>".$data_row['d_ps']."</option>";
                }
                ?>
            </select><br>
            
            <?php if ($row['d_type'] == "Featured"){ ?>
			Type: <label class="checkbox-inline"><input type="checkbox" name="type" value="Featured" checked> &nbsp;Featured</label><br><br>
			<?php } else { ?>
            
            Type: <label class="checkbox-inline"><input type="checkbox"  name="type" value="Featured">Featured</label><br><br>
            
            <?php } ?>
            
            <input class="btn btn-default" type="submit" value="Submit">
        </form>
        <?php
    }

?>