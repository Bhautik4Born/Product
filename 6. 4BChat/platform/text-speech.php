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
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:50 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Image Generation - 4Bchat AI</title>


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
<div class="techwave_fn_wrapper fn__has_sidebar">
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
				
				<!-- Image Generation Page -->
				<div class="techwave_fn_image_generation_page">
					
					<div class="generation__page">
						
						<!-- Generation Header -->
						<div class="generation_header">
							<div class="header_top">
								<h1 class="title">Image Generation</h1>
								<div class="setup">
									<!--<p class="info">This wil use <span class="count">4</span> tokens</p>-->
									<a href="#" class="sidebar__trigger">
										<img src="svg/option.svg" alt="" class="fn__svg">
									</a>
								</div>
							</div>
<div class="header_bottom">
    <div class="include_area">
        <textarea id="fn__include_textarea" rows="3" placeholder="Enter your prompt"></textarea>
        <textarea class="fn__hidden_textarea" rows="3" tabindex="-1"></textarea>
    </div>
    <div class="generate_section">
        <button id="generate_it" class="techwave_fn_button"><span>Generate</span></button>
    </div>
</div>

<div id="response">
    <!-- Response will be displayed here -->
</div>

<div id="loading" style="display: none;">
    Loading...
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#generate_it").on("click", function (e) {
            e.preventDefault();
            var prompt = $("#fn__include_textarea").val();
            
            // Show loading indicator
            $("#loading").show();

            $.ajax({
                url: "https://seamarineservice.in/4BornChat/API/ImageGenerations.php",
                type: "POST",
                data: { prompt: prompt },
                dataType: "json",
                success: function (response) {
                    // Hide loading indicator
                    $("#loading").hide();

                    // Handle the API response here
                    if (response && response.data) {
                        var responseDiv = $("#response");
                        responseDiv.empty();
                        $.each(response.data, function (index, item) {
                            responseDiv.append('<img src="' + item.url + '" alt="Generated Image ' + (index + 1) + '">');
                        });
                    } else {
                        alert("Error: Invalid API response");
                    }
                },
                error: function () {
                    // Hide loading indicator
                    $("#loading").hide();
                    alert("Error: Failed to fetch data from the API");
                }
            });
        });
    });
</script>


						</div>
						<!-- !Generation Header -->
						
						<!--<div class="generation_history">-->
							
						<!--	<div class="fn__generation_item">-->
						<!--		<div class="item_header">-->
						<!--			<div class="title_holder">-->
						<!--				<h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k, sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face, concept art, muted colors</h2>-->
						<!--				<p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low res, out of frame, cut off, ugly</p>-->
						<!--			</div>-->
						<!--			<div class="item_options">-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<img src="svg/info.svg" alt="" class="fn__svg">-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<span class="text">ArtShaper v3</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">512 x 512px</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">March 15,  2023</span>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<span class="dots"></span>-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<a href="#">Copy Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Reuse Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Upscale All</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Download All</a>-->
						<!--							</li>-->
						<!--							<li class="high_priorety">-->
						<!--								<a href="#">Delete All</a>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="item_list">-->
						<!--			<ul class="fn__generation_list">-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/1.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/2.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/3.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/4.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--			</ul>-->
						<!--		</div>-->
						<!--	</div>-->
							
						<!--	<div class="fn__generation_item">-->
						<!--		<div class="item_header">-->
						<!--			<div class="title_holder">-->
						<!--				<h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k, sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face, concept art, muted colors</h2>-->
						<!--				<p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low res, out of frame, cut off, ugly</p>-->
						<!--			</div>-->
						<!--			<div class="item_options">-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<img src="svg/info.svg" alt="" class="fn__svg">-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<span class="text">ArtShaper v3</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">512 x 512px</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">March 15,  2023</span>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<span class="dots"></span>-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<a href="#">Copy Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Reuse Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Upscale All</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Download All</a>-->
						<!--							</li>-->
						<!--							<li class="high_priorety">-->
						<!--								<a href="#">Delete All</a>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="item_list">-->
						<!--			<ul class="fn__generation_list">-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/5.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/6.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/7.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/8.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--			</ul>-->
						<!--		</div>-->
						<!--	</div>-->
							
						<!--	<div class="fn__generation_item">-->
						<!--		<div class="item_header">-->
						<!--			<div class="title_holder">-->
						<!--				<h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k, sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face, concept art, muted colors</h2>-->
						<!--				<p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low res, out of frame, cut off, ugly</p>-->
						<!--			</div>-->
						<!--			<div class="item_options">-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<img src="svg/info.svg" alt="" class="fn__svg">-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<span class="text">ArtShaper v3</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">512 x 512px</span>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<span class="text">March 15,  2023</span>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--				<div class="fn__icon_options medium_size align_right">-->
						<!--					<a href="#" class="fn__icon_button">-->
						<!--						<span class="dots"></span>-->
						<!--					</a>-->
						<!--					<div class="fn__icon_popup">-->
						<!--						<ul>-->
						<!--							<li>-->
						<!--								<a href="#">Copy Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Reuse Prompt</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Upscale All</a>-->
						<!--							</li>-->
						<!--							<li>-->
						<!--								<a href="#">Download All</a>-->
						<!--							</li>-->
						<!--							<li class="high_priorety">-->
						<!--								<a href="#">Delete All</a>-->
						<!--							</li>-->
						<!--						</ul>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="item_list">-->
						<!--			<ul class="fn__generation_list">-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/1.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/2.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/3.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--				<li class="fn__gl_item">-->
						<!--					<div class="fn__gl__item">-->
						<!--						<div class="abs_item">-->
						<!--							<img src="img/gallery/4.jpg" alt="">-->
						<!--							<div class="all_options">-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/download.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Original Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscaled Image</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscaled Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<img src="svg/upscale.svg" alt="" class="fn__svg">-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Creative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">Alternative Upscale</a>-->
						<!--											</li>-->
						<!--											<li>-->
						<!--												<a href="#">HD Upscale</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--								<div class="fn__icon_options medium_size">-->
						<!--									<a href="#" class="fn__icon_button">-->
						<!--										<span class="dots"></span>-->
						<!--									</a>-->
						<!--									<div class="fn__icon_popup">-->
						<!--										<ul>-->
						<!--											<li>-->
						<!--												<a href="#">Make Variations</a>-->
						<!--											</li>-->
						<!--											<li class="high_priorety">-->
						<!--												<a href="#">Delete Image</a>-->
						<!--											</li>-->
						<!--										</ul>-->
						<!--									</div>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</li>-->
						<!--			</ul>-->
						<!--		</div>-->
						<!--	</div>-->
							
						<!--	<div class="generation_more">-->
						<!--		<a href="pricing.php" class="techwave_fn_button medium"><span>Previous Generations</span></a>-->
						<!--	</div>-->
							
						<!--</div>-->
						
					</div>
					
					<!--<div class="generation__sidebar">-->
					<!--	<div class="sidebar_model">-->
					<!--		<div class="fn__select_model">-->
					<!--			<a class="model_open">-->
					<!--				<img class="user_img" src="img/user/user.jpg" alt="">-->
					<!--				<div class="author">-->
					<!--					<h4 class="subtitle">Model</h4>-->
					<!--					<h3 class="title">ArtShaper v3</h3>-->
					<!--				</div>-->
					<!--				<span class="fn__icon_button">-->
					<!--					<img src="svg/arrow.svg" alt="" class="fn__svg">-->
					<!--				</span>-->
					<!--			</a>-->
					<!--			<div class="all_models">-->
					<!--				<ul>-->
					<!--					<li><a class="selected" href="#">ArtShaper v3</a></li>-->
					<!--					<li><a href="#">ArtShaper v2</a></li>-->
					<!--					<li><a href="#">GameVisuals</a></li>-->
					<!--					<li><a href="#">VintageCar</a></li>-->
					<!--					<li><a href="#">ArtDeco</a></li>-->
					<!--					<li><a href="#">IceCold</a></li>-->
					<!--					<li><a href="#">Water Effect</a></li>-->
					<!--					<li><a href="#">Stable Diffusion v2</a></li>-->
					<!--					<li><a href="#">Stable Diffusion v1</a></li>-->
					<!--					<li><a href="#">Other</a></li>-->
					<!--				</ul>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<div class="sidebar_details">-->
					<!--		<div class="number_of_images">-->
					<!--			<h4 class="title">Number of Images</h4>-->
					<!--			<div class="fn__quantity">-->
					<!--				<a href="#" class="decrease"></a>-->
					<!--				<input type="number" value="4" max="20" min="1">-->
					<!--				<a href="#" class="increase"></a>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="img_sizes">-->
					<!--			<h4 class="title">Image Dimensions</h4>-->
					<!--			<div class="img_size_select">-->
					<!--				<select>-->
					<!--					<option value="512_512" selected>512 x 512px</option>-->
					<!--					<option value="768_768">768 x 768px</option>-->
					<!--					<option value="512_1024">512 x 1024px</option>-->
					<!--					<option value="768_1024">768 x 1024px</option>-->
					<!--					<option value="1024_1024">1024 x 1024px</option>-->
					<!--				</select>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="guidance_scale">-->
					<!--			<h4 class="title">Image Dimensions<span class="fn__tooltip" title="Select the resoultion of the images."><img src="svg/question.svg" alt="" class="fn__svg"></span></h4>-->
					<!--			<div class="fn__range">-->
					<!--				<div class="range_in">-->
					<!--					<input type="range" min="1" max="40" value="7">-->
					<!--					<div class="slider"></div>-->
					<!--				</div>-->
					<!--				<div class="value">7</div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="prompt_magic_switcher">-->
					<!--			<h4 class="title"><label for="prompt_switcher">Prompt Magic</label><span class="fn__tooltip" title="4Bchat AI Prompt v3.0. Our custom render pipeline which has much faster compliance and can improve the result with any model selected. Applies a 2x multiplier to accepted costs due to higher GPU overhead."><img src="svg/question.svg" alt="" class="fn__svg"></span></h4>-->
					<!--			<label class="fn__toggle">-->
					<!--				<span class="t_in">-->
					<!--					<input type="checkbox" checked id="prompt_switcher">-->
					<!--					<span class="t_slider"></span>-->
					<!--					<span class="t_content"></span>-->
					<!--				</span>-->
					<!--			</label>-->
					<!--		</div>-->
					<!--		<div class="contrast_switcher">-->
					<!--			<h4 class="title"><label for="contrast_switcher">High Contrast</label><span class="fn__tooltip" title="If your photo consists of extremely bright and dark areas, then it's considered high contrast. When it has a wide range of tones that go from pure white to pure black, it's medium contrast. No pure whites or blacks and a range of middle tones means it's low contrast."><img src="svg/question.svg" alt="" class="fn__svg"></span></h4>-->
					<!--			<label class="fn__toggle">-->
					<!--				<span class="t_in">-->
					<!--					<input type="checkbox" id="contrast_switcher">-->
					<!--					<span class="t_slider"></span>-->
					<!--					<span class="t_content"></span>-->
					<!--				</span>-->
					<!--			</label>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					
					
				</div>
				<!-- !Image Generation Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:53 GMT -->
</html>