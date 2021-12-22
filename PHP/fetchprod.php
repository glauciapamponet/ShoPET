
 <?php

 $connect = new PDO("mysql:host=localhost;dbname=shopet", "root", "glaucia");
 if(isset($_POST["action"]))
 {
 $query = "SELECT prod.idproduto, prod.nomeprod, prod.precoprod, cat.nomecat, pt.nomepetiano, prod.pathimage
               FROM produto prod, petiano pt, categoria cat WHERE prod.nomecat = cat.nomecat AND
               prod.idpetiano = pt.idpetiano AND prod.nomeprod LIKE '%".$_POST["prod"]."%'";
  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
  {
   $query .= "
    AND prod.precoprod BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
   ";
  }
  if(isset($_POST["cat"]))
  {
   $cat_filter = implode("','", $_POST["cat"]);
   $query .= "
    AND cat.nomecat IN('".$cat_filter."')
   ";
  }
  if(isset($_POST["pet"]))
  {
   $pet_filter = implode("','", $_POST["pet"]);
   $query .= "
    AND pt.nomepetiano IN('".$pet_filter."')
   ";
  }

  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();

  $output = '';
  if($total_row > 0)
  {
   foreach( $result as $rowPRODS )
   {
    $output .= '
    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
      <div class="single-product">
        <div class="product-img">
          <a href="singleshop.php?idproduto='.$rowPRODS["idproduto"].'">
            <img class="default-img" src="'.$rowPRODS["pathimage"].'" alt="#">
            <img class="hover-img" src="'.$rowPRODS["pathimage"].'" alt="#">
          </a>
          <div class="button-head">

            <div class="product-action-2"><a title="" href="#">Colocar na Sacola</a></div>
          </div>
        </div>
        <div class="product-content">
          <h3><a href="singleshop.php?idproduto='.$rowPRODS["idproduto"].'">'.$rowPRODS["nomeprod"].'</a></h3>
          <div class="product-price"> <span>R$'.number_format($rowPRODS["precoprod"], 2, ',', ' ').'</span> </div>
        </div>
      </div>
    </div>
    ';
   }
  }
  else
  {
   $output = '<h5>Sem produtos encontrados.</h5>';
  }
  echo $output;
 }

 ?>
