<?php

include ('connection.php');
error_reporting(0);
extract($_POST);
extract($_GET);


switch($_REQUEST['Submitinfo']) {

    case 'Submit Doctor':

        $fileName = $_FILES["d_image"]["name"];
        move_uploaded_file($_FILES["d_image"]["tmp_name"], "images/" . $fileName);

        $sql = "INSERT INTO `doctor_info`(`d_name`, `d_spciality`, `d_hospital`, `d_contact`, `d_district`, `d_ps`, `d_image`, `d_type`) VALUES ('$dname','$spec','$hosp','$cnum','$dst3','$ps','$fileName','')";

        if ($result = mysqli_query($con, $sql)) {

            ?>

            <script>
                alert('Data Inserted Successfully');
                window.location = "doctor-database.php";
            </script>

            <?php

        }
        break;

    case 'Submit Speciality':
        $foo = True;
        $sqlchck="SELECT * FROM `spec`";
        $resultchk=mysqli_query($con, $sqlchck);
        while ($rowchk=mysqli_fetch_array($resultchk)){

            $dataspc=$rowchk['spect'];
            if ($dataspc==$spec){
          $foo=False;
                ?>

                <script>
                    alert('This Data Already Exists');
                    window.location = "doctor-database.php";
                    //var modal3 = document.getElementById('myModal3');
                    //modal3.style.display = "block";
                </script>
                <?php

            }}

        if ($foo){
        $sql1 = " INSERT INTO `spec`(`spect`) VALUES ('$spec')";

        if ($result1 = mysqli_query($con, $sql1)) {

            ?>

            <script>
                alert('Data Inserted Successfully');
                window.location = "doctor-database.php";
            </script>
            <?php


        }}
        break;
		
		case 'Submit District':
        $foo = True;
        $sqlchck="SELECT * FROM `district`";
        $resultchk=mysqli_query($con, $sqlchck);
        while ($rowchk=mysqli_fetch_array($resultchk)){

            $dataspc=$rowchk['d_district'];
            if ($dataspc==$d_district){
          $foo=False;
                ?>

                <script>
                    alert('This Data Already Exists');
                    window.location = "doctor-database.php";
                    //var modal3 = document.getElementById('myModal3');
                    //modal3.style.display = "block";
                </script>
                <?php

            }}

        if ($foo){
        $sql1 = " INSERT INTO `district`(`d_district`) VALUES ('$dst')";

        if ($result1 = mysqli_query($con, $sql1)) {

            ?>

            <script>
                alert('Data Inserted Successfully');
                window.location = "doctor-database.php";
            </script>
            <?php


        }}
		break;
		
		case 'Submit P/S':
        $foo = True;
        $sqlchck="SELECT * FROM `pollice_station`";
        $resultchk=mysqli_query($con, $sqlchck);
        while ($rowchk=mysqli_fetch_array($resultchk)){

            $dataspc=$rowchk['d_ps'];
            if ($dataspc==$d_ps){
          $foo=False;
                ?>

                <script>
                    alert('This Data Already Exists');
                    window.location = "doctor-database.php";
                    //var modal3 = document.getElementById('myModal3');
                    //modal3.style.display = "block";
                </script>
                <?php

            }}

        if ($foo){
        $sql1 = "INSERT INTO `pollice_station`(`d_ps`, `d_district`) VALUES ('$ps', '$dst2')";

        if ($result1 = mysqli_query($con, $sql1)) {

            ?>

            <script>
                alert('Data Inserted Successfully');
                window.location = "doctor-database.php";
            </script>
            <?php


        }}
		break;


    case 'Submit Hospital':
        $foo = True;
        $sqlchck="SELECT * FROM `hospital`";
        $resultchk=mysqli_query($con, $sqlchck);
        while ($rowchk=mysqli_fetch_array($resultchk)){

            $dataspc=$rowchk['d_hospital'];
            if ($dataspc==$d_hospital){
                $foo=False;
                ?>

                <script>
                    alert('This Data Already Exists');
                    window.location = "doctor-database.php";
                    //var modal3 = document.getElementById('myModal3');
                    //modal3.style.display = "block";
                </script>
                <?php

            }}

        if ($foo){
            $sql1 = "INSERT INTO `hospital`(`d_hospital`, `d_district`, `d_ps`) VALUES ('$d_hospital', '$dst', '$ps')";

            if ($result1 = mysqli_query($con, $sql1)) {

                ?>

                <script>
                    alert('Data Inserted Successfully');
                    window.location = "doctor-database.php";
                </script>
                <?php


            }}
        break;
    }
?>