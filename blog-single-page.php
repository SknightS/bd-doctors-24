<!doctype html>
<html class="no-js" lang="en">
    <?php include ('connection.php');
    extract($_GET);
    extract($_POST);
    ?>

<!-- Mirrored from themes.codexcoder.com/theboss/blog_single_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2016 05:57:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>The Boss</title>
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
					<h2 class="breadcrumb-title">Blog Single Post</h2>
					<ul class="breadcrumb-ul">
					  <li><a href="#">Home</a></li>
					  <li class="active-breadcrumb">Blog</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb Section -->	
		<section class="section blog-page-two single-blog-page">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="blog-style-two">
							<div class="single-blog-box single-full-blog">
								<div class="single-blog-box-img">
									<img src="images/blog-page-two-1.jpg" alt="" />
								</div>
                                <?php $sql="SELECT * FROM `blog` WHERE `id` = '$id'";
                                        $result=mysqli_query($con,$sql);
                                while ($row=mysqli_fetch_array($result)){
                                ?>

								<div class="blog-content">
									<h3><?php echo $row['b_title']?></h3>
									<div class="post-meta">
										<span><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><a href="#"><?php echo $row['date']?></a></span>
										<span><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php echo $row['post_by']?></a></span>
									</div>
									<div class="post-content">
                                        <p><?php echo $row['m_content']?></p>

<!--											<img src="images/blog-single-small.jpg" alt="" />-->
									</div>
								</div>
                                <?php }?>
								<div class="tag-and-share-box">

									<div class="blog-share">
										<h4><i class="flaticon-share"></i>Share :</h4>
										<div class="social-icon">
											<ul id="social-style-two">
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

						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar row">
                            <div class="single-sidebar">
                                <h3>Archive</h3>
                                <ul class="siderbar-menu sidebar-category">

                                    <?php
                                    $sql3="SELECT DISTINCT(YEAR(STR_TO_DATE(`date`, \"%Y-%m-%d\"))) as yr from blog order by `date` DESC";
                                    $result3=mysqli_query($con,$sql3);
                                    while ($row3=mysqli_fetch_array($result3)) {
                                        ?>
                                        <li><a href="archive.php?yr=<?php echo $row3['yr']?>"><i class="fa fa-chevron-circle-right"
                                                                     aria-hidden="true"></i><span><?php echo $row3['yr']?></span></a></li>

                                        <?php
                                        }
                                    ?>

                                </ul>
                            </div>
                            <div class="single-sidebar">
								<h3>All Categories</h3>
								<ul class="siderbar-menu sidebar-category">
                                    <?php
                                    $sql1="SELECT blog.category, COUNT(blog.category) as count_cate FROM `blog` GROUP BY `category`";
                                    $result1=mysqli_query($con,$sql1);
                                    while ($row1=mysqli_fetch_array($result1)){
                                    ?>
									<li><a href="all_categories.php"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><span><?php echo $row1['category']?> </span><span class="category-post-count"><?php echo $row1['count_cate']?> </span></a></li>
									<?php
                                    }
                                    ?>
								</ul>
							</div>
							<div class="single-sidebar">
								<h3>Recent News</h3>
								<ul class="latest-news sidebar-latest-news">
									<li>
<!--										<span class="small-thumbnail">-->
<!--											<a href="#"><img src="images/footer-latest-news-one.jpg" alt="" /></a>-->
<!--										</span>-->
										<div class="content">
                                            <?php
                                            $sql2="SELECT * FROM `blog` ORDER BY id DESC LIMIT 5";
                                            $result2=mysqli_query($con,$sql2);
                                            while ($row2=mysqli_fetch_array($result2)) {
                                                ?>

                                                <a href="#" class="latest-news-title"><?php echo $row2['b_title'] ?></a><br>
                                                <span class="post-date"><a href="#"></a><?php echo $row2['date'] ?></span>

                                                <?php
                                            }
                                            ?>
										</div>
									</li>

								</ul>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter Section -->
		<section class="newletter-section">
			<div class="container">
				<div class="row">
					<div class="newsletter-section-box">
						<h2>Join Our Newsletter</h2>
						<div class="input-box">
							<form action="http://themes.codexcoder.com/theboss/email">
								<input type="email" name="email" placeholder="Enter your e-mail here" />
								<input type="submit" value="Subscrive Now" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Newsletter Section -->
		<!-- Footer section -->
		<footer class="footer-section">
			<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<div class="f-widget">
										<h2>About The Boss</h2>
										<div class="footer-content">
											<p>Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.</p>
										</div>
										<div class="contact-info">
											<ul>
												<li><i class="fa fa-home" aria-hidden="true"></i><span> New Chokoya Road, USA.</span></li>
												<li><i class="fa fa-phone" aria-hidden="true"></i><span> +8801 923 970 212</span></li>
												<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span> Contact@yourmail.com</span></li>
												<li><i class="fa fa-globe" aria-hidden="true"></i><span> www.codexcoder.com</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="f-widget">
										<h2>Latest News</h2>
										<ul class="latest-news">
											<li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-one.jpg" alt="" /></a>
												</span>
												<div class="content">
													<a href="#" class="latest-news-title">Corem ipsum dolor them amectetuer adipiscing...</a>
													<span class="post-date">04 February 2016</span>
												</div>
											</li>
											<li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-two.jpg" alt="" /></a>
												</span>
												<div class="content">
													<a href="#" class="latest-news-title">Mirum est notare quam littera gothica nunc...</a>
													<span class="post-date">04 February 2016</span>
												</div>
											</li>
											<li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-three.jpg" alt="" /></a>
												</span>
												<div class="content">
													<a href="#" class="latest-news-title">Duis autem vel eum iriure dolor in hendrerit...</a>
													<span class="post-date">04 February 2016</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="f-widget">
										<h2>Twitter Widget</h2>
										<ul class="twitter-widget">
											<li>
												<span class="twitter-icon"><i class="fa fa-twitter"></i></span>
												<div class="twitter-content">
													<p>Raritas etiam processus a theme dynamicus sequitur mutationem <a href="#">http://t.co/hVtABj5tZo</a></p>
													<span class="twitt-time">23 seconds ago</span>
												</div>
											</li>
											<li>
												<span class="twitter-icon"><i class="fa fa-twitter"></i></span>
												<div class="twitter-content">
													<p>Duis autem eum <a href="#">codexcoder.com</a> dolor hendrerit in vulputate velit</p>
													<span class="twitt-time">8 months ago</span>
												</div>
											</li>
											<li>
												<span class="twitter-icon"><i class="fa fa-twitter"></i></span>
												<div class="twitter-content">
													<p><a href="#">@bonndu007</a> am liber tempor cum soluta nobis eleifend</p>
													<span class="twitt-time">2 years ago</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="f-widget">
										<h2>Recent Photos</h2>
										<div class="footer-instagram">
										
											<a href="#"><img src="images/footer-intagram-one.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-two.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-three.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-four.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-five.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-six.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-seven.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-eight.jpg" alt="" /></a>
											<a href="#"><img src="images/footer-intagram-nine.jpg" alt="" /></a>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="copyright-text">
							<p>&copy; 2016. Designer By <a href="#">LabArtisan</a></p>
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
		</footer>
		<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>
		<!-- End Footer section -->		
        <script src="../../code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
		<!-- Bootstarp Min js file -->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- Paralux -->		
		<script src="assets/js/simpleparallax.js"></script>
		<!-- My Custom slider js -->
		<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
		<script type='text/javascript' src='assets/js/camera.min.js'></script> 
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

<!-- Mirrored from themes.codexcoder.com/theboss/blog_single_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2016 05:57:41 GMT -->
</html>