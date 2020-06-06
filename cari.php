<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/d02c2604b8.js" crossorigin="anonymous"></script>
            <script src=".\assets\bootstrap\js\bootstrap.min.js"></script>
	        <script src=".\assets\bootstrap\js\jquery.min.js"></script>
            <link href=".\assets\css\style.css" rel="stylesheet">
            <title>Pencarian</title>
    </head>
    <body>
      	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand font-weight-bold" href="index.php">S.D.A</a>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="input-group mb-3 mt-5 w-50 mx-auto">
                        <input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control input" placeholder="Nama Editor" type="text">
                            <div class="input-group-append">
                                <a class="btn btn-primary search text-white" id="button-addon2" type="button">
                                    <li class="fas fa-search"></li>
                                </a>
                            </div>
                        </input>
                    </div>
                    <hr class="my-4">
                    </hr>
                    <div class="result text-center">
                    </div>
                </div>
            </div>
        </div>
    </main>

        <div class="container-fluid bg-dark copyright">
        Copyright &copy 2020 Struktur Data dan Algoritma
        </div>
        
        <script>
            $(".search").click(function(){
                let loading = '<img alt="loading......" class="ml-auto" src="assets\\img\\infinity.gif" width="10%">'
                $(".result").html(loading);
            loadData();
        });

        function loadData(){
            $.get('core/get.php?q="'+$(".input").val()+'"', function(data){
                $(".result").html(data);
            });
        }
        </script>
    </body>
</html>
