<!doctype html>

<head>
	<title> Projekt strony internetowej </title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width , initial-scale=1" />
	<link rel="stylesheet" href="include/style.css">
	<meta charset="utf-8">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<a class="navbar-brand" href="index.php">MainPage</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Strona główna</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=userList">Lista użytkowników</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=gallery">Galeria</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<section class="container section">
		<div class="row">
			<div class="col-12 col-md-8">
				<article>
					<?php 
					if(isset($_GET['page'])) {
						$p = $_GET['page'];
						if($p != '') {
							$page = "include/pages/".$p.".php";
							if(file_exists($page)) include_once($page); 
							else echo "Page not found."; 
						}
					} else { ?>
						<h1>Strona główna</h1>
						<p>Ewelina Niemier, indeks: 145974</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum.</p>
					<?php } ?> 
				</article>
			</div>
			<div class="col-12 col-md-4 lower">
				<aside>
					<div class="aside-title">Inne linki</div>
						<ul class="link-menu">
							<li>Pierwszy</li>
							<li>Drugi</li>
							<ul class="link-sub-menu">
								<li>Pierwszy drugi</li>
								<li>Drugi drugi</li>
								<li>Trzeci drugi</li>
							</ul>
							<li>Trzeci</li>
							<li>Czwarty</li>
						</ul>
				</aside>
				<aside>
					<div class="aside-title">Extra tekst</div>
					<div class="extra-info">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin, orci nec mollis suscipit.Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum
					</div>
				</aside>
			</div>
		</div>
	</section>
<footer class="container footer">
	<div class="row grey">
		<div class="col-12 col-sm-6 col-md-3 foot">
			<div class="foot-title">Lorem Ipsum</div>
			<p class="foot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum.</p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 foot">
			<div class="foot-title">Lorem Ipsum</div>
			<p class="foot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum. </p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 foot">
			<div class="foot-title">Lorem Ipsum</div>
			<p class="foot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem sit amet est dictum lacinia. Proin sagittis ut purus et fermentum. </p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 foot">
			<div class="foot-title">Lorem Ipsum</div>
			<p class="foot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem. </p>
		</div>
	</div>
	<div class="row black">
		<div class="col-sm-12 foot-last">@2022 Ewelina Niemier</div>
	</div>
</footer>

</body>