<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
		<?php
			$cortl = isset($_GET["cortl"])?$_GET["cortl"]:"#000000"
			$corl = isset($_GET["corl"])?$_GET["corl"]:"#000000"
			$cortr = isset($_GET["cortr"])?$_GET["cortr"]:"#000000"
			$corr = isset($_GET["corr"])?$_GET["corr"]:"#000000"
			$corb = isset($_GET["corb"])?$_GET["corb"]:"#000000"
		?>
		<style type="text/css">
			article {
				color: <?php echo $cortl; ?>;
				background: <?php echo $corl; ?>;
			}
			aside {
				color: <?php echo $cortr; ?>;
				background: <?php echo $corr; ?>;
			}
			body {
				background-color: <?php echo $corb; ?>;
				}

		</style>
	</head>


	<body>

		<nav id="navbar">
	        <ul>
	            <li>
	                <h1>
	                    <a href="index.html"> DHLDP </a>
	                </h1>
	                <a href="index2.html"> Próxima Página </a>
	                <a href="https://github.com/"> Github </a>
	                
	            </li>
	        </ul>
    	</nav>
    	<article>
			<?php
				echo "Teste<br/>";
				$string = $_GET["search"];
				echo "Você pesquisou por $string na cor $cor";

			?>
		</article>
	</body>

</html>