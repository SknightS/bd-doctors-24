<!doctype html>
<html class="no-js" lang="en">
<?php include ('connection.php');
extract($_GET);
extract($_POST);
?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>HEALTH BLOG | BD DOCTORS 24</title>
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
					<h2 class="breadcrumb-title">our Health Blog</h2>
					<ul class="breadcrumb-ul">
					  <li><a href="#">Home</a></li>
					  <li class="active-breadcrumb">Health Blog</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb Section -->	
		<!-- Home Blog Section -->
		<section class="section home-blog-section single-blog-page">
			<div class="container">
				<div class="row">
					<div class="row">

                        <?php
                        $sql="select * from blog WHERE category='$cg'";
                        $result=mysqli_query($con,$sql);
                        while ($row=mysqli_fetch_array($result)) {?>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single-blog-box">


                                    <div class="single-blog-box-img">
                                        <a href="blog-single-page.php?id=<?php echo $row['id']?>"><img src="images/home-blog-one.jpg" alt=""/></a>
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="blog-single-page.php?id=<?php echo $row['id']?>"><?php echo $row['b_title']?></a></h3>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><?php echo $row['date']?></span>
                                            <span><i class="fa fa-user" aria-hidden="true"></i><a
                                                        href="#"><?php echo $row['post_by']?></a></span>
                                        </div>
                                        <!--                                        <div class="post-excerpt">-->
                                        <!--                                            <p>--><?php //echo $row['m_content']?><!--</p>-->
                                        <!--                                        </div>-->
                                    </div>
                                    <div class="read-more-box">
                                        <a href="blog-single-page.php?id=<?php echo $row['id']?>" class="read-more">read more<i
                                                    class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        <div class="comment-count">
                                            <span class="comment-number">2</span>
                                            <span class="flaticon-interface"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
				<div class="row">
					<div class="pagination-div">
						<ul class="pagination">
							<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#" class="pagination-dot-dot">...</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>							
						</ul>
					</div>	
				</div>
				</div>
			</div>
		</section>
		<!-- End Home Blog Section -->
        
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