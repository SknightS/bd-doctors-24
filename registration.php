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

<!--  Sent Feedback Section -->
<section class="section give-feedback-section">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h2 class="section-title">Registration</h2>
            </div>
        </div>
        <div class="row">
            <div class="sent-feedback-box">

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                        </div>
                        <div class="col-md-4 col-sm-12">
<!--                            <input type="text" name="a_username" placeholder="Username" class="input" required/>-->
<!--                            <input type="password" name="a_pass" placeholder="Password" class="input" required/>-->
                            <select class="form-control" id="dropdown" onchange="usertype()" name="type">
                                <option>selec a purpose</option>
                                <option value="normal_user">Normal User</option>
                                <option value="doctor">Doctor</option>
                            </select>


                        <div class="col-md-8 col-sm-12" id="normarlusr" style="display: none">
                            <form role="form" action="input.php" method="post" >

                                <div class="row">
                                <label>name: </label>
                                <input class="form-control" type="text" name="name">
                                </div>

                                    <div class="row">
                                    <label>Age: </label>
                                    <input class="form-control" type="text" name="age">
                                    </div>


                                <div class="row">
                                    <label>Email: </label>
                                    <input class="form-control" type="text" name="email">

                                </div>



                                <div class="row">
                                    <label>Phone Number: </label>
                                    <input class="form-control" type="text" name="pnumber">

                                </div>
                                <br>
                                <div class="row">
                                    <input class="btn btn-success" type="submit" name="Submitinfo" value="Register as User">

                                </div>

                            </form>

                        </div>

                            <div class="col-md-8 col-sm-12" id="doctor" style="display: none">

                                <form action="input.php" method="post" enctype="multipart/form-data">
                                    Doctor name: <input class="form-control" type="text" name="dname"><br>
                                    Speciality: <select class="form-control"  name="spec" >
                                        <option selected="selected" disabled>Select Speciality</option>
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
                                    Doctor Degree: <input class="form-control" type="text" name="d_degree"><br>
                                    Short Description: <input class="form-control" type="text" name="d_detail"><br>
                                    Hospital: <select class="form-control"  name="hosp" >
                                        <option selected="selected" disabled>Select Hospital</option>
                                        <?php
                                        $sql2="select * from hospital ORDER BY d_hospital";
                                        $result2=mysqli_query($con , $sql2);
                                        while ($data_row=mysqli_fetch_array($result2))
                                        {

                                            echo "<option value='".$data_row['d_hospital']."'>".$data_row['d_hospital']."</option>";
                                        }
                                        ?>
                                    </select><br>
                                    Chamber: <input class="form-control" type="text" name="d_chamber"><br>
                                    Fees (New): <input class="form-control" type="text" name="d_fees_np"> TK.<br>
                                    Fees (Return): <input class="form-control" type="text" name="d_fees_rp"> TK.<br>
                                    Contact Number: <input class="form-control" type="text" name="cnum"><br>
                                    District: <select class="form-control" name="dst3" id="dst3">
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
                                    Pollice Station: <select class="form-control"  name="ps"  id="ps">

                                        <option value="" selected disabled>Select P/S</option>


                                    </select><br>
                                    Image: <input class="form-control" type="file" name="d_image"><br>
<!--                                    Type: <label class="checkbox-inline"><input type="checkbox" value="Featured" name="d_type">Featured</label><br><br>-->

                                    <input class="btn btn-success" type="submit" name="Submitinfo" value="Register as Doctor">
                                </form>

                            </div>

                        </div>


                        <div class="col-md-4 col-sm-12">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!--  End Sent Feedback Section -->

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


    function usertype() {

        var x = document.getElementById("dropdown").value;
        //alert(x);

        switch (x) {

            case "normal_user":
                document.getElementById("normarlusr").style.display='block'
                document.getElementById("doctor").style.display='none'
                break;
            case "doctor":
                document.getElementById("normarlusr").style.display='none'
                document.getElementById("doctor").style.display='block'
                break;
        }


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


</script>

<script>

    $(function() {
        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        $(".nav li").each(function(){
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '' )
                $(this).addClass("active");
        })
    });

</script>