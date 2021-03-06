<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Signos</title>
		<style>
			body {
				margin:0;
				background-image: url(fundo.gif);
				font-family: Montserrat,sans-serif;
			}

			ul {
 			 	list-style-type: none;	
  				margin-top: 0;
  				overflow: hidden;
  				background-color: white;
  				padding-left: 200px;
			}

			li {
				float: left;
			}

			li a {
  				display: block;
  				color: #333;
  				text-align: center;
  				padding: 35px 16px;
 				text-decoration: none;
			}

			li a:hover {
  				background-color: black;
  				color: white;
			}
			h1 {
				letter-spacing: 0.18em;
    			line-height: 1em;
    			text-align: center;
    			font-size: 2em;
    			color: #000000;
    			font-family: lulo-clean-w01-one-bold, sans-serif;
    			margin-top: 9px;
    			margin-bottom: 12px;
			}
			h2 {
				font-size:15px;
				font-family:  avenir-lt-w01_35-light1475496,sans-serif;
				text-align: center;
				font-weight: lighter;
				margin-top: 0px;
				letter-spacing: 0.07em;
			}
			img{
				display: block;
   				margin-left: auto;
    			margin-right: auto;
			}
			p{
				font-size: 25px;
			}
			.container{
				height: 380px;
    			width: 914px;
    			background-color: white;
    			position: absolute;
    			top: 50%;
  			 	left: 50%;
    			margin-right: -50%;
    			transform: translate(-50%, -50%);
    			box-shadow: 1px 1px 3px 0 rgba(0,0,1);

			}
			.container_right{
				height: 100%;
				width: 50%;
				position: absolute;
				display: inline-block;
				box-sizing: border-box;
				border-style: solid;
				border-color: #d3d3d3;
				border-left-width: 1px;
				border-top-width: 0px;
				border-bottom-width: 0px;
				border-right-width: 0px;
			}
			.container_left{
				height: 100%;
				width: 50%;
				padding-top: 8%;
				padding-bottom: 5%;
				display: inline-block;
				box-sizing: border-box;

			}

			h3{
				margin-top: 0;
				font-size: 1em;
				font-family: avenir-lt-w01_35-light1475496,sans-serif;
    			color: #000000;
    			text-align: center;
    			letter-spacing: 0.18em;
    			font-weight: lighter;
    			margin-bottom: 0px;
    			color: gray;
			}
			.especial{
				text-align: justify;
				font-size: 15px;
				font-family: avenir-lt-w01_35-light1475496,sans-serif;
				padding-top: 20%;
				padding-right: 15%;
				padding-left: 15%;
				line-height: 27px;
			}
			.button {
				color: #fff;
				width: 110px;
				height: 40px;
				padding: 6px 17px 6px 17px;
				font-weight: 500;
				font-size: 15px;
				border-radius: 10px;
				text-align: center;
				margin-top: 10px;
				margin-left: 180px;
				border: 0px;
			}
			#amarelo{
				background-color: #f38b00;
			}
			#verde{
				background-color: #5e9f09;
			}
			#rosa{
				background-color: #d60057;
			}
			#azul{
				background-color:#009ad6;
			}

		</style>
	</head>
	<body>
	<ul>
 			<li><a href="Signos.php">HOME</a></li>
	</ul>
	<?php
		$dia = $_POST ['dia'];
		$mes = $_POST ['mes'];		
		$ano = "2020";
		$data = $ano . "-" . $mes . "-" . $dia;
		date_default_timezone_set("America/Sao_Paulo");   	 			
		$data = strtotime ($data);
		$aquario = strtotime ("2020-01-20");
		$peixes = strtotime ("2020-02-19");
		$aries = strtotime ("2020-03-21");
		$touro = strtotime ("2020-04-20");
		$gemeos = strtotime ("2020-05-21");
		$cancer = strtotime ("2020-06-21");
		$leao = strtotime ("2020-07-23");
		$virgem = strtotime ("2020-08-23");
		$libra = strtotime ("2020-09-23");
		$escorpiao = strtotime ("2020-10-23");
		$sagitario = strtotime ("2020-11-22");
		$capricornio = strtotime ("2020-12-22");
		$resultado = checkdate($mes,$dia,$ano);
		if($resultado==1){
			if ($data >= $aquario && $data < $peixes)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>AQU??RIO</h1>
				  		<h2>20 de Janeiro - 18 de Fevereiro</h2>
				  		<img src = 'img/Aqu??rio.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Aqu??rio costuma ter a amizade como cart??o de visita e ter uma conex??o intensa com a liberdade. Signo idealista, tende a dar prefer??ncia aos di??logos racionais. Aqu??rio ?? solid??rio e humano, tamb??m pode ser radical e bem ???do contra???.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";

		}
		elseif ($data >= $peixes && $data < $aries)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>PEIXES</h1>
				  		<h2>19 de Fevereiro - 20 de Mar??o</h2>
				  		<img src = 'img/Peixes.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Peixes costuma entender tudo sem precisar de muitas palavras, possuem uma sensibilidade superior. Signo compassivo e inspirador, Peixes tende a ter uma forte conex??o com a espiritualidade, mas pode se iludir com certa facilidade.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				 </div>";
		}	
		elseif ($data >= $aries && $data < $touro)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>??RIES</h1>
				  		<h2>21 de Mar??o - 19 de Abril</h2>
				  		<img src = 'img/??ries.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em ??ries costuma viver no agora; al??m de possuir um grande prazer em existir, a????o e decis??o tamb??m podem ser algumas de suas marcas. A lideran??a ?? uma caracter??stica forte no signo, que pode ser usada para o empreendedorismo.</p>
				  		<button class = 'button' id ='rosa'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $touro && $data < $gemeos)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>TOURO</h1>
				  		<h2>20 de Abril - 20 de Maio</h2>
				  		<img src = 'img/Touro.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Touro costuma n??o abrir m??o do que traz conforto e bem-estar, mas pode ter a possessividade em evid??ncia. O signo preza pela beleza f??sica e pela gula. A satisfa????o de Touro vem do contato com todos os cinco sentidos.</p>
				  		<button class = 'button' id ='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $gemeos && $data < $cancer)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>G??MEOS</h1>
				  		<h2>21 de Maio - 20 de Junho</h2>
				  		<img src = 'img/G??meos.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em G??meos costuma apreciar novas ideias, novos lugares e novas pessoas. G??meos tem carisma de sobra e tende a fazer amigos com muita facilidade. A superficialidade e a inconsequ??ncia tamb??m podem ser algumas das marcas do signo.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";
		}		
		elseif ($data >= $cancer && $data < $leao)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>C??NCER</h1>
				  		<h2>21 de Junho - 22 de Julho</h2>
				  		<img src = 'img/C??ncer.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em C??ncer costuma buscar o que lhe traz seguran??a. O signo ?? maternal e emotivo e tem uma proximidade com o apego ao passado. C??ncer costuma ter a intui????o acentuada, sentir as coisas no ar e captar tudo logo no primeiro olhar.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $leao && $data < $virgem)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>LE??O</h1>
				  		<h2>23 de Julho - 22 de Agosto</h2>
				  		<img src = 'img/Le??o.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Le??o costuma amar plateias e aplausos. O signo tem a coragem e o humor como marcas registradas, mas tamb??m o orgulho e o autoritarismo. Le??o geralmente valoriza as oportunidades e aproveita cada momento, sabe amar e ter generosidade.</p>
				  		<button class = 'button' id =''>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $virgem && $data < $libra)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>VIRGEM</h1>
				  		<h2>23 de Agosto - 20 de Mar??o</h2>
				  		<img src = 'img/Virgem.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Virgem costuma buscar constantemente a perfei????o, tudo sempre poderia estar um pouco melhor. Signo observador, que costuma identificar o detalhe que ningu??m mais percebe. Virgem tem praticidade e organiza????o, mas tamb??m pode ser frio e c??tico.</p>
				  		<button class = 'button' id ='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $libra && $data < $escorpiao)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>LIBRA</h1>
				  		<h2>23 de Setembro - 22 de Outubro</h2>
				  		<img src = 'img/Libra.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Libra costuma buscar sempre o equil??brio e conviver com a indecis??o. Regido por V??nus, o signo tem uma aproxima????o natural com as artes. Libra costuma ter ??tica, mas tamb??m pode ter vaidade em excesso e comportamentos considerados de mau gosto.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $escorpiao && $data < $sagitario)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>ESCORPI??O</h1>
				  		<h2>23 de Outubro - 21 de Novembro</h2>
				  		<img src = 'img/Escorpi??o.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Escorpi??o costuma ter muita perspic??cia, n??o ?? a toa que s??o naturalmente detetives. O sexto sentido do signo alerta para poss??veis ???perigos??? logo de cara. Escorpi??o tem uma capacidade de regenera????o ??nica, mas tamb??m pode ter muitos ci??mes.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $sagitario && $data < $capricornio)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>SAGIT??RIO</h1>
				  		<h2>22 de Novembro - 21 de Dezembro</h2>
				  		<img src = 'img/Sagit??rio.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Sagit??rio costuma ser viajante, sua casa ?? o mundo inteiro. O signo viaja muito tamb??m em sua pr??pria mente. N??o tente aprisionar Sagit??rio de nenhuma forma, ele n??o aceita limites. Otimista e jovial, pode ter exageros e uma dose de deboche.</p>
				  		<button class = 'button' id ='rosa'>Saiba mais</button>
					</div>
				  </div>";
		}
   		else
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO ??:</h3>
				  		<h1>CAPRIC??RNIO</h1>
				  		<h2>22 de Dezembro - 19 de Janeiro</h2>
				  		<img src = 'img/Capric??rnio.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Capric??rnio costuma ter seus prop??sitos e metas bem definidos. Signo de praticidade que segue as regras do jogo tem total no????o dos seus limites. Capric??rnio ?? maduro e bem humorado, mas tamb??m pode ser frio nas rela????es e um tanto pessimista.</p>
						<button class = 'button' id='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		}else
			echo "<script>alert('Data Inv??lida!');javascript:window.location='Signos.php';</script>";
	?>
	</body>
</html>  
