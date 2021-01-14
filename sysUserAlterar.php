<?php
require_once 'conectMysql.php';

$id  = $_GET["id"];
$sql = "select  id,
                nome,
                email,
                conf_email,
                usuario,
                senha,
                conf_senha,
                dt_nasc,
                sexo,
                user_rua,
                user_numero,
                user_comp,
                user_bairro,
                user_cidade,
                user_tel,
                user_cel
from cad_user where id = " . $id;


$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
$id              = $row["id"];
$nome            = $row["nome"];
$email           = $row["email"];
$conf_email      = $row["conf_email"];
$usuario         = $row["usuario"];
$senha           = $row["senha"];
$conf_senha      = $row["conf_senha"];
$dt_nasc         = $row["dt_nasc"];
$sexo            = $row["sexo"];
$user_rua        = $row["user_rua"];
$user_numero     = $row["user_numero"]; 
$user_comp       = $row["user_comp"]; 
$user_bairro     = $row["user_bairro"]; 
$user_cidade     = $row["user_cidade"]; 
$user_tel        = $row["user_tel"];
$user_cel        = $row["user_cel"];

$result->free_result();
$mysqli->close();


?>

<html>
<head>
  <title>Alterar Usuário</title>

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
    <form action="sysUserAlterarOk.php" method="post">

      <a href="cadListaUser.php">
        <img src="_image/voltar.png" alt="Voltar" width="70" height="70">
          </a>
          <h2> Alterar Parceiro</h2>
            <fieldset id="parceiro">
              <input type="hidden" class="form-control" name="id"                                    value="<?php echo $id; ?>">

              <div class="form-group">
                <label for="nome">             Nome:         </label> 
                  <input type="text"     
                                                                              name="nome"        
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Nome Completo"  
                                                                              value="<?php echo $nome; ?>">
              </div>

              <div>
                <label for="email">           E-mail:         </label> 
                  <input type="text"     
                                                                              name="email"      
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Email"
                                                                              value="<?php echo $email; ?>">
              </div>

              <div class="form-group">
                <label for="conf_email">    Confirme o E-mail:   </label>
                  <input type="text"     
                                                                              name="conf_email"      
                                                                              size="20" 
                                                                              maxlength="36"
                                                                              class="form-control" 
                                                                              placeholder="Confirmar e-mail"
                                                                              value="<?php echo $conf_email; ?>">
              </div>


              <div class="form-group">
                <label for="usuario">           Usuario:          </label> 
                  <input type="text" 
                                                                              name="usuario"      
                                                                              size="8"  
                                                                              maxlength="8"
                                                                              class="form-control"  
                                                                              placeholder="8 dígitos"    
                                                                              value="<?php echo $usuario; ?>">
            
              </div><br>

              <div class="form-group">
                <label for="senha">             Senha:          </label> 
                  <input type="password"   
                                                                              name="senha"       
                                                                              size="12" 
                                                                              maxlength="12"
                                                                              class="form-control" 
                                                                              placeholder="Senha"         
                                                                              value="<?php echo $senha; ?>">
              </div><br>


              <div class="form-group">
                <label for="conf_senha">   Confirmar Senha:     </label> 
                  <input type="password"     
                                                                             name="conf_senha"
                                                                             size="20" 
                                                                             maxlength="36"
                                                                             class="form-control" 
                                                                             placeholder="Confirme sua senha"
                                                                             value="<?php echo $conf_senha; ?>">
             </div>

             <div class="form-group">
                <label for="dt_nasc">   Data de Nascimento:     </label> 
                  <input type="date"     
                                                                             name="dt_nasc"
                                                                             size="20" 
                                                                             maxlength="36"
                                                                             class="form-control" 
                                                                             placeholder="dt_nasc"
                                                                             value="<?php echo $dt_nasc; ?>">
             </div>

              <div class="form-group">
                <label for="sexo">   Sexo:     </label> 
                  <input type="text"     
                                                                             name="sexo"
                                                                             size="20" 
                                                                             maxlength="36"
                                                                             class="form-control" 
                                                                             placeholder="Masculino / Feminino"
                                                                             value="<?php echo $sexo; ?>">
             </div>




           </fieldset>
            
            <fieldset id="endereco"><legend>Endereço</legend>
              <div class="form-group">
              <label for="user_rua">            Logradouro:     </label> 
                <input type="text"     
                                                                              name="user_rua"         
                                                                              size="13" 
                                                                              maxlength="40"
                                                                              class="form-control" 
                                                                              placeholder="Rua, Av, Trav,..."
                                                                              value="<?php echo $user_rua; ?>">
              </div><br>

              <div class="form-group">
              
                <label for="user_numero">             Número:      </label> 
                <input type="number"   
                                                                              name="user_numero"      
                                                                              min="0" 
                                                                              max="99999"
                                                                              class="form-control"                                      
                                                                              value="<?php echo $user_numero; ?>">
              </div><br>

              <div class="form-group">
              <label for="user_comp">   Complemento:     </label> <input type="text"     
                                                                              name="user_comp"
                                                                              class="form-control"                          
                                                                              placeholder="Casa / App / Ponto de referencia"          
                                                                              value="<?php echo $user_comp; ?>">
              </div>

              <div class="form-group">
              <label for="user_bairro">             Bairro:     </label> <input type="text"     
                                                                              name="user_bairro"
                                                                              class="form-control"                               
                                                                              placeholder="Informe seu bairro"
                                                                              value="<?php echo $user_bairro; ?>"> 
              </div>

              <div class="form-group">              
              <label for="user_cidade">             Cidade:     </label> <input type="text" 
                                                                              name="user_cidade"     
                                                                              size="20" 
                                                                              maxlength="35"
                                                                              class="form-control" 
                                                                              placeholder="Sua Cidade"
                                                                              value="<?php echo $user_cidade; ?>">
              
             </div>

            </fieldset>

            <fieldset id="contato"><legend>Contato</legend>
              <div class="form-group">
              <label for="user_tel">Telefone Residencial:    </label> <input type="phone" 
                                                                              name="user_tel"
                                                                              class="form-control" 
                                                                              placeholder="Tel Comercial com DDD"
                                                                              value="<?php echo $user_tel; ?>">
              </div><br>

              <div class="form-group">
              <label for="user_cel">Telefone Celular:       </label> <input type="phone" 
                                                                              name="user_cel"
                                                                              class="form-control" 
                                                                              placeholder="Tel Celular com DDD e digítos"
                                                                              value="<?php echo $user_cel; ?>">
              </div>
            </fieldset>
    
            <button type="submit" class="btn btn-primary">Salvar</button>
            
    </form>
  </div>
</body>
</html>