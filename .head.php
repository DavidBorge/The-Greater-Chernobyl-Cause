<!doctype html>
<html amp lang="en">
	<head>
		<meta charset="utf-8">
	    
	    <script async src="https://cdn.ampproject.org/v0.js"></script>
	    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
	    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
	    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
	    <script async custom-element="amp-vimeo" src="https://cdn.ampproject.org/v0/amp-vimeo-0.1.js"></script>
	    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
	    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
			<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>

	    <title>The Greater Chernobyl Cause</title>
	    
	    <link rel="canonical" href="http://www.greaterchernobylcause.ie/" />
	    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	    <script type="application/ld+json">
	      {
	        "@context": "http://schema.org",
	        "@type": "NewsArticle",
	        "headline": "Open-source framework for publishing content",
	        "datePublished": "2015-10-07T12:02:41Z",
	        "image": [
	          "logo.jpg"
	        ]
	      }
	    </script>
	    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
			
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	    <link rel="stylesheet" href="_css_/materialize.css">
	    
	    <style amp-custom>
			/*****---- STYLES SHARED BY ALL PAGES ----****/

			/**** Min-width of the page ****/
			body {
				min-width: 320px;
			}
			
			/**** Typography (in general) ****/
			* {
				font-family: 'Roboto', sans-serif;
			}
			
			.text-center-h {
				text-align: center;
			}
			
			.text-justify {
				text-align: justify;
			}
			
			.text-italic {
				font-style: italic;
			}

			.text-bold {
				font-weight: bold;
			}

			.bolder {
				font-weight: bolder;
			}

			.vertical-align {
				vertical-align: middle;
			}
			
			.vertical-align-text-bottom {
				vertical-align: text-bottom;
			}
			
			.vertical-align-super {
				vertical-align: super;
			}

			.text-white {
				color: white;
			}
			
			/**** List ****/
			.disc {
				list-style-type: disc;
			}
				
			/**** Floating share button (applies the property to #share-list) ****/
			#share-list {
				position: fixed;
				right: 27px;
				bottom: 80px;
				z-index: 998;
				
				background-color: white;
				padding: 5px;
				border-radius: 10px;
				
				/*transition: display 0.5s, opacity 0.5s linear;*/
			}
			
			.share-list-icon {
				border-radius: 50%;
			}
			
			#share-button:hover ~ #share-list {
				display: inline;
				color: green;
			}
			
			#share-button:focus ~ #share-list {
				display: inline;
				color: green;
			}
			
			#share-button:active ~ #share-list {
				display: inline;
				color: green;
			}
			
			#share-list:hover {
				display: inline;
			}
			
			#share-list:focus {
				display: inline;
			}
			
			#share-list:active {
				display: inline;
			}
			
				
			/**** Test button that works ****/
			/*.btn2 {
				background-color: #4285f4;
			}

			.btn2:hover {
				background-color: #296CDB;
			}

			.btn2:focus {
				background-color: #0F52C1;

				/* The outline parameter surpresses the border
				color / outline when focused */
				/*outline: 0;
			}

			.btn2:active {
				background-color: #0039A8;
			}*/
			
			/**** Nav bar ****/
			/*Cancel the nav-extended class for the <nav> (I use the #id because it has more priority)*/
			@media only screen and (min-width: 1240px) {
				#nav {
					height: auto;
				}
			}
				
			/*Fix mav bar on mobile*/
			@media only screen and (max-width: 1239px) {
				#nav {
					position: sticky;
					height: 56px;
					z-index: 997; 
				}
			}
			
			.links-navigation-bar {
				display: -webkit-flex;
				display: flex;

				-webkit-justify-content: space-between;
				justify-content: space-between;
				
				width: 100%;
			}
			
			.flex-item-nav-bar {
				/*Every item ocuppies the same horizontal space*/
				flex: 1;
				
				/*The text does not jump to the next line*/
				white-space: nowrap;
				
				/*Horizontal alignment*/
    		text-align: center;
			}
			
			/**** Hamburguer menu (amp-sidebar) ****/
			#menu {
				cursor: pointer;
				cursor: hand;
			}

			amp-sidebar {
			    width: 399px;
			    background-color: #fff;
			}

			#side-nav {
				padding-left: 10px;
				padding-right: 10px;
			}

			/*Logo in the Hamburguer Menu*/
			amp-sidebar li:first-child {
				padding-top: 20px;
			}

			.sidebar-icon {
				vertical-align: middle;
				margin-right: 29px;
			}

			/*.side-nav materialize class has been edited*/
			
			/*DONATE NOW Button in the Hamburguer Menu*/
			#donate-now-sidenav {
				margin: 20px 5px 20px 5px;
				padding: 0;
			}
			
			/**** Logo ****/
			#logo {
				/*Avoid losing resolution*/
				max-width: 565px;
			}
			
			/*Center vertically (with Flexbox) (apply to the container)*/
			.center-logo-v {
				display: -webkit-flex;
    			display: flex;
				
				-webkit-align-items: center;
    			align-items: center;
				
				width:100%;
			}
			
			/*Center horizontally (apply to the element itself)*/
			.center-logo-h {
				display: block;
				margin: 0 auto;
				
				width:565px;
				height: auto;
			}
			
			/**** Section: eliminate the padding-top in the About Us, Projects and How You Can Helo pages to keep the tabs touching with the navigation bar*/
			main.with-tabs .section {
				padding-top: 3px;
			}

			/**** Button: text in several lines ****/
			.several-lines {
				height: auto;
				min-height: 20px;
				line-height: 20px;
				padding-top: 8px;
				padding-bottom: 8px;
				width: 150px;
			}
			
			
			/**** LINKS: External Links in the main section: add an indicative icon at the end ****/
			main a[target="_blank"]:not(.no-external-link-icon):after {
    			font-family: 'Material Icons';
    			content: "open_in_new";

    			color: black;
    			padding-left: 5px;
    			vertical-align: bottom;
			}

			/*To indicate we don't need the external icon here*/
			.no-external-link-icon {

			}

			.card-title:hover {
				text-decoration: underline;
			}

			main a:hover {
				text-decoration: underline;
			}

			main div.project-card a:hover {
				color: white;
			}

			/**** Footer ****/
			/*Sticky Footer*/
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}
			
			/*Responsive Contact Info*/
			.flex-container-contacts {
				display: -webkit-flex;
				display: flex;

				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
			}
			
			.flex-item-contact {
				flex: 1;

				/*Prevent the two contacts touching*/
				margin: 0 10px 0 10px;

				/*Prevent the text being in a different line of the icon*/
				min-width: 260px;
			}
			
			/*White text*/
			footer * {
				color: #FFFFFF;
			}
			
			/*Underline links on hover*/
			footer a:hover {
				text-decoration: underline;
			}
			
			/*Size of Fax icon (which is missing in Google Icons)*/
			.fax-icon {
				width: 14px;
				height: 14px;
			}
			
			/*Vertically align text with icon*/
			footer * {
				vertical-align: middle;
			}

			/*Social Media icons: horizontal alignment*/
			.flex-container-social-media {
				display: -webkit-flex;
				display: flex;

				-webkit-justify-content: space-between;
				justify-content: space-between;

				margin-top: 10px;

				max-width: 280px;
			}

			/*Social media icons: shadow on hover*/
			.social-media-icon-shadow:hover {
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			
			/*External Links in the footer: add an indicative icon at the end (except the ones that are images of social media)*/
			footer a[target="_blank"]:not(.social-media-icon-shadow):after {
    			font-family: 'Material Icons';
    			content: "open_in_new";
    			
    			padding-left: 5px;
			    vertical-align: bottom;
			}
			

			/*****---- STYLES OF THE MAIN CONTENT OF INDEX.HTML (HOME) ----****/
			
			/**** Title ****/
			.title-of-page {
				font-weight: 900;
			}
			
			/**** Images ****/
			.image-center {
				/*Avoid the arrows being out of the photos*/
				max-width: 625px;
				
				/*Center horizontally*/
				display: block;
    		margin: 0 auto;
				height: auto;
			}
			
			/**** Vimeo videos ****/
			amp-vimeo {
				margin-bottom: 10px;
			}
			
			/**** Videos with 4:3 aspect ratio ****/
			.video-4x3 {
				/*Avoid losing resolution*/
				max-width: 640px;
				
				/*Center horizontally*/
				margin-right: auto;
				margin-left: auto;
			}
			
			/**** Projects Cards (with Flexbox) (apply to the container)****/
			.space-around {
				display: -webkit-flex;
				display: flex;
				
				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
				
				-webkit-justify-content: space-around;
				justify-content: space-around;
			}
			
			.flex-item-cards {
				flex: 1;

				/*Prevent the text from touching*/
				margin: 10px 20px 10px 20px;

				/*Prevent the text from being to narrow or too wide*/
				min-width: 300px;
				max-width: 590px;
			}
			
			.partner-content {
				padding: 24px;
				border-radius: 0 0 2px 2px;
			}

			.shadow {
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
			}
			
			/*Remove margins on the sides when the cards are in one column*/
			@media only screen and (max-width: 705px) {
				.flex-item-cards {
					margin: 10px 0 10px 0;
				}
			}
			
			.card-content {
				border-top: 1px solid rgba(160,160,160,0.2);
    		padding: 16px 24px;
			}
			
			.card-link {
				color: rgba(255,171,64,1.00);
				margin-right: 24px;
				text-transform: uppercase;
			}
			
			.card-link:hover {
				transition: color .3s ease;
				color: rgba(255,171,64,0.70);
			}
			

			/*****---- STYLES OF THE MAIN CONTENT OF ABOUT-US.HTML ----****/
			
			/**** AMP Tabs ****/
			.amp-tab-container {
				display: -webkit-flex;
				display: flex;

				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
			}
			
			.tab-button {
				list-style: none;
				flex-grow: 1;
				text-align: center;
				cursor: pointer;
			}
			
			.tab-button[selected] {
				outline: none;
			}
			
			.tab-button[selected]+.tabContent {
				display: block;
			}
			
			.tabContent {
				display: none;
				width: 100%;
				order: 1; /* must be greater than the order of the tab buttons to flex to the next line */
				padding-top: 10px;
			}
			
			amp-selector [option][selected] {
				/*Text*/
				color: rgba(183,28,28,1);
				
				/*Underline when tab is selected*/
				border-bottom: 2px solid rgba(183,28,28,1);
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}

			amp-selector [option]:active {
				/*Change nothing when the tab is being clicked*/
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}
			
			.tab:hover {
				color: rgba(183,28,28,1);
			}
			
			/**** Image ****/
			.image-center {
				/*Avoid the arrows being out of the photos*/
				max-width: 625px;
				
				/*Center horizontally*/
				display: block;
				margin: 0 auto;
				height: auto;
			}
			
			/**** Title ****/
			.title-of-page {
				font-weight: 900;
				margin-bottom: 10px;
			}
			
			/**** Videos with 4:3 aspect ratio ****/
			.video-4x3 {
				/*Avoid losing resolution*/
				max-width: 640px;
				
				/*Center horizontally*/
				margin-right: auto;
				margin-left: auto;
			}
			
			/**** Four elements in "What We Do" Tab ****/
			.space-around {
				display: -webkit-flex;
				display: flex;
				
				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
				
				-webkit-justify-content: space-around;
				justify-content: space-around;
			}
			
			.flex-item-cards {
				flex: 1;

				/*Prevent the text touching*/
				margin: 10px 20px 10px 20px;

				/*Prevent the text being to narrow or too wide*/
				min-width: 300px;
			}
			
			/*Prevent overflowing on mobile*/
			@media only screen and (max-width: 340px) {
				.flex-item-cards {
					width: 100%;
					min-width: 250px;
					margin: 10px 0 10px 0;
				}
			}
			
			/**** "Partners" Cards ****/
			.partner-content {
				padding: 24px;
				border-radius: 0 0 2px 2px;
			}

			.shadow {
				/*Shadow*/
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
			}
			
			/*Remove margins on the sides when the cards are in one column*/
			@media only screen and (max-width: 705px) {
				.flex-item-cards {
					margin: 10px 0 10px 0;
				}
			}


			/*****---- STYLES OF THE MAIN CONTENT OF PROJECTS.HTML ----****/
			
			/**** AMP Tabs ****/
			.amp-tab-container {
				display: -webkit-flex;
				display: flex;

				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
			}
			
			.tab-button {
				list-style: none;
				flex-grow: 1;
				text-align: center;
				cursor: pointer;
			}
			
			.tab-button[selected] {
				outline: none;
			}
			
			.tab-button[selected]+.tabContent {
				display: block;
			}
			
			.tabContent {
				display: none;
				width: 100%;
				order: 1; /* must be greater than the order of the tab buttons to flex to the next line */
				padding-top: 10px;
			}
			
			amp-selector [option][selected] {
				/*Text*/
				color: rgba(183,28,28,1);
				
				/*Underline when tab is selected*/
				border-bottom: 2px solid rgba(183,28,28,1);
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}

			amp-selector [option]:active {
				/*Change nothing when the tab is being clicked*/
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}
			
			.tab:hover {
				color: rgba(183,28,28,1);
			}
			
			/**** Image ****/
			.image-center {
				/*Avoid the arrows being out of the photos*/
				max-width: 590px;
				
				/*Center horizontally*/
				display: block;
				margin: 0 auto;
				height: auto;
			}
				
			/**** Cards with the individual projects****/
			.project-card {
				margin-top: 10px;
				margin-bottom: 20px;
				padding: 10px;
				border-radius: 5px 5px 5px 5px;
			}

			.shadow {
				/*Shadow*/
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
			}
			
			.project-title {
				border-bottom: 1px solid rgba(250,250,250,0.5);
				color: white;
				padding-top: 10px;
				padding-bottom: 10px;
				margin-bottom: 10px;
			}
			
			/**** Videos with 4:3 aspect ratio ****/
			.video-4x3 {
				/*Avoid losing resolution*/
				max-width: 640px;
				
				/*Center horizontally*/
				margin-right: auto;
				margin-left: auto;
			}
			
			.last-paragraph {
				margin-bottom: 0;
			}
			
			/**** Two videos in paralel ****/
			/*Mobile*/
			.space-around {
				display: -webkit-flex;
				display: flex;
				
				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
				
				-webkit-justify-content: space-around;
				justify-content: space-around;
			}

			.flex-item-video {
				flex: 1;

				/*Prevent the videos from being too narrow or too wide*/
				min-width: 268px; /*274*/

				/*Avoid losing resolution*/
				max-width: 620px; /*640*/
			}

			/*Prevent the videos from touching vertically*/
			.video-left {
				margin: 10px 0 10px 0;
			}
			
			/*Prevent the videos from touching*/
			.video-right {
				margin: 10px 0 10px 0;
			}

			/*Desktop*/
			@media only screen and (min-width: 678px) { /*654 -677 -  678; 680-655*/
				.space-around {
					-webkit-flex-wrap: nowrap;
					flex-wrap: nowrap;
				}

				/*Prevent the videos from touching vertically and horizontally*/
				.video-left {
					margin: 10px 10px 10px 0;
				}
				
				/*Prevent the videos from touching*/
				.video-right {
					margin: 10px 0 10px 10px;
				}
			}
			
			/**** How You Can Help Card ****/
			.how-you-can-help {
				margin-top: 45px;
				margin-bottom: 30px;
				
				padding-left: 35px;
				padding-right: 35px;
			}

			
			/*****---- STYLES OF THE MAIN CONTENT OF HOW-YOU-CAN-HELP.HTML ----****/
			
			/**** AMP Tabs ****/
			.amp-tab-container {
				display: -webkit-flex;
				display: flex;

				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
			}
			
			.tab-button {
				list-style: none;
				flex-grow: 1;
				text-align: center;
				cursor: pointer;
			}
			
			.tab-button[selected] {
				outline: none;
			}
			
			.tab-button[selected]+.tabContent {
				display: block;
			}
			
			.tabContent {
				display: none;
				width: 100%;
				order: 1; /* must be greater than the order of the tab buttons to flex to the next line */
				padding-top: 10px;
			}
			
			amp-selector [option][selected] {
				/*Text*/
				color: rgba(183,28,28,1);
				
				/*Underline when tab is selected*/
				border-bottom: 2px solid rgba(183,28,28,1);
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}

			amp-selector [option]:active {
				/*Change nothing when the tab is being clicked*/
				outline: 0;  /*Over-write the amp-selector original CSS*/
				/*outline: 5px solid rgba(0,0,0,.7);*/  /*Original code*/
			}
			
			.tab:hover {
				color: rgba(183,28,28,1);
			}
			
			/**** Image ****/
			.image-center {
				/*Avoid the arrows being out of the photos*/
				max-width: 590px;
				
				/*Center horizontally*/
				display: block;
				margin: 0 auto;
				height: auto;
			}
				
			/**** Cards with the individual projects****/
			.project-card {
				margin-top: 10px;
				margin-bottom: 20px;
				padding: 10px;
				border-radius: 5px 5px 5px 5px;
			}

			.shadow {
				/*Shadow*/
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
			}
			
			.project-title {
				border-bottom: 1px solid rgba(250,250,250,0.5);
				color: white;
				padding-top: 10px;
				padding-bottom: 10px;
				margin-bottom: 10px;
			}
			
			/**** Videos with 4:3 aspect ratio ****/
			.video-4x3 {
				/*Avoid losing resolution*/
				max-width: 640px;
				
				/*Center horizontally*/
				margin-right: auto;
				margin-left: auto;
			}
			
			.last-paragraph {
				margin-bottom: 0;
			}
			
			/**** Two videos in paralel ****/
			.space-around {
				display: -webkit-flex;
				display: flex;
				
				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
				
				-webkit-justify-content: space-around;
				justify-content: space-around;
			}
			
			.flex-item-video {
				flex: 1;

				/*Prevent the videos from touching*/
				margin: 10px 20px 10px 20px;

				/*Prevent the videos from being to narrow or too wide*/
				min-width: 300px;
				max-width: 640px;
			}
			
			/**** How You Can Help Card ****/
			.how-you-can-help {
				margin-top: 45px;
				margin-bottom: 30px;
				
				padding-left: 35px;
				padding-right: 35px;
			}
			
			/**** Donating Cards ****/
			.flex-item-cards {
				flex: 1;

				/*Prevent the text from touching*/
				margin: 10px 20px 10px 20px;

				/*Prevent the text from being to narrow or too wide*/
				min-width: 300px;
				max-width: 590px;
			}

			.center-logo-h-paypal {
				display: block;
			    margin: 0 auto;
			    height: auto;
			}

			/*"Donate via"*/
			.vertical-align-middle {
				vertical-align: middle;
				padding-right: 5px;
			}


			/*****---- STYLES OF THE MAIN CONTENT OF IN-THE-NEWS.HTML (HOME) ----****/
			
			/**** Cards with the individual projects****/
			.float-left {
				float: left;
			}

			.project-card {
				margin-top: 10px;
				margin-bottom: 20px;
				padding: 10px;
				border-radius: 5px 5px 5px 5px;
			}

			.shadow {
				/*Shadow*/
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
			}
			
			.project-title {
				border-bottom: 1px solid rgba(250,250,250,0.5);
				color: white;
				padding-top: 10px;
				padding-bottom: 10px;
				margin-bottom: 10px;
			}
			
			/**** Images ****/
			.article-image {
				/*Center horizontally*/
				display: block;
    		margin: 0 auto;
				height: auto;
				
				/*Espace before and after*/
				margin-bottom: 25px;
			}
			
			.max-width-1000 {
				max-width: 1000px;
			}
			
			.max-width-311 {
				max-width: 311px;
			}
			
				
			/*****---- STYLES OF THE MAIN CONTENT OF GOVERNANCE.HTML (HOME) ----****/
			/**** Cards with the individual pieces of information ****/
			.governance-card {
				margin-top: 20px;
				margin-bottom: 20px;
				padding: 10px;
				border-radius: 5px 5px 5px 5px;
			}
			
			.width-100 {
				width: 100%;
			}
			
			.space-between {
				display: -webkit-flex;
				display: flex;
				
				-webkit-flex-wrap: wrap;
				flex-wrap: wrap;
				
				-webkit-justify-content: space-between;
				justify-content: space-between;
			}
				
			.flex-item-list {
				flex: 1;

				/*Prevent the text from touching*/
				margin: 10px 20px 10px 20px;

				/*Prevent the text from being to narrow or too wide*/
				min-width: 150px;
				max-width: 590px;
			}
				
			.letter {
				margin-top: 15px;
			}
				
			.video-card {
				max-width: 640px;
				
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 20px;
				
				border-radius: 5px 5px 5px 5px;
			}
			
			/**** Materialize CSS (compressed and purified) ****/
			/*-Add at the end-*/
		</style>
    </head>

    <body>