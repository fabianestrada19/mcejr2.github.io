<?php
$to = "promocionvocacionalmcejr@gmail.com";
$subject = "Misioneras del corazón Eucaristico de Jesucristo Rey";
$from = $_REQUEST['email_emisor'];
$datos = $_REQUEST['mensaje'];
$nombre = $_REQUEST['nombre_del_emisor'];
 
// Para enviar un mail HTML, el Content-type header debe estar configurado
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Crear los headers del email
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Componer un mensaje de emial de HTML simple
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hola '.$subject.'</h1>';
$message .= '<h2 style="color:#0F85D4;">Mi nombre es '.$nombre.'</h1>';
$message .= '<p style="color:#080;font-size:18px;">'.$datos.'</p>';
$message .= '</body></html>';
 
// Enviando el email
if(mail($to, $subject, $message, $headers)){
    echo 'Su correo ha sido enviado con exito :).';
    echo "<a href='index.html'>Regresar a contacto</a>";
	
} else{
    echo 'Su correo no se ha podido enviar, intente de nuevo por favor';
    echo "<a href='index.html'>Regresar a contacto</a>";
}
?>