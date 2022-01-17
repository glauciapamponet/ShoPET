<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  $cart_text = '';
  if(isset($_POST["action"])){
    $query = mysqli_query($connect, "SELECT c.idproduto, SUM(c.quantidade) as qtd , p.nomeprod, p.precoprod, p.desc,
                                      SUM(p.precoprod*c.quantidade) as sub, p.pathimage FROM carrinho c, produto p,
                                      cliente cli WHERE cli.idcliente = c.idcliente AND p.idproduto = c.idproduto
                                      AND cli.emailcliente = '".$_SESSION["usuario"]."' GROUP BY p.nomeprod");
    $qtditems = mysqli_num_rows($query);
    if($_POST["action"] == 'fetch_cart'){
      if($qtditems == 0){
        $cart_text .= '<tr>
                        <td colspan="6">
                          <div align="center" class="">
                           <span>Você ainda não fisgou nenhum item &#128516;</span>
                         </div>
                        </td>
                      </tr>';
      }else{
        while($row = mysqli_fetch_array($query)){
          if(strlen($row["desc"])> 120){$row["desc"] = substr($row["desc"], 0, 120).'...';}
          $cart_text .= '<tr>
                          <td class="image" data-title="Produto">
                            <img src="'.$row["pathimage"].'" alt="#" />
                          </td>
                          <td class="product-des" data-title="Nome">
                            <p class="product-name"><a href="http://shopet/singleshop.php?idproduto='.$row["idproduto"].'">
                            '.$row["nomeprod"].'</a></p>
                            <p class="product-des"> '.$row["desc"].' </p>
                          </td>
                          <td class="price" data-title="Preço"> <span>R$'.number_format($row["precoprod"], 2, ',', '.').' </span> </td>
                          <td class="qty" data-title="Quantidade">
                            <div class="input-group">
                              <div class="button minus">
                                <button type="button" id = "'.$row["idproduto"].'" class="btn btn-primary btn-number rmv"
                                   data-type="minus" data-field="quant[1]">
                                  <i class="ti-minus"></i>
                                </button>
                              </div>
                              <input id = "qtdpd" type="text" name="quant[1]" class="input-number" data-min="1"
                                disabled data-max="100" value="'.$row["qtd"].'"/>
                              <div class="button plus">
                                <button type="button" id = "'.$row["idproduto"].'" class="btn btn-primary btn-number add"
                                  data-type="plus" data-field="quant[1]">
                                  <i class="ti-plus"></i>
                                </button>
                              </div>
                            </div>
                          </td>
                          <td class="total-amount" data-title="Total"> <span>R$'.number_format($row["sub"], 2, ',', '.').'</span></td>
                          <td class="action" data-title="Remove">
                            <a id="'.$row["idproduto"].'" href="#" class="delete"><i class="ti-trash remove-icon"></i></a>
                          </td>
                        </tr>';
        }
      }
    }
    if($_POST["action"] == 'summary'){
      if($qtditems > 0){
        $total = 0.00;
        while($row = mysqli_fetch_array($query)){
          $total += $row["sub"];
        }
        $cart_text .= '<ul>
                        <li>Subtotal<span>R$'.number_format($total, 2, ',', '.').'</span></li>
                        <li>Frete<span>Grátis</span></li>
                        <li class="last">Total<span>R$'.number_format($total, 2, ',', '.').'</span></li>
                      </ul>';
      }
      if(!isset($_POST["type"])){
        $cart_text .= '<div class="button5">
                        <a href="index.php" class="btn">Continue Comprando</a>';
        if($qtditems > 0){
          $cart_text .= '<a href="checkout.php" class="btn">Finalizar Compra</a>';
        }
        $cart_text .= '</div>';
      }
    }
  }
  echo $cart_text;

?>
