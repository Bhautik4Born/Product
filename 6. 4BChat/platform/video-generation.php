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
<html lang="en-US"><head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<style>
#wpadminbar #wp-admin-bar-wsm_free_top_button .ab-icon:before {
	content: "\f239";
	color: #FF9800;
	top: 3px;
}
</style><meta name='robots' content='noindex, follow' />

	<!-- This site is optimized with the Yoast SEO plugin v21.3 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Page not found - Frenify</title>
	<meta property="og:locale" content="en_US" />
	<meta property="og:title" content="Page not found - Frenify" />
	<meta property="og:site_name" content="Frenify" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://frenify.com/#website","url":"https://frenify.com/","name":"Frenify","description":"Free Website Templates","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://frenify.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//cdn.paddle.com' />
<link rel='dns-prefetch' href='//checkout.freemius.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="Frenify &raquo; Feed" href="https://frenify.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Frenify &raquo; Comments Feed" href="https://frenify.com/comments/feed/" />
		<!-- This site uses the Google Analytics by MonsterInsights plugin v8.20.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
		<!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
					<!-- No tracking code set -->
				<!-- / Google Analytics by MonsterInsights -->
		<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/frenify.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='https://frenify.com/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://frenify.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.1' type='text/css' media='all' />
<style id='contact-form-7-inline-css' type='text/css'>
.wpcf7 .wpcf7-recaptcha iframe {margin-bottom: 0;}.wpcf7 .wpcf7-recaptcha[data-align="center"] > div {margin: 0 auto;}.wpcf7 .wpcf7-recaptcha[data-align="right"] > div {margin: 0 0 0 auto;}
</style>
<link rel='stylesheet' id='wsm-style-css' href='https://frenify.com/wp-content/plugins/wp-stats-manager/css/style.css?ver=1.2' type='text/css' media='all' />
<link rel='stylesheet' id='googlefonts_heebo-css' href='https://fonts.googleapis.com/css?family=Heebo%3Awght%40100%3B200%3B300%3B400%3B500%3B600%3B700%3B800%3B900&#038;display=swap&#038;ver=6.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='googlefonts_jost-css' href='https://fonts.googleapis.com/css2?family=Jost%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=6.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='frenify-stylesheet-css' href='https://frenify.com/wp-content/themes/frenify/style.css?ver=1.2.2.1.1.1' type='text/css' media='all' />
<script type='text/javascript' src='https://frenify.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://frenify.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="https://frenify.com/wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://frenify.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.3.1" />
	   
    <!-- Wordpress Stats Manager -->
    <script type="text/javascript">
          var _wsm = _wsm || [];
           _wsm.push(['trackPageView']);
           _wsm.push(['enableLinkTracking']);
           _wsm.push(['enableHeartBeatTimer']);
          (function() {
            var u="https://frenify.com/wp-content/plugins/wp-stats-manager/";
            _wsm.push(['setUrlReferrer', "http://frenify.com/work/envato/frenify/html/techwave/1/index.php"]);
            _wsm.push(['setTrackerUrl',"https://frenify.com/?wmcAction=wmcTrack"]);
            _wsm.push(['setSiteId', "1"]);
            _wsm.push(['setPageId', "0"]);
            _wsm.push(['setWpUserId', "0"]);           
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/wsm_new.js'; s.parentNode.insertBefore(g,s);
          })();
    </script>
    <!-- End Wordpress Stats Manager Code -->
      
	<meta property="og:title" content="" />
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Frenify" />
	<meta property="og:description" content="" />

	<meta name="generator" content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<link rel="icon" href="https://frenify.com/wp-content/uploads/2021/04/cropped-icon2-32x32.png" sizes="32x32" />
<link rel="icon" href="https://frenify.com/wp-content/uploads/2021/04/cropped-icon2-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://frenify.com/wp-content/uploads/2021/04/cropped-icon2-180x180.png" />
<meta name="msapplication-TileImage" content="https://frenify.com/wp-content/uploads/2021/04/cropped-icon2-270x270.png" />

</head>

	
<body class="error404 elementor-default elementor-kit-6">


<!-- WRAPPER ALL -->
<div class="frenify_wrapper_all">
	
	<!-- WRAPPER -->
	<div class="frenify_wrapper">
		
				<div class="frenify_header_wrap">
			<div class="frenify_top_part">
				<div class="frenify_width_controller wide">
					<div class="frenify_content_wrap">
						<div class="frenify_content_left_part">
							
							<div class="frenify_logo_holder">
								<a href="https://frenify.com/"><img class="frenify_svg " src="https://frenify.com/wp-content/themes/frenify/framework/svg/logo2.svg" alt="svg" /></a>
							</div>
							
							<div class="frenify_menu_wrap">
								<div class="menu-main-menu-container"><ul id="menu-main-menu" class="main_menu"><li id="menu-item-490" class="menu-item menu-item-type-post_type menu-item-object-project menu-item-490"><a href="https://frenify.com/project/categorify/">Categorify</a></li>
<li id="menu-item-663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-663"><a href="https://frenify.com/">WP Themes</a></li>
<li id="menu-item-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="https://frenify.com/wordpress-plugins/">WP Plugins</a></li>
<li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747"><a href="https://frenify.com/html-templates/">HTML Templates</a></li>
<li id="menu-item-837" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-837"><a href="https://frenify.com/blog/">Blog</a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="https://frenify.com/freebies/">Freebies</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="https://frenify.com/contact/">Contact</a></li>
</ul></div>							</div>

						</div>
						<div class="frenify_content_right_part">
							
							<div class="frenify_search_wrap">
								<div class="frenify_search_trigger">
									<span><img class="frenify_svg " src="https://frenify.com/wp-content/themes/frenify/framework/svg/search.svg" alt="svg" /></span>
								</div>
								<div class="frenify_search"><form role="search" method="get" action="https://frenify.com/" ><label class="screen-reader-text" for="s"></label><input class="frenify_search_input" type="text" value="" name="s" placeholder="Search" /><input class="frenify_search_button" type="submit" value="" /><span class="search_icon"><img class="frenify_svg " src="https://frenify.com/wp-content/themes/frenify/framework/svg/search.svg" alt="svg" /></span></form></div>							</div>
							
							<div class="frenify_mobile_blocks">
								<div class="frenify_mobile_trigger">
									<div class="frenify_hamburger">
										<span class="row-a"></span>
										<span class="row-b"></span>
										<span class="row-c"></span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					
					
					<div class="frenify_mobile_popup_wrap">
						<div class="frenify_mobile_menu_wrap">
							<div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="mobile_menu"><li class="menu-item menu-item-type-post_type menu-item-object-project menu-item-490"><a href="https://frenify.com/project/categorify/">Categorify</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-663"><a href="https://frenify.com/">WP Themes</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="https://frenify.com/wordpress-plugins/">WP Plugins</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747"><a href="https://frenify.com/html-templates/">HTML Templates</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-837"><a href="https://frenify.com/blog/">Blog</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="https://frenify.com/freebies/">Freebies</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="https://frenify.com/contact/">Contact</a></li>
</ul></div>						</div>
					</div>
					
					
				</div>
				
			</div>
			<!--<div class="frenify_bottom_part">
				<div class="frenify_width_controller">
					<div class="frenify_content_wrap">
						
					</div>
				</div>
			</div>-->
		</div>
<div class="frenify_single_page">
	

	<!-- POST CONTENT -->
	<div class="frenify_post_body_wrap">
		<div class="frenify_width_controller">
			<div class="frenify_page_404">
				<h1>404</h1>
				<h2>Page Not Found</h2>
				<p>Sorry, but the page you are looking for was moved, removed, renamed or might never existed...</p>
			</div>
		</div>
	</div>
	<!-- /POST CONTENT -->
				
</div>	
		<div class="frenify_footer_wrap">
			<div class="frenify_width_controller wide">
				
				<div class="frenify_footer_content_wrap">
					
					<div class="frenify_footer_copywright_text">
						<p><span>Copyright &copy; 2023. Frenify Group. All rights reserved.</span></p>
					</div>
					<div class="frenify_footer_menu_wrap">
						<div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="footer_menu"><li id="menu-item-364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-364"><a rel="privacy-policy" href="https://frenify.com/privacy-policy/">Privacy Policy</a></li>
<li id="menu-item-370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-370"><a href="https://frenify.com/terms-and-conditions/">Terms</a></li>
<li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="https://frenify.com/contact/">Contact</a></li>
</ul></div>					</div>
				</div>
					
			</div>
			
		</div>

	</div>
	<!-- / WRAPPER -->
</div>
<!-- / WRAPPER ALL -->


<div class="frenify_popup_share_box_wrap">
	<div class="frenify_popup_share_box">
		<div class="frenify_heading"><h5>Share</h5></div>
		<div class="frenify_body"></div>
		<div class="frenify_closer"><img class="frenify_svg " src="https://frenify.com/wp-content/themes/frenify/framework/svg/closer.svg" alt="svg" /></div>
	</div>
</div>


<div class="frenify_quickjump_panel_wrap">
	<div class="frenify_quickjump_panel">
		<div class="frenify_heading">
			<h5>Quick Jump</h5>
			<div class="frenify_closer"><img class="frenify_svg " src="https://frenify.com/wp-content/themes/frenify/framework/svg/closer.svg" alt="svg" /></div>
		</div>
		<div class="frenify_body">
			<div class="frenify_content">
				<div class="frenify_list">
					<ul></ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="frenify_opener">
		<div class="frenify_hamburger">
			<span class="row-a"></span>
			<span class="row-b"></span>
			<span class="row-c"></span>
		</div>
	</div>
	
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61e1b61eb84f7301d32b1089/1fpcquq49';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
        jQuery(function(){
        var arrLiveStats=[];
        var WSM_PREFIX="wsm";
		
        jQuery(".if-js-closed").removeClass("if-js-closed").addClass("closed");
                var wsmFnSiteLiveStats=function(){
                           jQuery.ajax({
                               type: "POST",
                               url: wsm_ajaxObject.ajax_url,
                               data: { action: 'liveSiteStats', requests: JSON.stringify(arrLiveStats), r: Math.random() }
                           }).done(function( strResponse ) {
                                if(strResponse!="No"){
                                    arrResponse=JSON.parse(strResponse);
                                    jQuery.each(arrResponse, function(key,value){
                                    
                                        $element= document.getElementById(key);
                                        oldValue=parseInt($element.getAttribute("data-value").replace(/,/g, ""));
                                        diff=parseInt(value.replace(/,/g, ""))-oldValue;
                                        $class="";
                                        
                                        if(diff>=0){
                                            diff="+"+diff;
                                        }else{
                                            $class="wmcRedBack";
                                        }

                                        $element.setAttribute("data-value",value);
                                        $element.innerHTML=diff;
                                        jQuery("#"+key).addClass($class).show().siblings(".wsmH2Number").text(value);
                                        
                                        if(key=="SiteUserOnline")
                                        {
                                            var onlineUserCnt = arrResponse.wsmSiteUserOnline;
                                            if(jQuery("#wsmSiteUserOnline").length)
                                            {
                                                jQuery("#wsmSiteUserOnline").attr("data-value",onlineUserCnt);   jQuery("#wsmSiteUserOnline").next(".wsmH2Number").php("<a target=\"_blank\" href=\"?page=wsm_traffic&subPage=UsersOnline&subTab=summary\">"+onlineUserCnt+"</a>");
                                            }
                                        }
                                    });
                                    setTimeout(function() {
                                        jQuery.each(arrResponse, function(key,value){
                                            jQuery("#"+key).removeClass("wmcRedBack").hide();
                                        });
                                    }, 1500);
                                }
                           });
                       }
                       if(arrLiveStats.length>0){
                          setInterval(wsmFnSiteLiveStats, 10000);
                       }});
        </script><script type='text/javascript' src='https://frenify.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/frenify.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://frenify.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://cdn.paddle.com/paddle/paddle.js?ver=1.2.2.1.1.1' id='paddle-script-js'></script>
<script type='text/javascript' src='https://checkout.freemius.com/checkout.min.js?ver=1.2.2.1.1.1' id='fs-checkout-js'></script>
<script type='text/javascript' src='https://frenify.com/wp-content/themes/frenify/framework/js/checkout.js?ver=1.2.2.1.1.1' id='frenify-checkout-js'></script>
<script type='text/javascript' id='frenify-init-js-extra'>
/* <![CDATA[ */
var frenify_ajax_php = {"frenify_ajax_url":"https:\/\/frenify.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://frenify.com/wp-content/themes/frenify/framework/js/init.js?ver=1.2.2.1.1.1' id='frenify-init-js'></script>
</body>
</html>