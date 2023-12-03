<?php
session_start();

include './include/header.php';

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
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/pricing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:36 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Pricing - 4Bchat AI</title>


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

<!-- Report -->
<div class="techwave_fn_report">
	<a href="#" class="fn__closer fn__icon_button">
		<img src="svg/close.svg" alt="" class="fn__svg">
	</a>
	<div class="report__closer"></div>
	<div class="report__content">
		<h3 class="title">Report Item</h3>
		<h3 class="subtitle">What is the main reason for your report?</h3>
		<input class="reason_field" type="text" placeholder="Type here...">
		<div class="btns">
			<a href="#" class="report techwave_fn_button">
				<span>Report</span>
			</a>
			<a href="#" class="cancel techwave_fn_button">
				<span>Cancel</span>
			</a>
		</div>
	</div>
</div>
<!-- !Report -->

<!-- Image Lightbox -->
<div class="techwave_fn_img_lightbox">
	
	<!-- top section (of the image lightbox) -->
	<div class="lightbox__top">
		<div class="lightbox__tl">
			<div class="lightbox__tlbar">
				<div class="lightbox__tlbar_left">
					<div class="item item__share fn__icon_options medium_size">
						<a href="#" class="item__btn fn__icon_button">
							<img src="svg/share.svg" alt="" class="fn__svg">
						</a>
						<div class="fn__icon_popup">
							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Linkedin</a></li>
								<li><a href="#">Pinterest</a></li>
								<li><a href="#" class="fn__copy" data-copied="Copied!">Copy Link</a></li>
							</ul>
						</div>
					</div>
					<div class="item item__download fn__icon_options medium_size">
						<a href="#" class="item__btn fn__icon_button">
							<img src="svg/download.svg" alt="" class="fn__svg">
						</a>
						<div class="fn__icon_popup">
							<ul>
								<li><a href="#">Original Image</a></li>
								<li><a href="#">Creative Upscaled Image</a></li>
								<li><a href="#">HD Upscaled Image</a></li>
							</ul>
						</div>
					</div>
					<div class="item item__more fn__icon_options medium_size">
						<a href="#" class="item__btn fn__icon_button">
							<span class="dots"></span>
						</a>
						<div class="fn__icon_popup">
							<ul>
								<li><a href="#">Remove Background</a></li>
								<li><a href="#">Creative Upscale</a></li>
								<li><a href="#">Alternative Upscale</a></li>
								<li class="high_priorety"><a href="#" class="fn__report">Report Image</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lightbox__tlbar_center">
					<a href="#" class="img_nav nav_prev">
						<img src="svg/arrow.svg" alt="" class="fn__svg">
					</a>
					<a href="#" class="img_nav nav_next">
						<img src="svg/arrow.svg" alt="" class="fn__svg">
					</a>
				</div>
				<div class="lightbox__tlbar_right">
					<a href="#" class="fn__like" data-id="2">
						<span class="count">343</span>
						<img src="svg/like.svg" alt="" class="fn__svg empty__like">
						<img src="svg/like-full.svg" alt="" class="fn__svg full__like">
					</a>
				</div>
			</div>
			<div class="lightbox__tlimg">
				<img src="img/gallery/main.jpg" alt="">
			</div>
		</div>
		<div class="lightbox__tr">
			<div class="user__profile">
				<a class="profile_link" href="user-profile.php">
					<img src="img/user/user.jpg" alt="">
					<h2 class="user_name">LuckyLee</h2>
				</a>
				<a class="fn__follow" href="#" data-follow-text="Follow" data-unfollow-text="Unfollow">
					<span class="text">Follow</span>
				</a>
				<a href="#" class="fn__closer fn__icon_button">
					<img src="svg/close.svg" alt="" class="fn__svg">
				</a>
			</div>
			<div class="item__details">
				<div class="fn__model">
					<div class="model_img">
						<img src="img/user/user.jpg" alt="">
					</div>
					<div class="model_info">
						<h4 class="model_subtitle">Model</h4>
						<h3 class="model_title">ArtShaper v3</h3>
					</div>
					<a href="image-generation.php" class="fn__icon_button">
						<img src="svg/arrow.svg" alt="" class="fn__svg">
					</a>
				</div>
				
				<div class="fn__prompt_details">
					<div class="prompt__header">
						<div class="prompt__text">Prompt Details</div>
						<div class="prompt__options">
							<a href="#" class="fn__icon_button">
								<span class="dots"></span>
							</a>
							<div class="prompt__popup">
								<ul>
									<li><a href="#">Remix</a></li>
									<li><a href="#">Image to Image</a></li>
									<li><a href="#" class="fn__copy" data-copied="Copied!" data-text="Realistic painting, photorealistic masterpiece detailing, professional photography, natural lighting, volumetric lighting maximalist photoillustration: 8k resolution concept art intricately detailed, complex, elegant, expansive">Copy Prompt</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="prompt__content">
						<p>Realistic painting, photorealistic masterpiece detailing, professional photography, natural lighting, volumetric lighting maximalist photoillustration: 8k resolution concept art intricately detailed, complex, elegant, expansive</p>
					</div>
				</div>
				
				<div class="techwave_fn_accordion small" data-type="accordion"> <!-- data-type values: accordion, toggle -->
					<div class="acc__item">
						<div class="acc__header">
							<h2 class="acc__title">Negative Prompt</h2>
							<div class="acc__icon"></div>
						</div>
						<div class="acc__content">
							<p>TECH-AI is an AI-powered content production suite that empowers creators with a powerful, customisable, and user-friendly platform for bringing their ideas to life.</p>
							<p>With a focus on granular control at every step of content creation, we put creators at the centre of the creative process by offering granular control at every stage of generation, ensuring that AI enhances, rather than replaces, human creative potential.</p>
							<p>Our custom back-end delivers advancements in model fine tuning, prompt adherence, training and inference speed, and multi-image prompting functionality. We also address common issues around image degradation and have implemented a custom upscaling, with much more on the way!</p>
						</div>
					</div>
				</div>
				
			</div>
				
			<div class="fn__details_list">
				<ul>
					<li>
						<div class="sub_title">Created</div>
						<div class="title">April 05, 2023</div>
					</li>
					<li>
						<div class="sub_title">Resolution</div>
						<div class="title">768 x 1024px</div>
					</li>
					<li>
						<div class="sub_title">Sampler</div>
						<div class="title">Tech-AI-Frenify</div>
					</li>
					<li>
						<div class="sub_title">Step Count</div>
						<div class="title">30</div>
					</li>
					<li>
						<div class="sub_title">Base Model</div>
						<div class="title">Frenify v2.0</div>
					</li>
					<li>
						<div class="sub_title">High Contrast</div>
						<div class="title">Off</div>
					</li>
					<li>
						<div class="sub_title">Magic Prompt</div>
						<div class="title">On</div>
					</li>
				</ul>
			</div>
				
		</div>
	</div>
	<!-- !top section (of the image lightbox) -->
	
	<!-- related section (of the image lightbox) -->
	<div class="lightbox__related">
	
		<div class="fn__title_holder">
			<h2 class="title">Related Images</h2>
		</div>
		
		<div class="fn__grid_items">
			<ul>
				<li>
					<a href="#" data-id="1"><img src="img/related/1.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="2"><img src="img/related/2.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="3"><img src="img/related/3.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="4"><img src="img/related/4.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="5"><img src="img/related/5.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="6"><img src="img/related/6.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="7"><img src="img/related/7.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="8"><img src="img/related/8.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="9"><img src="img/related/9.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="10"><img src="img/related/10.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="11"><img src="img/related/11.jpg" alt=""></a>
				</li>
				<li>
					<a href="#" data-id="12"><img src="img/related/12.jpg" alt=""></a>
				</li>
			</ul>
		</div>
		
	</div>
	<!-- !related section (of the image lightbox) -->
	
</div>
<!-- !Image Lightbox -->


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
				
				<!-- Pricing Page -->
				<div class="techwave_fn_pricing_page">
					
					<div class="techwave_fn_title_holder">
						<div class="container">
							<h1 class="title">Simple Pricing, Unbeatable Value</h1>
							<p class="desc fn__animated_text">Start small and free, upgrade as you go. Take control of everything.</p>
						</div>
					</div>
					
					<!-- Pricing Shortcode -->
					<div class="techwave_fn_pricing">
						<div class="container">
						
							<!-- toggle pricing -->
							<div class="pricing__toggle">
								<div class="toggle_in">
									<a href="#tab1" class="active">Yearly</a>
									<a href="#tab2">Monthly</a>
									<span class="bg"></span>
								</div>
							</div>
							<!-- !toggle pricing -->
							
							<!-- pricing tabs -->
							<div class="pricing__tabs">
								<div class="pricing__tab active" id="tab1">
								
								
									<!-- Mobile Pricing Table (shortcode) -->
									<div class="fn__mobile_pricing">
										
										<!-- First Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="pricing__item__header">
													<h2 class="title">Personal</h2>
													<h3 class="price"><span>$49</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$15.00</span> billed monthly</p>-->
													<p class="purchase">
													    <form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 49;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">899</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title"> Virtual Assistant Integration</h4>
														<p class="desc">-</p>
													</div>
												</div>
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Personal</span></a>
												</div>
											</div>
										</div>
										<!-- !First Plan -->
										
										<!-- Second Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="popular"><span>Most Popular</span></div>
												<div class="pricing__item__header">
													<h2 class="title">Premium</h2>
													<h3 class="price"><span>$399</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$449.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 399;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">12,500</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Virtual Assistant Integration</h4>
														<p class="desc">+</p>
													</div>
												</div>
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Premium</span></a>
												</div>
											</div>
										</div>
										<!-- !Second Plan -->
										
										<!-- Third Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="pricing__item__header">
													<h2 class="title">Enerprice</h2>
													<h3 class="price"><span>$130</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$35.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 130;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">5,500</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Virtual Assistant Integration</h4>
														<p class="desc">-</p>
													</div>
												</div>
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Enterpice</span></a>
												</div>
											</div>
										</div>
										<!-- !First Plan -->
										
									</div>
									<!-- /Mobile Pricing Table (shortcode) -->
									
									<div class="pricing__content">
									
										<!-- table's header -->
										<div class="pricing__header">
											<div class="item_row">
												<div class="item_col"></div>
												<div class="item_col">
													<h2 class="title">Personal</h2>
													<h3 class="price"><span>$49</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$15.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 49;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="item_col">
													<div class="popular"><span>Most Popular</span></div>
													<h2 class="title">Premium</h2>
													<h3 class="price"><span>$399</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$449.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 399;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="item_col">
													<h2 class="title">Enterprice</h2>
													<h3 class="price"><span>$130</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$35.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 130;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
											</div>	
										</div>
										<!-- !table's header -->
										
										
										<!-- table's heading -->
										<div class="pricing__heading">
											<div class="item"><span class="title">Main Features</span></div>
											<div class="item wide"></div>
										</div>
										<!-- !table's heading -->
										
										
										<!-- table's options -->
										<div class="pricing__fields">
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Tokens per month</span>
												</div>
												<div class="item_col">
													<span class="option_text">899</span>
												</div>
												<div class="item_col">
													<span class="option_text">12,500</span>
												</div>
												<div class="item_col">
													<span class="option_text">5,500</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Free Trial</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Custom Models</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">24/7 Availability</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Integration Support</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Data Encryption</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Feature Updates</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Cross-Platform Integration</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Virtual Assistant Integration</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
										</div>
										<!-- !table's options -->
										
										
										<!-- table's footer -->
										<div class="pricing__footer">
											<div class="item_row">
												<div class="item_col"></div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Personal</span></a>
												</div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Premium</span></a>
												</div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Enterprice</span></a>
												</div>
											</div>
										</div>
										<!-- !table's footer -->
										
									</div>
									
								</div>
								<div class="pricing__tab" id="tab2">
									
									
									<!-- Mobile Pricing Table (shortcode) -->
									<div class="fn__mobile_pricing">
										
										<!-- First Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="pricing__item__header">
													<h2 class="title">Personal</h2>
													<h3 class="price"><span>$59</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$449.00</span> billed monthly</p>-->
													<p class="purchase">
													    <form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 59;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">899</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title"> Virtual Assistant Integration</h4>
														<p class="desc">-</p>
													</div>
												</div>
												
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Personal</span></a>
												</div>
											</div>
										</div>
										<!-- !First Plan -->
										
										<!-- Second Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="popular"><span>Most Popular</span></div>
												<div class="pricing__item__header">
													<h2 class="title">Premium</h2>
													<h3 class="price"><span>$449</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$130.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 449;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">12,500</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title"> Virtual Assistant Integration</h4>
														<p class="desc">+</p>
													</div>
												</div>
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Premium</span></a>
												</div>
											</div>
										</div>
										<!-- !Second Plan -->
										
										<!-- Third Plan -->
										<div class="pricing__item">
											<div class="pricing__item_holder">
												<div class="pricing__item__header">
													<h2 class="title">Enerprice</h2>
													<h3 class="price"><span>$145</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$40.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 145;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="pricing__item__heading">
													<h2 class="title">Main Features</h2>
												</div>
												<div class="pricing__item_list">
													<div class="pricing__item_list_item">
														<h4 class="title">Tokens per month</h4>
														<p class="desc">5,500</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Free Trial</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Custom Models</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">24/7 Availability</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Integration Support</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Data Encryption</h4>
														<p class="desc">+</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Feature Updates</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title">Cross-Platform Integration</h4>
														<p class="desc">-</p>
													</div>
													<div class="pricing__item_list_item">
														<h4 class="title"> Virtual Assistant Integration</h4>
														<p class="desc">+</p>
													</div>
												</div>
												<div class="pricing__item_footer">
													<a href="#" class="techwave_fn_button"><span>Buy Enterpice</span></a>
												</div>
											</div>
										</div>
										<!-- !First Plan -->
										
									</div>
									<!-- /Mobile Pricing Table (shortcode) -->
										
									<div class="pricing__content">
									
										<!-- table's header -->
										<div class="pricing__header">
											<div class="item_row">
												<div class="item_col"></div>
												<div class="item_col">
													<h2 class="title">Personal</h2>
													<h3 class="price"><span>$59</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$449.00</span> billed monthly</p>-->
													<p class="purchase">
													    <form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 59;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="item_col">
													<div class="popular"><span>Most Popular</span></div>
													<h2 class="title">Premium</h2>
													<h3 class="price"><span>$449</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$25.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 449;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
												<div class="item_col">
													<h2 class="title">Enterprice</h2>
													<h3 class="price"><span>$145</span> / month</h3>
													<!--<p class="desc">billed yearly<br><span>$40.00</span> billed monthly</p>-->
													<p class="purchase">
														<form method="POST" action="pay.php">
													        <?php
                                                    	        $pay = 83.240 * 145;
                                                    	    ?>
                                                    	    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
														    <button class="techwave_fn_button">Buy Personal</button>
														</form>
													</p>
												</div>
											</div>	
										</div>
										<!-- !table's header -->
										
										
										<!-- table's heading -->
										<div class="pricing__heading">
											<div class="item"><span class="title">Main Features</span></div>
											<div class="item wide"></div>
										</div>
										<!-- !table's heading -->
										
										
										<!-- table's options -->
										<div class="pricing__fields">
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Tokens per month</span>
												</div>
												<div class="item_col">
													<span class="option_text">899</span>
												</div>
												<div class="item_col">
													<span class="option_text">12,500</span>
												</div>
												<div class="item_col">
													<span class="option_text">5,500</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Free Trial</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Custom Models</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">24/7 Availability</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Integration Support</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Data Encryption</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Feature Updates</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Cross-Platform Integration</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
											</div>
											<div class="item_row">
												<div class="item_col">
													<span class="heading_text">Virtual Assistant Integration</span>
												</div>
												<div class="item_col">
													<span class="option_text">-</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
												<div class="item_col">
													<span class="option_text">+</span>
												</div>
											</div>
										</div>
										<!-- !table's options -->
										
										<!-- table's footer -->
										<div class="pricing__footer">
											<div class="item_row">
												<div class="item_col"></div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Personal</span></a>
												</div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Premium</span></a>
												</div>
												<div class="item_col">
													<a href="#" class="techwave_fn_button"><span>Buy Enterprice</span></a>
												</div>
											</div>
										</div>
										<!-- !table's footer -->
										
									</div>
									
								</div>
							</div>
							<!-- !pricing tabs -->
							
							
						</div>
					</div>
					<!-- !Pricing Shortcode -->
					
					
					
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
			
			
		</div>
		<!-- !CONTENT -->
					
				</div>
				<!-- !Notification Single Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/pricing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:58 GMT -->
</html>