<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">


	<title>Cadastro de Parceiros</title>
	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<link rel="stylesheet" type="text/css" href="_css/cadUser.css"/>


</head>
 <!-- 24/09/2020 - Terminar de verificar como posicionar os botões "Area do Pet e Area do cliente em linha" -->
<body>

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
            <form action="cadParc_bd.php" method="post"/>
            <a href="listaParceiros.php">
      			<img src="_image/voltar.png" alt="Voltar" width="70" height="70">
      		</a>
            <fieldset id="usuario">
                <p>
                	<label for = "cNome">Nome:         </label> 
                	<input  type        = "text" 
                			name        = "nome_parc" 
                			id          = "nome_parc" 
                			size        = "20" 
                			maxlength   = "36" 
                			placeholder = "Nome Completo"/>
                </p>

                <p>
                	<label for="cEmail">E-mail:         </label> 
                	<input  type        = "text" 
                			name        = "email_parc" 
                	        id          = "email_parc" 
                	        size        = "20" 
                	        maxlength   = "36" 
                	        placeholder = "Email"/>
                </p>

                <p>
                	<label for="cLogin">Login:         </label> 
                	<input type        = "text" 
                	       name        = "login_parc" 
                	       id          = "login_parc" 
                	       size        = "20" 
                	       maxlength   = "36" 
                	       placeholder = "Login"/>
                </p>

                <p>
                	<label for="cSenha">Senha:         </label> 
                	<input  type        = "password" 
                			name        = "senha_parc" 
                			id          = "senha_parc" 
                			size        = "8" 
                			maxlength   = "8" 
                			placeholder = "8 dígitos"/>
                </p>
                <br>
                

                <p>
                	<label for="cSenha">CNPJ:         </label> 
                	<input  type        = "number"
                	        name        = "cnpj_parc" 
                	        id          = "cnpj_parc" 
                 	        size        = "12" 
                	        maxlength   = "12" 
                	        placeholder = "CNPJ"/>
                </p>
                <br>


                <p>
                	<label for="cNome">Responsável:   </label> 
                	<input  type        = "text" 
                	        name        = "responsavel_parc" 
                	        id          = "responsavel_parc" 
                	        size        = "20" 
                	        maxlength   = "36" 
                	        placeholder = "Responsável"/>
                </p>
            
            <fieldset id="endereco"><legend>Endereço</legend>
                <p>
                	<label for="cRua">Logradouro:     </label> 
                	<input  type        ="text" 
                	        name        = "rua_parc" 
                	        id          = "rua_parc" 
                	        size        = "13" 
                	        maxlength   = "40" 
                	        placeholder = "Rua, Av, Trav,..."/>
                </p>
                <br>

                <p>
                	<label for="cNum">Número:        </label> 
                	<input  type        = "number" 
                	        name        = "numero_parc" 
                			id          = "numero_parc" 
                			min         = "0" 
                			max         = "99999"/>
                </p>
                <br>

                <p>
                	<label for="cComp">Complemento:  </label> 
                	<input  type        = "text" 
                	        name        = "complemento_parc" 
                	        id          = "complemento_parc" 
                	        placeholder = "Nº Andar"/> 
                </p>

                <p>
                	<label for="cBar">Bairro:        </label> 
                	<input  type        = "text" 
                	        name        = "bairro_parc" 
                	        id          = "bairro_parc" 
                	        placeholder = "Informe seu bairro"/> 
                </p>

                <p>
                	<label for="cCid">Cidade:        </label>
                    <input  type        = "text" 
                            name        = "cidade_parc" 
                            id          = "cidade_parc" 
                            size        = "20" 
                            maxlength   = "35" 
                            placeholder = "Sua Cidade"/>
                </p>
                
                <p>
                	<label for="cCid">Estado:        </label>
                    <input  type        = "text" 
                            name        = "estado_parc" 
                            id          = "estado_parc" 
                            size        = "20" 
                            maxlength   = "35" 
                            placeholder = "Estado"/>
                </p>


            </fieldset>

            <fieldset id="contato"><legend>Contato</legend>
                <p>
                	<label for="cTel">Telefone Comercial:  </label> 
                	<input   type        = "phone" 
                	         name        = "telefone_parc" 
                	         id          = "telefone_parc" 
                	         placeholder = "Tel Comercial com DDD"/> 
                </p>
                <br>
                
                <p>
                	<label for="cCel">Telefone Celular:    </label> 
                	<input   type        = "phone" 
                	         name        = "celular_parc" 
                	         id          = "celular_parc" 
                	         placeholder = "Tel Celular com DDD e digítos"/>
                </p>

            </fieldset>

    			<button type="submit" class="btn btn-primary">Cadastrar</button>
    			<button type="reset" class="btn btn-primary">Limpar</button>
				<a href="listaParceiros.php">Voltar</a>

			</fieldset>
			
		</form>
	</div>
</body>
</html>	