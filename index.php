<?php
    include_once "connection.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>ShoPET Testando</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/LogoIcone.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header -->
	<header class="header shop">
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.php"><img src="images/LogoPrincipalCorte.png" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							</div>
							<!--/ End Search Form -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-lg-3">
							<div class="all-category">
								<a class="cat-heading" data-toggle="collapse" href="#collapse" role="button"
									aria-expanded="false" aria-controls="collapse">
									<h3><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIAS</h3>
								</a>
								<ul class="main-category collapse" id="collapse">
									<li><a href="#">Tipos<i class="fa fa-angle-right"
										aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="cat.php?nomecat=Acessórios">Acessórios</a></li>
											<li><a href="cat.php?nomecat=Alimentação">Alimentação</a></li>
											<li><a href="cat.php?nomecat=Beleza">Beleza</a></li>
											<li><a href="cat.php?nomecat=Cargos">Cargos</a></li>
											<li><a href="cat.php?nomecat=Contas">Contas</a></li>
											<li><a href="cat.php?nomecat=Decoração">Decoração</a></li>
											<li><a href="cat.php?nomecat=Eletrônicos">Eletrônicos</a></li>
											<li><a href="cat.php?nomecat=Escritório">Escritório</a></li>
											<li><a href="cat.php?nomecat=Estudos">Estudos</a></li>
											<li><a href="cat.php?nomecat=Instrumentos">Instrumentos</a></li>
											<li><a href="cat.php?nomecat=Moda">Moda</a></li>
										</ul>
									<li>
									<li><a href="#">Petianos<i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="pet.php?nomepetiano=Alexandre">Alexandre</a></li>
											<li><a href="pet.php?nomepetiano=Caio">Caio</a></li>
											<li><a href="pet.php?nomepetiano=Cairolli">Cairolli</a></li>
											<li><a href="pet.php?nomepetiano=Eler">Eler</a></li>
											<li><a href="pet.php?nomepetiano=Furquim">Furquim</a></li>
											<li><a href="pet.php?nomepetiano=Giovanna">Giovanna</a></li>
											<li><a href="pet.php?nomepetiano=Glaucia">Glaucia</a></li>
											<li><a href="pet.php?nomepetiano=João">João</a></li>
											<li><a href="ppet.php?nomepetiano=Marin">Marin</a></li>
											<li><a href="pet.php?nomepetiano=Michelly">Michelly</a></li>
											<li><a href="pet.php?nomepetiano=PET">PET</a></li>
											<li><a href="pet.php?nomepetiano=Sena">Sena</a></li>
											<li><a href="pet.php?nomepetiano=Stefany">Stefany</a></li>
											<li><a href="pet.php?nomepetiano=Thaís">Thaís</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-5 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<div class="search-bar-top">
												<div class="search-bar">
													<form action="busca.php" method="GET">
														<input name="search" id="prodnome" placeholder="Pesquise por produtos aqui"
															type="text" autocomplete="off">
														<button class="btnn" type="submit"><i class="ti-search" ></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div id="cartExibition" class="right-bar">
								<!-- Search Form -->
								<!-- <div class="sinlge-bar">
									<a href="login.php" class="single-icon"><i class="fa fa-user-circle-o"
											aria-hidden="true"></i></a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider" style="background-image: url('images/Banners/large_banner.jpg')">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1>Almofada da Ste</h1>
										<p><span>Oportunidade única!! <br> Nicolas Cage,
											<br> te observando a noite.</span></p>
										<div class="button">
											<a href=singleshop.php?idproduto=1 class="btn">Compre Agora!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="/images/Banners/small_banner_2">
						<div class="content">
							<p>Coleção Tutor</p>
							<h3>Caneca de Tutor </h3>
							<a href="singleshop.php?idproduto=20">Compre Agora</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="/images/Banners/small_banner_1" alt="#">
						<div class="content">
							<p>Coleção PET</p>
							<h3>Cafézinho do <br> PET</h3>
							<a href=singleshop.php?idproduto=35>Compre Agora</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="/images/Banners/small_banner_3" alt="#">
						<div class="content">
							<p>Coleção Tutor</p>
							<h3>Tênis de Tutor <br> Para correr</h3>
							<a href="singleshop.php?idproduto=19">Compre Agora</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->

	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12"></div>
			</div>
		</div>
	</div>

  <!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="/images/Banners/small_banner_4" alt="#">
						<div class="content">
							<p>Coleção Glaucia</p>
							<h3>Porca da Glaucia <br><span> Traumatizante</span></h3>
							<a href="singleshop.php?idproduto=7">Compre Agora!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="/images/Banners/small_banner_5" alt="#">
						<div class="content">
							<p>coleção thais</p>
							<h3>GATA DA THAIS <br> <span>IMPERDÍVEL</span></h3>
							<a href="singleshop.php?idproduto=12" class="btn">Compre Agora!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

  <div class="section"></div>

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.php"><img src="images/LogoFooterCorte.png" alt="#"></a>
							</div>
							<p class="text">Só aqui você encontra produtos exclusivos relacionados aos petianos e ex-petianos do PET-SI!</p>
							<p class="call">Alguma dúvida, sugestão ou reclamação? <br> Ligue para o SAC do ShoPET:<span><a href="tel:11912345678">11 912345678</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Entre em Contato</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Rua: Arlindo Bettio, 1000</li>
									<li>CEP: 03828-000</li>
									<li>Bairro: Vila Guaraciaba</li>
									<li>Cidade/UF: São Paulo/SP</li>
									<li>Email: contato@shopet.com.br</li>
									<li>11 912345678</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-linkedin"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2021 ShoPET - Todos os direitos reservados.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.post("PHP/cartIcon.php", function(exibicao){
          $("#cartExibition").html(exibicao);
      });
      // $.post("PHP/carrousselFETCH.php", function(carrossel){
      //   $("#carrousselFETCH").html(carrossel);
      // });
    });
  </script>
</body>

</html>
