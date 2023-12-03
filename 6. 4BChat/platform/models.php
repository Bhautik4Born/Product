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
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/models.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:30 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Finetuned Models - 4Bchat AI</title>


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
				
				<!-- Models Page -->
				<div class="techwave_fn_models_page">
						
					<div class="fn__title_holder">
						<div class="container">
							<h1 class="title">Finetuned Models</h1>
						</div>
					</div>

					<!-- Models -->
					<div class="techwave_fn_models">
						
						<div class="fn__tabs">
							<div class="container">
								<div class="tab_in">
									<a class="active" href="#tab1">Main Models</a>
									<a href="#tab2">Community’s</a>
									<!--<a href="#tab3">Bookmarks</a>-->
									<!--<a href="#tab4">My Own</a>-->
								</div>
							</div>
						</div>
					

						<!-- models filter -->
						<!--<div class="container">-->
						<!--	<div class="models__filter">-->
						<!--		<div class="filter__left">-->
						<!--			<div class="filter__search">-->
						<!--				<input type="text" placeholder="Search gallery">-->
						<!--				<a href="#" class="techwave_fn_button"><span>Search</span></a>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="filter__right">-->
						<!--			<div class="filter__category">-->
						<!--				<select>-->
						<!--					<option value="all" selected>All Categories</option>-->
						<!--					<option value="Buildings">Buildings</option>-->
						<!--					<option value="Characters">Characters</option>-->
						<!--					<option value="Environments">Environments</option>-->
						<!--					<option value="Fashion">Fashion</option>-->
						<!--					<option value="Illustration">Illustration</option>-->
						<!--					<option value="Graphical">Graphical</option>-->
						<!--					<option value="Photography">Photography</option>-->
						<!--					<option value="Textures">Textures</option>-->
						<!--				</select>-->
						<!--			</div>-->
						<!--			<div class="filter__order">-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<span class="fn__icon_button">-->
						<!--						<img src="svg/filter.svg" alt="" class="fn__svg">-->
						<!--					</span>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<a href="#">Newest</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Oldest</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">A-Z</a>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- !models filter -->
						
						
						
						<div class="container">
							<!-- models content -->
							<div class="models__content">
								<div class="models__results">
									<div class="fn__preloader">
										<div class="icon"></div>
										<div class="text">Loading</div>
									</div>
									<div class="fn__tabs_content">
										<div id="tab1" class="tab__item active">
											<ul class="fn__model_items">

												<!-- #1 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/1.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#1 model item -->

												<!-- #2 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/2.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#2 model item -->

												<!-- #3 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/3.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#3 model item -->

												<!-- #4 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/4.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#4 model item -->

												<!-- #5 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/5.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#5 model item -->

												<!-- #6 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/6.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#6 model item -->

												<!-- #7 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/7.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#7 model item -->

												<!-- #8 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/8.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#8 model item -->

												<!-- #9 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/9.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#9 model item -->

												<!-- #10 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/10.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#10 model item -->

											</ul>
										</div>
										<div id="tab2" class="tab__item">
											<ul class="fn__model_items">

												<!-- #1 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/1.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#1 model item -->

												<!-- #2 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/2.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#2 model item -->

												<!-- #3 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/3.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#3 model item -->

												<!-- #4 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/4.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#4 model item -->

												<!-- #5 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/5.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#5 model item -->

												<!-- #6 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/6.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#6 model item -->

												<!-- #7 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/7.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#7 model item -->

												<!-- #8 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/8.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#8 model item -->

												<!-- #9 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/9.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#9 model item -->

												<!-- #10 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/10.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#10 model item -->

											</ul>
										</div>
										<div id="tab3" class="tab__item">
											<ul class="fn__model_items">

												<!-- #1 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/1.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#1 model item -->

												<!-- #2 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/2.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#2 model item -->

												<!-- #3 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/3.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#3 model item -->

												<!-- #4 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/4.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#4 model item -->

												<!-- #5 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/5.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#5 model item -->

												<!-- #6 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/6.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#6 model item -->

												<!-- #7 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/7.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#7 model item -->

												<!-- #8 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/8.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#8 model item -->

												<!-- #9 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/9.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#9 model item -->

												<!-- #10 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/10.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#10 model item -->

											</ul>
										</div>
										<div id="tab4" class="tab__item">
											<ul class="fn__model_items">

												<!-- #1 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark has__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/1.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#1 model item -->

												<!-- #2 model item -->
												<li class="fn__model_item">
													<div class="item">
														<!--<a href="#" class="fn__bookmark">-->
														<!--	<img src="svg/bookmark.svg" alt="" class="fn__svg hasntbook">-->
														<!--	<img src="svg/bookmarked.svg" alt="" class="fn__svg hasbook">-->
														<!--</a>-->
														<div class="img">
															<img src="img/models/2.jpg" alt="">
														</div>
														<div class="item__info">
															<h3 class="title">GameVisuals</h3>
															<p class="desc">A versatile model great at both photorealism and anime, includes noise offset training... by 4B AI Chat.</p>
														</div>
														<div class="item__author">
															<img src="img/user/user.jpg" alt="">
															<h3 class="author_name">4Born Solutions</h3>
														</div>
													</div>
												</li>
												<!-- !#2 model item -->
												
												<li class="fn__model_item new">
													<div class="item">
														<a href="#" class="fn__full_link"></a>
														<span class="add"></span>
														<span class="text">Add new</span>
													</div>
												</li>
												
											</ul>
										</div>
									</div>
											
								</div>
								<!--<div class="models__more">-->
								<!--	<a href="#" class="medium techwave_fn_button"><span>Load More</span></a>-->
								<!--</div>-->
							</div>
							<!-- !models content -->
						</div>
						
						

					</div>
					<!-- !Models -->
						
				</div>
				<!-- !Models Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/models.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:50 GMT -->
</html>