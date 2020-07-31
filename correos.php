<?php
$destinatario='brian13andres@gmail.com';

$nombre=$POST['nombre'];
$asunto="Asesoria o consulta"
$telefono=$POST['telefono'];
$mensaje=$POST['mensaje'];
$email=$POST['email'];

$header="Enviado desde la página de Asesorias Y Consultorias AYC";
$mensajecompleto=$mensaje."\nAtentamente: ".$nombre;

mail($destinatario, $asunto, $mensajecompleto, $header)
echo "<script>alert('¡Correo enviado exitosamente!')  </script>"
echo "<script> setTimeout(\"location.href ='index.html'\",1000) </script>"

?>
