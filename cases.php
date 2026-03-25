<?php
require_once __DIR__ . '/includes/whatsapp_tracking.php';

$wa = static function (string $source, string $message = ''): string {
    return htmlspecialchars(izzihub_whatsapp_url($source, $message), ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio IzziHub | Apps, sistemas e sites sob medida</title>
    <meta name="description" content="Portfólio da IzziHub com apps, sistemas internos, marketplaces e sites lançados para clientes e produtos digitais próprios.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Portfólio IzziHub">
    <meta property="og:description" content="Conheça alguns apps, sistemas e sites desenvolvidos pela IzziHub.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.izzihub.com.br/cases.php">
    <meta property="og:image" content="https://www.izzihub.com.br/imagens/og-izzihub-1200.png">
    <link rel="icon" href="imagens/favicon.ico">
    <?php include __DIR__ . '/includes/google_tag.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        background: "#101111",
                        surface: "#181a1a",
                        panel: "#1f2222",
                        text: "#f5f7f7",
                        muted: "#9aa8a8",
                        cyan: "#47eaed",
                        cyanDeep: "#00ced1",
                        green: "#4ce346",
                        orange: "#ff8c42"
                    },
                    fontFamily: {
                        headline: ["Plus Jakarta Sans", "sans-serif"],
                        body: ["Inter", "sans-serif"]
                    }
                }
            }
        };
    </script>
    <style>
        :root { color-scheme: dark; }
        body {
            background:
                radial-gradient(circle at top left, rgba(71, 234, 237, 0.12), transparent 30%),
                radial-gradient(circle at bottom right, rgba(76, 227, 70, 0.10), transparent 24%),
                #101111;
        }
        .glass-card {
            background: rgba(24, 26, 26, 0.72);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        .headline-gradient {
            background: linear-gradient(135deg, #47eaed 0%, #00ced1 55%, #4ce346 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .filter-chip.is-active {
            background: linear-gradient(135deg, #47eaed 0%, #00ced1 100%);
            color: #081112;
            border-color: transparent;
        }
        .case-card[data-hidden="true"] {
            display: none;
        }
        .case-card {
            cursor: pointer;
            transition: transform 180ms ease, border-color 180ms ease, background 180ms ease;
        }
        .case-card:hover,
        .case-card:focus-visible {
            transform: translateY(-4px);
            border-color: rgba(71, 234, 237, 0.32);
            outline: none;
        }
        .case-card-action {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1.5rem;
            border: none;
            background: transparent;
            padding: 0;
            color: #47eaed;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
        }
        .case-card-action:hover {
            color: #f5f7f7;
        }
        .lightbox {
            position: fixed;
            inset: 0;
            z-index: 80;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }
        .lightbox.is-open {
            display: flex;
        }
        .lightbox-backdrop {
            position: absolute;
            inset: 0;
            background: rgba(5, 10, 10, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .lightbox-panel {
            position: relative;
            z-index: 1;
            width: min(1040px, 100%);
            border-radius: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background:
                radial-gradient(circle at top left, rgba(71, 234, 237, 0.12), transparent 26%),
                rgba(24, 26, 26, 0.96);
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.45);
            padding: 1.25rem;
        }
        .lightbox-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        .lightbox-title {
            font-family: "Plus Jakarta Sans", sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: #f5f7f7;
        }
        .lightbox-close,
        .lightbox-nav {
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(16, 17, 17, 0.72);
            color: #f5f7f7;
            cursor: pointer;
            transition: background 180ms ease, transform 180ms ease;
        }
        .lightbox-close {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.6rem;
            height: 2.6rem;
            border-radius: 999px;
            font-size: 1.2rem;
        }
        .lightbox-close:hover,
        .lightbox-nav:hover {
            background: rgba(71, 234, 237, 0.18);
            transform: scale(1.04);
        }
        .lightbox-main {
            position: relative;
            overflow: hidden;
            border-radius: 1.6rem;
            background: #090b0b;
        }
        .lightbox-main img {
            display: block;
            width: 100%;
            max-height: 72vh;
            object-fit: contain;
            margin: 0 auto;
            background: #090b0b;
        }
        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 999px;
            font-size: 1.25rem;
        }
        .lightbox-nav.prev {
            left: 1rem;
        }
        .lightbox-nav.next {
            right: 1rem;
        }
        .lightbox-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-top: 0.9rem;
            color: #9aa8a8;
            font-size: 0.82rem;
        }
        .lightbox-counter strong {
            color: #f5f7f7;
        }
        @media (max-width: 768px) {
            .lightbox {
                padding: 1rem;
            }
            .lightbox-panel {
                border-radius: 1.5rem;
                padding: 1rem;
            }
            .lightbox-main img {
                max-height: 62vh;
            }
            .lightbox-nav {
                width: 2.4rem;
                height: 2.4rem;
            }
            .lightbox-footer {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body class="font-body text-text selection:bg-cyan/25">
    <nav class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-background/75 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a class="flex items-center gap-3" href="/">
                <img src="logo.png" alt="IzziHub" class="h-10 w-auto">
            </a>
            <div class="hidden items-center gap-8 md:flex">
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="/#solucoes">Soluções</a>
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="/#processo">Processo</a>
                <a class="text-sm font-semibold text-cyan transition hover:text-white" href="/cases.php">Portfólio</a>
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="/#contato">Contato</a>
            </div>
            <div class="hidden md:block">
                <a class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-cyan to-cyanDeep px-6 py-2.5 font-headline text-sm font-bold text-slate-950 transition hover:scale-[1.02]" href="<?= $wa('cases-nav', 'Ola, quero ver mais detalhes do portfolio da IzziHub.') ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
            <button class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-white md:hidden" type="button" data-menu-toggle aria-label="Abrir menu">
                <span class="text-xl">☰</span>
            </button>
        </div>
        <div class="hidden border-t border-white/5 px-6 py-4 md:hidden" data-mobile-menu>
            <div class="flex flex-col gap-3">
                <a class="text-sm font-semibold text-white/80" href="/#solucoes">Soluções</a>
                <a class="text-sm font-semibold text-white/80" href="/#processo">Processo</a>
                <a class="text-sm font-semibold text-cyan" href="/cases.php">Portfólio</a>
                <a class="text-sm font-semibold text-white/80" href="/#contato">Contato</a>
            </div>
        </div>
    </nav>

    <main class="pt-32 pb-20 md:pt-40">
        <section class="pb-16">
            <div class="mx-auto max-w-7xl px-6">
                <div class="grid items-end gap-8 lg:grid-cols-[1.35fr_0.65fr]">
                    <div>
                        <span class="inline-flex rounded-full border border-white/10 bg-white/5 px-4 py-1 text-xs font-bold uppercase tracking-[0.25em] text-cyan">Portfólio IzziHub</span>
                        <h1 class="mt-6 max-w-4xl font-headline text-5xl font-extrabold leading-tight md:text-7xl">
                            Projetos digitais com <span class="headline-gradient">produto, operação e experiência no centro.</span>
                        </h1>
                        <p class="mt-6 max-w-3xl text-lg leading-relaxed text-muted md:text-xl">
                            Uma seleção de apps, sistemas internos, marketplaces e sites pensados para funcionar no dia a dia, vender melhor e dar mais clareza ao negócio.
                        </p>
                    </div>
                    <div class="glass-card rounded-[2rem] p-6">
                        <div class="text-xs uppercase tracking-[0.22em] text-muted">O que você vai ver aqui</div>
                        <div class="mt-4 grid gap-3 text-sm text-white/80">
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Apps mobile e produtos de comunidade</div>
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Sistemas web e automações internas</div>
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Sites com foco em apresentação e conversão</div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 flex flex-wrap gap-3" aria-label="Filtrar portfólio">
                    <button class="filter-chip is-active rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition" type="button" data-filter="all">Todos</button>
                    <button class="filter-chip rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition" type="button" data-filter="app">Apps</button>
                    <button class="filter-chip rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition" type="button" data-filter="sistema">Sistemas</button>
                    <button class="filter-chip rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-white transition" type="button" data-filter="site">Sites</button>
                </div>
            </div>
        </section>

        <section>
            <div class="mx-auto max-w-7xl px-6">
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3" data-case-grid>
                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app" data-case="amora" role="button" tabindex="0" aria-label="Abrir galeria do case AmoraLovers">
                        <img src="imagens/cases/amora-2.jpg" alt="AmoraLovers app" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-green">App de nicho</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">AmoraLovers</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">App</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Rede social com foco em recorrência, comunidade, interação em tempo real e experiência mobile nativa.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Feed e stories</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Chat</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Comunidade</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="amora">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema" data-case="aviv" role="button" tabindex="0" aria-label="Abrir galeria do case Aviv Mais">
                        <img src="imagens/cases/aviv-1.jpg" alt="Aviv mais plataforma" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-cyan">Sistema + produto</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">Aviv Mais</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Sistema</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Ecossistema com painel, afiliados, fluxo comercial e organização de operação em uma mesma base.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Afiliados</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Assinaturas</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Web app</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="aviv">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema" data-case="unionboard-soft" role="button" tabindex="0" aria-label="Abrir galeria do case UnionBoard Software">
                        <img src="imagens/cases/unionboardsoftware-1.jpg" alt="UnionBoard software" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-orange">Edtech</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">UnionBoard Software</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Sistema</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Software para conteúdo didático, interação em sala e fluxos multimídia em quadros interativos.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Educação</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Biblioteca</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Interface rica</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="unionboard-soft">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app" data-case="freelizz" role="button" tabindex="0" aria-label="Abrir galeria do case Freelizz">
                        <img src="imagens/cases/app-workana-1.jpg" alt="Plataforma marketplace de freelancers" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-green">Marketplace</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">Freelizz</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">App</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Plataforma para conectar talentos e demanda com jornada clara de contratação, descoberta e apresentação.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Marketplace</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Perfis</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Oportunidades</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="freelizz">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema" data-case="transcricao" role="button" tabindex="0" aria-label="Abrir galeria do case Transcrição e voz">
                        <img src="imagens/cases/voz-1.jpg" alt="Transcrição de áudio e acessibilidade" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-cyan">Áudio + dados</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">Transcrição e voz</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Sistema</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Projeto com captação, leitura e estruturação de áudio para acessibilidade e ganho operacional.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Speech</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Texto</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Fluxo assistivo</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="transcricao">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema" data-case="webscrap" role="button" tabindex="0" aria-label="Abrir galeria do case Webscrap e coleta">
                        <img src="imagens/cases/scrap.jpg" alt="Automação webscrap" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-orange">Automação</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">Webscrap e coleta</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Sistema</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Fluxos para capturar informação, estruturar dados e reduzir trabalho repetitivo em rotinas operacionais.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Coleta</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Dados</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Automação</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="webscrap">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app" data-case="dayapp" role="button" tabindex="0" aria-label="Abrir galeria do case DayApp">
                        <img src="imagens/cases/dayapp-2.jpg" alt="DayApp hábitos" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-green">Produtividade</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">DayApp</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">App</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Aplicativo pensado para rotina, hábito e retenção, com experiência direta e foco em retorno recorrente.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Hábitos</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Retenção</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">UX mobile</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="dayapp">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="site" data-case="unionboard-site" role="button" tabindex="0" aria-label="Abrir galeria do case UnionBoard Site">
                        <img src="imagens/cases/unionsite.jpg" alt="UnionBoard site institucional" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-cyan">Site institucional</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">UnionBoard Site</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Site</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Página focada em produto, apresentação comercial e narrativa de valor para solução educacional.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Produto</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Webflow</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Conversão</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="unionboard-site">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="site" data-case="autogarage" role="button" tabindex="0" aria-label="Abrir galeria do case AutoGarageShow">
                        <img src="imagens/cases/autogarage-1.jpg" alt="AutoGarageShow site" class="h-64 w-full rounded-[1.6rem] object-cover">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-orange">Landing de evento</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">AutoGarageShow</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Site</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Site com apelo visual forte, apresentação de agenda e estrutura para campanhas e tráfego pago.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Evento</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Campanha</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Landing</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="autogarage">Abrir galeria <span>↗</span></button>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema" data-case="propostas" role="button" tabindex="0" aria-label="Abrir galeria do case Gerenciamento de Propostas">
                        <img src="imagens/cases/propostas-dashboard.png" alt="Sistema de gerenciamento de propostas" class="h-64 w-full rounded-[1.6rem] object-cover object-left-top">
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-[0.22em] text-cyan">Operação comercial</span>
                                <h3 class="mt-2 font-headline text-2xl font-bold">Gerenciamento de Propostas</h3>
                            </div>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Sistema</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-muted">Sistema web em PHP para criar, publicar e acompanhar propostas comerciais, com analytics de leitura, gestão de usuários e assinatura digital.</p>
                        <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/70">
                            <span class="rounded-full bg-white/5 px-3 py-1">Propostas</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">Analytics</span>
                            <span class="rounded-full bg-white/5 px-3 py-1">ZapSign</span>
                        </div>
                        <button class="case-card-action" type="button" data-open-gallery="propostas">Abrir galeria <span>↗</span></button>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="overflow-hidden rounded-[2.8rem] border border-white/10 bg-gradient-to-r from-cyan/18 via-cyanDeep/18 to-green/12 px-8 py-14 text-center md:px-16 md:py-20">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/90">Próximo passo</span>
                    <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-6xl">Quer um projeto com essa mesma régua de entrega?</h2>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/78">Se você viu algo aqui que conversa com sua operação, a gente pode estruturar uma versão sob medida para o seu negócio.</p>
                    <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                        <a class="inline-flex items-center justify-center gap-2 rounded-full bg-green px-10 py-5 font-headline text-lg font-black text-slate-950 transition hover:scale-[1.02]" href="<?= $wa('cases-cta', 'Ola, vi o portfolio da IzziHub e quero conversar sobre um projeto.') ?>" target="_blank" rel="noopener">Falar sobre meu projeto <span>↗</span></a>
                        <a class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-10 py-5 font-headline text-lg font-bold text-white transition hover:bg-white/10" href="/">Voltar para a home</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="lightbox" id="case-lightbox" aria-hidden="true">
        <div class="lightbox-backdrop" data-lightbox-close></div>
        <div class="lightbox-panel" role="dialog" aria-modal="true" aria-labelledby="lightbox-title">
            <div class="lightbox-header">
                <div class="lightbox-title" id="lightbox-title">Case</div>
                <button class="lightbox-close" type="button" data-lightbox-close aria-label="Fechar galeria">&times;</button>
            </div>
            <div class="lightbox-main">
                <button class="lightbox-nav prev" type="button" id="lightbox-prev" aria-label="Imagem anterior">&#10094;</button>
                <img id="lightbox-image" src="" alt="">
                <button class="lightbox-nav next" type="button" id="lightbox-next" aria-label="Próxima imagem">&#10095;</button>
            </div>
            <div class="lightbox-footer">
                <div class="lightbox-counter">
                    <span id="lightbox-index"><strong>1</strong></span>
                    <span id="lightbox-total">/ 1</span>
                </div>
                <div>Use as setas do teclado ou toque nas setas laterais para navegar.</div>
            </div>
        </div>
    </div>

    <footer class="border-t border-white/5 bg-black/20">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-6 py-10 md:flex-row">
            <div class="flex items-center gap-3">
                <img src="logo.png" alt="IzziHub" class="h-9 w-auto">
                <span class="text-sm text-white/65">Portfólio de produtos e experiências digitais.</span>
            </div>
            <p class="text-center text-xs uppercase tracking-[0.18em] text-white/40">© <span id="year"></span> IzziHub. São Paulo, Brasil.</p>
            <div class="flex gap-5 text-sm font-semibold text-white/60">
                <a class="transition hover:text-white" href="/">Home</a>
                <a class="transition hover:text-white" href="mailto:contato@izzihub.com.br">E-mail</a>
                <a class="transition hover:text-white" href="<?= $wa('cases-footer', 'Ola, quero falar com a IzziHub.') ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.querySelector("[data-menu-toggle]");
        const mobileMenu = document.querySelector("[data-mobile-menu]");
        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        }

        const filterButtons = Array.from(document.querySelectorAll("[data-filter]"));
        const caseCards = Array.from(document.querySelectorAll(".case-card[data-type]"));

        filterButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const filter = button.getAttribute("data-filter");

                filterButtons.forEach((item) => item.classList.remove("is-active"));
                button.classList.add("is-active");

                caseCards.forEach((card) => {
                    const type = card.getAttribute("data-type");
                    const hidden = filter !== "all" && type !== filter;
                    card.setAttribute("data-hidden", hidden ? "true" : "false");
                });
            });
        });

        const galleries = {
            amora: {
                title: "AmoraLovers",
                images: [
                    "imagens/cases/amora-1.jpg",
                    "imagens/cases/amora-2.jpg",
                    "imagens/cases/amora-3.jpg"
                ]
            },
            aviv: {
                title: "Aviv Mais",
                images: [
                    "imagens/cases/aviv-1.jpg",
                    "imagens/cases/aviv-2.jpg",
                    "imagens/cases/aviv-3.jpg",
                    "imagens/cases/aviv-4.jpg",
                    "imagens/cases/aviv-5.jpg"
                ]
            },
            "unionboard-soft": {
                title: "UnionBoard Software",
                images: [
                    "imagens/cases/unionboardsoftware-1.jpg",
                    "imagens/cases/aulas-1.jpg",
                    "imagens/cases/aulas-2.jpg",
                    "imagens/cases/aulas-3.jpg",
                    "imagens/cases/aulas-4.jpg",
                    "imagens/cases/modulo-3d.jpg"
                ]
            },
            freelizz: {
                title: "Freelizz",
                images: [
                    "imagens/cases/app-workana-1.jpg",
                    "imagens/cases/app-workana-2.jpg"
                ]
            },
            transcricao: {
                title: "Transcrição e voz",
                images: [
                    "imagens/cases/voz-1.jpg"
                ]
            },
            webscrap: {
                title: "Webscrap e coleta",
                images: [
                    "imagens/cases/scrap.jpg"
                ]
            },
            dayapp: {
                title: "DayApp",
                images: [
                    "imagens/cases/dayapp-1.jpg",
                    "imagens/cases/dayapp-2.jpg"
                ]
            },
            "unionboard-site": {
                title: "UnionBoard Site",
                images: [
                    "imagens/cases/unionsite.jpg"
                ]
            },
            autogarage: {
                title: "AutoGarageShow",
                images: [
                    "imagens/cases/autogarage-1.jpg",
                    "imagens/cases/autogarage-2.jpg",
                    "imagens/cases/autogarage-3.jpg"
                ]
            },
            propostas: {
                title: "Gerenciamento de Propostas",
                images: [
                    "imagens/cases/propostas-login.png",
                    "imagens/cases/propostas-dashboard.png",
                    "imagens/cases/propostas-gestao-propostas.png",
                    "imagens/cases/propostas-gestao-usuarios.png",
                    "imagens/cases/propostas-modelo.jpeg"
                ]
            }
        };

        const lightbox = document.getElementById("case-lightbox");
        const lightboxTitle = document.getElementById("lightbox-title");
        const lightboxImage = document.getElementById("lightbox-image");
        const lightboxIndex = document.getElementById("lightbox-index");
        const lightboxTotal = document.getElementById("lightbox-total");
        const lightboxPrev = document.getElementById("lightbox-prev");
        const lightboxNext = document.getElementById("lightbox-next");
        const lightboxCloseButtons = Array.from(document.querySelectorAll("[data-lightbox-close]"));
        const galleryButtons = Array.from(document.querySelectorAll("[data-open-gallery]"));

        let activeGallery = null;
        let activeIndex = 0;

        function updateLightbox() {
            if (!activeGallery || !galleries[activeGallery]) {
                return;
            }

            const gallery = galleries[activeGallery];
            const currentImage = gallery.images[activeIndex];

            lightboxTitle.textContent = gallery.title;
            lightboxImage.src = currentImage;
            lightboxImage.alt = gallery.title + " - imagem " + (activeIndex + 1);
            lightboxIndex.innerHTML = "<strong>" + (activeIndex + 1) + "</strong>";
            lightboxTotal.textContent = "/ " + gallery.images.length;
        }

        function openLightbox(caseKey) {
            if (!galleries[caseKey] || !lightbox) {
                return;
            }

            activeGallery = caseKey;
            activeIndex = 0;
            updateLightbox();
            lightbox.classList.add("is-open");
            lightbox.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
        }

        function closeLightbox() {
            if (!lightbox) {
                return;
            }

            lightbox.classList.remove("is-open");
            lightbox.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
            activeGallery = null;
            activeIndex = 0;
            lightboxImage.removeAttribute("src");
        }

        function nextImage() {
            if (!activeGallery) {
                return;
            }

            const gallery = galleries[activeGallery];
            activeIndex = (activeIndex + 1) % gallery.images.length;
            updateLightbox();
        }

        function prevImage() {
            if (!activeGallery) {
                return;
            }

            const gallery = galleries[activeGallery];
            activeIndex = (activeIndex - 1 + gallery.images.length) % gallery.images.length;
            updateLightbox();
        }

        caseCards.forEach((card) => {
            const caseKey = card.getAttribute("data-case");
            if (!caseKey) {
                return;
            }

            card.addEventListener("click", () => openLightbox(caseKey));
            card.addEventListener("keydown", (event) => {
                if (event.key === "Enter" || event.key === " ") {
                    event.preventDefault();
                    openLightbox(caseKey);
                }
            });
        });

        galleryButtons.forEach((button) => {
            button.addEventListener("click", (event) => {
                event.stopPropagation();
                const caseKey = button.getAttribute("data-open-gallery");
                openLightbox(caseKey);
            });
        });

        if (lightboxPrev) {
            lightboxPrev.addEventListener("click", prevImage);
        }

        if (lightboxNext) {
            lightboxNext.addEventListener("click", nextImage);
        }

        lightboxCloseButtons.forEach((button) => {
            button.addEventListener("click", closeLightbox);
        });

        document.addEventListener("keydown", (event) => {
            if (!lightbox || !lightbox.classList.contains("is-open")) {
                return;
            }

            if (event.key === "Escape") {
                closeLightbox();
            }

            if (event.key === "ArrowRight") {
                nextImage();
            }

            if (event.key === "ArrowLeft") {
                prevImage();
            }
        });

        const year = document.getElementById("year");
        if (year) {
            year.textContent = new Date().getFullYear();
        }
    </script>
</body>
</html>
