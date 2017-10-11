<?php include '.head.php';?>

<!-- Navigation Bar -->
<?php include '.top_nav_help_active.php';?>

<!-- AMP Sidebar -->
<?php include '.side_bar.php';?>

<!-- Share floating button -->
<?php include '.share-floating-button.php';?>


<!-- MAIN CONTENT -->

<!-- Tabs -->
<amp-selector role="tablist" layout="container" class="amp-tab-container tabs">
	
	<div role="tab" class="tab-button tab" selected option="a">Donating</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.how-you-can-help--donating.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="b">Fundraising</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.how-you-can-help--fundraising.php';?>
	</div>
	
	<div role="tab" class="tab-button tab" option="c">Volunteering</div>
	<div role="tabpanel" class="tabContent">
		<?php include '.how-you-can-help--volunteering.php';?>
	</div>
	
</amp-selector>

<!-- END OF MAIN CONTENT -->



<?php include '.footer.php';?>