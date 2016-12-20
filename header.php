			<?php 
				session_start();
				error_reporting(E_ALL^E_NOTICE); 		
			?>	
            
            <div class="header-top">
				<div class="container">
					<div class="row">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="" /></a>
						</div>
						<div class="header-top-right">
							<ul>
								<li>
									<img src="images/header-top-clock.png" alt="" />
									<div class="header-top-contact">
										<h4>Tusday-Monday : 9:00-6:00</h4>
										<h5>Wednesday-Closed</h5>
									</div>
								</li>
								<li>
									<img src="images/header-top-telephone.png" alt="" />
									<div class="header-top-contact">
										<h4>+8801 923 970 212</h4>
										<h5>LabArtisan@gmail.Com</h5>
									</div>
								</li>
								<li>
									<img src="images/header-top-location.png" alt="" />
									<div class="header-top-contact">
										<h4>Sute07 Sahara Center</h4>
										<h5>New Chokoya Road, USA</h5>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="mainmenu-area" id="sohag">
				<div class="container">
					<div class="row">
						<a href="index.php"><img src="images/logo-two-menu.png" alt="" /></a>
						<div class="nav-menu">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar-one bar-stick"></span>
								<span class="icon-bar-two bar-stick"></span>
								<span class="icon-bar-three bar-stick"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav" id="hmenu">
								<li class="dropdown active">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Menu</span></a>
								  <ul class="dropdown-menu">
									<li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>		
                                    <li><a href="find-doctor.php">Find Doctor</a></li>	
                                    <li><a href="health-blog.php">Health Blog</a></li>	
                                    <li><a href="contact.php">Contact</a></li>	
                                    <?php 
		
										if ($_SESSION['a_name']==NULL)
										{ ?> <li><a href="admin-login.php">Login</a></li> <?php	} ?>                                    						
								  </ul>	
								</li>	
                                
                                <?php if ($_SESSION['a_name']!=NULL) { ?>
                                
                                <li class="dropdown active">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul" aria-hidden="true"></i><span>
								  <?php echo "Hello ".$_SESSION['a_name'].""; ?>
                                  </span></a>
								  <ul class="dropdown-menu">
									<li><a href="doctor-database.php">Doctor Database</a></li>
                                    <li><a href="logout.php">Logout</a></li>								
								  </ul>                                		  		
								</li> <?php	} ?>						
							  </ul>
							</div><!-- /.navbar-collapse -->
						</nav>
						</div>
					</div>
				</div>
			</div>