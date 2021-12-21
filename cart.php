<?php
  session_start();
  include_once("connection.php");
  include("PHP/sessionlogin.php");

?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Title Tag  -->
    <title>ShoPET - Carrinho</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/LogoIcone.png" />
    <!-- Web Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet"
    />

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
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
  							<div id="cartExibition" class="right-bar"></div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/ End Header Inner -->
  	</header>
  	<!--/ End Header -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <ul class="bread-list">
                <li>
                  <a href="index.html">Home<i class="ti-arrow-right"></i></a>
                </li>
                <li class="active"><a href="cart.html">Cart</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shopping Cart -->
    <div class="shopping-cart section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Shopping Summery -->
            <table class="table shopping-summery">
              <thead>
                <tr class="main-hading">
                  <th>PRODUTO</th>
                  <th>NOME</th>
                  <th class="text-center">PREÇO</th>
                  <th class="text-center">QUANTIDADE</th>
                  <th class="text-center">TOTAL</th>
                  <th class="text-center">
                    <i class="ti-trash remove-icon"></i>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="image" data-title="No">
                    <img src="https://via.placeholder.com/100x100" alt="#" />
                  </td>
                  <td class="product-des" data-title="Description">
                    <p class="product-name"><a href="#">Women Dress</a></p>
                    <p class="product-des">
                      Maboriosam in a tonto nesciung eget distingy magndapibus.
                    </p>
                  </td>
                  <td class="price" data-title="Price">
                    <span>R$110,00 </span>
                  </td>
                  <td class="qty" data-title="Qty">
                    <!-- Input Order -->
                    <div class="input-group">
                      <div class="button minus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          disabled="disabled"
                          data-type="minus"
                          data-field="quant[1]"
                        >
                          <i class="ti-minus"></i>
                        </button>
                      </div>
                      <input
                        type="text"
                        name="quant[1]"
                        class="input-number"
                        data-min="1"
                        data-max="100"
                        value="1"
                      />
                      <div class="button plus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          data-type="plus"
                          data-field="quant[1]"
                        >
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                    </div>
                    <!--/ End Input Order -->
                  </td>
                  <td class="total-amount" data-title="Total">
                    <span>R$220,88</span>
                  </td>
                  <td class="action" data-title="Remove">
                    <a href="#"><i class="ti-trash remove-icon"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="image" data-title="No">
                    <img src="https://via.placeholder.com/100x100" alt="#" />
                  </td>
                  <td class="product-des" data-title="Description">
                    <p class="product-name"><a href="#">Women Dress</a></p>
                    <p class="product-des">
                      Maboriosam in a tonto nesciung eget distingy magndapibus.
                    </p>
                  </td>
                  <td class="price" data-title="Price">
                    <span>R$110,00 </span>
                  </td>
                  <td class="qty" data-title="Qty">
                    <!-- Input Order -->
                    <div class="input-group">
                      <div class="button minus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          disabled="disabled"
                          data-type="minus"
                          data-field="quant[2]"
                        >
                          <i class="ti-minus"></i>
                        </button>
                      </div>
                      <input
                        type="text"
                        name="quant[2]"
                        class="input-number"
                        data-min="1"
                        data-max="100"
                        value="2"
                      />
                      <div class="button plus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          data-type="plus"
                          data-field="quant[2]"
                        >
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                    </div>
                    <!--/ End Input Order -->
                  </td>
                  <td class="total-amount" data-title="Total">
                    <span>R$220,88</span>
                  </td>
                  <td class="action" data-title="Remove">
                    <a href="#"><i class="ti-trash remove-icon"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="image" data-title="No">
                    <img src="https://via.placeholder.com/100x100" alt="#" />
                  </td>
                  <td class="product-des" data-title="Description">
                    <p class="product-name"><a href="#">Women Dress</a></p>
                    <p class="product-des">
                      Maboriosam in a tonto nesciung eget distingy magndapibus.
                    </p>
                  </td>
                  <td class="price" data-title="Price">
                    <span>R$110,00 </span>
                  </td>
                  <td class="qty" data-title="Qty">
                    <!-- Input Order -->
                    <div class="input-group">
                      <div class="button minus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          disabled="disabled"
                          data-type="minus"
                          data-field="quant[3]"
                        >
                          <i class="ti-minus"></i>
                        </button>
                      </div>
                      <input
                        type="text"
                        name="quant[3]"
                        class="input-number"
                        data-min="1"
                        data-max="100"
                        value="3"
                      />
                      <div class="button plus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          data-type="plus"
                          data-field="quant[3]"
                        >
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                    </div>
                    <!--/ End Input Order -->
                  </td>
                  <td class="total-amount" data-title="Total">
                    <span>R$220,88</span>
                  </td>
                  <td class="action" data-title="Remove">
                    <a href="#"><i class="ti-trash remove-icon"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--/ End Shopping Summery -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Total Amount -->
            <div class="total-amount">
              <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                  <div class="right">
                    <ul>
                      <li>Subtotal<span>R$330,00</span></li>
                      <li>Frete<span>Grátis</span></li>
                      <li>Economizou<span>R$20,00</span></li>
                      <li class="last">Total<span>R$310,00</span></li>
                    </ul>
                    <div class="button5">
                      <a href="index.php" class="btn">Continue Comprando</a>
                      <a href="#" class="btn">Finalizar Compra</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ End Total Amount -->
          </div>
        </div>
      </div>
    </div>
    <!--/ End Shopping Cart -->

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
                  <a href="index.html"
                    ><img src="images/LogoFooterCorte.png" alt="#"
                  /></a>
                </div>
                <p class="text">
                  Só aqui você encontra produtos exclusivos relacionados aos
                  petianos e ex-petianos do PET-SI!
                </p>
                <p class="call">
                  Alguma dúvida, sugestão ou reclamação? <br />
                  Ligue para o SAC do ShoPET:<span
                    ><a href="tel:11912345678">11 912345678</a></span
                  >
                </p>
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
                  <li>
                    <a href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-linkedin"></i></a>
                  </li>
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
                  <img src="images/payments.png" alt="#" />
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
    <script type="text/javascript">
      $(document).ready(function(){
        $.post("PHP/cartIcon.php", function(exibicao){
            $("#cartExibition").html(exibicao);
        });
      });
    </script>
  </body>
</html>                                                                                                                                                                                                                                                                                                             
