<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Cadastro de Usuário</title>
	
	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<link rel="stylesheet" type="text/css" href="_css/cadUser.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
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





<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
   		<div class="navbar-header">
   			<a class="navbar-brand" href="sysPet.php">Sys Pet</a>
   		</div>
	    	<ul class="nav navbar-nav navbar-right">
    	  		<li>
      				<a href="sysPet.php">
  						<img src="_image/voltarRosa.png" alt="Voltar" width="70" height="70">
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
									<a href="sysPet.php" title="">
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

			<div class="container">
            <form action="cadUser_bd.php" method="post" />

            <fieldset id="usuario">
                <p>
                	<label for="cNome">Nome:							</label> 
                	<input type="text" 
                		   name="nome" 
                		   id="nome" 
                		   size="20" 
                		   maxlength="36" 
                		   placeholder="Nome Completo"/>
                </p>
                
                <p>
                	<label for="cEmail">E-mail:							</label> 
                	<input type="text" 
                		   name="email" 
                		   id="email" 
                		   size="20" 
                		   maxlength="36" 
                		   placeholder="Email"/>
                </p>

                <p>
                	<label for="cCemail">Confirme seu E-mail:				</label> 
                	<input type="text" 
                	       name="confemail" 
                	       id="confemail" 
                	       size="20" 
                	       maxlength="36" 
                	       placeholder="Confirme seu e-mail"/>
                </p>
                
                <p>
                	<label for="cLogin">Login:							</label> 
                	<input type="text" 
                	       name="login" 
                	       id="login" 
                	       size="20" 
                	       maxlength="36" 
                	       placeholder="Login"/>
                </p>
                
                <p>
                	<label for="cSenha">Senha:							</label> 
                	<input type="password" 
                	       name="senha" 
                	       id="senha" 
                	       size="8" 
                	       maxlength="8" 
                	       placeholder="8 dígitos"/>
                </p>
                
                <p>
                	<label for="cCSenha">Confirme sua senha:				</label> 
                	<input type="password" 
                	       name="confsenha" 
                	       id="confsenha" 
                	       size="14" 
                	       maxlength="8" 
                	       placeholder="Confirme sua senha"/>
                </p>
                
                <p>
                	<label for="cNasc">Data de Nascimento:<br>			</label> 
                	<input type="date" 
                	       name="nasc" 
                	       id="nasc"/>
                </p><br>


                <p>
                	<label for="cSexo">Sexo:							</label> 
                	<input type="text" 
                	       name="sexo" 
                	       id="sexo" 
                	       size="10" 
                	       maxlength="9" 
                	       placeholder="Masculino / Feminino"/>
                </p>


            <fieldset id="endereco"><legend>Endereço</legend>
                <p>
                	<label for="cRua">Logradouro:						</label> 
                	<input type="text" 
                	       name="rua" 
                	       id="rua" 
                	       size="13" 
                	       maxlength="40" 
                	       placeholder="Rua, Av, Trav,..."/>
                </p><br>

                <p>
                	<label for="cNum">Número:							</label> 
                	<input type="number" 
                	       name="numero" 
                	       id="numero" 
                	       min="0" 
                	       max="99999"/>
                </p><br>

                <p>
                	<label for="cComp">Complemento:						</label> 
                	<input type="text" 
                	       name="complemento" 
                	       id="complemento" 
                	       placeholder="Casa, Ap"/> 
                </p>

                <p>
                	<label for="cBar">Bairro:							</label> 
                	<input type="text" 
                	       name="bairro" 
                	       id="bairro" 
                	       placeholder="Informe seu bairro"/> 
                </p>

                <p>
                	<label for="cCid">Cidade:							</label>
                    <input type="text" 
                           name="cidade" 
                           id="cidade" 
                           size="20" 
                           maxlength="35" 
                           placeholder="Sua Cidade"/>
                </p>
            </fieldset>

            <fieldset id="contato"><legend>Contato</legend>
                <p>
                	<label for="phone">Telefone Residencial:			</label> 
                	<input type="tel" 
                	       name="telefone" 
                	       id="telefone" 
                	       placeholder="Tel Residencial com DDD"/> 
                </p><br>

                <p>
                	<label for="phone">Telefone Celular:				</label> 
                	<input type="tel" 
                	       name="celular" 
                	       id="celular" 
                	       placeholder="Tel Celular com DDD e digítos"/> 
                </p>
            </fieldset>

    			<button type="submit" class="btn btn-primary">Cadastrar	</button>
    			<button type="reset" class="btn btn-primary">Limpar		</button>
				<a href="sysPet.php">Voltar</a>

			</fieldset>
		</form>
	</div>
</body>
</html>