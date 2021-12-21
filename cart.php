<?php
  include_once("connection.php");
  session_start();
  include("sessionlogin.php");

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
                  <a href="index.html"
                    ><img src="images/LogoPrincipalCorte.png" alt="logo"
                  /></a>
                </div>
                <!--/ End Logo -->
                <!-- Search Form -->
                <div class="search-top">
                  <div class="top-search">
                    <a href="#0"><i class="ti-search"></i></a>
                  </div>
                  <!-- Search Form -->
                  <div class="search-top">
                    <form class="search-form">
                      <input
                        type="text"
                        placeholder="Search here..."
                        name="search"
                      />
                      <button value="search" type="submit">
                        <i class="ti-search"></i>
                      </button>
                    </form>
                  </div>
                  <!--/ End Search Form -->
                </div>
                <!--/ End Search Form -->
                <div class="mobile-nav"></div>
              </div>
              <div class="col-lg-3">
                <div class="all-category">
                  <a
                    class="cat-heading"
                    data-toggle="collapse"
                    href="#collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapse"
                  >
                    <h3>
                      <i class="fa fa-bars" aria-hidden="true"></i>CATEGORIAS
                    </h3>
                  </a>
                  <ul class="main-category collapse" id="collapse">
                    <li>
                      <a href="#"
                        >Tipos<i
                          class="fa fa-angle-right"
                          aria-hidden="true"
                        ></i
                      ></a>
                      <ul class="sub-category">
                        <li><a href="#">Acessórios</a></li>
                        <li><a href="#">Alimentação</a></li>
                        <li><a href="#">Beleza</a></li>
                        <li><a href="#">Cargos</a></li>
                        <li><a href="#">Contas</a></li>
                        <li><a href="#">Decoração</a></li>
                        <li><a href="#">Eletrônicos</a></li>
                        <li><a href="#">Escritório</a></li>
                        <li><a href="#">Estudos</a></li>
                        <li><a href="#">Instrumentos</a></li>
                        <li><a href="#">Moda</a></li>
                      </ul>
                    </li>

                    <li></li>
                    <li>
                      <a href="#"
                        >Petianos<i
                          class="fa fa-angle-right"
                          aria-hidden="true"
                        ></i
                      ></a>
                      <ul class="sub-category">
                        <li><a href="#">Alexandre</a></li>
                        <li><a href="#">Caio</a></li>
                        <li><a href="#">Cairolli</a></li>
                        <li><a href="#">Eler</a></li>
                        <li><a href="#">Furquim</a></li>
                        <li><a href="#">Giovanna</a></li>
                        <li><a href="#">Glaucia</a></li>
                        <li><a href="#">João</a></li>
                        <li><a href="#">Marin</a></li>
                        <li><a href="#">Michelly</a></li>
                        <li><a href="#">PET</a></li>
                        <li><a href="#">Sena</a></li>
                        <li><a href="#">Stefany</a></li>
                        <li><a href="#">Thaís</a></li>
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
                            <form>
                              <input
                                name="search"
                                placeholder="Pesquise por produtos aqui"
                                type="search"
                              />
                              <button class="btnn">
                                <i class="ti-search"></i>
                              </button>
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
                    <a href="login.html" class="single-icon">
                      <i class="fa fa-sign-in"></i>
                      <!-- <i class="fa fa-sign-out"></i> -->
                    </a>
                  </div>
                  <div class="sinlge-bar shopping">
                    <a href="cart.html" class="single-icon"
                      ><i class="ti-bag"></i>
                      <span class="total-count">2</span></a
                    >
                    <!-- Shopping Item -->
                    <div class="shopping-item">
                      <div class="dropdown-cart-header">
                        <span>2 Itens</span>
                        <a href="cart.html">Ver Carrinho</a>
                      </div>
                      <ul class="shopping-list">
                        <li>
                          <a href="#" class="remove" title="Remove this item"
                            ><i class="fa fa-remove"></i
                          ></a>
                          <a class="cart-img" href="#"
                            ><img
                              src="https://via.placeholder.com/70x70"
                              alt="#"
                          /></a>
                          <h4><a href="#">Woman Ring</a></h4>
                          <p class="quantity">
                            1x - <span class="amount">$99.00</span>
                          </p>
                        </li>
                        <li>
                          <a href="#" class="remove" title="Remove this item"
                            ><i class="fa fa-remove"></i
                          ></a>
                          <a class="cart-img" href="#"
                            ><img
                              src="https://via.placeholder.com/70x70"
                              alt="#"
                          /></a>
                          <h4><a href="#">Woman Necklace</a></h4>
                          <p class="quantity">
                            1x - <span class="amount">$35.00</span>
                          </p>
                        </li>
                      </ul>
                      <div class="bottom">
                        <div class="total">
                          <span>Total</span>
                          <span class="total-amount">$134.00</span>
                        </div>
                        <a href="checkout.html" class="btn animate"
                          >Finalizar compra</a
                        >
                      </div>
                    </div>
                    <!--/ End Shopping Item -->
                  </div>
                </div>
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

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-rocket"></i>
              <h4>Frete grátis</h4>
              <p>Para compras acima de R$100,00</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-reload"></i>
              <h4>Devolução gratuita</h4>
              <p>Dentro de 30 dias</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-lock"></i>
              <h4>Pagamento seguro</h4>
              <p>100% de segurança</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-tag"></i>
              <h4>Melhor preço</h4>
              <p>Preço garantido</p>
            </div>
            <!-- End Single Service -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Services Area -->

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
  </body>
</html>
