<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!-- Favicon -->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

	<!-- Main Stylesheet -->
	<link href="assets/style.css" rel="stylesheet" media="screen" />
	<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>

<body>
<style>
		.navbar-nav {
			padding: 50px;
		}
	</style>

	<!-- header -->
	<header class="banner overlay bg-cover" data-background="images/banner.jpg">
	

	<nav class="navbar navbar-expand-md navbar-dark">
  
			<div class="container">
				<a class="navbar-brand px-2" href="index.html"></a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="/">Home</a>
						</li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Technologies
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/maincropvarieties">Crop Varieties</a>
                                <a class="dropdown-item" href="/mainmarketable">Marketable Technologies</a>
                                <a class="dropdown-item" href="/mainprocessedfoods">Processed Foods</a>
                                <a class="dropdown-item" href="/mainothertechnologies">Other Techologies</a>
                            </div>
                        </li>
                       
						<li class="nav-item">
							<a class="nav-link text-dark" href="/faq">Faq</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="/contact">contact</a>
						</li>
										
					</ul>

					
				</div>
				
			</div>
		</nav>