<style type="text/css">
	nav {
	position : absolute;
	left : 0;
	width : 100%;
	background : #333;
	}
	nav ul {
	margin : 0 400px;
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
	color : #fff;
	}
	nav ul li.selected a {
	color : #fff;
	}
	

</style>

<nav id="navegador">
    <ul>
        <li><a href="../index.php">Inicio</a></li>
        <?php if($_SESSION['rango'] == '1') { ?><li><a href="editarusuario.php">Editar Usuarios</a><?php } ?></li>
        <?php if($_SESSION['rango'] == '1') { ?><li><a href="rangos.php">Editar Rangos</a></li><?php } ?>
        <li><a href="agregarnoticia.php">Agregar Noticia</a></li>
        <li><a href="../logout.php">Salir</a></li>
    </ul>
</nav>
