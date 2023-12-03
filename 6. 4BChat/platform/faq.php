<?php
session_start();

include './include/header.php';

include('include/config.php');

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='../login.php';" . "</script>";
//   exit;
// }

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}

include "include/config.php";
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/faq.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>FAQ - 4Bchat AI</title>


<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}
  	
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="../../../../../../../fonts.googleapis.com/index.php">
<link rel="preconnect" href="../../../../../../../fonts.gstatic.com/index.php" crossorigin>
<link href="../../../../../../../fonts.googleapis.com/css25188.css?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- !Styles -->

</head>

<body>


<!-- Moving Submenu -->
<div class="techwave_fn_fixedsub">
	<ul></ul>
</div>
<!-- !Moving Submenu -->

<!-- Preloader -->
<div class="techwave_fn_preloader">
	<svg>
		<circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
		<circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
	</svg>
</div>
<!-- !Preloader -->


<!-- MAIN WRAPPER -->
<div class="techwave_fn_wrapper">
	<div class="techwave_fn_wrap">
	
	
		<!-- Searchbar -->
		<div class="techwave_fn_searchbar">
			<div class="search__bar">
				<input class="search__input" type="text" placeholder="Search here...">
				<img src="svg/search.svg" alt="" class="fn__svg search__icon">
				<a class="search__closer" href="#"><img src="svg/close.svg" alt="" class="fn__svg"></a>
			</div>
			<div class="search__results">
				<!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
				<div class="results__title">Results</div>
				<div class="results__list">
					<ul>
						<li><a href="#">Artificial Intelligence</a></li>
						<li><a href="#">Learn about the impact of AI on the financial industry</a></li>
						<li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
						<li><a href="#">Understand the ethical implications surrounding AI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- !Searchbar -->
		
		
		<!-- CONTENT -->
		<div class="techwave_fn_content">
		
			<!-- PAGE (all pages go inside this div) -->
			<div class="techwave_fn_page">
				
				<!-- FAQ Page -->
				<div class="techwave_fn_faq_page">
					
					<!-- Page Title -->
					<div class="techwave_fn_pagetitle">
						<h2 class="title">Frequently Asked Questions</h2>
					</div>
					<!-- !Page Title -->
					
					<div class="faq">
						<div class="container small">
							
							<!-- Accordion Shortcode -->
							<div class="techwave_fn_accordion" data-type="accordion"> <!-- data-type values: accordion, toggle -->
								
								<!-- #1 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">What is 4B AI Chat?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>4B AI Chat is a comprehensive suite of AI tools and APIs that encompass chatbot development, image generation, and speech-to-text capabilities.</p>
										<p> It provides developers with the tools they need to create intelligent and conversational applications.</p>
										<!--<p>Our custom back-end delivers advancements in model fine tuning, prompt adherence, training and inference speed, and multi-image prompting functionality. We also address common issues around image degradation and have implemented a custom upscaling, with much more on the way!</p>-->
									</div>
								</div>
								<!-- !#1 accordion item -->
								
								<!-- #2 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">What are the key components of 4B AI Chat?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>4B AI Chat consists of the following key components:</p>
										<p>Chatbot Development: Tools and APIs for building conversational chatbots.</p>
										<p>Image Generation: Tools and APIs for generating images using AI.</p>
										<p>Speech-to-Text: Tools and APIs for converting spoken language into text.</p>
									</div>
								</div>
								<!-- !#2 accordion item -->
								
								<!-- #3 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">Can I use 4B AI Chat for both personal and commercial projects?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>Yes, 4B AI Chat can be used for both personal and commercial projects. It offers various pricing plans and usage options to cater to different needs.</p>
									</div>
								</div>
								<!-- !#3 accordion item -->
								
								<!-- #4 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">How can I get started with 4B AI Chat?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>To get started with 4B AI Chat, visit our website and sign up for an account. You can then access the tools and APIs and start building your applications.</p>
										<!--<p>With a focus on granular control at every step of content creation, we put creators at the centre of the creative process by offering granular control at every stage of generation, ensuring that AI enhances, rather than replaces, human creative potential.</p>-->
										<!--<p>Our custom back-end delivers advancements in model fine tuning, prompt adherence, training and inference speed, and multi-image prompting functionality. We also address common issues around image degradation and have implemented a custom upscaling, with much more on the way!</p>-->
									</div>
								</div>
								<!-- !#4 accordion item -->
								
								<!-- #5 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">Is there a free trial available for 4B AI Chat?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>Yes, there is a free trial available for 4B AI Chat, which allows you to explore the tools and APIs with limited usage. You can upgrade to a paid plan when you are ready to use it more extensively.</p>
										<!--<p>With a focus on granular control at every step of content creation, we put creators at the centre of the creative process by offering granular control at every stage of generation, ensuring that AI enhances, rather than replaces, human creative potential.</p>-->
										<!--<p>Our custom back-end delivers advancements in model fine tuning, prompt adherence, training and inference speed, and multi-image prompting functionality. We also address common issues around image degradation and have implemented a custom upscaling, with much more on the way!</p>-->
									</div>
								</div>
								<!-- !#5 accordion item -->
								
								<!-- #6 accordion item -->
								<div class="acc__item">
									<div class="acc__header">
										<h2 class="acc__title">Can I integrate 4B AI Chat into my existing applications?</h2>
										<div class="acc__icon"></div>
									</div>
									<div class="acc__content">
										<p>Yes, 4B AI Chat is designed to be easily integrated into existing applications. You can use the provided APIs to add chatbot, image generation, and speech-to-text capabilities to your projects.</p>
										<!--<p>With a focus on granular control at every step of content creation, we put creators at the centre of the creative process by offering granular control at every stage of generation, ensuring that AI enhances, rather than replaces, human creative potential.</p>-->
										<!--<p>Our custom back-end delivers advancements in model fine tuning, prompt adherence, training and inference speed, and multi-image prompting functionality. We also address common issues around image degradation and have implemented a custom upscaling, with much more on the way!</p>-->
									</div>
								</div>
								<!-- !#6 accordion item -->
								
							</div>
							<!-- !Accordion Shortcode -->
							
						</div>
					</div>
					
					
				</div>
				<!-- !FAQ Page -->
				
			</div>
			<!-- !PAGE (all pages go inside this div) -->
			
			
			<!-- FOOTER (inside the content) -->
			<?php 
			 include 'include/footer.php'
			?>
			<!-- !FOOTER (inside the content) -->
			
		</div>
		<!-- !CONTENT -->
		
		
	</div>
</div>
<!-- !MAIN WRAPPER -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/faq.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
</html>