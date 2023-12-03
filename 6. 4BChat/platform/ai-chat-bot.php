<?php

session_start();
echo $_SESSION['logged_in'];

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


    $query = "SELECT * FROM AI_Keys";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $license_key = $row['license_key'];
      $url = $row['url'];
  ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/ai-chat-bot.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:53 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>AI Chat Bot - 4Bchat AI</title>


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
  <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--<script src="js/script.js" defer></script>-->

<style>
.hiden-light {
    display: none;
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

<div class="techwave_fn_font">
	<a class="font__closer_link fn__icon_button" href="#"><img src="svg/close.svg" alt="" class="fn__svg"></a>
	<div class="font__closer"></div>
	<div class="font__dialog">
		<h3 class="title">Font Options</h3>
		<label for="font_size">Font Size</label>
		<select id="font_size">
			<option value="10">10 px</option>
			<option value="12">12 px</option>
			<option value="14">14 px</option>
			<option value="16" selected>16 px</option>
			<option value="18">18 px</option>
			<option value="20">20 px</option>
			<option value="22">22 px</option>
			<option value="24">24 px</option>
			<option value="26">26 px</option>
			<option value="28">28 px</option>
		</select>
		<a href="#" class="apply techwave_fn_button"><span>Apply</span></a>
	</div>
</div>


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
				
				<!-- AI Chat Bot Page -->
				<div class="techwave_fn_aichatbot_page fn__chatbot">
					
					<div class="chat__page">
					
						<div class="font__trigger">
							<span></span>
						</div>
						
						<div class="fn__title_holder">
							<div class="container">
								<!-- Active chat title -->
								<h1 class="title">Chat Bot Definition</h1>
									
								<!-- !Active chat title -->
							</div>
						</div>
						
						<div class="container">
							<div class="chat__list">

								<div id="chat0" class="chat__item"></div>

								<div class="chat__item active" id="chat1">
									<div class="chat__box your__chat">
										<div class="author"><span>You</span></div>
										<div class="chat">
											<p>What is a chat 4B Chat?</p>
										</div>
									</div>
									<div class="chat__box bot__chat">
										<div class="author"><span>4B Chat</span></div>
										<div class="chat">
											<p>At the most basic level, a chatbot is a computer program that simulates and processes human conversation (either written or spoken), allowing humans to interact with digital devices as if they were communicating with a real person. Chatbots can be as simple as rudimentary programs that answer a simple query with a single-line response, or as sophisticated as digital assistants that learn and evolve to deliver increasing levels of personalization as they gather and process information.</p>
										</div>
									</div>
									<div class="chat__box your__chat">
										<div class="author"><span>You</span></div>
										<div class="chat">
											<p>How do chatbots work?</p>
										</div>
									</div>
									<div class="chat__box bot__chat">
										<div class="author"><span>4B Chat</span></div>
										<div class="chat">
											<p>Chatbots boost operational efficiency and bring cost savings to businesses while offering convenience and added services to internal employees and external customers. They allow companies to easily resolve many types of customer queries and issues while reducing the need for human interaction.</p>
										</div>
									</div>
								</div>

								<div class="chat__item" id="chat2"></div>

								<div class="chat__item" id="chat3"></div>

								<div class="chat__item" id="chat4"></div>

							</div>
							
						</div>
						<div class="container">
						    <div class="chat-container"></div>
						</div>

						<div class="chat__comment">
							<div class="container pos-relative">
								<div class="fn__chat_comment">
									<div class="new__chat">
										<p>Ask it questions, engage in discussions, or simply enjoy a friendly chat.</p>
									</div>
									<textarea rows="1" class="fn__hidden_textarea" tabindex="-1"></textarea>
									<textarea rows="1" placeholder="Send a message..." id="chat-input" spellcheck="false"></textarea>
									<button><img src="./img/paper-plane.png" alt="" id="send-btn" class="material-symbols-rounded"></button>
								</div>
								<div class="typing-controls pos-delete">
                                      <span id="theme-btn" class="material-symbols-rounded hiden-light"></span>
                                      <span id="delete-btn" class="material-symbols-rounded">delete</span>
                                  </div>
							</div>
						</div>
						
					</div>
					
					<!--<div class="chat__sidebar">-->
					<!--	<div class="sidebar_header">-->
					<!--		<a href="#chat0" class="fn__new_chat_link">-->
					<!--			<span class="icon"></span>-->
					<!--			<span class="text">New Chat</span>-->
					<!--		</a>-->
					<!--	</div>-->
						<!--<div class="sidebar_content">-->
						<!--	<div class="chat__group new">-->
						<!--		<h2 class="group__title">Today</h2>-->
						<!--		<ul class="group__list">-->
						<!--			<li class="group__item">-->
						<!--				<div class="fn__chat_link active" href="#chat1">-->
						<!--					<span class="text">Chat Bot Definition</span>-->
						<!--					<input type="text" value="Chat Bot Definition">-->
						<!--					<span class="options">-->
						<!--						<button class="trigger"><span></span></button>-->
						<!--						<span class="options__popup">-->
						<!--							<span class="options__list">-->
						<!--								<button class="edit">Edit</button>-->
						<!--								<button class="delete">Delete</button>-->
						<!--							</span>-->
						<!--						</span>-->
						<!--					</span>-->
						<!--					<span class="save_options">-->
						<!--						<button class="save">-->
						<!--							<img src="svg/check.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--						<button class="cancel">-->
						<!--							<img src="svg/close.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--					</span>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li class="group__item">-->
						<!--				<div class="fn__chat_link" href="#chat2">-->
						<!--					<span class="text">Essay: Marketing</span>-->
						<!--					<input type="text" value="Essay: Marketing">-->
						<!--					<span class="options">-->
						<!--						<button class="trigger"><span></span></button>-->
						<!--						<span class="options__popup">-->
						<!--							<span class="options__list">-->
						<!--								<button class="edit">Edit</button>-->
						<!--								<button class="delete">Delete</button>-->
						<!--							</span>-->
						<!--						</span>-->
						<!--					</span>-->
						<!--					<span class="save_options">-->
						<!--						<button class="save">-->
						<!--							<img src="svg/check.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--						<button class="cancel">-->
						<!--							<img src="svg/close.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--					</span>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li class="group__item">-->
						<!--				<div class="fn__chat_link" href="#chat3">-->
						<!--					<span class="text">Future of Social Media</span>-->
						<!--					<input type="text" value="Future of Social Media">-->
						<!--					<span class="options">-->
						<!--						<button class="trigger"><span></span></button>-->
						<!--						<span class="options__popup">-->
						<!--							<span class="options__list">-->
						<!--								<button class="edit">Edit</button>-->
						<!--								<button class="delete">Delete</button>-->
						<!--							</span>-->
						<!--						</span>-->
						<!--					</span>-->
						<!--					<span class="save_options">-->
						<!--						<button class="save">-->
						<!--							<img src="svg/check.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--						<button class="cancel">-->
						<!--							<img src="svg/close.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--					</span>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li class="group__item">-->
						<!--				<div class="fn__chat_link" href="#chat4">-->
						<!--					<span class="text">Business Ideas</span>-->
						<!--					<input type="text" value="Business Ideas">-->
						<!--					<span class="options">-->
						<!--						<button class="trigger"><span></span></button>-->
						<!--						<span class="options__popup">-->
						<!--							<span class="options__list">-->
						<!--								<button class="edit">Edit</button>-->
						<!--								<button class="delete">Delete</button>-->
						<!--							</span>-->
						<!--						</span>-->
						<!--					</span>-->
						<!--					<span class="save_options">-->
						<!--						<button class="save">-->
						<!--							<img src="svg/check.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--						<button class="cancel">-->
						<!--							<img src="svg/close.svg" alt="" class="fn__svg">-->
						<!--						</button>-->
						<!--					</span>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--		</ul>-->
						<!--	</div>-->
						<!--</div>-->
					<!--</div>-->
					
				</div>
				<!--    <div class="chat-container"></div>-->

				<!--<div class="typing-container">-->
    <!--              <div class="typing-content">-->
    <!--                <div class="typing-textarea">-->
    <!--                  <textarea id="chat-input" spellcheck="false" placeholder="Enter a prompt here" required></textarea>-->
    <!--                  <span id="send-btn" class="material-symbols-rounded">send</span>-->
    <!--                </div>-->
    <!--                <div class="typing-controls">-->
    <!--                  <span id="theme-btn" class="material-symbols-rounded">li</span>-->
    <!--                  <span id="delete-btn" class="material-symbols-rounded">delete</span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--        </div>-->
				<!-- !AI Chat Bot Page -->
				
			</div>
			<!-- !PAGE (all pages go inside this div) -->
			
			<?php 
			 include 'include/footer.php'
			?>
			
		</div>
		<!-- !CONTENT -->
		
		
	</div>
</div>
<!-- !MAIN WRAPPER -->

<script>
    const chatInput = document.querySelector("#chat-input");
const sendButton = document.querySelector("#send-btn");
const chatContainer = document.querySelector(".chat-container");
const themeButton = document.querySelector("#theme-btn");
const deleteButton = document.querySelector("#delete-btn");

let userText = null;
const API_KEY = "<?php echo $license_key; ?>"; // Paste your API key here

const loadDataFromLocalstorage = () => {
    // Load saved chats and theme from local storage and apply/add on the page
    const themeColor = localStorage.getItem("themeColor");

    document.body.classList.toggle("light-mode", themeColor === "light_mode");
    themeButton.innerText = document.body.classList.contains("light-mode") ? "dark_mode" : "light_mode";

    const defaultText = ` `

    chatContainer.innerHTML = localStorage.getItem("all-chats") || defaultText;
    chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to bottom of the chat container
}

const createChatElement = (content, className) => {
    // Create new div and apply chat, specified class and set html content of div
    const chatDiv = document.createElement("div");
    chatDiv.classList.add("chat", className);
    chatDiv.innerHTML = content;
    return chatDiv; // Return the created chat div
}

const getChatResponse = async (incomingChatDiv) => {
    // const API_URL = "https://api.openai.com/v1/completions";
    const API_URL = "<?php echo $url; ?>";
    const pElement = document.createElement("p");

    // Define the properties and data for the API request
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": `Bearer ${API_KEY}`
        },
        body: JSON.stringify({
            model: "text-davinci-003",
            prompt: userText,
            max_tokens: 2048,
            temperature: 0.2,
            n: 1,
            stop: null
        })
    }

    // Send POST request to API, get response and set the reponse as paragraph element text
    try {
        const response = await (await fetch(API_URL, requestOptions)).json();
        pElement.textContent = response.choices[0].text.trim();
    } catch (error) { // Add error class to the paragraph element and set error text
        pElement.classList.add("error");
        pElement.textContent = "Oops! Something went wrong while retrieving the response. Please try again.";
    }

    // Remove the typing animation, append the paragraph element and save the chats to local storage
    incomingChatDiv.querySelector(".typing-animation").remove();
    incomingChatDiv.querySelector(".chat-details").appendChild(pElement);
    localStorage.setItem("all-chats", chatContainer.innerHTML);
    chatContainer.scrollTo(0, chatContainer.scrollHeight);
}

const copyResponse = (copyBtn) => {
    // Copy the text content of the response to the clipboard
    const reponseTextElement = copyBtn.parentElement.querySelector("p");
    navigator.clipboard.writeText(reponseTextElement.textContent);
    copyBtn.textContent = "done";
    setTimeout(() => copyBtn.textContent = "content_copy", 1000);
}

const showTypingAnimation = () => {
    // Display the typing animation and call the getChatResponse function
    const html = `<div class="chat-content">
                    <div class=" chat__box bot__chat pos-relative">
                        <div class="author"><span>4B Chat</span></div>
						
					    <div class="chat chat-details">
                            <div class="typing-animation ">
                            <p>Loading...</p>
                        </div>
    				    </div>
					<span onclick="copyResponse(this)" class="material-symbols-rounded abs-copy">content_copy</span>
					</div>
				</div>`;
    // Create an incoming chat div with typing animation and append it to chat container
    const incomingChatDiv = createChatElement(html, "incoming");
    chatContainer.appendChild(incomingChatDiv);
    chatContainer.scrollTo(0, chatContainer.scrollHeight);
    getChatResponse(incomingChatDiv);
}

const handleOutgoingChat = () => {
    userText = chatInput.value.trim(); // Get chatInput value and remove extra spaces
    if(!userText) return; // If chatInput is empty return from here

    // Clear the input field and reset its height
    chatInput.value = "";
    chatInput.style.height = `${initialInputHeight}px`;

    // const html = `<div class="chat-content chat__box your__chat">
    //                 <div class="chat-details">
    //                 <div class="author"><span>You</span></div
    //                 <div class="chat">
    //                     <p>${userText}</p>
    //                 </div>
    //                 </div>
    //             </div>`;
                
    const html = `<div class="chat__box your__chat">
										<div class="author"><span>You</span></div>
										<div class="chat">
											<p>${userText}</p>
										</div>
									</div> `;

    // Create an outgoing chat div with user's message and append it to chat container
    const outgoingChatDiv = createChatElement(html, "outgoing");
    chatContainer.querySelector(".default-text")?.remove();
    chatContainer.appendChild(outgoingChatDiv);
    chatContainer.scrollTo(0, chatContainer.scrollHeight);
    setTimeout(showTypingAnimation, 500);
}

deleteButton.addEventListener("click", () => {
    // Remove the chats from local storage and call loadDataFromLocalstorage function
    if(confirm("Are you sure you want to delete all the chats?")) {
        localStorage.removeItem("all-chats");
        loadDataFromLocalstorage();
    }
});

themeButton.addEventListener("click", () => {
    // Toggle body's class for the theme mode and save the updated theme to the local storage 
    document.body.classList.toggle("light-mode");
    localStorage.setItem("themeColor", themeButton.innerText);
    themeButton.innerText = document.body.classList.contains("light-mode") ? "dark_mode" : "light_mode";
});

const initialInputHeight = chatInput.scrollHeight;

chatInput.addEventListener("input", () => {   
    // Adjust the height of the input field dynamically based on its content
    chatInput.style.height =  `${initialInputHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatInput.addEventListener("keydown", (e) => {
    // If the Enter key is pressed without Shift and the window width is larger 
    // than 800 pixels, handle the outgoing chat
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleOutgoingChat();
    }
});

loadDataFromLocalstorage();
sendButton.addEventListener("click", handleOutgoingChat);
</script>

<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/ai-chat-bot.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
</html>

<?php
}
?>