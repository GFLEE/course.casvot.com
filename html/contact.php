<?php
// Free html5 templates : #
$text = "<span style='color:black; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";




	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "leegradylll@gmail.com";
	$subject = "来自博客的评论";
	$message = " Name: " . $name ."\r\n Contact-Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Guoph";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	
	if(mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:black; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
	

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact</title>
	<meta name="description" content="F">
	<link rel="icon" href="./images/cat.ico" type="image/x-icon" />
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body>
	<div class="wrap-body">
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'><span>Home</span></a></li>
			   <li class=' has-sub'><a href='#'><span>Blog</span></a>
				  <ul >
					 <li class='has-sub'><a href='#'><span>technology</span></a>
						<ul>
						   <li><a href='#'><span>skill</span></a></li>
						   <li class='last'><a href='#'><span>Course</span></a></li>
						</ul>
					 </li>
					 <li class='has-sub'><a href='#'><span>Arts</span></a>
						<ul>
						   <li><a href='#'><span>History</span></a></li>
						   <li class='last'><a href='#'><span>Future</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   
			   <li class='active last'><a href='contact.html'><span>Contacts</span></a></li>
			   <li><a href='about.html'><span>About</span></a></li>
			</ul>
		</div>
		<header class="">
			<div class="logo">
				<hr class="line-1">
				<a href="#">Contact</a>
				<span>Faster Is Better</span>
				<hr class="line-1">
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<h3 class="t-center">Result</h3>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
				
					</div>
				</div>
				<div class="copyright">
					Copyright @Lee All Right reserved <a href="http://www.cssmoban.com/" target="_blank" title="Gmail">leegradylll@gmail.com</a> 
				</div>
			</div>
		</footer>
		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
	</div>
</body>
</html>