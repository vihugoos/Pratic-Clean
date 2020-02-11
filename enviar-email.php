<?php
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$message = $_POST['message'];
$subject = "Contato Pratic Clean";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Informações sobre o Cliente: <br><br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Telefone: " . $phone . " <br>";
$corpo .= "Email: " . $email . " <br><br>";
$corpo .= "Mensagem: " . $message . " <br>";

// Email que receberá a mensagem 
$email_to = 'victorhugoos@live.com';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>