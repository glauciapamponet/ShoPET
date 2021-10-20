<?php
    include_once "../connection.php";
        session_start();

    $columns = array('prod.idproduto', 'prod.nomeprod', 'prod.precoprod', 'cat.nomecat', 'pt.nomepetiano', 'prod.pathimage',
    'prod.status_dispo');

    $queryCATEG = "SELECT nomecat FROM categoria";
    $result = mysqli_query($connect, $queryCATEG);

    $data = '<div class="nav-main"> <ul class="nav nav-tabs" id="myTab" role="tablist">';

    while($rowTAB = mysqli_fetch_array($result)){
      $data .='<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#'.$rowTAB["nomecat"].'"
              role="tab">'.$rowTAB["nomecat"].'</a></li>';
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
              <a href="product-details.html">
                <img class="default-img" src="'.$rowPRODS["pathimage"].'" alt="#">
                <img class="hover-img" src="'.$rowPRODS["pathimage"].'" alt="#">
              </a>
              <div class="button-head">
                <div class="product-action">
                  <a data-toggle="modal" data-target="#exampleModal"
                    title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                  <a title="Wishlist" href="#"><i
                      class=" ti-heart "></i><span>Add to
                      Wishlist</span></a>
                  <a title="Compare" href="#"><i
                      class="ti-bar-chart-alt"></i><span>Add to
                      Compare</span></a>
                </div>
                <div class="product-action-2"><a title="Add to cart" href="#">Add to cart</a></div>
              </div>
            </div>
            <div class="product-content">
              <h3><a href="product-details.html">'.$rowPRODS["nomeprod"].'</a></h3>
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
