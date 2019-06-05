<?php

$page = "";

$page = (isset($_GET['id']))?$_GET['id'] : 'home';

if(!in_array($page, array('home','about','service','test','gallery','electrician','painter','engineering','home_design','contact','contact_send','quote_send','blog','submit','testimonial','tiller','surveying','extension')))

{

	include("404.php");

	exit;

}

?>





<!DOCTYPE html lang="en">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="icon" href="favc.png" type="image/x-icon" />

	<title>

		<?php

		switch ($page) {

			default:

			echo "";

			break;

			case 'home':

			echo "ARC Homes";

			break;

			case 'about':

			echo "ARC Homes";

			break;

			case 'residential':

			echo "ARC Homes";

			break;

			case 'exterior':

			echo "ARC Homes";

			break;

			case 'interior':

			echo "ARC Homes";

			break;

			case 'industrial':

			echo "ARC Homes";

			break;

			case 'extension':

			echo "ARC Homes";

			break;

			case 'commercial  ':

			echo "ARC Homes";

			break;

			case 'service':

			echo "ARC Homes";

			break;

			case 'testimonial':

			echo "ARC Homes";

			break;

			case 'gallery':

			echo "ARC Homes";

			break;

			case 'contact':

			echo "ARC Homes";

			break;

		}

		?>

	</title>



	<meta name="keywords" content="<?php

	switch ($page) {

		default:

		echo "";

		break;

		case 'home':

		echo "ARC Homes";

		break;

		case 'about':

		echo "ARC Homes";

		break;

		case 'residential':

		echo "ARC Homes";

		break;

		case 'exterior':

		echo "ARC Homes";

		break;

		case 'interior':

		echo "ARC Homes";

		break;

		case 'industrial':

		echo "ARC Homes";

		break;

		case 'extension':

		echo "ARC Homes";

		break;

		case 'commercial  ':

		echo "ARC Homes";

		break;

		case 'service':

		echo "ARC Homes";

		break;

		case 'testimonial':

		echo "ARC Homes";

		break;

		case 'gallery':

		echo "ARC Homes";

		break;

		case 'contact':

		echo "ARC Homes";

		break;



	}

	?>"/>



	<meta name="description" content="<?php

	switch ($page) {

		default:

		echo "";

		break;

		case 'home':

		echo "ARC Homes";

		break;

		case 'about':

		echo "ARC Homes";

		break;

		case 'residential':

		echo "ARC Homes";

		break;

		case 'exterior':

		echo "ARC Homes";

		break;

		case 'interior':

		echo "ARC Homes";

		break;

		case 'industrial':

		echo "ARC Homes";

		break;

		case 'extension':

		echo "ARC Homes";

		break;

		case 'commercial  ':

		echo "ARC Homes";

		break;

		case 'service':

		echo "ARC Homes";

		break;

		case 'testimonial':

		echo "ARC Homes";

		break;

		case 'gallery':

		echo "ARC Homes";

		break;

		case 'contact':

		echo "ARC Homes";

		break;

	}

	?>"/>





	<!-- Style Sheet -->

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css" />





	<!-- Menu -->

	<link rel="stylesheet" href="css/styles.css">

	<script type="text/javascript" src="js/script.js"></script>

	<!-- Social Share -->

	<link rel="stylesheet" type="text/css" href="css/jquery.floating-social-share.css" />

	<script type="text/javascript" src="js/jquery.floating-social-share.js"></script>



	<!-- Script -->

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>



	<!-- <script type="text/javascript" src="js/jquery.floating-social-share.js"></script>-->

	<script src="js/menu.js"></script>




	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Coda|Lato|Open+Sans:400,700|Questrial|Roboto:400,700|Rokkitt:400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 

	<!-- Owl Carousel -->

	<link rel="stylesheet" href="css/owl.carousel.css">

	<script type="text/javascript" src="js/owl.carousel.min.js"></script>

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/owl.theme.css">

	<link rel="stylesheet" href="css/owl.transitions.css">



	<!-- Gallery -->

	<script type='text/javascript' src='js/unitegallery.min.js'></script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">

	<link rel='stylesheet' href='css/unite-gallery.css' type='text/css' />

	<script type='text/javascript' src='js/ug-theme-tilesgrid.js'></script>





	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">





</head>

<body>

	<div class="top-header hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="top-left">
						<ul>
							<li><a href="mailto:enquiries@archome.com.au"><i class="fa fa-envelope" aria-hidden="true"></i> enquiries@archome.com.au</a></li>
							<li style="font-family: 'Georgia';"><i class="fa fa-phone" aria-hidden="true"></i> 043403720303</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-3">
					<div class="top-right">
						<ul >
							<li style="border-left: 1px solid #bcc3cb;"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li style=" border-right: 1px solid #bcc3cb;"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div data-spy="affix" data-offset-top="50">
		<div class="header">
			<div class="container">
				<div class="row"> 
					<div class="col-md-4">

						<a href="./home"><img src="images/logo1.png" class="img-responsive center"></a>

					</div>

					<div class="col-xs-12 col-md-8">
						<a href="callto:043403720303" style="text-decoration:none;"><h2 class="taptocall center-block visible-xs text-center"><i class="fa fa-phone" aria-hidden="true"></i> Tap To Call</h2></a>





						<div id='cssmenu' class="pull-right">



							<ul>

								<!--  <li class="<?php if($page=='home_design'){echo 'active';} ?>"><a href='./home_design'>HOME DESIGN</a></li> -->
								<li class="<?php if($page=='about'){echo 'active';} ?>"><a href='./about'>ABOUT US</a></li>
								<li class="<?php if($page==''){echo 'active';} ?>"><a href='service'>SERVICES</a>
              <!--  <ul>
                <li class='has-sub'><a href='./surveying'>Surveying</a></li>
                <li class='has-sub'><a href='./engineering'>Engineering</a></li>
                <li class='has-sub'><a href='./tiller'>Tiller</a></li>
                 <li class='has-sub'><a href='./painter'>Painters</a></li>
                <li class='has-sub'><a href='./electrician'>Electrician</a></li>
               


            </ul> -->
        </li>
        <li class="<?php if($page=='gallery'){echo 'active';} ?>"><a href='./gallery'>PROJECTS</a></li> 
        <!-- <li class="<?php if($page=='testimonial'){echo 'active';} ?>"><a href='testimonial'>TESTIMONIALS</a></li>  -->
        <li class="<?php if($page=='blog'){echo 'active';} ?>"><a href='./blog'>BLOG</a></li>
        <li class="<?php if($page=='contact'){echo 'active';} ?>" ><a href='./contact'>CONTACT US</a></li>

    </ul>

</div>

</div>

</div>
<div class="clearfix"></div>
</div>
</div>
</div>

<!--<script src="js/jquery.js"></script>-->

<script type="text/javascript">

	$(document).ready(function() {



		$("#owl-demo1").owlCarousel({

			navigation : true,

			navigationText : ["",""],

      autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 3,

      itemsDesktop : [1199,1],

      itemsDesktopSmall : [979,1],

      stopOnHover : true,






  });


	});

</script>

<script src="js/owl.carousel.min.js"></script>



<script type="text/javascript">

	$(document).ready(function() {

		$("#owl-demo").owlCarousel({



			navigation : true,

			slideSpeed : 600,

			paginationSpeed : 500,

			singleItem : true,

			autoPlay:true,

			stopOnHover : true,

			navigationText : ["<",">"],

			transitionStyle : "fade",



      /*

      transitionStyle : "fade"

      transitionStyle : "backSlide"

      transitionStyle : "goDown"

      transitionStyle : "fadeUp"

      */

  });

		$("#owl-demo2").owlCarousel({
			navigation : true,

			navigationText : ["<",">"],
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 6,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,2],
      stopOnHover : true,


  });
	});
</script>

<script type="text/javascript">

	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});

</script>

