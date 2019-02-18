<?php
// FORM CONTACT
function form_contact () {
  $errors = [];
  $nome = trim($_POST['nome']);
  $apelido = trim($_POST['apelido']);
  $telefone = trim($_POST['telefone']);
  $email = trim($_POST['email']);
  $cidade = trim($_POST['cidade']);
  $estado = trim($_POST['estado']);
  $estado = trim($_POST['estado']);
  $possui_marca = trim($_POST['possui_marca']);
  $outra_marca = trim($_POST['outra_marca']);
  $jogos = trim($_POST['jogos']);
  $canal = trim($_POST['canal']);
  $interesse = $_POST['interesse'];
  $descricao = trim($_POST['descricao']);

  // Email
  if (empty($email)) {
    $errors[] = 'Por favor digite um e-mail.';
  } else if (!is_email($email)) {
    $errors[] = 'O e-mail digitado não é válido.';
  }

  // Template de envio
  if (!count($errors) > 0) {
    $emailTo = 'contato@sehloirooficial.com.br';
    $body = "E-mail de orçamento do site:\n\n";
    if ($nome) {
      $body .= "Nome: $nome\n";
    }
    if ($apelido) {
      $body .= "Apelido: $apelido\n";
    }
    if ($telefone) {
      $body .= "Telefone: $telefone\n";
    }
    if ($email) {
      $body .= "E-mail: $email\n";
    }
    if ($cidade) {
      $body .= "Cidade: $cidade\n";
    }
    if ($estado) {
      $body .= "Estado: $estado\n";
    }
    if ($possui_marca) {
      $body .= "Possui marca: $possui_marca\n";
    }
    if ($canal) {
      $body .= "Canal: $canal\n";
    }
    if ($interesse) {
      $body .= "Interesses: ".implode(', ', $interesse)."\n";
    }
    if ($descricao) {
      $body .= "Expectativas e considerações importantes: $descricao\n";
    }

    $assunto = 'Orçamento - Site SehLoiro';
    $headers = "From: $email" . "\r\n";

    $result = wp_mail($emailTo, $assunto, $body, $headers);

    if ($result) {
      die(json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
      ]));
    }

    die(json_encode([
      'success' => false,
      'message' => 'Erro ao enviar mensagem!'
    ]));
  }

  die(json_encode([
    'success' => false,
    'message' => $errors[0]
  ]));
}

// Custom ajax calls
add_action( 'wp_ajax_nopriv_form_contact', 'form_contact' );
add_action( 'wp_ajax_form_contact', 'form_contact' );