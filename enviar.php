<?php
$destino="jagudelolondono@gmail.com";
$Nombre= $_post["Nombre"];
$Correo= $_post["Correo"];
$mensaje= $_post["mensaje"];
$contenido= "Nombre:".$Nombre."\nCorreo:".$Correo."\nmensaje:" $mensaje;
mail($destino,"Contacto",$contenido);
header(location:gracias.html");

?>