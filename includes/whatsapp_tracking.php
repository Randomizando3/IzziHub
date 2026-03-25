<?php

declare(strict_types=1);

const IZZIHUB_WHATSAPP_PHONE = '5511982580565';

function izzihub_whatsapp_sanitize_source(string $source): string
{
    $source = strtolower(trim($source));
    $source = preg_replace('/[^a-z0-9_-]+/', '-', $source) ?? 'site';
    $source = trim($source, '-');

    return $source !== '' ? $source : 'site';
}

function izzihub_whatsapp_default_message(string $source): string
{
    $messages = [
        'home-nav' => 'Ola, quero conversar sobre um projeto com a IzziHub.',
        'home-nav-mobile' => 'Ola, quero conversar sobre um projeto com a IzziHub.',
        'home-hero' => 'Ola, quero tirar um projeto do papel com a IzziHub.',
        'home-cta' => 'Ola, quero falar sobre um projeto com a IzziHub.',
        'home-fab' => 'Ola, quero falar com a IzziHub.',
        'home-footer' => 'Ola, quero falar com a IzziHub.',
        'cases-nav' => 'Ola, quero ver mais detalhes do portfolio da IzziHub.',
        'cases-cta' => 'Ola, vi o portfolio da IzziHub e quero conversar sobre um projeto.',
        'cases-footer' => 'Ola, quero falar com a IzziHub.',
        'google-ads' => 'Ola, vim do Google Ads e quero falar sobre um projeto com a IzziHub.',
    ];

    return $messages[$source] ?? 'Ola, quero falar com a IzziHub.';
}

function izzihub_whatsapp_url(string $source = 'site', string $message = '', array $extra = []): string
{
    $trackingParams = [];
    $allowedTrackingKeys = [
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
        'gclid',
        'gad_source',
        'gbraid',
        'wbraid',
        'fbclid',
        'msclkid',
    ];

    foreach ($allowedTrackingKeys as $key) {
        if (!isset($_GET[$key])) {
            continue;
        }

        $value = trim((string) $_GET[$key]);
        if ($value !== '') {
            $trackingParams[$key] = $value;
        }
    }

    $params = array_merge(
        ['src' => izzihub_whatsapp_sanitize_source($source)],
        $trackingParams,
        $extra
    );

    if ($message !== '') {
        $params['text'] = $message;
    }

    return '/whatsapp.php?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
}

function izzihub_whatsapp_client_ip(): string
{
    $candidates = [
        $_SERVER['HTTP_CF_CONNECTING_IP'] ?? '',
        $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '',
        $_SERVER['REMOTE_ADDR'] ?? '',
    ];

    foreach ($candidates as $candidate) {
        if ($candidate === '') {
            continue;
        }

        $parts = array_map('trim', explode(',', $candidate));
        foreach ($parts as $part) {
            if (filter_var($part, FILTER_VALIDATE_IP)) {
                return $part;
            }
        }
    }

    return '';
}
