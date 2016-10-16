<?php
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("IEEE",$conn);
			if(isset($_REQUEST['submit1']))
				{
					$ins="insert into contact values('".NULL."','".$_REQUEST['aname']."','".$_REQUEST['emaill']."','".$_REQUEST['subject']."','".$_REQUEST['txtmessage']."')";
					
					mysql_query($ins);	
					mail("samarthsharma351@gmail.com",$_REQUEST['subject'],$_REQUEST['txtmessage'],$_REQUEST['emaill']);
					header("location:index.php");
				}
/*mail(to,subject,message,headers,parameters);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="IEEE Student Branch Manipal">
<meta name="keywords" content="Website">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>IEEE | S.B.M.</title>

<!-- =========================
    FAV AND TOUCH ICONS (RETINA)
============================== -->
<link rel="icon" href="images\favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images\apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images\apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-icon-152x152.png">
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">

<!-- =========================
     STYLESHEETS
============================== -->
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css\bootstrap.min.css">

<!-- FONT ICONS -->
<link rel="stylesheet" href="assets\elegant-icons\style.css">
<link rel="stylesheet" href="assets\et-line-font\style.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- <link rel="stylesheet" href="assets/app-icons/styles.css"> -->
<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

<!-- GOOGLE FONTS -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:400,700' rel='stylesheet' type='text/css'>


<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css\owl.theme.css">
<link rel="stylesheet" href="css\owl.carousel.css">


<!-- YTPlayer -->
<link rel="stylesheet" href="css\YTPlayer.css">

<!-- ANIMATIONS -->
<link rel="stylesheet" href="css\animate.min.css">

<!-- MAIN STYLESHEETS -->
<link rel="stylesheet" href="css\styles.css">

<!-- COLORS -->
<link rel="stylesheet" href="css\color-schemes\dark-blue.css">

<!-- RESPONSIVE FIXES -->
<!-- <link rel="stylesheet" href="css/responsive.css"> -->


<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!-- =========================
     PRE LOADER
============================== -->
<div class="preloader">
  <div id="ip-container" class="ip-container">
	<div class="ip-header">
		<div class="ip-loader">
			<svg class="ip-inner" width="60px" height="60px" viewbox="0 0 80 80">
				<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
				<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
			</svg>
		</div>
	</div>
</div>
</div>

<!-- =========================
     HEADER
============================== -->


<header class="header" id="home">
<!-- HEADER COLOR OVER IMAGE -->

<!-- STICKY NAVIGATION -->
<div class="navbar bs-docs-nav navbar-fixed-top sticky-navigation">
	<div class="container">
		<div class="navbar-header">

			<!-- LOGO ON STICKY NAV BAR -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="#">
                <!--img src="images/apple-touch-icon.png"-->
                <div class="logo-title">IEEE | Student Branch Manipal</div>
            </a>

		</div>

		<!-- NAVIGATION LINKS -->
		<div class="navbar-collapse collapse" id="navigation">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home">home</a></li>
				<li><a href="#about">about</a></li>
				<li><a href="#team">team</a></li>
				<li><a href="#blog">articles</a></li>
				<li><a href="#contact">contact</a></li>
				<li><a href="register.php">Registeration</a></li>
			</ul>
		</div> <!--END NAVIGATION LINKS -->
	</div> <!-- /END CONTAINER -->
</div> <!-- /END STICKY NAVIGATION -->


 <!-- SLIDER SECTION START -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div id="particles-js" class="particles-js"> </div>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active"> <!-- Slider Item -->
      <img src="images/background/particle-bg2.png" alt="background-image">
      <div class="carousel-color-overlay">
      <div class="carousel-caption">
    	<div class="intro-section">
	    	<h1 class="intro hs3-h1 text-white-6">THINK<br></h1>
	    	<h5 class="sub-intro text-white">Tomorrow is ours to win or lose.<br></h5>
	    	<a href="#about" class="btn btn-home hvr-bounce-to-right-white">Dive into the world of Science </a>
    	</div>

      </div>
      </div>
    </div>
      
      <div class="item"> <!-- Slider Item -->
      <img src="images/slider/bg-6.jpg" alt="background-image">
      <div class="carousel-color-overlay">
      <div class="carousel-caption">
        <div class="intro-section">
	    	<h1 class="intro hs1-h1 text-white-6">CREATIVITY<br></h1>
	    	<h5 class="sub-intro text-white">The world is but a canvas to our imagination<br></h5>
	    	<a href="#about" class="btn btn-home hvr-bounce-to-right-white">Dive into the world of Science </a>
    	</div>
      </div>
     </div>
   </div> <!-- End Slider item -->

    <div class="item"> <!-- Slider Item -->
      <img src="images/slider/bg-5.jpg" alt="background-image">
      <div class="carousel-color-overlay">
      <div class="carousel-caption">
        <div class="intro-section">
	    	<h1 class="intro hs1-h1 text-white-6">IEEE<br></h1>
	    	<h5 class="sub-intro text-white">Where science meets creativity<br></h5>
        <h6 class="sub-intro text-white">Come join us. Be the change.<br></h6>
	    	<a href="#about" class="btn btn-home hvr-bounce-to-right-white">Dive into the world of Science </a>
    	</div>
      </div>
     </div>
   </div> <!-- End Slider item -->

  </div> <!-- End Carousel Inner -->

</div>  <!-- End carousel -->

<!-- Scroll Down Indicator -->
<span class="scroll-btn"><a href="#about"><span class="mouse"><span><i class="arrow_carrot-down"></i></span></span></a></span>

</header>
<!-- /END HEADER -->




<!-- =========================
     ABOUT US & SKILLS
============================== -->

<section class="section-top about" id="about">
      <div class="container">
        <div class="row">

         <!-- ABOUT SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

		<!-- ABOUT SECTION TITLE -->
		<h2 class="section-title">About IEEE</h2>
		<!-- COLOR LINE -->
		<div class="colored-line">
		</div>
          <!-- ABOUT SECTION DESCRIPTION -->
		<div class="section-description">
			<h4>Student Branch Manipal</h4>
		</div>

		<div class="colored-line">
		</div>

	</div>
	<!-- /END  ABOUT SECTION HEADER -->

        <!-- ABOUT SECTION BIO -->
          <div class="about-us">
          <div>

               <p>IEEE is the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity. IEEE and its members inspire a global community to innovate for a better tomorrow through its highly cited publications, conferences, technology standards, and professional and educational activities. IEEE is the trusted “voice” for engineering, computing, and technology information around the globe.

There are more than 420,000 IEEE members in over 160 countries. IEEE publishes a third of the world’s technical literature in electrical engineering, computer science, and electronics and is a leading developer of international standards that underpin many of today's telecommunications, information technology, and power-generation products and services. </p><br><br>

<h3 class="about-subtitle">History Of IEEE</h3>
<br>

<p>IEEE, an association dedicated to advancing innovation and technological excellence for the benefit of humanity, is the world’s largest technical professional society. It is designed to serve professionals involved in all aspects of the electrical, electronic, and computing fields and related areas of science and technology that underlie modern civilization.
IEEE’s roots go back to 1884 when electricity began to become a major influence in society. There was one major established electrical industry, the telegraph, which since the 1840s had come to connect the world with a data communications system faster than the speed of transportation. The telephone and electric power and light industries had just gotten underway. </p>

<h3 class="about-subtitle">Meaning Of IEEE</h3>
<br>

<p>IEEE, pronounced "Eye-triple-E," stands for the Institute of Electrical and Electronics Engineers. The association is chartered under this name and it is the full legal name.
However, as the world's largest technical professional association, IEEE's membership has long been composed of engineers, scientists, and allied professionals. These include computer scientists, software developers, information technology professionals, physicists, medical doctors, and many others in addition to IEEE's electrical and electronics engineering core. For this reason the organization no longer goes by the full name, except on legal business documents, and is referred to simply as IEEE. </p>

<h3 class="about-subtitle">Growth And Globalization</h3>
<br>

<p>Through the help of leadership from the two societies, and with the applications of its members' innovations to industry, electricity wove its way more deeply into every corner of life, through television, radar, transistors, and computers. Increasingly, the interests of the societies overlapped.
Membership in both societies grew, but beginning in the 1940s, the IRE grew faster and in 1957 became the larger group. On 1 January 1963, the AIEE and the IRE merged to form the Institute of Electrical and Electronics Engineers, or IEEE. At its formation, IEEE had 150,000 members, 140,000 of whom resided in the United States. Over the decades that followed, the social roles of the technologies under IEEE’s aegis continued to spread across the world and reach into more and more areas of people's lives. The professional groups and technical boards of the predecessor institutions evolved into IEEE Societies. By the early 21st century, IEEE served its members and their interests with 39 Societies; 130 journals, transactions, and magazines; more than 300 conferences annually; and 900 active standards.
Since that time, computers evolved from massive mainframes to desktop appliances to portable devices, linked to global networks connected by copper wire, microwaves, satellites, or fiber optics. IEEE’s fields of interest expanded well beyond electrical and electronics engineering and computing into areas such as micro- and nanotechnologies, ultrasonics, bioengineering, robotics, electronic materials, and many others. Electronics became ubiquitous, integrated in everything from jet cockpits to industrial robots to medical imaging.
As technologies and the industries that developed them increasingly transcended national boundaries, IEEE has kept pace. It is now a global institution that uses the innovations of the practitioners it represents to enhance IEEE’s excellence in delivering products and services to members, industries, and the public at large. Publications and educational programs are delivered online, as are member services such as renewal and elections. By 2010, IEEE comprised over 395,000 members in 160 countries. Through its global network of geographical units, publications, web services, and conferences, IEEE remains the world's largest technical professional association. </p>

<h3 class="about-subtitle">Mission And Vision Of IEEE</h3>
<br>

<p>IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity. IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions. The IEEE Strategic Plan is a vital part of the ongoing evolution of IEEE. The Plan provides a clear picture of IEEE as an organization, the goals our community is pursuing, and the initiatives that will move IEEE forward in the coming years. </p>

         </div>

         </div><!-- ABOUT SECTION END -->

        </div>
            <!-- END ROW -->
      </div> <!-- END CONTAINER -->

</section>
           <!-- ABOUT US &  SKILL SECTION END -->



<!-- =========================
     INSPIRATION
============================== -->
<section class="section-top testimonial">

	<div class="container">
		<div class="row">


	<!-- TESTIMONIAL SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

		<!--TESTIMONIAL SECTION TITLE -->
		<h2 class="section-title">Let's Get Inspired</h2>

		<div class="colored-line">
		</div>

	</div>


<div class="testimonials">

<div class="color-overlay">

	<div class="container wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

		<!-- FEEDBACKS  STARTS-->
		<div id="feedbacks" class="owl-carousel owl-theme">

			<!-- SINGLE FEEDBACK -->
			<div class="feedback">


				<div class="message">
					  Progress is made by trial and failure; the failures are generally a hundred times more numerous than the successes, yet they are usually left unchronicled.
          </div>

				<div class="white-line">
				</div>

				<!-- INFORMATION -->
				<div class="name">
					William Ramsay
				</div>
				<div class="company-info">
					Chemist
				</div>

			</div>
			<!-- /END SINGLE FEEDBACK -->

			<!-- SINGLE FEEDBACK -->
			<div class="feedback">



				<div class="message">
					Scientists study the world as it is, Engineers create the world that has never been.
				</div>

				<div class="white-line">
				</div>

				<!-- INFORMATION -->
				<div class="name">
					Theodore von Karman
				</div>
				<div class="company-info">
					Aerospace Engineer
				</div>

			</div>
			<!-- /END SINGLE FEEDBACK -->

			<!-- SINGLE FEEDBACK -->
			<div class="feedback">


				<!-- MESSAGE -->
				<div class="message">
					 Science is vastly more stimulating to the imagination than the classics.
				</div>

				<div class="white-line">
				</div>

				<!-- INFORMATION -->
				<div class="name">
					J. B. S. Haldane
				</div>
				<div class="company-info">
					Biologist
				</div>

			</div>
			<!-- /END SINGLE FEEDBACK -->

      <!-- SINGLE FEEDBACK -->
			<div class="feedback">


				<!-- MESSAGE -->
				<div class="message">
					 It is the tension between creativity and skepticism that has produced the stunning and unexpected findings of science.
				</div>

				<div class="white-line">
				</div>

				<!-- INFORMATION -->
				<div class="name">
					Carl Sagan
				</div>
				<div class="company-info">
					Astronomer
				</div>

			</div>
			<!-- /END SINGLE FEEDBACK -->

      <!-- SINGLE FEEDBACK -->
      <div class="feedback">


        <!-- MESSAGE -->
        <div class="message">
           An essential aspect of creativity is not being afraid to fail.
        </div>

        <div class="white-line">
        </div>

        <!-- INFORMATION -->
        <div class="name">
          Dr. Edwin Land
        </div>
        <div class="company-info">
          Scientist
        </div>

      </div>
      <!-- /END SINGLE FEEDBACK -->

		</div>
		<!-- /END FEEDBACKS -->

	</div>
	<!-- /END CONTAINER -->

</div>
<!-- /END COLOR OVERLAY -->
</div>
</div> <!-- END ROW -->
</div> <!-- END CONTAINER -->
</section>
<!-- /END TESTIMONIALS SECTION -->



 <!-- =========================
     TEAM
============================== -->

   <section id="team" class="section-top team">

        <div class="container">

		        	<!--TEAM SECTION HEADER -->
			<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

				<!-- TEAM SECTION TITLE -->
				<h2 class="section-title">IEEE SBM Memebers</h2>
				<div class="colored-line">
				</div>
				  <!-- TEAM SECTION DESCRIPTION -->
				<div class="section-description">
					 <h4>We work with Creativity, Aesthetics and Technology</h4>
				</div>
				    <!-- COLORED LINE -->
				<div class="colored-line">
				</div>
			</div>
			<!-- /END SECTION HEADER -->

             <div id="team-carousel">
                         <!-- TEAM MATE-1 -->

                            <div class="team-member wow fadeInLeft">
                                <div class="team-img">
                                    <img src="images\team\t-1.jfif" alt="">

                                </div>

                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                    	<h3>Batman</h3>
                                        <h4>coder cook</h4>
                                        <p>passionate to turn coffe into code</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                        <!-- TEAM MATE-2 -->

                            <div class="team-member wow fadeInUp">
                                <div class="team-img">
                                    <img src="images\team\t-2.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Wonder Woman</h3>
                                        <h4>UI/UX Designer</h4>
                                        <p>create beauty with creativity and aesthetics</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                        <!-- TEAM MATE-3 -->

                            <div class="team-member wow fadeInRight">
                                <div class="team-img">
                                    <img src="images\team\t-3.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Superman</h3>
                                        <h4>tech guy</h4>
                                        <p>eat,sleep,drink with technology</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                         <!-- TEAM MATE-4 -->

                            <div class="team-member wow fadeInRight">
                                <div class="team-img">
                                    <img src="images\team\t-4.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Black Canary</h3>
                                        <h4>marketing guru</h4>
                                        <p>branding and marketing are tools of his game</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        
                 <!-- TEAM MATE-1 -->

                            <div class="team-member wow fadeInLeft">
                                <div class="team-img">
                                    <img src="images\team\t-1.jfif" alt="">

                                </div>

                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                    	<h3>Batman</h3>
                                        <h4>coder cook</h4>
                                        <p>passionate to turn coffe into code</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                        <!-- TEAM MATE-2 -->

                            <div class="team-member wow fadeInUp">
                                <div class="team-img">
                                    <img src="images\team\t-2.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Wonder Woman</h3>
                                        <h4>UI/UX Designer</h4>
                                        <p>create beauty with creativity and aesthetics</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                        <!-- TEAM MATE-3 -->

                            <div class="team-member wow fadeInRight">
                                <div class="team-img">
                                    <img src="images\team\t-3.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Superman</h3>
                                        <h4>tech guy</h4>
                                        <p>eat,sleep,drink with technology</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


                         <!-- TEAM MATE-4 -->

                            <div class="team-member wow fadeInRight">
                                <div class="team-img">
                                    <img src="images\team\t-4.jfif" alt="">

                                </div>
                                <div class="component-hover" onclick="">
                                    <div class="desk">
                                        <h3>Black Canary</h3>
                                        <h4>marketing guru</h4>
                                        <p>branding and marketing are tools of his game</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="social_facebook_circle"></i></a>
                                        <a href="#"><i class="social_twitter_circle"></i></a>
                                        <a href="#"><i class="social_googleplus_circle"></i></a>
                                        <a href="#"><i class="social_linkedin_circle"></i></a>
                                    </div>
                                </div>
                            </div>


            </div> <!-- TEAM MATES CAROUSEL END -->

        </div> <!-- END CONTAINER -->

  </section>




<!-- =========================
   BLOG
============================== -->

<section class="section-top" id="blog">
 <div class="container">


	<!-- BLOG SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

		<!-- BLOG SECTION TITLE -->
		<h2 class="section-title">Articles</h2>

		<div class="colored-line">
		</div>

		</div>
		  </div>   <!-- END CONTAINER -->

        <!-- BLOG START -->
  <div class="blog">

   <div class="container">
    <div class="row">
    	<!-- SINGLE BLOG START -->
      <div class="col-md-4">
              <!-- BLOG IMAGE WITH HOVER EFFECT -->
      	   <div class="figure">
                <div class="post-thumbnail">
                  <a href="#"><img src="images\post\p1.jfif" alt=""></a>
                </div>

              </div>

                <!--BLOG POST START -->
       <div class="blog-post">
           <h4 class="blog-title">
              <a href="single-blog-02.htm">Lorem Ipsum</a>
              </h4>
            <div class="date">
             <a href="#" class="author">Clark Kent</a>| December 05 2015
             </div>
               <p>
                  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                </p>
                <a href="#" class="read-more">Read More &#8594;</a>

              </div><!-- BLOG POST ENDS -->
      </div><!-- SINGLE BLOG ENDS-->


      <div class="col-md-4"><!-- SINGLE BLOG START-->

                <!-- BLOG IMAGE WITH HOVER EFFECT -->
                <div class="figure">
                <div class="post-thumbnail">
                  <a href="#"><img src="images\post\p2.jfif" alt=""></a>
                </div>
              </div>

              <!--BLOG POST START -->
		       <div class="blog-post">
		           <h4 class="blog-title">
		              <a href="single-blog-05.htm">Lorem Ipsum</a>
		              </h4>
		          <div class="date">
		            <a href="#" class="author">Bruce Wayne.</a> | December 05, 2015
		          </div>
		               <p>
		                  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
		                </p>
		                <a href="#" class="read-more">Read More &#8594;</a>
		        </div> <!--BLOG POST END -->
      </div>


	    <div class="col-md-4"><!-- SINGLE BLOG START-->

                <!-- BLOG IMAGE WITH HOVER EFFECT -->
	      <div class="figure">
	                <div class="post-thumbnail">
	                  <a href="#"><img src="images\post\p3.jfif" alt=""></a>
	                </div>
	       </div>

                 <!--BLOG POST START -->
		    <div class="blog-post">
		           <h4 class="blog-title">
		              <a href="single-blog-04.htm">Lorem Ipsum</a>
		              </h4>
		          <div class="date">
		            <a href="#" class="author">Diana Prince</a> | December 05, 2015
		           </div>
		               <p>
		                  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
		                </p>
		             <a href="#" class="read-more">Read More &#8594;</a>

		    </div>
	      </div>  <!-- SINGLE BLOG ENDS-->

	    </div> <!-- END ROW -->
	   </div>  <!-- END CONTAINER -->
	</div>
	 <!-- END BLOG -->
</section>



<!-- =========================
     CONTACT
============================== -->

<section class="section-top contact" id="contact" style="background-color:#fafafa">

<div class="container " >

	<div class="contact-box">


		<!--CONTACT  SECTION HEADER -->
	<div class="section-header wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

		<!--CONTACT SECTION TITLE -->
		<h2 class="section-title">Contact Us</h2>
		<!-- COLORED LINE -->
		<div class="colored-line">
		</div>


	</div>
	<!-- /END CONTACT SECTION HEADER -->

		    <!-- CONTACT SECTION START -->
		<div class="row">

                <!-- CONTACT ADDRESS -->


			   <!-- CONTACT FORM -->

			<div class="col-md-8 col-md-offset-2">

				<!-- FORM START -->
				
				<form class="contact-form" method="post">
					
					<!-- IF MAIL SENT SUCCESSFULLY -->
					<h4 class="success">
						<i class="icon_check"></i> Your message has been sent successfully.
					</h4>

					<!-- IF MAIL SENDING UNSUCCESSFULL -->
					<h4 class="error">
						<i class="icon_error-circle"></i> Please enter a valid email and message must be longer than 1 character.
					</h4>

					<div class="col-md-6">
						<input class="form-control input-box" id="aname" type="text" name="aname" placeholder="Your Name" required>
					</div>

					<div class="col-md-6">
						<input class="form-control input-box" id="emaill" type="email" name="emaill" placeholder="Your Email" required>
					</div>

					<div class="col-md-12">
						<input class="form-control input-box" id="subject" type="text" name="subject" placeholder="Subject" required>
						<textarea class="form-control textarea-box" name="txtmessage" id="txtmessage" rows="8" placeholder="Message" required></textarea>
					</div>

					<button name="submit1" id="submit1">Send Message A</button>

				</form>
				<!-- /END FORM -->

			</div>
      <br>


		</div>
		<!-- /END ROW -->

	</div>
	<!-- /END CONTACT BOX -->

</div>
<!-- /END CONTAINER -->

</section>


<!-- /END CONTACT  SECTION-->


<!-- =========================
     GOOGLE MAP
============================== -->

<div id="map"></div>



<!-- =========================
     FOOTER
============================== -->
<footer class="footer-section">

              <div class="row footer-content">

                <div class="col-md-4 footer-column">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <img src="images\apple-touch-icon-72x72.png" alt="logo">
                        <p>IEEE</p>
                        <p>Student Branch Manipal</p>
                    </div>
                    <!--/ End footer logo -->
                    <ul class="social-icons">
                    <li><a href=""><i class="social_facebook"></i></a></li>
                    <li><a href=""><i class="social_twitter"></i></a></li>
                    <li><a href=""><i class="social_googleplus"></i></a></li>
                    <li><a href=""><i class="social_instagram"></i></a></li>
                </ul>
                <div class="copyright">
                    ©2016 IEEE SBM, Manipal Institute Of Technology
                   <br>
                    <p class="creo">Made with <i class=" icon_heart " style="color:#b5322b"></i> by <a href="#" style="color:#808080">IEEE SBM</a></p>
                </div>
                </div>

              </div>


                            <!-- SCROLL UP -->
                <div class="scroll-up">
                    <a class="theme-color-bg" href="#home"><i class="fa fa-angle-up"></i></a>
                </div>



</footer>
<!-- /END FOOTER -->

<!-- =========================
     SCRIPTS
============================== -->
<script src="js\jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js\modernizr.custom.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\smoothscroll.js"></script>
<script src="js\jquery.scrollTo.min.js"></script>
<script src="js\jquery.localScroll.min.js"></script>
<script src="js\owl.carousel.min.js"></script>
<script src="js\isotope.pkgd.min.js"></script>
<script src="js\waypoints.min.js"></script>
<script src="js\wow.min.js"></script>
<script src="js\parallax.min.js"></script>
<script src="js\retina.min.js"></script>
<script src="js\jquery.nav.js"></script>
<script src="js\matchMedia.js"></script>
<script src="js\jquery.fitvids.js"></script>
<script src="js\jquery.countTo.js"></script>
<script src="js\classie.js"></script>
<script src="js\jquery.ajaxchimp.js"></script>
<script src="js\pathLoader.js"></script>
<script src="js\jquery.mb.YTPlayer.js"></script>
<script src="js\custom.js"></script>
<script src="js\particles.js"></script>


</body>
</html>
