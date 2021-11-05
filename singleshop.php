<?php
    include_once "connection.php";
        session_start();

    $idprod = $_GET["idproduto"];
    //echo $idprod;
    $result = mysqli_query($connect, 'SELECT prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage, prod.desc
                  FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                  prod.idpetiano = pt.idpetiano AND prod.idproduto = "'.$idprod.'"');

    $resprod = mysqli_fetch_array($result);

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
	<link rel="icon" type="image/png" href="images/favicon.png">
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
	<!--<link rel="stylesheet" href="css/color/color2.css">-->
	<!--<link rel="stylesheet" href="css/color/color3.css">-->
	<!--<link rel="stylesheet" href="css/color/color4.css">-->
	<!--<link rel="stylesheet" href="css/color/color5.css">-->
	<!--<link rel="stylesheet" href="css/color/color6.css">-->
	<!--<link rel="stylesheet" href="css/color/color7.css">-->
	<!--<link rel="stylesheet" href="css/color/color8.css">-->
	<!--<link rel="stylesheet" href="css/color/color9.css">-->
	<!--<link rel="stylesheet" href="css/color/color10.css">-->
	<!--<link rel="stylesheet" href="css/color/color11.css">-->
	<!--<link rel="stylesheet" href="css/color/color12.css">-->

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
								<a href="index.php"><img src="images/logo.png" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<!-- Search Form -->
								<!-- <div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit" onclick="redirecionar()"><i class="ti-search" ></i></button>
									</form>
								</div> -->
								<!--/ End Search Form -->
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
											<li><a href="pet/?nomepetiano=Alexandre">Alexandre</a></li>
											<li><a href="pet/?nomepetiano=Caio">Caio</a></li>
											<li><a href="pet/?nomepetiano=Cairolli">Cairolli</a></li>
											<li><a href="pet/?nomepetiano=Eler">Eler</a></li>
											<li><a href="pet/?nomepetiano=Furquim">Furquim</a></li>
											<li><a href="pet/?nomepetiano=Giovanna">Giovanna</a></li>
											<li><a href="pet/?nomepetiano=Glaucia">Glaucia</a></li>
											<li><a href="pet/?nomepetiano=João">João</a></li>
											<li><a href="pet/?nomepetiano=Marin">Marin</a></li>
											<li><a href="pet/?nomepetiano=Michelly">Michelly</a></li>
											<li><a href="pet/?nomepetiano=PET">PET</a></li>
											<li><a href="pet/?nomepetiano=Sena">Sena</a></li>
											<li><a href="pet/?nomepetiano=Stefany">Stefany</a></li>
											<li><a href="pet/?nomepetiano=Thaís">Thaís</a></li>
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
							<div class="right-bar">
								<!-- Search Form -->
								<div class="sinlge-bar">
									<!-- <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
								</div>
								<div class="sinlge-bar">
									<!-- <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
											aria-hidden="true"></i></a> -->
								</div>
								<!-- <div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span
											class="total-count">2</span></a>

									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span>2 Itens</span>
											<a href="#">Ver Carrinho</a>
										</div>
										<ul class="shopping-list">
											<li>
												<a href="#" class="remove" title="Remove this item"><i
														class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img
														src="https://via.placeholder.com/70x70" alt="#"></a>
												<h4><a href="#">Produto</a></h4>
												<p class="quantity">1x - <span class="amount">$00.00</span></p>
											</li>
											<li>
												<a href="#" class="remove" title="Remove this item"><i
														class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img
														src="https://via.placeholder.com/70x70" alt="#"></a>
												<h4><a href="#">Produto</a></h4>
												<p class="quantity">1x - <span class="amount">R$00.00</span></p>
											</li>
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount">R$00.00</span>
											</div>
											<a href="checkout.html" class="btn animate">Finalizar compra</a>
										</div>
									</div> -->
									<!--/ End Shopping Item -->
								<!-- </div> -->
							</div>
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
								<li class="active"><a href="blog-single.html">Shop Details</a></li>
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
													<!-- <li data-thumb="images/Produtos/1.jpg">
														<img src="images/Produtos/1.jpg" alt="#">
													</li>
													<li data-thumb="images/Produtos/1.jpg">
														<img src="images/Produtos/1.jpg" alt="#">
													</li>
													<li data-thumb="images/Produtos/1.jpg">
														<img src="images/Produtos/1.jpg" alt="#"> -->
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
												<!-- <div class="rating-main">
													<ul class="rating">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-half-o"></i></li>
														<li class="dark"><i class="fa fa-star-o"></i></li>
													</ul>
													<a href="#" class="total-review">(102) Review</a>
												</div> -->
												<p class="price">
                          <span class="discount">
                            <?php echo 'R$'.$resprod["precoprod"]; ?>
                          </span>
                          <!-- <s>$80.00</s>  -->
                        </p>
												<p class="description">Vendido e entregue por <strong>ShoPET</strong></p>
											</div>
											<!--/ End Description -->
											<!-- Color -->

											<!--/ End Size -->
											<!-- Product Buy -->
											<div class="product-buy" style="display:block;">
												<div class="quantity">
													<h6>Quantidade :</h6>
													<!-- Input Order -->
													<div class="input-group">
														<div class="button minus">
															<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
																<i class="ti-minus"></i>
															</button>
														</div>
														<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
														<div class="button plus">
															<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
																<i class="ti-plus"></i>
															</button>
														</div>
													</div>

													<!--/ End Input Order -->
												</div>
                        <p style="display: inline-block;">Vendido em unidades!</p>
                        <br><br>
												<div class="add-to-cart">
													<a href="#" class="btn">Colocar no carrinho</a>
													<!-- <a href="#" class="btn min"><i class="ti-heart"></i></a> -->

												</div>
												<p class="cat">Categoria/Petiano :<a href="#"><?php echo $resprod["nomecat"]; ?></a>,
                          <a href="#"><?php echo $resprod["nomepetiano"]; ?></a></p>
												<p class="availability">Disponibilidade : Limitada</p>
											</div>
											<!--/ End Product Buy -->
                      <div class="row">
      									<div class="col-12">
      										<div class="product-info">
      											<div class="nav-main">
      												<!-- Tab Nav -->
      												<ul class="nav nav-tabs" id="myTab" role="tablist">
      													<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descrição</a></li>
      													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Comentários</a></li>
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
      																<!-- <div class="single-des">
      																	<p>Suspendisse consequatur voluptates lorem nobis accumsan natus mattis. Optio pede, optio qui metus, delectus! Ultricies impedit, minus tempor fuga, quasi, pede felis commodo bibendum voluptas nisi? Voluptatem risus tempore tempora. Quaerat aspernatur? Error praesent laoreet, cras in fames hac ea, massa montes diamlorem nec quaerat, quos occaecati leo nam aliquet corporis, ab recusandae parturient, etiam fermentum, a quasi possimus commodi, mollis voluptate mauris mollis, quisque donec</p>
      																</div> -->
      																<!-- <div class="single-des">
      																	<h4>Product Features:</h4>
      																	<ul>
      																		<li>long established fact.</li>
      																		<li>has a more-or-less normal distribution. </li>
      																		<li>lmany variations of passages of. </li>
      																		<li>generators on the Interne.</li>
      																	</ul>
      																</div> -->
      															</div>
      														</div>
      													</div>
      												</div>
      												<!--/ End Description Tab -->
      												<!-- Reviews Tab -->
      												<div class="tab-pane fade" id="reviews" role="tabpanel">
      													<div class="tab-single review-panel">
      														<div class="row">
      															<div class="col-12">
      																<div class="ratting-main">
      																	<div class="avg-ratting">
      																		<h4>4.5 <span>(Overall)</span></h4>
      																		<span>Based on 1 Comments</span>
      																	</div>
      																	<!-- Single Rating -->
      																	<div class="single-rating">
      																		<div class="rating-author">
      																			<img src="images/comments1.jpg" alt="#">
      																		</div>
      																		<div class="rating-des">
      																			<h6>Naimur Rahman</h6>
      																			<div class="ratings">
      																				<ul class="rating">
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star-half-o"></i></li>
      																					<li><i class="fa fa-star-o"></i></li>
      																				</ul>
      																				<div class="rate-count">(<span>3.5</span>)</div>
      																			</div>
      																			<p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
      																		</div>
      																	</div>
      																	<!--/ End Single Rating -->
      																	<!-- Single Rating -->
      																	<div class="single-rating">
      																		<div class="rating-author">
      																			<img src="images/comments2.jpg" alt="#">
      																		</div>
      																		<div class="rating-des">
      																			<h6>Advin Geri</h6>
      																			<div class="ratings">
      																				<ul class="rating">
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																					<li><i class="fa fa-star"></i></li>
      																				</ul>
      																				<div class="rate-count">(<span>5.0</span>)</div>
      																			</div>
      																			<p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
      																		</div>
      																	</div>
      																	<!--/ End Single Rating -->
      																</div>
      															</div>
      														</div>
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
								<a href="index.php"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Só aqui você encontra produtos exclusivos relacionados aos petianos e ex-petianos do PET-SI!</p>
							<p class="call">Alguma dúvida, sugestão ou reclamação? <br> Ligue para o SAC do ShoPET:<span><a href="tel:11912345678">11 912345678</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informação</h4>
							<ul>
								<li><a href="#">Sobre nós</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Termos e Condições</a></li>
								<li><a href="#">Contate-nos</a></li>
								<li><a href="#">Ajuda</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Atendimento ao Cliente</h4>
							<ul>
								<li><a href="#">Métodos de pagamento</a></li>
								<li><a href="#">Estorno</a></li>
								<li><a href="#">Devolução</a></li>
								<li><a href="#">Frete</a></li>
								<li><a href="#">Política de Privacidade</a></li>
							</ul>
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
</body>
</html>
