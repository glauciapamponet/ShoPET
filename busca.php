<?php
  include_once "connection.php";
  session_start();
  $productsearch = "";
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
								<li class="active"><a href="">Busca: <?php echo $productsearch ?></a></li>
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
									<div class="single-widget range">
										<h3 class="title">Filtros</h3>
                    <!-- <form class="" action="#" method="GET"> -->
                      <div class="price-filter">
  											<div class="price-filter-inner">
                          <h6>Preço </h6>
                          <br>
  												<div id="slider-range"></div>
                          <input type="hidden" id="hidden_minimum_price" value="0" />
                          <input type="hidden" id="hidden_maximum_price" value="65000" />
                          <div class="label-input"><p id="price_show">R$120 - R$250</p></div>
  											</div>
  										</div>
                      <br>
                      <span><strong>Categoria</strong></span>
                      <?php
                        $datafilter = '<ul class="check-box-list">';
                        $queryPRODfilter = "SELECT nomecat, count(nomecat) AS qtd from produto
                                            where nomeprod like '%" .$productsearch. "%' GROUP by nomecat";

                        $resultfilter = mysqli_query($connect, $queryPRODfilter);
                        $numer = 1;
                        while($rowPRODSfilter = mysqli_fetch_array($resultfilter)){
                          $datafilter .=
                          '<li>
    												<label class="checkbox-inline" for="'.$numer.'"><input name="'.$rowPRODSfilter["nomecat"].'" id="'.$numer.'"
                            class="common_selector cat" type="checkbox" value="'.$rowPRODSfilter["nomecat"].'">'.$rowPRODSfilter["nomecat"].'<span class="count">('.$rowPRODSfilter["qtd"].')</span></label>
    											</li>';
                          $numer += 1;
                        }
                        $datafilter .= '</ul>';
                        echo $datafilter;
                      ?>
                      <br>
                      <span><strong>Petiano</strong></span>
                      <?php
                        $datafilter = '<ul class="check-box-list">';
                        $queryPRODfilter = "SELECT petiano.nomepetiano, count(produto.idpetiano) as qtd
                                            from petiano INNER JOIN produto ON petiano.idpetiano = produto.idpetiano
                                            where nomeprod like '%".$productsearch."%' group by nomepetiano";

                        $resultfilter = mysqli_query($connect, $queryPRODfilter);
                        while($rowPRODSfilter = mysqli_fetch_array($resultfilter)){
                          $datafilter .=
                          '<li>
    												<label class="checkbox-inline" for="'.$numer.'"><input name="'.$rowPRODSfilter["nomepetiano"].'" id="'.$numer.'"
                            class="common_selector pet" type="checkbox" value="'.$rowPRODSfilter["nomepetiano"].'">' .$rowPRODSfilter["nomepetiano"].'<span class="count">('.$rowPRODSfilter["qtd"].')</span></label>
    											</li>';
                          $numer += 1;
                        }
                        $datafilter .= '</ul>';
                        echo $datafilter;
                      ?>
                      <br>
                      <!-- <button class="btn" type="submit">Filtrar</button>
                    </form> -->

									</div>
									<!--/ End Shop By Price -->


						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row filter_data">

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->

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
    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div style="" >CARREGANDO...</div>');
        var action = 'fetch_data';
        var prod = '<?php echo $productsearch ?>';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var cat = get_filter('cat');
        var pet = get_filter('pet');
        $.ajax({
            url:"PHP/fetchprod.php",
            method:"POST",
            data:{action:action, prod:prod, minimum_price:minimum_price, maximum_price:maximum_price, cat:cat, pet:pet},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#slider-range').slider({
        range:true,
        min:0,
        max:65000,
        values:[1000, 65000],
        step:10,
        stop:function(event, ui)
        {
            $('#price_show').html('R$'+ ui.values[0] + ' - '+ 'R$' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
  });
  $(document).ready(function(){
    $.post("PHP/cartIcon.php", function(exibicao){
        $("#cartExibition").html(exibicao);
    });
  });
  </script>
</body>
</html>
