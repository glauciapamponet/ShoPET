<?php
	include_once("../connection.php");
	session_start();

	$cart_text = '<div class="sinlge-bar">';
	if(isset($_SESSION["usuario"])){
		$cart_text .= '		<a href="PHP/logout.php" class="single-icon">
													<i class="fa fa-sign-out"></i>
											</a>
										</div>
		 								<div  class="sinlge-bar shopping">
											<a href="cart.php" class="single-icon"><i class="ti-bag"></i>';
		$result = mysqli_query($connect, "SELECT COUNT(carr.idproduto) AS qtd FROM carrinho carr, cliente cli
																			WHERE cli.idcliente = carr.idcliente AND cli.emailcliente = '".$_SESSION["usuario"]."'");
		$rowqtd = mysqli_fetch_array($result);
		$cart_text .= '<span class="total-count">'.$rowqtd["qtd"].'</span></a>
									<div class="shopping-item">
										 <div align="center" class="dropdown-cart-header">
											<span>Sacola</span>
										</div>
		';

		if($rowqtd["qtd"] > 0){
			$result = mysqli_query($connect, "SELECT c.*, p.nomeprod, p.precoprod, (p.precoprod*c.quantidade) as sub, p.pathimage
																				 FROM carrinho c, produto p, cliente cli WHERE cli.idcliente = c.idcliente
																				AND p.idproduto = c.idproduto AND cli.emailcliente = '".$_SESSION["usuario"]."'");
			$total = 0.00;
			$cart_text .= '<ul class="shopping-list">';
			while($row = mysqli_fetch_array($result)){
				$cart_text .= '<li>
									 			<a href="#" class="remove" title="Remover este item"><i
									 					class="fa fa-remove"></i></a>
									 			<a class="cart-img" href="#"><img
									 					src="'.$row["pathimage"].'" alt="'.$row["nomeprod"].'"></a>
									 			<h4><a href="http://shopet/singleshop.php?idproduto='.$row["c.idproduto"].'">'.$row["nomeprod"].'</a></h4>
													<p class="quantity">'.$row["quantidade"].'x - <span class="amount">R$'.$row["precoprod"].'</span></p>
									 		</li>';
				$total += $row["sub"];
			}
			$cart_text .= '</ul>
								 		<div class="bottom">
											<div class="total">
												<span>Total</span>
									 			<span class="total-amount">R$'.$total.'</span>
									 		</div>
												<a href="checkout.html" class="btn animate">Finalizar compra</a>
									 	</div>
										';
		}else{
			$cart_text .= '<div align="center" class="">
											 <span>Você ainda não fisgou nenhum item &#128516;</span>
										 </div>';
		}
	}else{
		$cart_text .= '<a href="login.php" class="single-icon">
											 <i class="fa fa-sign-in"></i>
										</a>
									</div>
									<div  class="sinlge-bar shopping">
										<a href="login.php" class="single-icon"><i class="ti-bag"></i>
										</a>
										<div class="shopping-item">
											 <div align="center" class="dropdown-cart-header">
												<span>Sacola</span>
											 </div>
											 <div align="center" class="">
	                      <span>Faça login para ver sua sacola.</span>
	                     </div>
											 <div class="bottom">
	 											<a href="login.php" class="btn animate">Fazer Login</a>
	 										</div>';
	}
	$cart_text .= '</div> </div>';

	echo $cart_text;
?>
