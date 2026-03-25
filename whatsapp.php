<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/whatsapp_tracking.php';

$source = izzihub_whatsapp_sanitize_source((string) ($_GET['src'] ?? 'site'));
$message = trim((string) ($_GET['text'] ?? ''));

if ($message === '') {
    $message = izzihub_whatsapp_default_message($source);
}

$trackingDir = __DIR__ . '/_private/tracking';
if (!is_dir($trackingDir)) {
    @mkdir($trackingDir, 0755, true);
}

$event = [
    'id' => bin2hex(random_bytes(8)),
    'timestamp' => date('c'),
    'source' => $source,
    'message' => $message,
    'request_uri' => $_SERVER['REQUEST_URI'] ?? '',
    'referer' => $_SERVER['HTTP_REFERER'] ?? '',
    'ip' => izzihub_whatsapp_client_ip(),
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
    'query' => [
        'utm_source' => $_GET['utm_source'] ?? '',
        'utm_medium' => $_GET['utm_medium'] ?? '',
        'utm_campaign' => $_GET['utm_campaign'] ?? '',
        'utm_term' => $_GET['utm_term'] ?? '',
        'utm_content' => $_GET['utm_content'] ?? '',
        'gclid' => $_GET['gclid'] ?? '',
        'gad_source' => $_GET['gad_source'] ?? '',
        'gbraid' => $_GET['gbraid'] ?? '',
        'wbraid' => $_GET['wbraid'] ?? '',
        'fbclid' => $_GET['fbclid'] ?? '',
        'msclkid' => $_GET['msclkid'] ?? '',
    ],
];

$logFile = $trackingDir . '/whatsapp-clicks-' . date('Y-m') . '.log';
@file_put_contents(
    $logFile,
    json_encode($event, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

$redirectUrl = 'https://wa.me/' . IZZIHUB_WHATSAPP_PHONE . '?' . http_build_query(
    ['text' => $message],
    '',
    '&',
    PHP_QUERY_RFC3986
);

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redirecionando para o WhatsApp | IzziHub</title>
    <meta name="robots" content="noindex,nofollow">
    <?php include __DIR__ . '/includes/google_tag.php'; ?>
    <meta http-equiv="refresh" content="1;url=<?= htmlspecialchars($redirectUrl, ENT_QUOTES, 'UTF-8') ?>">
    <style>
        :root { color-scheme: dark; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at top, rgba(71, 234, 237, 0.18), transparent 30%),
                #101111;
            font-family: Inter, Arial, sans-serif;
            color: #f5f7f7;
        }
        .card {
            width: min(92vw, 32rem);
            padding: 2rem;
            border-radius: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(24, 26, 26, 0.9);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.28);
            text-align: center;
        }
        .badge {
            display: inline-flex;
            padding: 0.4rem 0.8rem;
            border-radius: 999px;
            background: rgba(71, 234, 237, 0.12);
            color: #47eaed;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }
        h1 {
            margin: 1rem 0 0.75rem;
            font-size: clamp(1.6rem, 2vw, 2rem);
            line-height: 1.15;
        }
        p {
            margin: 0;
            color: rgba(245, 247, 247, 0.75);
            line-height: 1.6;
        }
        a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 1.5rem;
            padding: 0.95rem 1.3rem;
            border-radius: 999px;
            background: #25D366;
            color: #081112;
            font-weight: 800;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">Tracking OK</div>
        <h1>Redirecionando para o WhatsApp</h1>
        <p>Estamos registrando esse clique e abrindo a conversa com a IzziHub.</p>
        <a href="<?= htmlspecialchars($redirectUrl, ENT_QUOTES, 'UTF-8') ?>">Abrir WhatsApp agora</a>
    </div>
    <script>
        window.setTimeout(function () {
            window.location.replace(<?= json_encode($redirectUrl, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>);
        }, 180);
    </script>
</body>
</html>
