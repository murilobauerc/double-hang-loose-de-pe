<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        DHLDP
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styleM.css"/>
    <script src="main.js"></script>
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

    <header>
        

    </header>

    <article>
        <span id="btnopen" onclick="openNav()">open</span>
        <h3> Membros: </h3>
        <ul>    
            <li> Alan Soledar </li>
            <li> Felipe Jacques </li>
            <li> Gabriel Dutra </li>
            <li> Leonardo Augusto </li>
            <li> Murilo Bauer </li>
            <li> Vinicius Knevitz </li>
            <li class="redtxt"> William Pinto </li>
        </ul>
        <h3> Menções honrosas</h3>
        <ul>    
            <li> Latrell Spencer </li>
            <li> Benedict Cumberbatch </li>
            <li> Julius Rock </li>
            <li> Little Chambs </li>
            <li> Terry Jeffords </li>
            <li> Ciro Games </li>
            <li> Buro Coxinea </li>
            <li> Gato Maconha </li>
            <li> Godoy </li>
            <li> Vitinho</li>
            <li> Klitzke</li>
        
        </ul>

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
    <!-- Use any element to open the sidenav -->
    

    <footer>


    </footer>
    
    
    <script src="js/main.js"></script>
</body>

</html>

