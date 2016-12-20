<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DOCTOR DATABASE | BD DOCTORS 24</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">
		<!-- Bootstarp css  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Flaticon Css  -->
		<link rel="stylesheet" href="assets/font/flaticon.css">
		<!-- Font awesome Css  -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Slider css  -->
		<link rel="stylesheet" href="assets/css/camera.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- FancyBox Css  -->
		<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="assets/css/swiper.min.css" />
		<!-- nst Filtering css -->
		<link rel="stylesheet" href="assets/css/jquery.nstSlider.css" />
		<!-- Flex Slider css -->
		<link rel="stylesheet" href="assets/css/flexslider.css" />
		<!-- Main Css file -->
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!-- Header Section -->
		<!-- Preloader -->
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
				<div class="object" id="object_big"></div>
				</div>
			</div>
		</div>			
		<header>
			<?php include ('header.php'); ?>
		</header>
		<!-- End Header Section -->

		<!-- Team Section -->
		<section class="section team-section" style="background:#fff">
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title">Manage Doctor Database</h2>
					</div>
				</div>
				<div class="row">
					<div class="all-team-members row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div style="float:right">

                                <button class="btn btn-success"  id="myBtn"  onclick="selectid3(this)">Add Speciality</button>
                                <button class="btn btn-success"  id="myBtn"  onclick="selectid4(this)">Add District</button>
                                <button class="btn btn-success"  id="myBtn"  onclick="selectid5(this)">Add Pollice Station</button>
                                <button class="btn btn-success"  id="myBtn"  onclick="selectid6(this)">Add Hospital</button>
                                <button class="btn btn-success" id="myBtn"  onclick="selectid2(this)">Add Doctor</button><br><br>
							</div>

<div id="txtHint"></div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Edit Data</h2>
        <br>

        <form method="post" id="hiddenform" action=""  enctype="multipart/form-data">
            <input type="hidden" id="ex" name="ex">
        </form>

        <script>
            //document.getElementById("hiddenform").submit();
        </script>
        <div id="modalview"></div>

    </div>

</div>

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add Doctor</h2>

        <form action="input.php" method="post" enctype="multipart/form-data">
            Doctor name: <input class="form-control" type="text" name="dname"><br>
            Speciality: <select class="form-control"  name="spec" >
                <option selected="selected" >Select Speciality</option>
                <?php
                include ('connection.php');
                $sql2="select * from spec ORDER BY spect";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['spect']."'>".$data_row['spect']."</option>";
                }
                ?>
            </select><br>
            Hospital: <input class="form-control" type="text" name="hosp"><br>
            Contact Number: <input class="form-control" type="text" name="cnum"><br>
            District: <select class="form-control" name="dst3" id="dst3">
                <option selected="selected" >Select District</option>
                <?php
                $sql3="select * from district ORDER BY d_district";
                $result3=mysqli_query($con , $sql3);
                while ($data_row=mysqli_fetch_array($result3))
                {

                    echo "<option value='".$data_row['d_district']."'>".$data_row['d_district']."</option>";
                }
                ?>
            </select><br>
            Pollice Station: <select class="form-control"  name="ps"  id="ps">

                <option value="" selected disabled>Select P/S</option>


            </select><br>
            Image: <input class="form-control" type="file" name="d_image"><br>
            Type: <label class="checkbox-inline"><input type="checkbox" value="Featured" name="type">Featured</label><br><br>

            <input class="btn btn-default" type="submit" name="Submitinfo" value="Submit Doctor">
        </form>

    </div>

</div>



<div id="myModal3" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add Speciality</h2><br>

        <form action="input.php" method="post" enctype="multipart/form-data">

            Speciality: <input class="form-control" type="text" name="spec"><br>

            <input class="btn btn-default" type="submit" name="Submitinfo" value="Submit Speciality">
        </form>

    </div>

</div>

<div id="myModal4" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add District</h2><br>

        <form action="input.php" method="post" enctype="multipart/form-data">
            District: <input class="form-control" type="text" name="dst"><br>

            <input class="btn btn-default" type="submit" name="Submitinfo" value="Submit District">
        </form>

    </div>

</div>

<div id="myModal5" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add Pollice Station</h2><br>

        <form action="input.php" method="post" enctype="multipart/form-data">
            Pollice Station: <input class="form-control" type="text" name="ps"><br>

            District: <select class="form-control" name="dst2">
                <option selected="selected" disabled>Select District</option>
                <?php
                $sql3="select * from district ORDER BY d_district";
                $result3=mysqli_query($con , $sql3);
                while ($data_row=mysqli_fetch_array($result3))
                {

                    echo "<option value='".$data_row['d_district']."'>".$data_row['d_district']."</option>";
                }
                ?>
            </select><br>

            <input class="btn btn-default" type="submit" name="Submitinfo" value="Submit P/S">
        </form>

    </div>

</div>

 <div id="myModal6" class="modal">

     <!-- Modal content -->
     <div class="modal-content">
         <span class="close">×</span>

         <h2>Add Hospital</h2><br>

         <form action="input.php" method="post" enctype="multipart/form-data">
             Hospital: <input class="form-control" type="text" name="d_hospital"><br>

             District: <select class="form-control"  name="dst" id="dst">
                 <option selected="selected" disabled>Select District</option>
                 <?php
                 $sql3="select * from district ORDER BY d_district";
                 $result3=mysqli_query($con , $sql3);
                 while ($data_row=mysqli_fetch_array($result3))
                 {

                     echo "<option value='".$data_row['d_district']."'>".$data_row['d_district']."</option>";
                 }
                 ?>
             </select><br>

             Police Station: <select class="form-control"  name="ps"  id="ps">

                 <option value="" selected disabled>Select P/S</option>


             </select><br>

             <input class="btn btn-default" type="submit" name="Submitinfo" value="Submit Hospital">
         </form>



     </div>

</div>


         <script>



            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }


            xmlhttp.open("GET","viewdata.php");
            xmlhttp.send();




</script>

<script>
    var btn;
    // Get the modal
    var modal = document.getElementById('myModal');


    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    function selectid(x) {
        //alert('hello dolly');
        btn = $(x).data('panel-id');
        //alert(btn);
        modal.style.display = "block";



        var elem = document.getElementById("ex"); // Get text field
        elem.value = btn;



        viewdata(btn);


    }

    function viewdata(str) {

      //  document.getElementById("submitform").style.visibility = "visible";
        if (str == "") {
            document.getElementById("modalview").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("modalview").innerHTML = xmlhttp.responseText;
                }
            }

            //alert(str);

            xmlhttp.open("GET","modalview.php?id="+str);
            xmlhttp.send();


        }
    }


    var modal2 = document.getElementById('myModal2');

    var span2 = document.getElementsByClassName("close")[1];

    function selectid2(x) {

        modal2.style.display = "block";

        $('#dst3').change(function(){
            var dst = $(this).val();
            $.ajax({

                url:"psdropdown.php",
                method:"POST",
                data:{dst:dst},
                dataType:"text",
                success:function(data)
                {
                    $('#ps').html(data);
                }


            });


        });

    }


    var modal3 = document.getElementById('myModal3');

    var span3 = document.getElementsByClassName("close")[2];

    function selectid3(x) {

        modal3.style.display = "block";

    }
	
	var modal4 = document.getElementById('myModal4');

    var span4 = document.getElementsByClassName("close")[3];

    function selectid4(x) {

        modal4.style.display = "block";

    }
	
	var modal5 = document.getElementById('myModal5');

    var span5 = document.getElementsByClassName("close")[4];

    function selectid5(x) {

        modal5.style.display = "block";

    }

    var modal6 = document.getElementById('myModal6');

    var span6 = document.getElementsByClassName("close")[5];

    function selectid6(x) {

        modal6.style.display = "block";


        $('#dst').change(function(){
            var dst = $(this).val();
            $.ajax({

                url:"psdropdown.php",
                method:"POST",
                data:{dst:dst},
                dataType:"text",
                success:function(data)
                {
                    $('#ps').html(data);
                }


            });


        });


    }


    span.onclick = function() {
        modal.style.display = "none";
    }

  
 /*   window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }*/

    span2.onclick = function() {
        modal2.style.display = "none";
    }  

    span3.onclick = function() {
        modal3.style.display = "none";
    }
	
	span4.onclick = function() {
        modal4.style.display = "none";
    }
	
	span5.onclick = function() {
        modal5.style.display = "none";
    }

    span6.onclick = function() {
        modal6.style.display = "none";
    }

    function deletedc(x1) {

        if(confirm("Are you sure you want to delete this?"))
        {
            btn2 = $(x1).data('panel-id');

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{id:btn2},
                dataType:"text",
                success:function(data){
                    alert(data);
                   window.location="doctor-database.php"
                }
            });


        }
    }

</script>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Section -->		

		<!-- Footer section -->	
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="copyright-text">
							<p>&copy; 2016 | All Rights Reserved | <a href="index.html">BD Doctors 24</a> | Website Designed & Developed By <a target="_blank" href="http://shamsersindex.com/">Shamser Suzon</a></p>
						</div>
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>		
		<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>
		<!-- End Footer section -->		
        <script src="../../code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
		<!-- Bootstarp Min js file -->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- Paralux -->		
		<script src="assets/js/simpleparallax.js"></script>
		<!-- Counter Up js -->
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/jquery.countup.js"></script>
		<!-- FancyBox Js -->		
        <script src="assets/js/jquery.fancybox.js"></script>
		<!-- swiper -->		
        <script src="assets/js/swiper.min.js"></script>
		<!--for skill chat jquary-->
		<script src="assets/js/jquery.easypiechart.js"></script>
		<!-- google map js -->		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="assets/js/gmap3.min.js"></script>
		<!-- Flex Slider js -->
		<script src="assets/js/jquery.flexslider.js"></script>
		<!-- Filtering js -->
		<script src="assets/js/jquery.nstSlider.min.js"></script>
		<!-- All Plugin Active code Here -->
        <script src="assets/js/plugins.js"></script>		
		<!-- Main js code here -->		
        <script src="assets/js/main.js"></script>
    </body>

</html>

<script>

	$(function() {
		var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
		$(".nav li").each(function(){
			if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '' )
				$(this).addClass("active");
		})
	});

</script>

