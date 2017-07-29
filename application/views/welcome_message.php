<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>AutocompleteQueryScript</title>

		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<script src="/js/jquery-1.12.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/autocomplete.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	  </head>

	<body>
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1> Welcome to Autocomplete Query Script! </h1>
				</div> <!-- ./ col-lg-12 -->
			</div> <!-- ./ row -->

			<hr>

			<div class="row">
				<div class="col-lg-6">

					<div class="form-group">
			            <input type="hidden" id="hiddenCity" name="formulatoCommerciale1" value="" />
			            <div class="dropdown">   
			                <input type="text" id="cityText" autocomplete="off" class="form-control" placeholder="Insert city name" data-id="" value="">     
			                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" id="dropdownCity"></ul>
			            </div>
			        </div>

				</div> <!-- ./ col-lg-6 -->

				<div class="col-lg-6">
					<p> <b> ID: </b> <span id="tableCityID" /></p>
					<p> <b> Name: </b> <span id="tableCityName" /></p>
				</div>
			</div> <!-- ./ row -->

			<hr>

			<div class="row">
				<div class="col-lg-8">
					<h2> How it work </h2>
					<p> When user type in the textbox, a keyup event is triggered from autocomplete.js.</p>
					<p> autocomplete.js launch an ajax request to Welcome/getCity in order to execute a query to get all cities that start with the input text given. </p>
					<p> getCity() method return a json format data in order to be parsed by autocomplete.js an added into a textbox. </p>
				</div> <!-- ./ col-lg-8 -->
				<div class="col-lg-4">
					<p> 
						Files: 
							<ul>
								<li> /application/controller/welcome </li>
								<li> /application/view/welcome_message </li>
								<li> /js/autocomplete.js </li>
								<li> /sql/cities.sql </li>
							</ul>
					</p>

					<p> 
						Libraries: 
							<ul>
								<li> /js/jquery-1.12.3.min.js </li>
								<li> /js/bootstrap.min.js </li>
								<li> /js/autocomplete.js </li>
							</ul>
					</p>
				</div> <!-- ./ col-lg-4 -->
			</div> <!-- ./ row -->

		</div> <!-- ./ container -->

	</body>
</html>