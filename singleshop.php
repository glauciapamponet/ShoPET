<?php
    include_once "connection.php";
        session_start();

    $idprod = $_GET["idproduto"];
    //echo $idprod;
    $result = mysqli_query($connect, 'SELECT prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage
                  FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                  prod.idpetiano = pt.idpetiano AND prod.idproduto = "'.$idprod.'"');

    $resprod = mysqli_fetch_array($result);

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
    <title>Eshop - eCommerce HTML5 Template.</title>
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

	<!-- Eshop Color Plate -->
	<div class="color-plate ">
		<a class="color-plate-icon"><i class="ti-paint-bucket"></i></a>
		<h4>Eshop Colors</h4>
		<p>Here is some awesome color's available on Eshop Template.</p>
		<span class="color1"></span>
		<span class="color2"></span>
		<span class="color3"></span>
		<span class="color4"></span>
		<span class="color5"></span>
		<span class="color6"></span>
		<span class="color7"></span>
		<span class="color8"></span>
		<span class="color9"></span>
		<span class="color10"></span>
		<span class="color11"></span>
		<span class="color12"></span>
	</div>
	<!-- /End Color Plate -->

  <!-- Header -->
  <header class="header shop">

    <!-- Topbar -->
    <div class="topbar">
      <div class="container">
        <div class="row">


        </div>
      </div>
    </div>
    </div>
    <!-- End Topbar -->

    <div class="middle-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-12">
            <!-- Logo -->
            <div class="logo">
              <a href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <!--/ End Logo -->
            <!-- Search Form -->
            <div class="search-top">
              <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
              <!-- Search Form -->
              <div class="search-top">
                <form class="search-form">
                  <input type="text" placeholder="Search here..." name="search">
                  <button value="search" type="submit"><i class="ti-search"></i></button>
                </form>
              </div>
              <!--/ End Search Form -->
            </div>
            <!--/ End Search Form -->
            <div class="mobile-nav"></div>
          </div>
          <div class="col-lg-8 col-md-7 col-12">
            <div class="search-bar-top">
              <div class="search-bar">
                <select>
                  <option selected="selected">All Category</option>
                  <option>watch</option>
                  <option>mobile</option>
                  <option>kid’s item</option>
                </select>
                <form>
                  <input name="search" placeholder="Search Products Here....." type="search">
                  <button class="btnn"><i class="ti-search"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="right-bar">
              <!-- Search Form -->
              <div class="sinlge-bar">
                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
              </div>
              <div class="sinlge-bar">
                <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i></a>
              </div>
              <div class="sinlge-bar shopping">
                <a href="#" class="single-icon"><i class="ti-bag"></i> <span
                    class="total-count">2</span></a>
                <!-- Shopping Item -->
                <div class="shopping-item">
                  <div class="dropdown-cart-header">
                    <span>2 Items</span>
                    <a href="#">View Cart</a>
                  </div>
                  <ul class="shopping-list">
                    <li>
                      <a href="#" class="remove" title="Remove this item"><i
                          class="fa fa-remove"></i></a>
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70"
                          alt="#"></a>
                      <h4><a href="#">Woman Ring</a></h4>
                      <p class="quantity">1x - <span class="amount">$99.00</span></p>
                    </li>
                    <li>
                      <a href="#" class="remove" title="Remove this item"><i
                          class="fa fa-remove"></i></a>
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70"
                          alt="#"></a>
                      <h4><a href="#">Woman Necklace</a></h4>
                      <p class="quantity">1x - <span class="amount">$35.00</span></p>
                    </li>
                  </ul>
                  <div class="bottom">
                    <div class="total">
                      <span>Total</span>
                      <span class="total-amount">$134.00</span>
                    </div>
                    <a href="checkout.html" class="btn animate">Checkout</a>
                  </div>
                </div>
                <!--/ End Shopping Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="cat-nav-head">
          <div class="row">
            <div class="col-lg-3">
              <div class="all-category">
                <!-- <a class="cat-heading" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                  <h3><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                </a> -->
                <a class="cat-heading" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                  <h3><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                </a>
                <ul class="main-category collapse" id="collapse">
                  <li><a href="#">New Arrivals <i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                    <ul class="sub-category">
                      <li><a href="#">accessories</a></li>
                      <li><a href="#">best selling</a></li>
                      <li><a href="#">top 100 offer</a></li>
                      <li><a href="#">sunglass</a></li>
                      <li><a href="#">watch</a></li>
                      <li><a href="#">man’s product</a></li>
                      <li><a href="#">ladies</a></li>
                      <li><a href="#">westrn dress</a></li>
                      <li><a href="#">denim </a></li>
                    </ul>
                  </li>
                  <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                    <ul class="mega-menu">
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Kid's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Kids Toys</a>
                          <a href="#">Kids Travel Car</a>
                          <a href="#">Kids Color Shape</a>
                          <a href="#">Kids Tent</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Men's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Watch</a>
                          <a href="#">T-shirt</a>
                          <a href="#">Hoodies</a>
                          <a href="#">Formal Pant</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Women's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Ladies Shirt</a>
                          <a href="#">Ladies Frog</a>
                          <a href="#">Ladies Sun Glass</a>
                          <a href="#">Ladies Watch</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">accessories</a></li>
                  <li><a href="#">top 100 offer</a></li>
                  <li><a href="#">sunglass</a></li>
                  <li><a href="#">watch</a></li>
                  <li><a href="#">man’s product</a></li>
                  <li><a href="#">ladies</a></li>
                  <li><a href="#">westrn dress</a></li>
                  <li><a href="#">denim </a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-9 col-12">
              <div class="menu-area">
                <!-- Main Menu -->
                <nav class="navbar navbar-expand-lg">
                  <div class="navbar-collapse">
                    <div class="nav-inner">
                      <ul class="nav main-menu menu navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Shop<i class="ti-angle-down"></i><span
                              class="new">New</span></a>
                          <ul class="dropdown">
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!--/ End Main Menu -->
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
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
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
      																	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskto</p>
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
									<a href="index.html"><img src="images/logo2.png" alt="#"></a>
								</div>
								<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
								<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Information</h4>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Customer Service</h4>
								<ul>
									<li><a href="#">Payment Methods</a></li>
									<li><a href="#">Money-back</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer social">
								<h4>Get In Tuch</h4>
								<!-- Single Widget -->
								<div class="contact">
									<ul>
										<li>NO. 342 - London Oxford Street.</li>
										<li>012 United Kingdom.</li>
										<li>info@eshop.com</li>
										<li>+032 3456 7890</li>
									</ul>
								</div>
								<!-- End Single Widget -->
								<ul>
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-flickr"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
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
									<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
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
