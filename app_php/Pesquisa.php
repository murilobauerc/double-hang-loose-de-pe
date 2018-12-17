<!DOCTYPE html>
<html>
	<head>
		
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
		<aside>
	        <h3> Menu </h3>
	        <ul>    
	            <li> 
	                <a href="index.html"> opção 1 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 2 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 3 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 4 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 5 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 6 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 7 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 8 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 9 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 10 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 11 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 12 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 13 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 14 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 15 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 16 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 17 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 18 </a>
	            </li>
	            <li> 
	                <a href="index.html"> opção 19 </a>
	            </li>
	        </ul>
    	</aside>
	</body>

</html>