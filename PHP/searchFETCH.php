<?php
    include_once "../connection.php";
        session_start();

    echo $_GET["search"];
    $columns = array('prod.idproduto', 'prod.nomeprod', 'prod.precoprod', 'cat.nomecat', 'pt.nomepetiano', 'prod.pathimage',
    'prod.status_dispo');

    $data = '';
    $queryPROD = "SELECT prod.idproduto, prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage
                  FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                  prod.idpetiano = pt.idpetiano AND prod.nomeprod = '".$_GET["search"]."'";

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

              <div class="product-action-2"><a title="Add to cart" href="#">Add to cart</a></div>
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
