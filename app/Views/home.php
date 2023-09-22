<?php include('templates/main_header.php'); ?>

<div class="container section">

	<div class="row">
		<div class="col-lg-8 text-center mx-auto">
			<a class="navbar-brand" href="/">
				<img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
			</a>

			<h1 class="text-white mb-3">CSIR TECHNOLOGIES</h1>
			<p class="text-white mb-4">Find technologies Generated from Research done within the CSIR</p>
			<div class="position-relative">
				<form method="get" action="/search">
					<div class="wrapper">
						<div class="search_box">
							<div class="dropdown">

							</div>
							<div class="search_field">
								<input type="text" class="input" placeholder="Search" name="query">
								<button type="submit"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</div>
				</form>

				<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
			</div>
		</div>
	</div>
	</header>
	<!-- /header -->
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>




	<script src="assets/script.js"></script>

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Find Technologies by subject</h2>



					<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
				</div>

				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="/maincropvarieties" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Crop Varieties</h3>
						<p class="mb-0">Find information about different types of crops and their seasons</p>
					</a>
				</div>

				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="/mainmarketable" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Marketable Technologies</h3>
						<p class="mb-0">Find information on various technologies on the market that would be of great help</p>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="/mainprocessedfoods" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Processed Foods </h3>
						<p class="mb-0">Find information about different types of Foods</p>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="/mainothertechnologies" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-package icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Other Technologies</h3>
						<p class="mb-0">Various technologies ranging from agriculture to industrail</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- call to action -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						<h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
						<p class="mb-4"> You can contact us directly by sending us a message
							.</p>
						<a href="/contact" class="btn btn-primary">contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /call to action -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">

				</div>
				<div class="col-md-4 text-md-right text-center">
					<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="http://facebook.com/insti.csir100"><i class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://twitter.com/csir_insti100"><i class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://www.instagram.com/csir_insti100/"><i class="ti-instagram"></i></a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<style>
		.navbar-nav {
			padding: 50px;
		}
	</style>

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
	</body>

	</html>