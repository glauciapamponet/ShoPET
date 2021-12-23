<?php
  if(!isset($_SESSION)){
     session_start();
  }
  include("../connection.php");

  if(isset($_SESSION["usuario"])){
    $text = '';
    if(isset($_POST["action"]) && $_POST["action"] == 'end'){
      $text .= '<div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Nome completo<span>*</span></label>
                      <input type="text" name="name" placeholder="" required="required"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Telefone/Celular</label>
                      <input type="text" name="telephone" placeholder="xx xxxxx-xxxx"
                      class="form-control" onkeypress="formatar_mascara(this,"## #####-####")"
                      maxlength=13/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Estado<span>*</span></label>
                      <input type="text" name="state" required="required"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Cidade<span>*</span></label>
                      <input type="text" name="city" required="required"/>
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
                      <input type="text" name="post" placeholder="xxxxx-xxx" onkeypress="formatar_mascara(this,"######-###")"
                       maxlength=10 required="required"/>
                    </div>
                  </div>
                  <div class="col-12" style="padding-bottom:10px;">
										<div align="right" class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Salvar endereço?</label>
										</div>
									</div>';
    }
    if(isset($_POST["action"]) && $_POST["action"] == 'fill' && isset($_POST["type"])){
      $query = mysqli_query($connect, "SELECT c.nomecliente, e.* FROM cliente c, endcli e WHERE c.idcliente = e.idcliente
                                      AND e.idend = '".$_POST["type"]."'");
      $res = mysqli_fetch_array($query);
      $text .= '<div class="col-12" style="padding:30px 15px;">
                  <div class="form-group create-account">
                    <h5>Endereço Selecionado</h5>
                    '.$res["nomecliente"].'<br>
                    '.$res["enderecocli"].'<br>
                    '.$res["cidadecli"].' - '.$res["estadocli"].'<br>
                    CEP '.$res["cepcli"].'<br>
                  </div>
                </div>';
    }
  }

  echo $text;
?>
