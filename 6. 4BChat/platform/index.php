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
  

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Home - 4Bchat AI</title>


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
<div class="techwave_fn_preloader enabled">
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
				
				<!-- Home Page -->
				<div class="techwave_fn_home">
					<div class="section_home">
						<div class="section_left">
							
							<!-- Title Shortcode -->
							<div class="techwave_fn_title_holder">
								<h1 class="title">Unleash Your Creativity with AI</h1>
								<p class="desc">Generate your ideas into stunning visuals</p>
							</div>
							<!-- !Title Shortcode -->
							
							<!-- Interactive List Shortcode -->
							<div class="techwave_fn_interactive_list">
								<ul>
								    	<li>
										<div class="item">
											<a href="ai-chat-bot.php">
												<span class="icon">
													<img src="svg/chat.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">4B AI Chat boat</h2>
												<p class="desc">An AI chatbot, short for artificial intelligence chatbot, is a computer program designed to simulate human-like conversations and provide automated responses to user queries or prompts. </p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>  
										<li>
										<div class="item">
											<a href="ai-chat-bot.php">
												<span class="icon">
													<img src="svg/chat.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">Text summariz</h2>
												<p class="desc">AI chatbots are computer programs that simulate human conversation.They use natural language processing to understand and respond to user input.</p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>  
									<li>
										<div class="item">
											<a href="image-generation.php">
												<span class="icon">
													<img src="svg/image.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">Image Generation</h2>
												<p class="desc">This field of AI combines deep learning algorithms and generative models to create new images that resemble real-world photographs or exhibit creative and imaginative qualities.</p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>
								
									<!--<li>-->
									<!--	<div class="item">-->
									<!--		<a href="ai-chat-bot.php">-->
									<!--			<span class="icon">-->
									<!--				<img src="svg/chat.svg" alt="" class="fn__svg">-->
									<!--			</span>-->
									<!--			<h2 class="title">Text To Speech</h2>-->
									<!--			<p class="desc">An AI chatbot, short for artificial intelligence chatbot, is a computer program designed to simulate human-like conversations and provide automated responses to user queries or prompts. </p>-->
									<!--			<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>-->
									<!--		</a>-->
									<!--	</div>-->
									<!--</li>-->
									<!--<li>-->
									<!--	<div class="item">-->
									<!--		<a href="ai-chat-bot.php">-->
									<!--			<span class="icon">-->
									<!--				<img src="svg/chat.svg" alt="" class="fn__svg">-->
									<!--			</span>-->
									<!--			<h2 class="title">Speech To Text</h2>-->
									<!--			<p class="desc">An AI chatbot, short for artificial intelligence chatbot, is a computer program designed to simulate human-like conversations and provide automated responses to user queries or prompts. </p>-->
									<!--			<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>-->
									<!--		</a>-->
									<!--	</div>-->
									<!--</li>-->
								</ul>
							</div>
							<!-- !Interactive List Shortcode -->
							
						</div>
						<div class="section_right">
							<div class="company_info">
								<!-- <img src="img/logo-desktop-full.png" alt=""> -->
								<h2 class="born-color"> 4Bchat AI</h2>
								<p class="fn__animated_text">The official server of 4Bchat AI, a text-to-image AI where your imagination is the only limit. We’re building market-leading features that will give you greater control over your generations.</p>
								<!--<hr>-->
								<!--<div class="fn__members">-->
								<!--	<div class="active item">-->
								<!--		<span class="circle"></span>-->
								<!--		<span class="text">1,154,694 Online</span>-->
								<!--	</div>-->
								<!--	<div class="item">-->
								<!--		<span class="circle"></span>-->
								<!--		<span class="text">77,345,912 Members</span>-->
								<!--	</div>-->
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
				<!-- !Home Page -->
				
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

<script>
    // A simple IIFE function. 
    (function () {
        "use strict"; // For the sake of practice.

        if (typeof speechSynthesis === 'undefined')
            return;

        // Some config stuffs... 
        var voiceSelect = document.getElementById("voiceSelect");
        var myPhrase = 'Welcome To 4B AI CHat Boat! You Can select a any Text To Convert a Voice. Provide By 4Born Solutions';
        var voices = [];

        // This is essentially similar to jQuery's $.ready.
        var ready = function (callback) {
            var d = document, s = d.readyState;

            // DOMContentLoaded was fired
            if (s == "complete" || s == "loaded" || s == "interactive") {
                callback();
            } else {
                if (d.addEventListener) {
                    d.addEventListener("DOMContentLoaded", callback, false);
                } else {
                    d.attachEvent("onDOMContentLoaded", callback);
                }
            }
        };

        // This is a function to display all possible voice options. 
        function populateVoiceList() {
            voices = speechSynthesis.getVoices();

            for (var i = 0; i < voices.length; i++) {
                var option = document.createElement('option');
                option.textContent = voices[i].name + ' (' + voices[i].lang + ')';
                option.textContent += voices[i].default ? ' -- DEFAULT' : '';
                option.setAttribute('data-lang', voices[i].lang);
                option.setAttribute('data-name', voices[i].name);
                document.getElementById("voiceSelect").appendChild(option);
            }
        }

        // This is the handler for when the select tag is changed. 
        function handler() {
            var utterThis = new SpeechSynthesisUtterance(myPhrase);
            var selectedOption = voiceSelect.selectedOptions[0].getAttribute('data-name');

            for (var i = 0; i < voices.length; i++) {
                if (voices[i].name === selectedOption) {
                    utterThis.voice = voices[i];
                }
            }

            speechSynthesis.speak(utterThis);
        };

        // This is your code to get the selected text.
        function getSelectionText() {
            var text = "";
            if (window.getSelection) {
                text = window.getSelection().toString();
                // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
            } else if (document.selection && document.selection.type != "Control") {
                text = document.selection.createRange().text;
            }
            return text;
        }

        // This is the on mouse up event, no need for jQuery to do this. 
        document.onmouseup = function (e) {
            setTimeout(function () {
                speechSynthesis.cancel();
                myPhrase = getSelectionText();
                handler();
            }, 1);
        };

        // Some place for the application to start. 
        function start() {
            populateVoiceList();
            if (speechSynthesis.onvoiceschanged !== undefined)
                speechSynthesis.onvoiceschanged = populateVoiceList;

            voiceSelect.onchange = handler;
            setTimeout(handler, 75);
        }

        // Run the start function. 
        ready(start);
    })();
</script>
</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:18 GMT -->
</html>