<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 2</title>
</head>
<body>
    <?php
	$dia = date("d");
	if($dia <= 10){
	echo "Sitio activo";
	}else{
	echo "Sitio fuera de servidor";}
    ?>
</body>
</html>
