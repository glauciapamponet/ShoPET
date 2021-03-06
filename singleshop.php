<?php
    include_once "connection.php";
    session_start();

    $idprod = $_GET["idproduto"];
    //echo $idprod;
    $result = mysqli_query($connect, 'SELECT prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage, prod.desc
                  FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                  prod.idpetiano = pt.idpetiano AND prod.idproduto = "'.$idprod.'"');

    $resprod = mysqli_fetch_array($result);
	$_SESSION['idprod'] = $idprod;
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
    <title>ShoPET</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/LogoIcone.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

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

	<!-- Color CSS -->
	<link rel="stylesheet" href="css/color/color1.css">

	<link rel="stylesheet" href="#" id="colors">

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
                      <li><a href="cat.php?nomecat=Acess??rios">Acess??rios</a></li>
											<li><a href="cat.php?nomecat=Alimenta????o">Alimenta????o</a></li>
											<li><a href="cat.php?nomecat=Beleza">Beleza</a></li>
											<li><a href="cat.php?nomecat=Cargos">Cargos</a></li>
											<li><a href="cat.php?nomecat=Contas">Contas</a></li>
											<li><a href="cat.php?nomecat=Decora????o">Decora????o</a></li>
											<li><a href="cat.php?nomecat=Eletr??nicos">Eletr??nicos</a></li>
											<li><a href="cat.php?nomecat=Escrit??rio">Escrit??rio</a></li>
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
  											<li><a href="pet.php?nomepetiano=Jo??o">Jo??o</a></li>
  											<li><a href="pet.php?nomepetiano=Marin">Marin</a></li>
  											<li><a href="pet.php?nomepetiano=Michelly">Michelly</a></li>
  											<li><a href="pet.php?nomepetiano=PET">PET</a></li>
  											<li><a href="pet.php?nomepetiano=Sena">Sena</a></li>
  											<li><a href="pet.php?nomepetiano=Stefany">Stefany</a></li>
  											<li><a href="pet.php?nomepetiano=Tha??s">Tha??s</a></li>
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
													<form action="busca.php">
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
							<div id="cartExibition" class="right-bar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href=""><?php echo $resprod["nomeprod"] ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Shop Single -->
		<section class="shop single section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-lg-6 col-12">
										<!-- Product Slider -->
										<div class="product-gallery">
											<!-- Images slider -->
											<div class="flexslider-thumbnails">
												<ul class="slides">
													<li data-thumb="<?php echo $resprod["pathimage"];?>" rel="adjustX:10, adjustY:">
														<img src="<?php echo $resprod["pathimage"];?>" alt="#">
													</li>
												</ul>
											</div>
											<!-- End Images slider -->
										</div>
										<!-- End Product slider -->
									</div>
									<div class="col-lg-6 col-12">
										<div class="product-des">
											<!-- Description -->
											<div class="short">
                        <?php echo '<h4>'.$resprod["nomeprod"].'</h4>'; ?>
												<p class="price">
                          <span class="discount">
                            <?php echo 'R$'.number_format($resprod["precoprod"], 2, ',', ' '); ?>
                          </span>
                          <!-- <s>$80.00</s>  -->
                        </p>
												<p class="description">Vendido e entregue por <strong>ShoPET</strong></p>
											</div>
											<!--/ End Description -->
											<!-- Color -->

											<!--/ End Size -->
											<!-- Product Buy -->
											<form class = 'form' method='post' action='PHP/addCart.php'>
												<div class="product-buy" style="display:block;">
													<div class="quantity">
														<h6>Quantidade :</h6>
														<!-- Input Order -->
														<div class="input-group">
															<div class="button minus">
																<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant">
																	<i class="ti-minus"></i>
																</button>
															</div>
															<input type="text" name="quant" class="input-number"  data-min="1" data-max="1000" value="1">
															<div class="button plus">
																<button type="submit" class="btn btn-primary btn-number" data-type="plus" data-field="quant">
																	<i class="ti-plus"></i>
																</button>
															</div>
														</div>
														<!--/ End Input Order -->
													</div>

													<p style="display: inline-block;">Vendido em unidades!</p>
													<br><br>
													<div class="add-to-cart">
														<button class="btn adiciona" type='submit'>Colocar na sacola</a>
													</div>
													<p class="cat">Categoria/Petiano :<a href="cat.php?nomecat=<?php echo $resprod["nomecat"]; ?>">
													<?php echo $resprod["nomecat"]; ?></a>,
													<a href="pet.php?nomepetiano=<?php echo $resprod["nomepetiano"]; ?>">
														<?php echo $resprod["nomepetiano"]; ?>
													</a></p>
													<p class="availability">Disponibilidade : Limitada</p>
												</div>
											</form>
											<!--/ End Product Buy -->
                      					<div class="row">
      									<div class="col-12">
      										<div class="product-info">
      											<div class="nav-main">
      												<!-- Tab Nav -->
      												<ul class="nav nav-tabs" id="myTab" role="tablist">
      													<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descri????o</a></li>
      													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Coment??rios</a></li>
      												</ul>
      												<!--/ End Tab Nav -->
      											</div>
      											<div class="tab-content" id="myTabContent">
      												<!-- Description Tab -->
      												<div class="tab-pane fade show active" id="description" role="tabpanel">
      													<div class="tab-single">
      														<div class="row">
      															<div class="col-12">
      																<div class="single-des">
      																	<p><?php echo nl2br($resprod["desc"]); ?></p>
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      												<!--/ End Description Tab -->
      												<!-- Reviews Tab -->

      												<div class="tab-pane fade" id="reviews" role="tabpanel">
                                <br>Em produ????o.
      													<div class="tab-single review-panel">
      													</div>
      												</div>
      												<!--/ End Reviews Tab -->
      											</div>
      										</div>
      									</div>
      								</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
		</section>
		<!--/ End Shop Single -->

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
  							<p class="text">S?? aqui voc?? encontra produtos exclusivos relacionados aos petianos e ex-petianos do PET-SI!</p>
  							<p class="call">Alguma d??vida, sugest??o ou reclama????o? <br> Ligue para o SAC do ShoPET:<span><a href="tel:11912345678">11 912345678</a></span></p>
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
  									<li>Cidade/UF: S??o Paulo/SP</li>
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
  								<p>Copyright ?? 2021 ShoPET - Todos os direitos reservados.</p>
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


	<script>
	$(document).ready(function(){
		$(document).on('click', '.adiciona', function(){
			var id = $_GET['idproduto'];
			var action = 'act';
			$.ajax({
				url:"PHP/addCart.php",
				method:"POST",
				data:{action: action, id:id},
				success:function(data){
				//coloca o q vc quer q aconte??a se der b??o
				}
			});
		});
	});
	</script>
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
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
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
    });
  </script>
</body>
</html>
