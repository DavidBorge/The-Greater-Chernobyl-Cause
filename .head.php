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
			@font-face{font-family:Roboto;font-style:normal;font-weight:400;src:local('Roboto'),local('Roboto-Regular'),url(https://fonts.gstatic.com/s/roboto/v16/zN7GBFwfMP4uA6AR0HCoLQ.ttf) format('truetype')}@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:local('Material Icons'),local('MaterialIcons-Regular'),url(https://fonts.gstatic.com/s/materialicons/v22/2fcrYFNaTjcS6g4U3t-Y5StnKWgpfO2iSkLzTz-AABg.ttf) format('truetype')}.material-icons{font-family:'Material Icons';font-weight:400;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr}.red{background-color:#f44336}.red.darken-2{background-color:#d32f2f}.red.darken-3{background-color:#c62828}.red.darken-4{background-color:#b71c1c}.yellow{background-color:#ffeb3b}.yellow.darken-3{background-color:#f9a825}/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}footer,main,nav{display:block}a{background-color:transparent}a:active,a:hover{outline:0}b{font-weight:700}hr{box-sizing:content-box;height:0}table{border-collapse:collapse;border-spacing:0}td{padding:0}html{box-sizing:border-box}*,:after,:before{box-sizing:inherit}ul:not(.browser-default){padding-left:0;list-style-type:none}ul:not(.browser-default) li{list-style-type:none}a{color:#039be5;text-decoration:none;-webkit-tap-highlight-color:transparent}.btn,.btn-floating,.btn-large,.side-nav,nav{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12),0 3px 1px -2px rgba(0,0,0,.2)}.btn-floating:hover,.btn-large:hover,.btn:hover{box-shadow:0 3px 3px 0 rgba(0,0,0,.14),0 1px 7px 0 rgba(0,0,0,.12),0 3px 1px -1px rgba(0,0,0,.2)}.z-depth-2{box-shadow:0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.3)}.z-depth-3{box-shadow:0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12),0 3px 5px -1px rgba(0,0,0,.3)}.z-depth-5{box-shadow:0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.3)}i{line-height:inherit}i.tiny{font-size:1rem}i.large{font-size:6rem}@media only screen and (max-width:600px){.hide-on-small-only{display:none}}@media only screen and (max-width:1239px){.hide-on-med-and-down{display:none}}.page-footer{padding-top:20px;background-color:#b71c1c}.page-footer .footer-copyright{overflow:hidden;min-height:50px;display:flex;align-items:center;padding:10px 0;color:rgba(255,255,255,.8);background-color:rgba(51,51,51,.08)}table,td{border:none}table{width:100%;display:table}table.striped>tbody>tr:nth-child(odd){background-color:#f2f2f2}table.striped>tbody>tr>td{border-radius:0}td{padding:15px 5px;display:table-cell;text-align:left;vertical-align:middle;border-radius:2px}.collection{margin:.5rem 0 1rem 0;border:1px solid #e0e0e0;border-radius:2px;overflow:hidden;position:relative}.collection .collection-item{background-color:#fff;line-height:1.5rem;padding:10px 20px;margin:0;border-bottom:1px solid #e0e0e0}.collection .collection-item.avatar{min-height:84px;padding-left:72px;position:relative}.collection .collection-item.avatar .circle{position:absolute;width:42px;height:42px;overflow:hidden;left:15px;display:inline-block;vertical-align:middle}.collection .collection-item.avatar i.circle{font-size:18px;line-height:42px;color:#fff;background-color:#999;text-align:center}.collection .collection-item.avatar .title{font-size:16px}.collection .collection-item.avatar p{margin:0}.collection .collection-item:last-child{border-bottom:none}.collection.with-header .collection-header{background-color:#fff;border-bottom:1px solid #e0e0e0;padding:10px 20px}.collection.with-header .collection-item{padding-left:30px}.collection.with-header .collection-item.avatar{padding-left:72px}.hide{display:none}.left{float:left}.circle{border-radius:50%}.material-icons{text-rendering:optimizeLegibility;font-feature-settings:'liga'}.container{margin:0 auto;max-width:1280px;width:90%}@media only screen and (min-width:601px){.container{width:85%}}@media only screen and (min-width:1240px){.container{width:70%}}.section{padding-top:1rem;padding-bottom:1rem}nav{color:#fff;background-color:#b71c1c;width:100%;height:56px;line-height:56px}nav a{color:#fff}nav i,nav i.material-icons{display:block;font-size:24px;height:56px;line-height:56px}nav .nav-wrapper{position:relative;height:100%}@media only screen and (min-width:1240px){nav a.button-collapse{display:none}}nav .button-collapse{float:left;position:relative;z-index:1;height:56px;margin:0 18px 0 0}nav .button-collapse i{height:56px;line-height:56px}nav ul{margin:0}nav ul li{transition:background-color .3s;float:left;padding:0}nav ul a{transition:background-color .3s;font-size:1rem;color:#fff;display:block;padding:0 10px;cursor:pointer}nav ul a.btn-large{margin-top:-2px;margin-left:10px;margin-right:10px}nav ul a:hover{background-color:rgba(0,0,0,.2)}nav ul.left{float:left}@media only screen and (min-width:601px){nav,nav .nav-wrapper i,nav a.button-collapse,nav a.button-collapse i{height:64px;line-height:64px}}a{text-decoration:none}html{line-height:1.5;font-family:Roboto,sans-serif;font-weight:400;color:rgba(0,0,0,.87)}@media only screen and (min-width:0){html{font-size:14px}}@media only screen and (min-width:1239px){html{font-size:14.5px}}@media only screen and (min-width:1200px){html{font-size:15px}}h4,h5{font-weight:400;line-height:1.1}h4{font-size:2.28rem;line-height:110%;margin:1.14rem 0 .912rem 0}h5{font-size:1.64rem;line-height:110%;margin:.82rem 0 .656rem 0}.page-footer .footer-copyright{font-weight:300}.flow-text{font-weight:300}@media only screen and (min-width:360px){.flow-text{font-size:1.2rem}}@media only screen and (min-width:390px){.flow-text{font-size:1.224rem}}@media only screen and (min-width:420px){.flow-text{font-size:1.248rem}}@media only screen and (min-width:450px){.flow-text{font-size:1.272rem}}@media only screen and (min-width:480px){.flow-text{font-size:1.296rem}}@media only screen and (min-width:510px){.flow-text{font-size:1.32rem}}@media only screen and (min-width:540px){.flow-text{font-size:1.344rem}}@media only screen and (min-width:570px){.flow-text{font-size:1.368rem}}@media only screen and (min-width:600px){.flow-text{font-size:1.392rem}}@media only screen and (min-width:630px){.flow-text{font-size:1.416rem}}@media only screen and (min-width:660px){.flow-text{font-size:1.44rem}}@media only screen and (min-width:690px){.flow-text{font-size:1.464rem}}@media only screen and (min-width:720px){.flow-text{font-size:1.488rem}}@media only screen and (min-width:750px){.flow-text{font-size:1.512rem}}@media only screen and (min-width:780px){.flow-text{font-size:1.536rem}}@media only screen and (min-width:810px){.flow-text{font-size:1.56rem}}@media only screen and (min-width:840px){.flow-text{font-size:1.584rem}}@media only screen and (min-width:870px){.flow-text{font-size:1.608rem}}@media only screen and (min-width:900px){.flow-text{font-size:1.632rem}}@media only screen and (min-width:930px){.flow-text{font-size:1.656rem}}@media only screen and (min-width:960px){.flow-text{font-size:1.68rem}}@media only screen and (max-width:360px){.flow-text{font-size:1.2rem}}.tabs{background-color:#fff;margin:0 auto}.tabs .tab{display:inline-block;text-align:center;line-height:48px;height:48px;padding:0;margin:0;text-transform:uppercase;color:rgba(183,28,28,.7)}@media only screen and (max-width:1239px){.tabs{display:flex}.tabs .tab{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1}}.btn,.btn-large{border:none;border-radius:2px;display:inline-block;height:36px;line-height:36px;text-transform:uppercase;vertical-align:middle;-webkit-tap-highlight-color:transparent}.btn-floating:disabled,.btn-large:disabled,.btn:disabled{pointer-events:none;background-color:#dfdfdf;box-shadow:none;color:#9f9f9f;cursor:default}.btn-floating:disabled:hover,.btn-large:disabled:hover,.btn:disabled:hover{background-color:#dfdfdf;color:#9f9f9f}.btn,.btn-floating,.btn-large{outline:0}.btn i,.btn-floating i,.btn-large i{font-size:1.3rem;line-height:inherit}.btn-floating:focus,.btn-large:focus,.btn:focus{background-color:#e59006}.btn,.btn-large{text-decoration:none;color:#fff;background-color:#f9a825;text-align:center;letter-spacing:.5px;transition:.2s ease-out;cursor:pointer}.btn-large:hover,.btn:hover{background-color:#fab23e}.btn-floating{display:inline-block;color:#fff;position:relative;overflow:hidden;z-index:1;width:40px;height:40px;line-height:40px;padding:0;background-color:#f9a825;border-radius:50%;transition:.3s;cursor:pointer;vertical-align:middle}.btn-floating:hover{background-color:#f9a825}.btn-floating:before{border-radius:0}.btn-floating.btn-large{width:56px;height:56px}.btn-floating.btn-large i{line-height:56px}.btn-floating i{width:inherit;display:inline-block;text-align:center;color:#fff;font-size:1.6rem;line-height:40px}.fixed-action-btn{position:fixed;right:23px;bottom:23px;padding-top:15px;margin-bottom:0;z-index:998}.btn-large{height:54px;line-height:54px}.btn-large i{font-size:1.6rem}/*!
		 * Waves v0.6.0
		 * http://fian.my.id/Waves
		 *
		 * Copyright 2014 Alfiana E. Sibuea and other contributors
		 * Released under the MIT license
		 * https://github.com/fians/Waves/blob/master/LICENSE
		 */.waves-effect{position:relative;cursor:pointer;display:inline-block;overflow:hidden;user-select:none;-webkit-tap-highlight-color:transparent;vertical-align:middle;z-index:1;transition:.3s ease-out}::-webkit-input-placeholder{color:#d1d1d1}:-moz-placeholder{color:#d1d1d1}::-moz-placeholder{color:#d1d1d1}:-ms-input-placeholder{color:#d1d1d1}[type=radio]:not(:checked){position:absolute;left:-9999px;opacity:0}[type=radio]:not(:checked)+label{position:relative;padding-left:35px;cursor:pointer;display:inline-block;height:25px;line-height:25px;font-size:1rem;transition:.28s ease;-khtml-user-select:none;user-select:none}[type=radio]:not(:checked)+label:after,[type=radio]:not(:checked)+label:before{border-radius:50%}[type=radio]:not(:checked)+label:after,[type=radio]:not(:checked)+label:before{border:2px solid #5a5a5a}[type=radio]:not(:checked)+label:after{transform:scale(0)}[type=radio]:disabled:not(:checked)+label:before{background-color:transparent;border-color:rgba(0,0,0,.26)}[type=radio]:disabled:not(:checked)+label:before{border-color:rgba(0,0,0,.26)}[type=checkbox]:not(:checked){position:absolute;left:-9999px;opacity:0}[type=checkbox]:not(:checked):disabled+label:before{border:none;background-color:rgba(0,0,0,.26)}[type=checkbox].filled-in:not(:checked)+label:before{width:0;height:0;border:3px solid transparent;left:6px;top:10px;-webkit-transform:rotateZ(37deg);transform:rotateZ(37deg);-webkit-transform-origin:20% 40%;transform-origin:100% 100%}[type=checkbox].filled-in:not(:checked)+label:after{height:20px;width:20px;background-color:transparent;border:2px solid #5a5a5a;top:0;z-index:0}[type=checkbox].filled-in:disabled:not(:checked)+label:before{background-color:transparent;border:2px solid transparent}[type=checkbox].filled-in:disabled:not(:checked)+label:after{border-color:transparent;background-color:#bdbdbd}input[type=checkbox]:checked:not(:disabled).tabbed:focus~.lever::after,input[type=checkbox]:checked:not(:disabled)~.lever:active::after{box-shadow:0 1px 3px 1px rgba(0,0,0,.4),0 0 0 15px rgba(249,168,37,.1)}input[type=checkbox]:not(:disabled).tabbed:focus~.lever::after,input[type=checkbox]:not(:disabled)~.lever:active:after{box-shadow:0 1px 3px 1px rgba(0,0,0,.4),0 0 0 15px rgba(0,0,0,.08)}.side-nav{margin:0;height:auto;background-color:#fff}.side-nav li{float:none;line-height:48px}.side-nav li>a{color:rgba(0,0,0,.87);display:block;font-size:14px;font-weight:500;height:48px;line-height:48px}.side-nav li>a:hover{background-color:rgba(0,0,0,.05)}.side-nav li>a.btn-large{margin:10px 15px}.side-nav li>a.btn-large{color:#fff}.side-nav li>a.btn-large:hover{background-color:#fab23e}.side-nav li>a>i,.side-nav li>a>i.material-icons{float:left;height:48px;line-height:48px;margin:0 32px 0 0;width:24px;color:rgba(0,0,0,.54)}@media only screen and (max-width:1239px){.side-nav a{padding:0 0 0 16px}}/*!
		 * Default mobile-first, responsive styling for pickadate.js
		 * Demo: http://amsul.github.io/pickadate.js
		 */
		</style>
    </head>

    <body>