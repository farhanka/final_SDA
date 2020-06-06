<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/d02c2604b8.js" crossorigin="anonymous"></script>
    <script src=".\assets\bootstrap\js\bootstrap.min.js"></script>
	<script src=".\assets\bootstrap\js\jquery.min.js"></script>
	<link href=".\assets\css\style.css" rel="stylesheet">

	<title>SDA</title>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand font-weight-bold" href="#">S.D.A</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="cari.php">Pencarian</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="about.php">Tentang </a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<!-- End Navbar -->
	<main>
		<div class="container text-center my-3">
				<h1>Penulis artikel pada situs detik.com</h1>
			<div class="row">
				<div class="col">
					<div class="result d-flex justify-content-center align-items-center mt-4"></div>
				</div>
			</div>
		</div>
	</main>

        <script>

			let loading = '<img class="text-center" alt="loading......" class="ml-auto" src="assets\\img\\infinity.gif" width="10%">'
			$(".result").html(loading);
			loadData();

			function loadData(){
				$.get('core/get.php?q=show', function(data){
					$(".result").html(data);
				});
			}
			
        </script>

		<!-- Footer -->
	    <div class="container-fluid bg-dark copyright">
        Copyright &copy 2020 Struktur Data dan Algoritma
    	</div>

</body>
</html>
