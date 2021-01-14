<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">
	<title>Sys Pet - Central de Atendimento</title>
	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<link rel="stylesheet" type="text/css" href="_css/centAtendimento.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">

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
 <!-- 24/09/2020 - Terminar de verificar como posicionar os botões "Area do Pet e Area do cliente em linha" -->
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
<fieldset>
	<a href="sysPet.php">
    	<img src="_image/voltarRosa.png" alt="Voltar" width="70" height="70">
    </a>

	<h1><img id="icone" src="_image/iconeTel-Faleconosco.png"/> Central de Atendimento</h1>
	<form method="post" id="centAtendimento" action="#"/>

            <fieldset id="informacoes"><legend><b>Atendimento via E-mail</b></legend>
                <p><label for="Nome">Nome:          </label> <input type="text" name="Nome" id="Nome" size="20" maxlength="50" placeholder="Nome Completo"/></p>
                <p><label for="Email">E-mail:       </label> <input type="text" name="email" id="email" size="20" maxlength="50" placeholder="E-mail"/></p><br>
                <p><label for="Telefone">Telefone:  </label> <input type="number" name="telefone" id="telefone" size="20" maxlength="12" placeholder="Telefone"/></p><br><br>
                <p><label for="Assunto">Assunto:    </label> <input type="text" name="assunto" id="assunto" size="20" maxlength="50">
                <p><label for="Desc">Descrição:     </label> <input type="text" name="descricao" id="descricao" min="20" max="9999"/></p>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </fieldset>


			<aside id="lateral">
    			<h1>Fale Conosco</h1>

				<h2>Telefone</h2>

				<br>(DDD) XXXX-XXXX<br>
				<br><h3>Segunda à Sexta-Feira</h3><br>
				<h3>8h às 19h</h3><br>
				
				<br><h3>Sábados e Domingos</h3><br>
				<h3>8h às 18h</h3>


				<br><h3>*Exceto feriados</h3>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</aside>

<footer id="rodape">
<p>Copyright&copy; 2020 - Desenvolvimento WEB<br/>
<p>Projeto de desenvolvimento HTML + PHP + MySQL
</footer>

</fieldset>


</body>
</html>
