<?php
    include_once "../connection.php";
        session_start();
    // $conn = mysqli_connect("localhost", "root", "glaucia", "shopet");
    //
    // if (!$conn){
    //     die ("Falha na conexão: " . mysqli_connect_erro());
    // }else{
    //     echo "Conexão realizada";
    // }

    $query = "SELECT * FROM produto ORDER BY estoque DESC LIMIT 4";
    $result = mysqli_query($connect, $query);

    $data = '<div class="owl-carousel popular-slider">';

    while($rowCARR = mysqli_fetch_array($result)){
      $data .=
      '<div class="single-product">
        <div class="product-img">
          <a href="product-details.html">
            <img class="default-img" src="'.$rowCARR["pathimage"].'" alt="#">
            <img class="hover-img" src="'.$rowCARR["pathimage"].'" alt="#">
          </a>
          <div class="button-head">
            <div class="product-action-2">
              <a title="Add to cart" href="#">Comprar</a>
            </div>
          </div>
        </div>
        <div class="product-content">
          <h3><a href="product-details.html">'.$rowCARR["nomeprod"].'</a></h3>
          <div class="product-price">
            <span>R$'.$rowCARR["precoprod"].'</span>
          </div>
        </div>
      </div>';
    }
    $data .= '</div>';

    echo $data;

?>
