<?php
  if(!isset($_SESSION)){
     session_start();
  }
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Title Tag  -->
    <title>ShoPET - Finalizar Compra</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/LogoIcone.png" />
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet" />

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
    <div class="breadcrumbs" align="center" style="padding:10px 0px;">
      <a href="index.php"><img src="images/3b.png" width="5%" alt=""></a>
    </div>
    <!--/ End Header -->


    <!-- Start Checkout -->
    <section class="shop checkout section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="checkout-form">
              <h2>Conclua sua compra aqui</h2>
              <p>Insira o endereço de entrega para prosseguir ao pagamento</p>
              <!-- Form -->
              <form class="form" method="post" action="#">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Nome completo<span>*</span></label>
                      <input
                        type="text"
                        name="name"
                        placeholder=""
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Telefone/Celular<span>*</span></label>
                      <input type="text" name="number" placeholder="(xx)xxxxx-xxxx" required="required"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Estado<span>*</span></label>
                      <input type="text" name="number" placeholder="" required="required"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Cidade<span>*</span></label>
                      <input type="text" name="number" placeholder="" required="required"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Endereço<span>*</span></label>
                      <input type="text" name="address" placeholder="Logradouro, nº, Bairro" required="required" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>CEP<span>*</span></label>
                      <input type="text" name="post" placeholder="xxxxx-xxx" required="required" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group create-account">
                      <span>Após finalizar o pagamento, você receberá um email de confirmação do pedido.
                        Aí é só aguardar! &#129417;</span>
                    </div>
                  </div>
                </div>
              </form>
              <!--/ End Form -->
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="order-details">
              <!-- Order Widget -->
              <div class="single-widget">
                <h2>TOTAL DA COMPRA</h2>
                <div  class="content data_check">
                </div>
              </div>
              <!--/ End Order Widget -->
              <!-- Order Widget -->
              <div class="single-widget">
                <h2>Pagamento</h2>
                <div class="content">
                  <div class="" style="padding:15px 30px;">
                    <input type="radio" id="bol" name="pagamento" value="boleto">
                    <label for="boleto">Boleto</label>
                    <br>
                    <input type="radio" id="px" name="pagamento" value="pix">
                    <label for="pix">PIX</label>
                    <!-- <input name="updates" id="1" type="radio"/>
                    <label class="checkbox-inline" for="1">Boleto</label>
                    <input name="news" id="2" type="radio" />
                    <label class="checkbox-inline" for="2">PIX</label> -->
                  </div>
                </div>
              </div>
              <div class="single-widget get-button">
                <div class="content">
                  <div class="button">
                    <a href="index.php" class="btn">Concluir Compra</a>
                  </div>
                  <small>Você será redirecionado à opção de pagamento escolhida.</small>
                </div>
              </div>
              <!--/ End Button Widget -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Checkout -->


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
      checkout();
      function checkout(){
        var action = 'summary';
        var type = 'checkout';
        $.ajax({
            url:"PHP/fetchcart.php",
            method:"POST",
            data:{action:action, type:type},
            success:function(data){
              $(".data_check").html(data);
            }
        });
      }
      $(document).on('click', '.fimcompra', function(){
        var id = $(this).attr("id");
        var action = 'chckout';
        $.ajax({
         url:"PHP/.php",
         method:"POST",
         data:{action: action, id:id},
         success:function(data){
          fetch_cart();
         }
        });
      });
    });
    </script>
  </body>
</html>
