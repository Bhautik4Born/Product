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
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/documentation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Documentation - 4Bchat AI</title>


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
<style>
   code.javascript {
    background: black;
}

    pre {
    background: black;
}

    code.python {
    background: black;
}
    code.php {
    background: black;
}
  </style>
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
				
				<!-- Documentation Page -->
				<div class="techwave_fn_doc_page">
				
					<div class="docpage">
						<!-- Page Title -->
						<div class="techwave_fn_pagetitle">
							<h2 class="title">Documentation</h2>
						</div>
						<!-- !Page Title -->
						<div class="doccontent">
							<div class="container small">
								<div id="doc_introduction">
									<h4>Thank you for choosing 4B AI Chat</h4>
									<p>Dear Client</p>
									<p>We wanted to inform you that this documentation was generated by an AI chat bot as an example. While the content and structure of the documentation are based on best practices and industry standards, please note that it may not fully align with your specific requirements or project scope.</p>
									<p>The AI chat bot utilized advanced language processing capabilities to generate the documentation, incorporating information and guidelines commonly found in similar documentation. However, we strongly recommend reviewing and customizing the documentation to accurately reflect your project's unique needs, preferences, and implementation details.</p>
									<p>We understand the importance of tailored documentation that addresses your specific goals, and our team is more than happy to assist you in creating a comprehensive and customized documentation package. We will work closely with you to understand your project's intricacies and deliver documentation that precisely matches your expectations.</p>
									<p>Should you require any further assistance or have any questions regarding the documentation or any other aspect of your project, please feel free to reach out to our team. We are committed to providing you with the highest level of support and ensuring the success of your endeavor.</p>
									<p>Thank you for your understanding, and we look forward to collaborating with you further.</p>
									<p>Best regards,<br>4B AI Chat</p>
									<h4>Introduction</h4>
									<p><b>Overview:</b> Explore how the AI chat bot leverages natural language processing (NLP) algorithms and machine learning techniques to understand user input and generate contextually appropriate responses.</p>
									<p><b>Key Features:</b> Dive deeper into the key features, such as sentiment analysis, entity recognition, and intent classification, that empower the AI chat bot to provide intelligent and accurate interactions.</p>
									<p><b>System Requirements:</b> Review the hardware and software prerequisites necessary for deploying and running the AI chat bot, including supported operating systems, browsers, and server requirements.</p>
								</div>
									<div id="doc_code">
									<h4>Call API Code</h4>
									
										<!-- PAGE (all pages go inside this div) -->
                        			<div class="techwave_fn_page">
                        				
                        				<!-- FAQ Page -->
                        				<div class="techwave_fn_faq_page">
                        					
                        					
                        					<div class="faq">
                        						<div class="container small">
                        							
                        						<!-- Accordion Shortcode -->
                                                <div class="techwave_fn_accordion" data-type="accordion"> <!-- data-type values: accordion, toggle -->
                                                
                                                    <!-- #1 accordion item -->
                                                    <div class="acc__item">
                                                        <div class="acc__header">
                                                            <h2 class="acc__title">Used Python API Code to Call</h2>
                                                            <div class="acc__icon"></div>
                                                        </div>
                                                        <div class="acc__content">
                                                            <pre><code class="python">
import requests

# API endpoint URL

api_url = "https://4bchat.4born.info/platform/api/chat.php"

# Define the request data with user-provided content

user_content = "Your Massage"  # Replace with the actual user input

license_key = "License Key"  # Replace with the actual license key

# Request data

data = {

    "message": user_content,
    
    "License_key": license_key,
    
}

# Send a POST request to the API

response = requests.post(api_url, data=data)

# Check for request errors

if response.status_code != 200:

    print("Request Error:", response.status_code)
    
else:

    # Display the API response
    
    print(response.text)
                                                            </code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- !#1 accordion item -->
                                                
                                                    <!-- #2 accordion item -->
                                                    <div class="acc__item">
                                                        <div class="acc__header">
                                                            <h2 class="acc__title">Used PHP Code</h2>
                                                            <div class="acc__icon"></div>
                                                        </div>
                                                        <div class="acc__content">
                                                            <pre><code class="php">
// API endpoint URL

$apiUrl = "https://4bchat.4born.info/platform/api/chat.php";

// Define the request data with user-provided content

$userContent = "What is"; // Replace with the actual user input

$licenseKey = "License Key"; // Replace with the actual license key

// Request data

$data = [

    "message" => $userContent,
    
    "License_key" => $licenseKey,
    
];

// Initialize cURL session

$ch = curl_init($apiUrl);

// Set cURL options

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL request

$response = curl_exec($ch);

// Check for cURL errors

if (curl_errno($ch)) {

    echo "cURL Error: " . curl_error($ch);
    
} else {

    // Display the API response
    
    echo $response;
    
}

// Close cURL session

curl_close($ch);
                                                            </code></pre>
                                                        </div>
                                                    </div>
                                                    <!-- !#2 accordion item -->
                                                
                                                   	<!-- #3 accordion item -->
                                                								<div class="acc__item">
                                                									<div class="acc__header">
                                                										<h2 class="acc__title">Node.JS</h2>
                                                										<div class="acc__icon"></div>
                                                									</div>
                                                									<div class="acc__content">
                                                            <pre><code class="php">
const axios = require('axios');

// API endpoint URL
const apiUrl = 'https://4bchat.4born.info/platform/api/chat.php';

// Define the request data with user-provided content
const userContent = 'Your MassageBlockchain'; // Replace with the actual user input
const licenseKey = 'License Key'; // Replace with the actual license key

// Request data
const data = {
  message: userContent,
  License_key: licenseKey,
};

// Send a POST request to the API
axios.post(apiUrl, data)
  .then((response) => {
    // Display the API response
    console.log(response.data);
  })
  .catch((error) => {
    console.error('Request Error:', error.message);
  });

                                                            </code></pre>
                                                        </div>
                                                								</div>
                                                								<!-- !#3 accordion item -->
                                                								
                                                								<!-- #4 accordion item -->
                                                								<div class="acc__item">
                                                									<div class="acc__header">
                                                										<h2 class="acc__title">Using CURL</h2>
                                                										<div class="acc__icon"></div>
                                                									</div>
                                                										<div class="acc__content">
                                                            <pre><code class="php">
curl -X POST https://4bchat.4born.info/platform/api/chat.php 

-d "message=Your Massage & License_key=License Key"

                                                
                                                            </code></pre>
                                                        </div>
                                                								</div>
                                                								<!-- !#4 accordion item -->
                                                </div>
                                                <!-- !Accordion Shortcode -->

                        						</div>
                        					</div>
                        					
                        					
                        				</div>
                        				<!-- !FAQ Page -->
                        				
                        			</div>
                        			<!-- !PAGE (all pages go inside this div) -->
									
								</div>
								<div id="doc_customization">
									<h4>Customization</h4>
									<p><b>Chat Bot Appearance:</b> Learn how to modify the visual elements of the chat bot, including its layout, typography, icons, and overall design, to match your brand's aesthetics or user interface guidelines.</p>
									<p><b>Conversational Flow:</b> Gain insights into customizing the chat bot's dialogue flow, including creating custom intents, defining response templates, and incorporating context-aware conversations to improve user engagement.</p>
									<p><b>Personalization:</b> Explore advanced customization options, such as user profiling, personalized recommendations, and user-specific preferences, to enhance the user experience and make interactions more tailored and relevant.</p>
								</div>
								<div id="doc_video">
									<h4>Video Tutorials</h4>
									<p><b>Step-by-Step Implementation:</b> Access a library of video tutorials that guide you through each phase of the AI chat bot implementation process, including installation, configuration, customization, and deployment.</p>
									<p><b>Best Practices:</b> Learn from expert tips and best practices demonstrated in video tutorials to optimize the performance, scalability, and user satisfaction of your AI chat bot.</p>
								</div>
								<div id="doc_darkmode">
									<h4>Dark Mode</h4>
									<p><b>Enabling Dark Mode:</b> Understand how to implement and toggle the dark mode feature within the chat bot's user interface, allowing users to switch between light and dark themes based on their preference or the website/application's design.</p>
								</div>
								<div id="doc_assets">
									<h4>Build Assets</h4>
									<p><b>Integration APIs:</b> Explore a comprehensive guide on how to integrate the AI chat bot with various platforms, utilizing APIs to send and receive messages, extract user data, and leverage additional functionalities offered by external services.</p>
									<p><b>SDKs and Libraries:</b> Discover software development kits (SDKs) or libraries that provide pre-built components and tools for seamless integration, simplifying the development process and reducing implementation time.</p>
								</div>
								<div id="doc_multidemo">
									<h4>Multi-Demo</h4>
									<p><b>Multi-Language Support:</b> Learn about language localization techniques and how to incorporate multiple languages into the AI chat bot, enabling it to communicate effectively with users from diverse linguistic backgrounds.</p>
									<p><b>Multi-Platform Deployment:</b> Gain insights into deploying the AI chat bot across different platforms simultaneously, such as websites, mobile apps, social media, and messaging platforms, ensuring broad accessibility and a consistent user experience.</p>
								</div>
								<div id="doc_structure">
									<h4>File Structure</h4>
									<p><b>Project Organization:</b> Explore an in-depth overview of the AI chat bot's file structure, including the organization of code files, assets, configuration files, and third-party libraries. Understand how different components interact and collaborate within the project.</p>
									<p>Remember, the documentation should provide clear instructions, explanations, and examples to assist users in understanding and implementing the AI chat bot effectively. It should also incorporate diagrams, diagrams, and flowcharts where applicable, to enhance comprehension.</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="docsidebar">
						<ul>
							<li>
								<a href="#doc_introduction">Introduction</a>
							</li>
							<li class="menu-item-has-children">
								<a href="#">
									Quick Setup
									<span class="trigger"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="#doc_code"><span class="text">Call API Code</span></a>
									</li>
									<li>
										<a href="#doc_customization"><span class="text">Customization</span></a>
									</li>
									<li>
										<a href="#doc_video"><span class="text">Video Tutorials</span></a>
									</li>
									<li>
										<a href="#doc_darkmode"><span class="text">Dark Mode</span></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#doc_assets">Build Assets</a>
							</li>
							<li>
								<a href="#doc_multidemo">Multi-demo</a>
							</li>
							<li>
								<a href="#doc_structure">File Structure</a>
							</li>
						</ul>
					</div>
					
					
					
						
					
				</div>
				<!-- !Documentation Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/documentation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
</html>