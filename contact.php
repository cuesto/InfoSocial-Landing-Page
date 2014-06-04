<?php
$field_name = $_POST['Name'];
$field_email = $_POST['Mail'];
$field_message = $_POST['Message'];


$mail_to = '34cuesto@gmail.com';
$subject = '#Message# '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$E-Mail."\r\n";
$headers .= 'Reply-To: '.$E-Mail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Gracias por el mensaje. Nos pondremos en contacto con usted en breve.');
  window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Error al enviar el mensaje. Por favor, envíe un correo electrónico a 34cuesto@gmail.com');
  window.location = 'index.html';
 </script>
<?php
}
?>
