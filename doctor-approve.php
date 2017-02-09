<!doctype html>
<html class="no-js" lang="en">
<?php include ('connection.php')?>
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
                <div class="col-md-12 ">
<?php
$sql="SELECT * FROM `doctor_for_appv`";
$result=mysqli_query($con,$sql);
?>

             <table class="table-responsive" border="1">

  <tr>
                 <th>SL</th>
                 <th>Doctor name</th>
                 <th>Speciality</th>
                 <th>Degree</th>
                 <th>Short Desc.</th>
                 <th>Hospital</th>
                 <th>Chamber</th>
                 <th>Fees (New)</th>
                 <th>Fees (Return)</th>
                 <th>Contact Number</th>
                 <th>District</th>
                 <th>P/S</th>
                 <th>Image</th>
                 <th>Action</th>


  </tr>
<?php $count=1; while ($row=mysqli_fetch_array($result)){?>
                 <tr>

                     <td><?php echo $count?></td>
                     <td><?php echo $row['d_name']?></td>
                     <td><?php echo $row['d_spciality']?></td>
                     <td><?php echo $row['d_degree']?></td>
                     <td><?php echo $row['d_detail']?></td>
                     <td><?php echo $row['d_hospital']?></td>
                     <td><?php echo $row['d_chamber']?></td>
                     <td><?php echo $row['d_fees_np']?></td>
                     <td><?php echo $row['d_fees_rp']?></td>
                     <td><?php echo $row['d_contact']?></td>
                     <td><?php echo $row['d_district']?></td>
                     <td><?php echo $row['d_ps']?></td>
                     <td><img class="img-responsive img-circle" style="border:3px solid #b3d4fc; " width="150" src="images/<?php echo $row['d_image']?>"></td>
                     <td> <a href="doctor-approve-php.php?id=<?php echo $row['id']?>"> <button>Approve</button> </a> &nbsp;&nbsp;<br><a href="doctor-reject-php.php?id=<?php echo $row['id']?>"> <button>Reject</button></a></td>







                 </tr>
<?php $count=$count+1; }?>
             </table>

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

