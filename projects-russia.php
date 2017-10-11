<?php include '.head.php';?>

<!-- Navigation Bar -->
<?php include '.top_nav_projects_active.php';?>

<!-- AMP Sidebar -->
<?php include '.side_bar.php';?>

<!-- Share floating button -->
<?php include '.share-floating-button.php';?>


<!-- MAIN CONTENT -->

<!-- Tabs -->
<amp-selector role="tablist" layout="container" class="amp-tab-container tabs">
	
	<div role="tab" class="tab-button tab" option="a">Kazakhstan</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.projects--kazakhstan.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="b">Ukraine</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.projects--ukraine.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" selected option="c">Russia</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.projects--russia.php';?>
	</div>
	
</amp-selector>

<!-- END OF MAIN CONTENT -->
		


<?php include '.footer.php';?>