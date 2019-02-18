<?php
// FORM CONTACT
function form_ygb () {
  $errors = [];
  $nome = trim($_POST['nome']);
  $sobrenome = trim($_POST['sobrenome']);
  $email = trim($_POST['email']);
  $email_confirmacao = trim($_POST['email_confirmacao']);
  $cidade = trim($_POST['cidade']);
  $estado = trim($_POST['estado']);
  $telefone = trim($_POST['telefone']);
  $celular = trim($_POST['celular']);
  $how = $_POST['celular'];
  $habilidades = trim($_POST['habilidades']);

  // Email
  if (empty($email)) {
    $errors[] = 'Por favor digite um e-mail.';
  } else if (!is_email($email)) {
    $errors[] = 'O e-mail digitado não é válido.';
  } else if ($email != $email_confirmacao) {
    $errors[] = 'Os e-mails devem ser iguais.';
  }

  // Template de envio
  if (!count($errors) > 0) {
    $emailTo = 'contato@sehloirooficial.com.br';
    $body = "E-mail 'Quero ser YoGamer' do site:\n\n";
    if ($nome) {
      $body .= "Nome: $nome\n";
    }
    if ($nome) {
      $body .= "Sobrenome: $sobrenome\n";
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
    if ($telefone) {
      $body .= "Telefone: $telefone\n";
    }
    if ($celular) {
      $body .= "Telefone: $celular\n";
    }
    if ($how) {
      $body .= "Como quer ajudar: ".implode(', ', $how);
    }
    if ($habilidades) {
      $body .= "Telefone: $habilidades\n";
    }

    $assunto = 'Quer ser YoGamer do Bem - Site SehLoiro';
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
add_action( 'wp_ajax_nopriv_form_contact', 'form_ygb' );
add_action( 'wp_ajax_form_contact', 'form_ygb' );