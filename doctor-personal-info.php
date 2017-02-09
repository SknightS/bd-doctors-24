<?php

    error_reporting(0);
    include ('connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM doctor_info WHERE `id` = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $row['d_name'] ?> | BD DOCTORS 24</title>
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

		<!-- Single Team Member Details Section -->	
		<section class="section single-team-member-details-section">
			<div class="container">
				<div class="row">
					<div class="single-team-member-details">
						<div class="row">
							<div class="member-full-information">
								<div class="col-md-3 col-sm-12">
									<div class="member-full-pic row">
										<img width="250" src="images/<?php echo $row['d_image']?>" alt="" />
									</div>
								</div>
								<div class="col-md-9 col-sm-12">
									<div class="member-full-bio row">
										<div class="member-info">
											<h3><?php echo $row['d_name']?></h3><br>
											<h4><?php echo $row['d_spciality']?> Specialist</h4>
                                            <h4><?php echo $row['d_hospital']?></h4>
                                            <h4><?php echo $row['d_degree']?></h4>
										</div>

                                        <?php

                                        if ($row['d_type'] == "Featured"){ ?>

                                        <div class="contact-info">
                                            <ul>
                                                <?php

                                                if ($row['d_type'] == "Featured"){ ?>

                                                    <li><i style="color:red; font-size:20px" class="fa fa-star" aria-hidden="true"></i><span> Featured Doctor of the Month</span></li>

                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <br><br>

                                        <?php } ?>

                                        <p><?php echo $row['d_detail']?></p>

										<div class="clear-fix"></div><br>
										<div class="contact-info">
											<ul>
												<li><i class="fa fa-map-marker" aria-hidden="true"></i><span> <b>Chamber:</b><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['d_chamber']?>, <?php echo $row['d_ps']?>, <?php echo $row['d_district']?> </span></li>
												<li><i class="fa fa-phone" aria-hidden="true"></i><span><b>Contact:</b> <?php echo $row['d_contact']?></span></li>		
                                                <li><i class="fa fa-money" aria-hidden="true"></i>
<span> <b>Fees: </b><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Patient: <?php echo $row['d_fees_np']?> TK. <?php if ($row['d_fees_rp'] != "") { ?><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returning Patient: <?php echo $row['d_fees_rp']?> TK. <?php } ?> </span></li>									
											</ul>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Single Team Member Details Section -->
		
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