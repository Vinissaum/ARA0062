<?php
	    include_once "servico/Bd.php";
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8"/>
	<title> Billy The Puppet </title>
	<link rel="stylesheet" type="text/css" href="../styles/estilos.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	</head>
	
	<body>
	<h1 style="text-align: center"> Billy The Puppet </h1>
	
	<nav id = "menu"> 
	<li><a href="index.php"> Página Inicial </a></li>
	<li><a href="login.html"> Faça seu login </a></li>
	</nav>
	
	<div class="container">
</br>
</br>
</br>
	    <?php
	        $bd = new Bd();
            $sql = "select * from blog";
           
            foreach ($bd->query($sql) as $row) {
                echo '<div class="card-group">';
                echo '  <div class="card">';
                echo '    <div class="card-body" style="width=18rem;">';
                echo '      <h5 class="card-title">'.$row['titulo'].'</h5>';
                echo '      <p class="card-text">'.$row['corpo'].'</p>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';}
        ?>
	</div>
	
	</body>
	
	</html>