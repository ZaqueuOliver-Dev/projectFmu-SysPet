<?php
require_once 'conectMysql.php';

$id_parc  = $_GET["id"];
$sql = "select  id_parc,
                nome_parc,
                email_parc,
                login_parc,
                senha_parc,
                cnpj_parc,
                responsavel_parc,
                rua_parc,
                numero_parc,
                complemento_parc,
                bairro_parc,
                cidade_parc,
                estado_parc,
                telefone_parc,
                celular_parc
from cad_parc where id_parc = " . $id_parc;


$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
$id_parc              = $row["id_parc"];
$nome_parc            = $row["nome_parc"];
$email_parc           = $row["email_parc"];
$login_parc           = $row["login_parc"];
$senha_parc           = $row["senha_parc"];
$cnpj_parc            = $row["cnpj_parc"];
$responsavel_parc     = $row["responsavel_parc"];
$rua_parc             = $row["rua_parc"];
$numero_parc          = $row["numero_parc"];
$complemento_parc     = $row["complemento_parc"];
$bairro_parc          = $row["bairro_parc"]; 
$cidade_parc          = $row["cidade_parc"]; 
$estado_parc          = $row["estado_parc"]; 
$telefone_parc        = $row["telefone_parc"]; 
$celular_parc         = $row["celular_parc"];

$result->free_result();
$mysqli->close();


?>

<html>
<head>
  <title>Alterar Parceiro</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
  <link rel="stylesheet" type="text/css" href="_css/cadUser.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        padding: 10px;
        width: 100%;
        margin-top: 50px;
        font-size: 25pt;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 50pt;
        }
      }

    </style>

</head>

<body>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="sysPet.php">Sys Pet</a>
        </div>
      <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="cadUser.php">
              <span class="glyphicon glyphicon-user"></span> Cadastre-se 
            </a>
          </li>
      </ul>
      </div>
</nav>
<section class="areacabecalho">
  <head id="cabecalho">
    <section id="menu">
      <div class="cabecalhomenu">
        <nav class="navmenu">
          <ul>
              <li id="menuProdutos">
                  <a href="#" title="">
                    <span class="icon"><i aria-hidden="true" class="icon-home"></i></span><span><img id="icone" src="_image/produtos_syspet.png"/>Produtos</span>
                  </a>
              </li>
              <li id="menuAgenda">
                  <a href="sysAgendamento.php">
                    <span class="icon"><i aria-hidden="true" class="icon-agend"></i></span><span><img id="icone" src="_image/icon_agenda.png"/>Agendamento</span>
                  </a>
              </li>
              <li id="menuUnidades">
                  <a href="sysUnidades.php">
                    <span class="icon"><i aria-hidden="true" class="icon-unid"></i></span><span><img id="icone" src="_image/unidades.png"/>Unidades</span>
                  </a>
              </li>
              <li id="menuParceiros">
                  <a href="listaParceiros.php">
                    <span class="icon"><i aria-hidden="true" class="icon-parc"></i></span><span><img id="icone" src="_image/parceiros.png"/>Parceiros</span>
                  </a>
              </li>
              <li id="menuCentAtend">
                  <a href="sysCentAtendimento.php">
                    <span class="icon"><i aria-hidden="true" class="icon-centrAtend"></i></span><img id="icone" src="_image/centrAtendimento.png"/>Central de Atendimento</span>
                  </a>
              </li>
          </ul>
        </nav>
      </div>
    </section>
  </head>
</section>

<br>
<br>
<div class="container">
    <form action="sysParceiroAlterarOk.php" method="post">

      <a href="listaParceiros.php">
        <img src="_image/voltar.png" alt="Voltar" width="70" height="70">
          </a>
          <h2> Alterar Parceiro</h2>
            <fieldset id="parceiro">
              <input type="hidden" class="form-control" name="id_parc"                                    value="<?php echo $id_parc; ?>">

              <div class="form-group">
                <label for="nomeParc">             Nome:         </label> 
                  <input type="text"     
                                                                              name="nome_parc"        
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Nome Completo"  
                                                                              value="<?php echo $nome_parc; ?>">
              </div>

              <div>
                <label for="emailParc">           E-mail:         </label> 
                  <input type="text"     
                                                                              name="email_parc"      
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Email"
                                                                              value="<?php echo $email_parc; ?>">
              </div>

              <div class="form-group">
                <label for="loginParc">           Login:          </label>
                  <input type="text"     
                                                                              name="login_parc"      
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Login"
                                                                              value="<?php echo $login_parc; ?>">
              </div>


              <div class="form-group">
                <label for="senhaParc">           Senha:          </label> 
                  <input type="password" 
                                                                              name="senha_parc"      
                                                                              size="8"  
                                                                              maxlength="8"
                                                                              class="form-control"  
                                                                              placeholder="8 dígitos"    
                                                                              value="<?php echo $senha_parc; ?>">
            
              </div><br>

              <div class="form-group">
                <label for="cnpjParc">             CNPJ:          </label> 
                  <input type="number"   
                                                                              name="cnpj_parc"       
                                                                              size="12" 
                                                                              maxlength="12"
                                                                              class="form-control" 
                                                                              placeholder="Cnpj"         
                                                                              value="<?php echo $cnpj_parc; ?>">
              </div><br>


              <div class="form-group">
                <label for="responsavelParc">   Responsável:     </label> 
                  <input type="text"     
                                                                             name="responsavel_parc"
                                                                             size="20" 
                                                                             maxlength="36"
                                                                             class="form-control" 
                                                                             placeholder="responsavel_parc"
                                                                             value="<?php echo $responsavel_parc; ?>">
             </div>
           </fieldset>
            
            <fieldset id="endereco"><legend>Endereço</legend>
              <div class="form-group">
              <label for="ruaParc">            Logradouro:     </label> 
                <input type="text"     
                                                                              name="rua_parc"         
                                                                              size="13" 
                                                                              maxlength="40"
                                                                              class="form-control" 
                                                                              placeholder="Rua, Av, Trav,..."
                                                                              value="<?php echo $rua_parc; ?>">
              </div><br>

              <div class="form-group">
              
                <label for="numeroParc">             Número:      </label> 
                <input type="number"   
                                                                              name="numero_parc"      
                                                                              min="0" 
                                                                              max="99999"
                                                                              class="form-control"                                      
                                                                              value="<?php echo $numero_parc; ?>">
              </div><br>

              <div class="form-group">
              <label for="complementoParc">   Complemento:     </label> <input type="text"     
                                                                              name="complemento_parc"
                                                                              class="form-control"                          
                                                                              placeholder="Nº Andar"          
                                                                              value="<?php echo $complemento_parc; ?>">
              </div>

              <div class="form-group">
              <label for="bairroParc">             Bairro:     </label> <input type="text"     
                                                                              name="bairro_parc"
                                                                              class="form-control"                               
                                                                              placeholder="Informe seu bairro"
                                                                              value="<?php echo $bairro_parc; ?>"> 
              </div>

              <div class="form-group">              
              <label for="cidadeParc">             Cidade:     </label> <input type="text" 
                                                                              name="cidade_parc"     
                                                                              size="20" 
                                                                              maxlength="35"
                                                                              class="form-control" 
                                                                              placeholder="Sua Cidade"
                                                                              value="<?php echo $cidade_parc; ?>">
              
             </div>
              
              <div class="form-group">
              <label for="estadoParc">             Estado:     </label> <input type="text" 
                                                                              name="estado_parc"
                                                                              size="20" 
                                                                              maxlength="35"
                                                                              class="form-control" 
                                                                              placeholder="Estado"
                                                                              value="<?php echo $estado_parc; ?>">
              </div>

            </fieldset>

            <fieldset id="contato"><legend>Contato</legend>
              <div class="form-group">
              <label for="telefoneParc">Telefone Comercial:    </label> <input type="phone" 
                                                                              name="telefone_parc"
                                                                              class="form-control" 
                                                                              placeholder="Tel Comercial com DDD"
                                                                              value="<?php echo $telefone_parc; ?>">
              </div><br>

              <div class="form-group">
              <label for="celularParc">Telefone Celular:       </label> <input type="phone" 
                                                                              name="celular_parc"
                                                                              class="form-control" 
                                                                              placeholder="Tel Celular com DDD e digítos"
                                                                              value="<?php echo $celular_parc; ?>">
              </div>
            </fieldset>
    
            <button type="submit" class="btn btn-primary">Salvar</button>
            
    </form>
  </div>
</body>
</html>