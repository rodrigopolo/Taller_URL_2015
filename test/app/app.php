<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<p><? /* Si ven este comentario en el navegador, no activaron los open tags. */ ?></p>
<p>
La version de PHP es: <?php echo phpversion(); ?>
</p>
<p>
<?php
$link = mysql_connect('localhost','webappusr','contrasenya'); 
if (!$link) { 
	echo('No se pudo conectar a MySQL: ' . mysql_error()); 
}else{
	if($query_result=mysql_query('SHOW TABLES FROM webappdb')){
		echo 'Conexión a MySQL y DB funcionan.';
	}else{
		echo 'Si hay conexión a MySQL pero no hay acceso a la base de datos.';
	}
}
?>
</p>
</body>
</html>