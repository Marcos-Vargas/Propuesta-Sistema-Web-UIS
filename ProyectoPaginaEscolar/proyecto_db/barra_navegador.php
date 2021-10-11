<style type="text/css">
	nav {
	position : absolute;
	left : 0;
	width : 100%;
	background-color: #2D2D2D ;
	}
	nav ul {
	margin : 0 auto;
	width : 940px;
	list-style : none;
	}
	nav ul li {
	float : left;
	}
	nav ul li a {
	display : block;
	margin-right : 20px;
	width : 140px;
	font-size : 14px;
	line-height : 44px;
	text-align : center;
	text-decoration : none;
	color : #ccc;
	}
	nav ul li a:hover {
	color : #FFF;
	}
	nav ul li.selected a {
	color : #0F6;
	}
</style>

<nav id="navegador">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="perfil.php?id=<?php echo $_SESSION['id']; ?>">Perfil</a></li>
        <?php if($_SESSION['rango'] == '1' or $_SESSION['rango'] == '3') { ?><li><a href="panel">Panel</a></li><?php } ?>
        <li><a href="logout.php">Salir</a></li>
    </ul>
</nav>