<?php
//Variáveis

$nome = $_POST['nome'];
$apelido = $POST['apelido']
$empresa = $POST['empresa']
$telefone = $_POST['telefone'];
$data_inicio = date('d/m/Y');
$data_fim = date('d/m/Y');
$descricao = $POST['descricao']
$valor_maximo_projeto = $POST['valor_maximo_projeto']
$tipo_projeto = $POST['tipo_projeto']
$email = $_POST['email'];


//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "luisfernandesa664@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>
