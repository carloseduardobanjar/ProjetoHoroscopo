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
    			font-weight: 800;
       			font-size: 90px;
   				line-height: 110px;
   				margin-bottom: 0;
   				margin-top: 0;
   				padding-top: 130px;
   				margin-left: 200px;
				margin-right: 200px;
				color: white;
			}

			h2 {
				margin-bottom: 20px;
				font-size: 25px;
    			line-height: 32px;
   				line-height: 32px;
        		font-weight: 800;
			}

			.subtitulo {
				margin-left: 200px;
				color: white;
				font-weight: 300;
   				font-size: 25px;
    			line-height: 32px;
    			margin-top: 0;
			}

			.container {
				width: 360px;
    			position: absolute;
    			right: 200px;
    			bottom: 30px;
    			z-index: 1;
			}

			.conteudo {
				background-color: white;
    			box-shadow: 1px 1px 3px 0 rgba(0,0,0,.5);
   				padding: 20px 20px;
			}

			.button {
				background-color: black;
				width: 100%;
				color: #fff;
				padding: 6px 17px 6px 23px;
				font-weight: 700;
				border-radius: 10px;
				border:0;
			}

			.footer {
				background-color: white;
				color: black;
				bottom: 0px;
				position: absolute;
				width: 100%;
			}
			.especial{
				padding: 25px 200px;
			}
			option, select{
				font-size: 20px;
				
			}
			option{
				color:#333333;
			}
		

  		</style>
	</head>	

	<body>
		<ul>
 			<li><a href="#">SIGNOS</a></li>
  			<li><a href="#">CARACTERÍSTICAS DOS SIGNOS</a></li>
  			<li><a href="#">HORÓSCOPO MENSAL</a></li>
  			<li><a href="#">HORÓSCOPO 2020</a></li>
		</ul>
		<h1>SIGNOS</h1>
		<p class="subtitulo">De quem você é a quem você pode ser.</p>
		<div class= "container">
			<div class= "conteudo">
				<h2>VEJA SEU HORÓSCOPO PERSONALIZADO</h2>
				<p><strong>Acompanhe suas tendências</strong> diariamente e receba conselhos personalizados para cada momento.</p>
				<form action="Signos2.php" method="POST">
					<p>Quando é o seu aniversário?</p>
					<p>
					<select name="dia">
						<option value = "01">01</option>
						<option value = "02">02</option>
						<option value = "03">03</option>
						<option value = "04">04</option>
						<option value = "05">05</option>
						<option value = "06">06</option>
						<option value = "07">07</option>
						<option value = "08">08</option>
						<option value = "09">09</option>
						<option value = "10">10</option>	
						<option value = "11">11</option>
						<option value = "12">12</option>
						<option value = "13">13</option>
						<option value = "14">14</option>
						<option value = "15">15</option>
						<option value = "16">16</option>
						<option value = "17">17</option>
						<option value = "18">18</option>
						<option value = "19">19</option>
						<option value = "20">20</option>
						<option value = "21">21</option>
						<option value = "22">22</option>	
						<option value = "23">23</option>
						<option value = "24">24</option>
						<option value = "25">25</option>
						<option value = "26">26</option>
						<option value = "27">27</option>
						<option value = "28">28</option>
						<option value = "29">29</option>
						<option value = "30">30</option>
						<option value = "31">31</option>
					</select> 
					<select name="mes">
						<option value = "01">Janeiro</option>
						<option value = "02">Fevereiro</option>
						<option value = "03">Março</option>
						<option value = "04">Abril</option>
						<option value = "05">Maio</option>
						<option value = "06">Junho</option>
						<option value = "07">Julho</option>
						<option value = "08">Agosto</option>
						<option value = "09">Setembro</option>
						<option value = "10">Outubro</option>	
						<option value = "11">Novembro</option>
						<option value = "12">Dezembro</option>
					</select></p>
					<br><br><input class="button" type=submit><br><br>
				</form> 
			</div>
		</div>
		<div class='footer'>
			<p class = "especial"> CARLOS EDUARDO BANJAR E THIAGO DURSO </p>
		</div>
	</body>
</html> 