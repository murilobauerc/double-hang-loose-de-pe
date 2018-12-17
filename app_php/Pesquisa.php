<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
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

		<?php
			echo "Teste<br/>";
			$string = $_GET["search"];
			echo "Você pesquisou por $string";

		?>
	</body>

</html>