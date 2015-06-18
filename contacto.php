<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['menssage'];
$asunto = $_POST['subject']
$para = 'ollintzinrj@gmail.com';
$header = 'From:' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
	if (mail($para, $asunto, $msjCorreo, $header)) {
	echo "
			<script language='javascript'>
				alert('Mensaje enviado, muchas gracias.');
				window.location.href = 'index.html';
			</script>
		";
	} 
	else {
	echo 'Fallo el envio';
	}
}
?>