<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="UTF-8" />
	<meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toolkit</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='css/toolkit.css'/>
	<link rel='stylesheet' type='text/css' href='js/chosen_v1.1.0/chosen.min.css'/>

	<!-- Remove jQuery if not needed -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
</head>

<body ontouchstart="">
	<div class="container">
		<div class="toolkit-view-switch">
			<button class="btn-small secondary" id="tablet-switch">Tablet view</button>
			<button class="btn-small secondary" id="mobile-switch">Mobile view</button>
		</div>
		<!-- Begin Header -->
		<?php include('includes/header.php') ?>

		<h1>New Learning Vision Toolkit</h1>

		<!-- Start Typography -->
		<?php include('includes/typography.php') ?>

		<!-- Begin Colors -->
		<?php include('includes/colors.php') ?>

		<!-- Start Navigation -->
		<?php include('includes/navigation-patterns.php') ?>

		<!-- Start home page module toggles -->
		<?php include('includes/home-page-modules.php') ?>

		<!-- Start lessons/list items -->
		<?php include('includes/lessons.php') ?>

		<!-- Start forms -->
		<?php include('includes/forms.php') ?>

		<!-- Begin Tables -->
		<?php include('includes/tables.php') ?>

		<!-- Begin alerts -->
		<?php include('includes/alerts.php') ?>

		<!-- Begin Icons -->
		<?php include('includes/icons.php') ?>

		<!-- Begin Footer -->
		<?php include('includes/footer.php') ?>

	</div>
	<script src="js/prototype.js"></script>
</body>