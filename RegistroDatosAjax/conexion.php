<?php

$host='localhost';
$bd='empresa';
$user='postgres';
$pass='1234';

$nom=$_POST['nombre'];
$email=$_POST['correo'];
$tel=$_POST['tel'];
$direc=$_POST['direccion'];

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO clientes(nombre,correo,telefono,direccion)
	VALUES('$_REQUEST[nombre]','$_REQUEST[correo]',
	'$_REQUEST[tel]','$_REQUEST[direccion]')");

$consulta=pg_query($conexion,$query);
pg_close();


echo "Estos datos fueron almacenados en la base de datos: <br> Nombre:".$nom."<br>"."Correo: ".$email.
"<br> Teléfono: ".$tel."<br> Dirección: ".$direc;



?>