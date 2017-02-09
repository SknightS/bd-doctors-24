<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIND DOCTOR | BD DOCTORS 24</title>
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
		<!-- Breadcrumb Section -->
		<section class="breadcrumb-section section">
			<div class="container">
				<div class="breadcrumb-area">
					<h2 class="breadcrumb-title">find your doctor</h2>
					<ul class="breadcrumb-ul">
					  <li><a href="#">Home</a></li>
					  <li class="active-breadcrumb">find doctor</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb Section -->	
		
		<!--  Sent Feedback Section -->
		<section class="section give-feedback-section"  >
			<div class="container demo" >
				<div class="row">
					<div class="section-heading" >
						<h2 class="section-title">Fill The Form Bellow and Find Your Doctor</h2>
					</div>
				</div>
                
                <?php
					error_reporting(0);
					include('connection.php');
				?>
                
                <div class="row">
                	<div class="sent-feedback-box">
                
                        <form action="" method="post" class="form-horizontal">
                            
                              <div class="col-md-3 col-sm-6">
                                    <select class="form-control"  name="spec" >
                                    
                                    <option value="" selected disabled>Select Speciality</option>
                                
                                        <?php
                                        
                                            $sql="select * from spec ORDER BY spect";
                                            $result=mysqli_query($con , $sql);
                                            while ($data_row=mysqli_fetch_array($result))
                                            { echo "<option value='".$data_row['spect']."'>".$data_row['spect']."</option>"; }
                                            
                                        ?>
                                    </select>
                              </div>
                            
                            
                              <div class="col-md-3 col-sm-6">
                                  <select class="form-control"  name="dst" id="dst" >

                                      <option value="" selected disabled>Select District</option>

                                      <?php

                                      $sql="select * from district ORDER BY d_district";
                                      $result=mysqli_query($con , $sql);
                                      while ($data_row=mysqli_fetch_array($result))
                                      { echo "<option value='".$data_row['d_district']."'>".$data_row['d_district']."</option>"; }

                                      ?>
                                  </select>
                              </div>
                            
                            
                              <div class="col-md-3 col-sm-6">
                                  <select class="form-control"  name="ps"  id="ps">

                                      <option value="" selected disabled>Select P/S</option>


                                  </select>
                                
                              </div>
                            
                            
                              <div class="col-md-3 col-sm-6">
                                  <select class="form-control"  name="hosp" id="hosp" >

                                      <option value="" selected disabled>Select Hospital</option>

                                  </select>
                              </div>
                              <br><br><br>
                              <div class="col-md-12">
      								<input type="submit" name="search" value="Search" class="btn btn-lg btn-success">
    						  </div>                          
                        </form>
                	</div>
                </div>
                <br><br>
                
                <?php
					if (isset ($_POST['search'])) {
						?>
						<script>

                            window.scrollTo(0, 1000);

						</script>
						<?php
						
						$spec = $_POST['spec'];
                        $dst = $_POST['dst'];
                        $ps = $_POST['ps'];
                        $hosp = $_POST['hosp'];
						//$sql2="SELECT COUNT(*) as total FROM `doctor_info` WHERE `d_spciality` = '$spec'" ;
						//$result2=mysqli_query($con , $sql2);
					//	while($row2=mysqli_fetch_array($result2)){
							
					//		 $num=$row2['total'];
							
					//		 if($num==0){
					//			 echo "<p style=\"color:red;\">No Data Found</p>";
					//			 }else{

                        if ($spec != NULL && $dst != NULL && $ps != NULL && $hosp != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_district` = '$dst' AND `d_ps` = '$ps' AND `d_hospital` = '$hosp' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($spec != NULL && $dst != NULL && $ps != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_district` = '$dst' AND `d_ps` = '$ps' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($spec != NULL && $dst != NULL && $hosp != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_district` = '$dst' AND `d_hospital` = '$hosp' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($spec != NULL && $ps != NULL && $hosp != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_ps` = '$ps' AND `d_hospital` = '$hosp' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($dst != NULL && $ps != NULL && $hosp != NULL) {

                            echo "<p style=\"color:red;\">You Must have to Choose a Doctor Speciality</p>";
                        }

                        else if ($dst != NULL && $ps != NULL) {

                            echo "<p style=\"color:red;\">You Must have to Choose a Doctor Speciality</p>";
                        }

                        else if ($dst != NULL && $hosp != NULL) {

                            echo "<p style=\"color:red;\">You Must have to Choose a Doctor Speciality</p>";
                        }

                        else if ($ps != NULL && $hosp != NULL) {

                            echo "<p style=\"color:red;\">You Must have to Choose a Doctor Speciality</p>";
                        }

					    else if ($spec != NULL && $dst != NULL ) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_district` = '$dst' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
						}

						else if ($spec != NULL && $ps != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec'  AND `d_ps` = '$ps' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($spec != NULL && $hosp != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' AND `d_hospital` = '$hosp' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($spec != NULL ) {
                            $sql2="SELECT * FROM `doctor_info` WHERE `d_spciality` = '$spec' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                      }

						else if ($dst != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_district` = '$dst' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($ps != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_ps` = '$ps' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        else if ($hosp != NULL) {

                            $sql2="SELECT * FROM `doctor_info` WHERE `d_hospital` = '$hosp' ORDER BY d_type DESC" ;
                            $result2=mysqli_query($con, $sql2);
                            $result3=mysqli_query($con, $sql2);
                        }

                        $n=mysqli_fetch_array($result3);
                        if(sizeof($n)<1){
                            echo "<h4 style=\"color:red;\">No Data Found</h4>";
                        }
						
						else {
							
							while ($row=mysqli_fetch_array($result2)){


				?>
                            
                            <div class="row" style="border:1px solid #4d4d4d; <?php if ($row['d_type'] == 'Featured') { ?> background: #F7E7CE; <?php } ?> padding:0px 20px 0px 20px ;">
                            	<div class="col-md-1" style="height:180px; padding-left:0" ><br>
                                	<img class="img-responsive img-circle" style="border:3px solid #b3d4fc; " width="150" src="images/<?php echo $row['d_image']?>"><br>
                                    <?php if ($row['d_type'] == 'Featured') { ?>
                                        <p style="font-size: 11px; text-align: center">Top Doctor</p>
                                    <?php } ?>
                                </div>
                                
                                <div class="col-md-4" style="border-left:1px solid #4d4d4d; height:180px">
                                	<h2 style="font-size:23px; color:#6BAAF9; padding-top:20px" ><?php echo $row['d_name'] ?></h2><br>
                                    <p style="font-size:14px"><?php echo $row['d_degree'] ?></p>
                                    <p style="font-size:14px; padding-top:7px"><?php echo $row['d_hospital'] ?></p>
                                </div>
                                
                                <div class="col-md-5" style="border-left:1px solid #4d4d4d; padding-right:0; height:180px">
                                	<b><i style="padding-top:20px" class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Chamber</b>
                                	<p style="font-size:14px"><?php echo $row['d_chamber']?></p>
                                    <b><i style="padding-top:7px" class="fa fa-money" aria-hidden="true"></i> &nbsp;&nbsp;Fees</b>
                                    <p style="font-size:14px">New appointment: <?php echo $row['d_fees_np']?> TK.</p>
                                </div>
                                
                                <div class="col-md-1"><br><br><br>
                                	<a target="_blank" href="doctor-personal-info.php?id=<?php echo $row['id'] ?>"><button style="font-size:11px;" class="btn btn-success"><i class="fa fa-user-md" aria-hidden="true"></i> View Profile</button></a>
                                </div>
                            
                            
                            </div><br><br><?php
							
                            } } }
                            ?>
			</div>
		</section>		
		<!--  End Sent Feedback Section -->		
        
        <!-- Team Section -->
<!--		<section class="section .team-section-find-doc team-section-two">-->
<!--			<div class="container">-->
<!--				<div class="row">-->
<!--					<div class="section-heading">-->
<!--                        <h2 class="section-title"><spam style="color:red">Top 3</spam> Doctors of the Month!</h2>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--                --><?php
//
//                    $sql2="select * from doctor_info WHERE `d_type` = 'Featured' ORDER BY d_name DESC ";
//                    $result2=mysqli_query($con , $sql2);
//
//                ?>
<!---->
<!---->
<!--				<div class="row">-->
<!--					<div class="all-team-members row">-->
<!---->
<!--                        --><?php
//                            while ($data_row2=mysqli_fetch_array($result2)) {
//                        ?>
<!---->
<!--						<div class="col-md-4 col-sm-6 col-xs-12">-->
<!--							<div class="single-team-member">-->
<!--								<div class="member-image">-->
<!--									<img src="images/--><?php //echo $data_row2['d_image'] ?><!--" alt="" />-->
<!--									<div class="round-overlay">	</div>-->
<!--									<div class="member-social-link">-->
<!--										<a href="#" class="fa fa-facebook" aria-hidden="true"></a>-->
<!--										<a href="#" class="fa fa-twitter" aria-hidden="true"></a>-->
<!--										<a href="#" class="fa fa-google-plus" aria-hidden="true"></a>-->
<!--										<a href="#" class="fa fa-instagram" aria-hidden="true"></a>-->
<!--										<a href="#" class="fa fa-behance" aria-hidden="true"></a>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="plus-minus-icon">-->
<!--									<span class="plus-stick"></span>-->
<!--									<span class="minus-stick"></span>-->
<!--								</div>-->
<!--								<div class="member-info">-->
<!--									<h3><a target="_blank" href="doctor-personal-info.php?id=--><?php //echo $data_row2['id'] ?><!--">--><?php //echo $data_row2['d_name'] ?><!--</a></h3>-->
<!--									<h4>--><?php //echo $data_row2['d_spciality'] ?><!-- Specialist</h4>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div> --><?php //} ?>
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</section>-->
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

	$(document).ready(function(){


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





		$('#dst').change(function(){


			var dst2 = $(this).val();
			$.ajax({


				url:"hospdropdown.php",
				method:"POST",
				data:{dst2:dst2},
				dataType:"text",
				success:function(data2)
				{
					$('#hosp').html(data2);
				}


			});


		});


		$('#ps').change(function(){


			var ps = $(this).val();
			$.ajax({


				url:"hospdropdown2.php",
				method:"POST",
				data:{ps:ps},
				dataType:"text",
				success:function(data3)
				{
					$('#hosp').html(data3);
				}


			});


		});


		}
	);

</script>