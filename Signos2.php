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
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>AQUÁRIO</h1>
				  		<h2>20 de Janeiro - 18 de Fevereiro</h2>
				  		<img src = 'img/Aquário.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Aquário costuma ter a amizade como cartão de visita e ter uma conexão intensa com a liberdade. Signo idealista, tende a dar preferência aos diálogos racionais. Aquário é solidário e humano, também pode ser radical e bem “do contra”.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";

		}
		elseif ($data >= $peixes && $data < $aries)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>PEIXES</h1>
				  		<h2>19 de Fevereiro - 20 de Março</h2>
				  		<img src = 'img/Peixes.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Peixes costuma entender tudo sem precisar de muitas palavras, possuem uma sensibilidade superior. Signo compassivo e inspirador, Peixes tende a ter uma forte conexão com a espiritualidade, mas pode se iludir com certa facilidade.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				 </div>";
		}	
		elseif ($data >= $aries && $data < $touro)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>ÁRIES</h1>
				  		<h2>21 de Março - 19 de Abril</h2>
				  		<img src = 'img/Áries.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Áries costuma viver no agora; além de possuir um grande prazer em existir, ação e decisão também podem ser algumas de suas marcas. A liderança é uma característica forte no signo, que pode ser usada para o empreendedorismo.</p>
				  		<button class = 'button' id ='rosa'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $touro && $data < $gemeos)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>TOURO</h1>
				  		<h2>20 de Abril - 20 de Maio</h2>
				  		<img src = 'img/Touro.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Touro costuma não abrir mão do que traz conforto e bem-estar, mas pode ter a possessividade em evidência. O signo preza pela beleza física e pela gula. A satisfação de Touro vem do contato com todos os cinco sentidos.</p>
				  		<button class = 'button' id ='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $gemeos && $data < $cancer)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>GÊMEOS</h1>
				  		<h2>21 de Maio - 20 de Junho</h2>
				  		<img src = 'img/Gêmeos.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Gêmeos costuma apreciar novas ideias, novos lugares e novas pessoas. Gêmeos tem carisma de sobra e tende a fazer amigos com muita facilidade. A superficialidade e a inconsequência também podem ser algumas das marcas do signo.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";
		}		
		elseif ($data >= $cancer && $data < $leao)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>CÂNCER</h1>
				  		<h2>21 de Junho - 22 de Julho</h2>
				  		<img src = 'img/Câncer.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Câncer costuma buscar o que lhe traz segurança. O signo é maternal e emotivo e tem uma proximidade com o apego ao passado. Câncer costuma ter a intuição acentuada, sentir as coisas no ar e captar tudo logo no primeiro olhar.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $leao && $data < $virgem)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>LEÃO</h1>
				  		<h2>23 de Julho - 22 de Agosto</h2>
				  		<img src = 'img/Leão.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Leão costuma amar plateias e aplausos. O signo tem a coragem e o humor como marcas registradas, mas também o orgulho e o autoritarismo. Leão geralmente valoriza as oportunidades e aproveita cada momento, sabe amar e ter generosidade.</p>
				  		<button class = 'button' id =''>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $virgem && $data < $libra)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>VIRGEM</h1>
				  		<h2>23 de Agosto - 20 de Março</h2>
				  		<img src = 'img/Virgem.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Virgem costuma buscar constantemente a perfeição, tudo sempre poderia estar um pouco melhor. Signo observador, que costuma identificar o detalhe que ninguém mais percebe. Virgem tem praticidade e organização, mas também pode ser frio e cético.</p>
				  		<button class = 'button' id ='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $libra && $data < $escorpiao)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>LIBRA</h1>
				  		<h2>23 de Setembro - 22 de Outubro</h2>
				  		<img src = 'img/Libra.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Libra costuma buscar sempre o equilíbrio e conviver com a indecisão. Regido por Vênus, o signo tem uma aproximação natural com as artes. Libra costuma ter ética, mas também pode ter vaidade em excesso e comportamentos considerados de mau gosto.</p>
				  		<button class = 'button' id ='amarelo'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $escorpiao && $data < $sagitario)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>ESCORPIÃO</h1>
				  		<h2>23 de Outubro - 21 de Novembro</h2>
				  		<img src = 'img/Escorpião.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Escorpião costuma ter muita perspicácia, não é a toa que são naturalmente detetives. O sexto sentido do signo alerta para possíveis “perigos” logo de cara. Escorpião tem uma capacidade de regeneração única, mas também pode ter muitos ciúmes.</p>
				  		<button class = 'button' id ='azul'>Saiba mais</button>
					</div>
				  </div>";
		}
		elseif ($data >= $sagitario && $data < $capricornio)
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>SAGITÁRIO</h1>
				  		<h2>22 de Novembro - 21 de Dezembro</h2>
				  		<img src = 'img/Sagitário.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Sagitário costuma ser viajante, sua casa é o mundo inteiro. O signo viaja muito também em sua própria mente. Não tente aprisionar Sagitário de nenhuma forma, ele não aceita limites. Otimista e jovial, pode ter exageros e uma dose de deboche.</p>
				  		<button class = 'button' id ='rosa'>Saiba mais</button>
					</div>
				  </div>";
		}
   		else
		{
			echo "<div class ='container'>
				  	<div class = 'container_left'> 
				  		<h3>SEU SIGNO É:</h3>
				  		<h1>CAPRICÓRNIO</h1>
				  		<h2>22 de Dezembro - 19 de Janeiro</h2>
				  		<img src = 'img/Capricórnio.png'>
				  	</div>
				  	<div class = 'container_right'>
				  		<p class='especial'>Quem tem sol em Capricórnio costuma ter seus propósitos e metas bem definidos. Signo de praticidade que segue as regras do jogo tem total noção dos seus limites. Capricórnio é maduro e bem humorado, mas também pode ser frio nas relações e um tanto pessimista.</p>
						<button class = 'button' id='verde'>Saiba mais</button>
					</div>
				  </div>";
		}
		}else
			echo "<script>alert('Data Inválida!');javascript:window.location='Signos.php';</script>";
	?>
	</body>
</html>  
