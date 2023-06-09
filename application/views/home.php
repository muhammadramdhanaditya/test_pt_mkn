<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="style.css" />

	<title>Contoh Web</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="#">Contoh Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#">Pricing</a>
					<a class="nav-link" href="#">Features</a>
					<a class="nav-link" href="#">About</a>
					<a class="btn btn-primary tombol" href="#">Join Us</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">
				Get work done <span>faster</span><br />
				and <span>better</span> with us
			</h1>
			<a href="" class="btn btn-primary tombol">Our Work</a>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10 info-panel">
				<div class="row">
					<div class="col-lg">
						<img src="/assets/image/employee.png" alt="employee" class="float-left" />
						<h4>24 Hours</h4>
						<p>Selalu ada karena 24 jam.</p>
					</div>
					<div class="col-lg">
						<img src="/assets/image/hires.png" alt="hires" class="float-left" />
						<h4>high-res</h4>
						<p>Tinggi bat dah pokoknya tinggi.</p>
					</div>
					<div class="col-lg">
						<img src="/assets/image/security.png" alt="security" class="float-left" />
						<h4>security</h4>
						<p>Keamanan penting bagi kita semua.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row workingspace">
			<div class="col-lg">
				<img src="/assets/image/workingspace.png" alt="workingspace" class="img-fluid" />
			</div>
			<div class="col-lg">
				<h3>You <span>work</span> like at <span>home</span></h3>
				<p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
				<a href="" class="btn btn-primary tombol">Gallery</a>
			</div>
		</div>
		<section class="testimonial">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h5>"Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</h5>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 justify-content-center d-flex">
					<figure class="figure">
						<img src="/assets/image/img1.png" class="figure-img img-fluid rounded-circle" alt="img1" />
					</figure>
					<figure class="figure">
						<img src="/assets/image/img2.png" class="figure-img img-fluid rounded-circle utama" alt="img2" />
						<figcaption class="figure-caption">
							<h5>Susanti</h5>
							<p>Teman Meimei</p>
						</figcaption>
					</figure>
					<figure class="figure">
						<img src="/assets/image/img3.png" class="figure-img img-fluid rounded-circle" alt="img3" />
					</figure>
				</div>
			</div>
		</section>
		<div class="row footer">
			<div class="col text-center">
				<p>2021 All Right Reserved by Muhammad Ramdhan Aditya</p>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>