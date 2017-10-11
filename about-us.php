<?php include '.head.php';?>

<!-- Navigation Bar -->
<?php include '.top_nav_about-us_active.php';?>

<!-- AMP Sidebar -->
<?php include '.side_bar.php';?>

<!-- Share floating button -->
<?php include '.share-floating-button.php';?>


<!-- MAIN CONTENT -->

<!-- Tabs -->
<amp-selector role="tablist" layout="container" class="amp-tab-container tabs">
	
	<div role="tab" class="tab-button tab flo" selected option="a">Who We Are</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.about-us--who-we-are.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="b">History</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.about-us--history.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="c">What We Do</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.about-us--what-we-do.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="d">Partners</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.about-us--partners.php';?>
	</div>
	
</amp-selector>

<!-- END OF MAIN CONTENT -->



<?php include '.footer.php';?>