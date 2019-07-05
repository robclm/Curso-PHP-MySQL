<?php

if($_POST["nombre"]=="" || $_POST["apellido"]=="" || $_POST["email"]=="" || $_POST["comentarios"]==""){
	
	echo "Ha habido un error. Revisa los campos";
	die();
	
}
	
	$texto_mail=$_POST["comentarios"];

	$destinatario=$_POST["email"];

	$asunto=$_POST["asunto"];

	$headers="MIME-Version: 1.0\r\n";

	$headers.="Content-type: text/html; charset=iso-8859-1\r\n";

	$headers.="From: Prueba Roberto <robertocolomina@gmail.com >\r\n";

	$exito=mail($destinatario,$asunto,$texto_mail,$headers);

	if($exito){
		echo "Mensaje enviado con éxito";
	}else{
		echo "Ha habido un error";
	}
?>