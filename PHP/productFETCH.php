<?php
    include_once "../connection.php";
        session_start();

    $columns = array('prod.idproduto', 'prod.nomeprod', 'prod.precoprod', 'cat.nomecat', 'pt.nomepetiano', 'prod.pathimage',
    'prod.status_dispo');

    $trans = array("ç" => "c", "ã" => "a", "á" => "a", "ó" => "o", "ô" => "o");

    $queryCATEG = "SELECT nomecat FROM categoria";
    $result = mysqli_query($connect, $queryCATEG);

    $data = '<div class="nav-main"> <ul class="nav nav-tabs" id="myTab" role="tablist">';

    $cont = 0;

    while($rowTAB = mysqli_fetch_array($result)){
      $estringue = '';
      if($cont == 0){
        $estringue .= ' active';
      }
      $data .='<li class="nav-item"><a class="nav-link '.$estringue.'" data-toggle="tab" href="#'.$rowTAB["nomecat"].'"
              role="tab">'.$rowTAB["nomecat"].'</a></li>';
      $cont++;
    }
    $data .= '</ul></div> <div class="tab-content" id="myTabContent">';

    $result = mysqli_query($connect, $queryCATEG);

    $cont = 0;
    while($rowDIVS = mysqli_fetch_array($result)){
      $queryPROD = "SELECT prod.idproduto, prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage
                    FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
                    prod.idpetiano = pt.idpetiano AND cat.nomecat = '".$rowDIVS["nomecat"]."'";

      $result2 = mysqli_query($connect, $queryPROD);

      $estringue = '';
      if($cont == 0){
        $estringue .= ' show active';
      }
      $data .= '<div class="tab-pane fade'.$estringue.'" id="'.$rowDIVS["nomecat"].'" role="tabpanel">
                <div class="tab-single">
                <div class="row">';

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
      $data .= '</div> </div> </div>';
      $cont++;
    }
    $data .= '</div>';

    echo $data;

?>
