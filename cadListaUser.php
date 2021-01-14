<?php

require_once 'conectMysql.php';

?>
<html>
<head>

	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Usuários</title>

	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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

        <div>
          <ul>
        	<li>
              <a href="#" id="navbardrop" data-toggle="dropdown">
      				<span class="glyphicon glyphicon-off" aria-hidden="true">
                <div class="dropdown">
                  <ul class="dropdown-menu">
                    <li><a href="sysPet.php">Sair</a></li>
                  </ul>
                </div>
              </span>
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
                  <a href="sysPetUser.php" title="">
                    <span class="icon"><i aria-hidden="true" class="icon-home"></i></span><span><img id="icone" src="_image/produtos_syspet.png"/>Produtos</span>
                  </a>
              </li>
              <li id="menuAgenda">
                  <a href="sysAgendamentoUser.php">
                    <span class="icon"><i aria-hidden="true" class="icon-agend"></i></span><span><img id="icone" src="_image/icon_agenda.png"/>Agendamento</span>
                  </a>
              </li>
              <li id="menuUnidades">
                  <a href="sysUnidadesUser.php">
                    <span class="icon"><i aria-hidden="true" class="icon-unid"></i></span><span><img id="icone" src="_image/unidades.png"/>Unidades</span>
                  </a>
              </li>
              <li class="nav-item dropdown" id="menuParceiros">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Parceiros</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="listaParceiros.php">Listar Parceiros</a>
                    <a class="dropdown-item" href="cadParc.php">Cadastrar Parceiro</a>
                  </div>
                    <!--<span class="icon"><i aria-hidden="true" class="icon-parc"></i></span><span><img id="icone" src="_image/parceiros.png"/>Parceiros</span>-->
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
<fieldset>
<div class="container"><br>
    <h2>
      <a href='cadUser.php'>
        <img src="_image/iconeParceiro.png" alt="Incluir Usuario" width="45" height="45">
      </a>Usuários
      <a href="sysPet.php">
      	<img src="_image/voltarRosa.png" alt="Voltar" width="70" height="70">
      </a>      
    </h2>
    <br>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>Ações</th>
          <th>Id</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Usuário</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once 'conectMysql.php';

        $sql = "SELECT * FROM cad_user";
        if ($result = $mysqli->query($sql)) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>
                  <a href='sysUserAlterar.php?id=" . $row["id"] . "'>
                      <span class='glyphicon glyphicon-pencil'></span>
                  </a>

                  <a href='sysUserExcluirOk.php?id=" . $row["id"] . "'>
                      <span class='glyphicon glyphicon-remove'></span>
                  </a>

                  <td>"
              . $row["id"]         . "<td>" 
              . $row["nome"]       . "<td>" 
              . $row["email"]      . "<td>" 
              . $row["usuario"]    . "<td></tr>";
          }

          $result->free_result();

        }
        $mysqli->close();
        ?>
      </tbody>
    </table>
  </div>

</form>

</div>

</fieldset>


</body>
</html>	