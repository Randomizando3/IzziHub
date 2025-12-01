﻿<?php
// enviar-contato.php

// Exibir errors em ambiente de teste (remova em produção)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Bloqueia acesso direto sem POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// Sanitiza / pega os campos
$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$tipo     = trim($_POST['tipo'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

// Validação bem básica
if ($nome === '' || $email === '' || $mensagem === '') {
    die('Por favor, preencha todos os campos obrigatórios.');
}

// ===== CONFIG SMTP (Titan) =====
$fromEmail    = 'software@showdeimagem.com.br';   // MESMO que o usuário do SMTP
$fromPassword = 'software_Show2024';
$smtpHost     = 'smtp.titan.email';
$smtpPort     = 587;

// E-mail que vai receber os contatos do site
$toEmail   = 'contato@izzihub.com.br';              // <<< troque para o email que vai receber
$toName    = 'IzziHub - Contato Site';

// ===== PHPMailer =====
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Ajuste o caminho conforme onde você colocou os arquivos
require __DIR__ . '/phpmailer/Exception.php';
require __DIR__ . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Config SMTP
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $fromEmail;
    $mail->Password   = $fromPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $smtpPort;
    $mail->CharSet    = 'UTF-8';

    // De / Para
    $mail->setFrom($fromEmail, 'Site IzziHub');
    $mail->addAddress($toEmail, $toName);

    // Opcional: responder diretamente para quem preencheu o form
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $nome);
    }

    // Assunto e corpo
    $mail->Subject = 'Novo contato do site IzziHub';

    $bodyText = "Você recebeu uma nova mensagem do formulário de contato do site.\n\n"
        . "Nome: {$nome}\n"
        . "E-mail: {$email}\n"
        . "Tipo de projeto: {$tipo}\n\n"
        . "Mensagem:\n{$mensagem}\n";

    $bodyHtml = nl2br(htmlspecialchars($bodyText, ENT_QUOTES, 'UTF-8'));

    $mail->isHTML(true);
    $mail->Body    = $bodyHtml;
    $mail->AltBody = $bodyText;

    $mail->send();

    // Resposta simples (pode trocar por redirect)
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Mensagem enviada • IzziHub</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                margin: 0;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                background: #f5f5fb;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            .box {
                background: #ffffff;
                padding: 24px 28px;
                border-radius: 18px;
                box-shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
                max-width: 420px;
                width: 100%;
                text-align: center;
            }
            h1 {
                font-size: 1.5rem;
                margin-bottom: 0.5rem;
            }
            p {
                font-size: 0.95rem;
                color: #6b7280;
            }
            a {
                display: inline-block;
                margin-top: 16px;
                padding: 10px 18px;
                border-radius: 999px;
                background: #ff4d8b;
                color: #fff;
                text-decoration: none;
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>Mensagem enviada ✅</h1>
            <p>Obrigado por entrar em contato! Em breve retornaremos pelo e-mail informado.</p>
            <a href="index.html">Voltar para o site</a>
        </div>
    </body>
    </html>
    <?php

} catch (Exception $e) {
    // Em produção, loga o erro e mostra msg genérica
    echo 'Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.';
    // echo 'Erro: ' . $mail->ErrorInfo; // útil para debug
}
