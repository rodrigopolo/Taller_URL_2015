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

$servername = 'localhost';
$username = 'webappusr';
$password = 'contrasenya';
$db = 'webappdb';

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
	echo ('No se pudo conectar a MySQL: ' . $conn->connect_error);
}else{
	echo 'La conexión a MySQL funciona.';
}

?>
</p>
</body>
</html>