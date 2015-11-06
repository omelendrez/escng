<!DOCTYPE html>
<!-- HTML5 lingo, XHTML is dead -->

<?php

$page = $_GET["page"];
$style = file_exists("static/css/{$page}.css");
$script = file_exists("static/js/{$page}.js");

?>

<html lang="en-gb">
	
	<head>
		
		<title>Enterprise Systems Consultancy Ltd.</title>
		<meta charset="utf-8">
		<meta name="description" content="Enterprise Systems Consultancy Ltd. A 100% Nigerian IT solutions company that specializes in the provision and delivery of industry-standard IT infrastructure, innovative and interactive database-driven web application solutions and executive IT training and workshops">
    	<meta name="keywords" content="escng,erp,mis,hrms,hris,training,programming,payroll,database,applications,blackberry,android,mobile applications,consultancy,axis,nigeria">
    	<meta name="robots" content="index, follow">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	
    	<!-- Good favicon: idiot browsers use default ico at root if they can't manage -->
		<link rel="shortcut icon" href="favicon.ico">
		
		<!-- Base styles: bootstrap and layout -->
		<link rel="stylesheet" href="static/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" href="static/css/layout.css" media="screen">
		
		<!-- Page styles -->
		<?php
			if ($style) {
				echo '<link rel="stylesheet" href="static/css/' . $page . '.css" media="screen">';
			}
		?>
		
	</head>
	
	<body>
		<div class="container">
			<!-- navbar: included in every page -->
			<div id="navbar" class="navbar navbar-inverse">
				
				<div class="navbar-inner">
					<a class="logo" href="home" title="Homepage">
						<div class="words">Your IT partner<br>to success</div>
					</a>	
					<ul class="nav">
	                    <li><a href="about">ABOUT US</a></li>
	                    <li><a href="services">SERVICES</a></li>
	                    <li><a href="solutions">SOLUTIONS</a></li>
	                    <li><a href="contact">CONTACT US</a></li>
	                </ul>
	                <form class="navbar-search pull-right tall" action="search" method="get">
	                	<input class="search-query" type="text" name="q" placeholder="Search...">
	                </form>
	        	</div>
	       	</div>

			<!-- Page contents --> 
			<?php include_once("{$page}.html"); ?>
			
			<!-- Footer: included in every page -->
			<hr>
			<div id="footer" class="container">
				<div id="quick-contact" class="pull-right">
					<dl class="small">
						<dt><img src="static/img/envelope.png"></dt><dd><a href="mailto:info@escng.com">info@escng.com</a></dd>
						<dt><img src="static/img/phone.png"></dt><dd>+234 817 722 8999</dd>
					</dl>
				</div>
				<div id="signature">
					<p>
						&copy; 2014 <a href="#">www.escng.com</a><br>
						<strong>Enterprise Systems Consultancy Ltd.</strong><br>
						<em>Your IT partner to success</em>
					</p>
				</div>
			</div>
			
		</div>
		
		<!-- Base scripts: jquery and bootstrap effects -->
		<script src="static/js/jquery.min.js" type="text/javascript"></script>
		<script src="static/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="static/js/scripts.js" type="text/javascript"></script>
		
		<!-- Page scripts -->
		<?php
			if ($script) {
				echo '<script src="stylesheet" href="static/js/' . $page . '.js" media="screen">';
			}
		?>
		
	</body>
	
</html>
