<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
		<?php
			$cortl = isset($_GET["cortl"])?$_GET["cortl"]:"#000000";
			$corl = isset($_GET["corl"])?$_GET["corl"]:"#000000";
			$cortr = isset($_GET["cortr"])?$_GET["cortr"]:"#000000";
			$corr = isset($_GET["corr"])?$_GET["corr"]:"#000000";
			$corb = isset($_GET["corb"])?$_GET["corb"]:"#000000";
			$cornavb = isset($_GET["cornavb"])?$_GET["cornavb"]:"#000000";
			$cornavt = isset($_GET["cornavt"])?$_GET["cornavt"]:"#000000";
		?>
		<style type="text/css">
			article {
				color: <?php echo $cortl; ?>;
				background-color: <?php echo $corl; ?>;
			}
			.sidenav {
				color: <?php echo $cortr; ?>;
				background-color: <?php echo $corr; ?>;
			}
			body {
				background-color: <?php echo $corb; ?>;
				}
			#navbar {
				background-color: <?php echo $cornavb; ?>;
			}
			#navbar a {
				color: <?php echo $cornavt; ?>;
			}

		</style>
	</head>


	<body>

		<nav id="navbar">
	        <ul>
	            <li>
	                <h1>
	                    <a href="http://dhldp-site.herokuapp.com/Desktop/home.php"> DHLDP </a>
	                </h1>
	                <a href="../flamengo.html"> Próxima Página </a>
	                <a href="https://github.com/murilobauerc/double-hang-loose-de-pe/tree/dhldp-php"> Github </a>
	                
	            </li>
	        </ul>
    	</nav>
    	<article>
			<?php
				echo "Teste<br/>";
				$string = $_GET["search"];
				echo "Você pesquisou por [$string]<br/>";
				echo "cor de fundo left: $corl <br/>";
				echo "cor de fundo right: $corr <br/>";
				echo "cor de texto left: $cortl <br/>";
				echo "cor de texto right: $cortr <br/>";
				echo "cor de fundo navbar: $cornavb <br/>";
				echo "cor de fundo navbar: $cornavt <br/>";
				echo "cor de background: $corb <br/>";

			?>
		</article>

		<div id="mySidenav" class="sidenav">
			<h3> Menu </h3>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<form method="get" action="app_php/Pesquisa.php">
				Pesquisa: <input type="text" name="search"/><br/>
				Cor do texto left: <input type="color" name="cortl"><br/>
				Cor do fundo left: <input type="color" name="corl"><br/>
				Cor do texto right: <input type="color" name="cortr"><br/>
				Cor do fundo right: <input type="color" name="corr"><br/>
				Cor do background: <input type="color" name="corb"><br/>
				Barra background: <input type="color" name="cornavb"><br/>
				Barra texto: <input type="color" name="cornavt"><br/>
				<input type="submit" name=">"/>
			</form>
		<div/>
	
	</body>

</html>