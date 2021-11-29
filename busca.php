<?php
  include_once "connection.php";
      session_start();
      $productsearch = "Shop List";
      if(isset($_GET["search"])){
        $productsearch = $_GET["search"];
      }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>ShoPET - Busca</title>
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
	<!-- Jquery Ui -->
    <link rel="stylesheet" href="css/jquery-ui.css">
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
								<li class="active"><a href="blog-single.html"><?php echo $productsearch ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
									<!-- <div class="single-widget range">
										<h3 class="title">Filtros</h3>
                    <form class="" action="#" method="post">
                      <div class="price-filter">
  											<div class="price-filter-inner">
  												<div id="slider-range"></div>
  													<div class="price_slider_amount">
  													<div class="label-input">
  														<span>Preço:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
  													</div>
  												</div>
  											</div>
  										</div>
                      <br>
                      <span><strong>Categoria</strong></span>
  										<ul class="check-box-list">
  											<li>
  												<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">Acessórios<span class="count">(3)</span></label>
  											</li>
  											<li>
  												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Alimentação<span class="count">(5)</span></label>
  											</li>
  											<li>
  												<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">Beleza<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="4" type="checkbox">Cargos<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="5" type="checkbox">Contas<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="6" type="checkbox">Decoração<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="7" type="checkbox">Eletrônicos<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="8" type="checkbox">Escritório<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="9" type="checkbox">Estudos<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="10" type="checkbox">Instrumentos<span class="count">(8)</span></label>
  											</li>
                        <li>
  												<label class="checkbox-inline" for="3"><input name="news" id="11" type="checkbox">Moda<span class="count">(8)</span></label>
  											</li>
  										</ul>
                      <br>
                      <span><strong>Petiano</strong></span>
                    </form>

									</div> -->
									<!--/ End Shop By Price -->


						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<!-- <div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div> -->
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row">
              <?php
              $data = '';
              $queryPROD = "SELECT prod.idproduto, prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage
                            FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                            prod.idpetiano = pt.idpetiano AND prod.nomeprod LIKE '%".$productsearch."%'";

              $result2 = mysqli_query($connect, $queryPROD);

              while($rowPRODS = mysqli_fetch_array($result2)){
                $data .=
                '<div class="col-xl-3 col-lg-4 col-md-4 col-12">
                  <div class="single-product">
                    <div class="product-img">
                      <a href="singleshop.php?idproduto='.$rowPRODS["idproduto"].'">
                        <img class="default-img" src="'.$rowPRODS["pathimage"].'" alt="#">
                        <img class="hover-img" src="'.$rowPRODS["pathimage"].'" alt="#">
                      </a>
                      <div class="button-head">

                        <div class="product-action-2"><a title="Add to cart" href="#">Colocar no Carrinho</a></div>
                      </div>
                    </div>
                    <div class="product-content">
                      <h3><a href="singleshop.php?idproduto='.$rowPRODS["idproduto"].'">'.$rowPRODS["nomeprod"].'</a></h3>
                      <div class="product-price"> <span>R$'.$rowPRODS["precoprod"].'</span> </div>
                    </div>
                  </div>
                </div>';
              }
              echo $data;
               ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->



		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
							<div class="row no-gutters">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<!-- Product Slider -->
										<div class="product-gallery">
											<div class="quickview-slider-active">
												<div class="single-slider">
													<img src="images/modal1.png" alt="#">
												</div>
												<div class="single-slider">
													<img src="images/modal2.png" alt="#">
												</div>
												<div class="single-slider">
													<img src="images/modal3.png" alt="#">
												</div>
												<div class="single-slider">
													<img src="images/modal4.png" alt="#">
												</div>
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2>Flared Shift Dress</h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												<div class="quickview-ratting">
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<a href="#"> (1 customer review)</a>
											</div>
											<div class="quickview-stock">
												<span><i class="fa fa-check-circle-o"></i> in stock</span>
											</div>
										</div>
										<h3>$29.00</h3>
										<div class="quickview-peragraph">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
										</div>
										<div class="size">
											<div class="row">
												<div class="col-lg-6 col-12">
													<h5 class="title">Size</h5>
													<select>
														<option selected="selected">s</option>
														<option>m</option>
														<option>l</option>
														<option>xl</option>
													</select>
												</div>
												<div class="col-lg-6 col-12">
													<h5 class="title">Color</h5>
													<select>
														<option selected="selected">orange</option>
														<option>purple</option>
														<option>black</option>
														<option>pink</option>
													</select>
												</div>
											</div>
										</div>
										<div class="quantity">
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
										<div class="add-to-cart">
											<a href="#" class="btn">Add to cart</a>
											<a href="#" class="btn min"><i class="ti-heart"></i></a>
											<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
										</div>
										<div class="default-social">
											<h4 class="share-now">Share:</h4>
											<ul>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->

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
    $.post("PHP/searchFETCH.php", function(exibicao){
        $("#searchResults").html(exibicao);
    });
  });
  </script>
</body>
</html>
