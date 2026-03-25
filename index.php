<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IzziHub | Sistemas, apps e sites para PMEs crescerem</title>
    <meta name="description" content="A IzziHub cria sistemas web, apps e sites sob medida para PMEs que precisam vender melhor, organizar a operação e escalar com mais clareza.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="IzziHub | Sistemas, apps e sites para PMEs crescerem">
    <meta property="og:description" content="Software sob medida, apps e sites com visual premium, processo ágil e foco real em resultado.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.izzihub.com.br/">
    <meta property="og:image" content="https://www.izzihub.com.br/imagens/og-izzihub-1200.png">
    <link rel="icon" href="imagens/favicon.ico">
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
                        line: "#2f3535",
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
                    },
                    boxShadow: {
                        glow: "0 30px 80px rgba(71, 234, 237, 0.18)"
                    }
                }
            }
        };
    </script>
    <style>
        :root { color-scheme: dark; }
        body {
            background:
                radial-gradient(circle at top left, rgba(71, 234, 237, 0.15), transparent 32%),
                radial-gradient(circle at bottom right, rgba(76, 227, 70, 0.10), transparent 28%),
                #101111;
        }
        .glass-card {
            background: rgba(24, 26, 26, 0.72);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        .headline-gradient {
            background: linear-gradient(135deg, #47eaed 0%, #00ced1 45%, #4ce346 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .logo-marquee {
            position: relative;
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }
        .logo-track {
            display: flex;
            width: max-content;
            animation: marquee 26s linear infinite;
        }
        .logo-marquee:hover .logo-track { animation-play-state: paused; }
        .logo-chip {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 170px;
            height: 74px;
            margin-right: 1rem;
            padding: 0.9rem 1.25rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .logo-chip img {
            max-height: 28px;
            width: auto;
            opacity: 0.9;
            object-fit: contain;
        }
        .logo-chip img.force-white { filter: brightness(0) invert(1); }
        .portfolio-card::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.96), rgba(0, 0, 0, 0.78) 48%, rgba(0, 0, 0, 0.42));
        }
        .portfolio-card > img { position: relative; z-index: 0; }
        .portfolio-copy { position: relative; z-index: 2; }
        .whatsapp-fab { box-shadow: 0 18px 45px rgba(37, 211, 102, 0.35); }
        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
    </style>
</head>
<body class="font-body text-text selection:bg-cyan/25">
    <nav class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-background/75 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a class="flex items-center gap-3" href="#top">
                <img src="logo.png" alt="IzziHub" class="h-10 w-auto">
            </a>
            <div class="hidden items-center gap-8 md:flex">
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="#solucoes">Soluções</a>
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="#processo">Processo</a>
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="/cases.php">Portfólio</a>
                <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="#contato">Contato</a>
            </div>
            <div class="hidden md:block">
                <a class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-cyan to-cyanDeep px-6 py-2.5 font-headline text-sm font-bold text-slate-950 transition hover:scale-[1.02]" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20conversar%20sobre%20um%20projeto%20com%20a%20IzziHub." target="_blank" rel="noopener">WhatsApp</a>
            </div>
            <button class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-white md:hidden" type="button" data-menu-toggle aria-label="Abrir menu">
                <span class="text-xl">☰</span>
            </button>
        </div>
        <div class="hidden border-t border-white/5 px-6 py-4 md:hidden" data-mobile-menu>
            <div class="flex flex-col gap-3">
                <a class="text-sm font-semibold text-white/80" href="#solucoes">Soluções</a>
                <a class="text-sm font-semibold text-white/80" href="#processo">Processo</a>
                <a class="text-sm font-semibold text-white/80" href="/cases.php">Portfólio</a>
                <a class="text-sm font-semibold text-white/80" href="#contato">Contato</a>
                <a class="mt-2 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-cyan to-cyanDeep px-5 py-3 font-headline text-sm font-bold text-slate-950" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20conversar%20sobre%20um%20projeto%20com%20a%20IzziHub." target="_blank" rel="noopener">Falar no WhatsApp</a>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="relative overflow-hidden pt-32 pb-20 md:pt-44 md:pb-28">
            <div class="absolute inset-0 -z-10">
                <div class="absolute left-0 top-0 h-72 w-72 rounded-full bg-cyan/15 blur-[120px]"></div>
                <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-green/10 blur-[120px]"></div>
            </div>
            <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <span class="mb-6 inline-flex rounded-full border border-white/10 bg-white/5 px-4 py-1 text-xs font-bold uppercase tracking-[0.25em] text-cyan">Hub de Soluções Digitais</span>
                    <h1 class="max-w-4xl font-headline text-5xl font-extrabold leading-tight md:text-7xl">
                        Sistemas, apps e sites que <span class="headline-gradient">destravem sua operação e façam sua empresa vender melhor.</span>
                    </h1>
                    <p class="mt-6 max-w-2xl text-lg leading-relaxed text-muted md:text-xl">
                        Da hamburgueria ao app de nicho, a IzziHub cria tecnologia sob medida com visual premium, processo ágil e foco prático em conversão, gestão e escala.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3 text-sm text-white/85">
                        <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Web apps sob medida</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Apps iOS e Android</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Sites e landing pages</span>
                    </div>
                    <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                        <a class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-cyan to-cyanDeep px-8 py-4 font-headline text-lg font-bold text-slate-950 transition hover:scale-[1.02]" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20tirar%20um%20projeto%20do%20papel%20com%20a%20IzziHub." target="_blank" rel="noopener">Falar da minha ideia <span>↗</span></a>
                        <a class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-8 py-4 font-headline text-lg font-bold text-white transition hover:border-white/20 hover:bg-white/10" href="/cases.php">Ver portfólio</a>
                    </div>
                </div>
                <div class="relative lg:col-span-5">
                    <div class="glass-card overflow-hidden rounded-[2rem] shadow-glow">
                        <img src="imagens/banner1.png" alt="Painel visual da IzziHub em ambiente mobile" class="h-full w-full object-cover">
                    </div>
                    <div class="glass-card absolute -bottom-6 left-0 hidden rounded-3xl p-5 shadow-glow md:block">
                        <div class="text-xs uppercase tracking-[0.22em] text-muted">Entrega enxuta</div>
                        <div class="mt-2 font-headline text-2xl font-extrabold text-green">MVPs, SaaS e apps</div>
                        <div class="mt-2 text-sm text-white/70">Do primeiro fluxo ao lançamento em produção.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-10">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-6 flex flex-col items-center justify-between gap-4 text-center md:flex-row md:text-left">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/80">Marcas, produtos e frentes atendidas</div>
                        <p class="mt-2 max-w-2xl text-sm text-muted">Projetos que passaram pela IzziHub em software, apps, comunicação e operação digital.</p>
                    </div>
                    <a class="text-sm font-semibold text-white/70 transition hover:text-white" href="/cases.php">Explorar portfólio completo</a>
                </div>
                <div class="logo-marquee">
                    <div class="logo-track py-4">
                        <div class="logo-chip"><img src="imagens/clientes/complementare.png" alt="Complementare"></div>
                        <div class="logo-chip"><img src="imagens/clientes/amoralovers.webp" alt="AmoraLovers"></div>
                        <div class="logo-chip"><img src="imagens/clientes/unionboard.png" alt="UnionBoard" class="force-white"></div>
                        <div class="logo-chip"><img src="imagens/clientes/audiogene.svg" alt="Audiogene"></div>
                        <div class="logo-chip"><img src="imagens/clientes/sabesp.png" alt="Sabesp" class="force-white"></div>
                        <div class="logo-chip"><img src="imagens/clientes/complementare.png" alt="Complementare"></div>
                        <div class="logo-chip"><img src="imagens/clientes/amoralovers.webp" alt="AmoraLovers"></div>
                        <div class="logo-chip"><img src="imagens/clientes/unionboard.png" alt="UnionBoard" class="force-white"></div>
                        <div class="logo-chip"><img src="imagens/clientes/audiogene.svg" alt="Audiogene"></div>
                        <div class="logo-chip"><img src="imagens/clientes/sabesp.png" alt="Sabesp" class="force-white"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="solucoes" class="py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-14 flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl">
                        <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/80">Hub Solutions</span>
                        <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-5xl">Produtos e estruturas que aceleram o seu próximo passo.</h2>
                        <p class="mt-4 text-base leading-relaxed text-muted">Escolha uma base pronta para ganhar velocidade ou parta para um software 100% sob medida quando o negócio pedir algo mais estratégico.</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="h-1 w-12 rounded-full bg-cyan"></span>
                        <span class="h-1 w-5 rounded-full bg-white/15"></span>
                    </div>
                </div>
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <article class="glass-card overflow-hidden rounded-[2rem] p-6 transition duration-300 hover:-translate-y-1 hover:border-cyan/20">
                        <img src="imagens/placeholder-restaurante.jpg" alt="Sistema de delivery e operação para restaurantes" class="h-44 w-full rounded-2xl object-cover">
                        <div class="mt-6 text-sm font-semibold uppercase tracking-[0.2em] text-green">HubDelivery</div>
                        <h3 class="mt-3 font-headline text-2xl font-bold">Pedidos, cardápio e atendimento em uma só operação.</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Ideal para restaurantes, hamburguerias e operações que precisam vender sem pagar taxa por pedido a cada canal.</p>
                    </article>
                    <article class="glass-card overflow-hidden rounded-[2rem] p-6 transition duration-300 hover:-translate-y-1 hover:border-cyan/20">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBID6H-P3-tYCM5M2W1jEtKlrNL3En8dJ1zTzFwqIwiWRLwVWQYTxk2fY9fKpVH0CIg1ouw-HhTaJImRyjaxkizEQ0kZutwWBlMvnlTkTVHd00j7W_-07ZgjcTJZg6yiUcCsEqZZcBypNS9FI31lN_6uNPUKLPpGuaMkDGnI1rZFUTdE8Vkbh6N0Kk7L2LZxcWDjUVOpQdQh_vJsuZLnNHI7aXnXbjJwzJmxoi3Tq9oJWHnuvfQCH4MrdNYlr_XNQdnxFTOrK1Tse4" alt="Dashboard de gestão e ERP leve" class="h-44 w-full rounded-2xl object-cover">
                        <div class="mt-6 text-sm font-semibold uppercase tracking-[0.2em] text-cyan">HubControl</div>
                        <h3 class="mt-3 font-headline text-2xl font-bold">ERP leve com caixa, estoque e visão clara do negócio.</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Painéis simples para donos e equipes que querem parar de operar no improviso e ganhar previsibilidade.</p>
                    </article>
                    <article class="glass-card overflow-hidden rounded-[2rem] p-6 transition duration-300 hover:-translate-y-1 hover:border-cyan/20">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgZnHCSzcCF-zXsGLVIo7_JGu9gqI1UwSJBHiws7OmItDi9PqwUtGq1ZJlUJTFpqoRAA1Zl4zp0ccvjVW3akhyyYuF1wHmPnGsdfYVY1J8CBwP7g8P73SdDNGXvnU6y3sFMkwyh8pJfnUE9wADyYkuM4_faJG2WjFUhNpUIBqIXkOe7hKhWHnU1CQvyujE7jegvvT0Ow5_RFXLwOPxh_LNVGEQsRX8an-vA6F849A_EzPPoMdzLQwJzCTyzG8ewxTvvmmschbeMTY" alt="Sistema de agenda e captação" class="h-44 w-full rounded-2xl object-cover">
                        <div class="mt-6 text-sm font-semibold uppercase tracking-[0.2em] text-orange">HubAgenda</div>
                        <h3 class="mt-3 font-headline text-2xl font-bold">Agendamento inteligente para serviços e operações locais.</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Fluxos para reduzir faltas, centralizar a agenda e manter o atendimento mais profissional em todos os pontos.</p>
                    </article>
                    <article class="glass-card overflow-hidden rounded-[2rem] p-6 transition duration-300 hover:-translate-y-1 hover:border-cyan/20">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlMj0NoaRSXR2PlDvCstW84fn4oz4od97G1aMvg7wPacRiy067_TOdPJO1_u33Fy7-LpIPTSMXhbevOqzrKRx8uDXOpSsm4PSVm2NYDupFQiwWdoyYBK9VtHwWt-0mgAUlPZEfhjQ-JLkWlcF3hiQbzfwaKMVw9OzADgaGMsY9nHevEFSsC_ZbN31Bm_0qAIU5d9XWt8jSgiP8Bb-cEH6qNATCf_8rC8sKgf-zpCgjQsOOkaaNLWQwYWivO4_B_sli9PNvWYX-DDg" alt="Apps e comunidades digitais de nicho" class="h-44 w-full rounded-2xl object-cover">
                        <div class="mt-6 text-sm font-semibold uppercase tracking-[0.2em] text-cyan">HubCommunity</div>
                        <h3 class="mt-3 font-headline text-2xl font-bold">Apps de nicho, comunidades e experiências mobile.</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Para quem quer lançar algo próprio, validar recorrência e criar relacionamento direto com a base.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="processo" class="py-24 bg-surface/70">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-16 text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/80">Como trabalhamos</span>
                    <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-5xl">Do briefing ao lançamento com clareza.</h2>
                </div>
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <article class="glass-card rounded-[2rem] p-7">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-full bg-cyan text-sm font-black text-slate-950">01</div>
                        <h3 class="font-headline text-2xl font-bold">Imersão</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Mapeamos gargalos, metas e o que realmente precisa sair do papel sem inflar escopo.</p>
                    </article>
                    <article class="glass-card rounded-[2rem] p-7">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-full border border-cyan/30 bg-white/5 text-sm font-black text-cyan">02</div>
                        <h3 class="font-headline text-2xl font-bold">Prototipagem</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Desenhamos as telas e o fluxo principal para validar a direção antes de acelerar o desenvolvimento.</p>
                    </article>
                    <article class="glass-card rounded-[2rem] p-7">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-full border border-cyan/30 bg-white/5 text-sm font-black text-cyan">03</div>
                        <h3 class="font-headline text-2xl font-bold">Sprint Dev</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Código, integrações e testes com ritmo enxuto para você acompanhar evolução sem sumiço.</p>
                    </article>
                    <article class="glass-card rounded-[2rem] p-7">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-full bg-green text-sm font-black text-slate-950">04</div>
                        <h3 class="font-headline text-2xl font-bold">Launch Hub</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">Publicação, ajustes finais e suporte inicial para o projeto estrear com base sólida.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="portfolio" class="py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-12 flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl rounded-[2rem] border border-white/10 bg-black/35 px-6 py-6 backdrop-blur-sm">
                        <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/80">Portfólio</span>
                        <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-5xl">Alguns projetos que já saíram do papel.</h2>
                        <p class="mt-4 text-base leading-relaxed text-muted">Apps, softwares e produtos digitais com foco em uso real, posicionamento e operação contínua.</p>
                    </div>
                    <a class="inline-flex items-center gap-2 text-sm font-semibold text-white/75 transition hover:text-white" href="/cases.php">Abrir portfólio completo <span>↗</span></a>
                </div>
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <article class="portfolio-card group relative overflow-hidden rounded-[2rem]">
                        <img src="imagens/cases/amora-2.jpg" alt="Rede social de nicho AmoraLovers" class="h-[430px] w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="portfolio-copy absolute inset-x-0 bottom-0 p-7">
                            <span class="mb-2 block text-xs font-bold uppercase tracking-[0.24em] text-green">Comunidade digital</span>
                            <h3 class="font-headline text-2xl font-bold">Rede social de nicho</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/72">Feed, match, chat e recorrência em um app pensado para engajamento e retenção.</p>
                        </div>
                    </article>
                    <article class="portfolio-card group relative overflow-hidden rounded-[2rem]">
                        <img src="imagens/cases/unionboardsoftware-1.jpg" alt="Software educacional UnionBoard" class="h-[430px] w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="portfolio-copy absolute inset-x-0 bottom-0 p-7">
                            <span class="mb-2 block text-xs font-bold uppercase tracking-[0.24em] text-cyan">Edtech</span>
                            <h3 class="font-headline text-2xl font-bold">Software educacional</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/72">Experiência para quadros interativos, biblioteca multimídia e produção didática com mais fluidez.</p>
                        </div>
                    </article>
                    <article class="portfolio-card group relative overflow-hidden rounded-[2rem]">
                        <img src="imagens/cases/app-workana-1.jpg" alt="Plataforma marketplace para freelancers" class="h-[430px] w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="portfolio-copy absolute inset-x-0 bottom-0 p-7">
                            <span class="mb-2 block text-xs font-bold uppercase tracking-[0.24em] text-orange">Marketplace</span>
                            <h3 class="font-headline text-2xl font-bold">Plataforma de freelancers</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/72">Perfis, contratação, publicação de projetos e organização de demanda em uma única experiência.</p>
                        </div>
                    </article>
                    <article class="portfolio-card group relative overflow-hidden rounded-[2rem]">
                        <img src="imagens/cases/voz-1.jpg" alt="Automação com voz e inteligência aplicada" class="h-[430px] w-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="portfolio-copy absolute inset-x-0 bottom-0 p-7">
                            <span class="mb-2 block text-xs font-bold uppercase tracking-[0.24em] text-cyan">IA aplicada</span>
                            <h3 class="font-headline text-2xl font-bold">Automação com voz e inteligência</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/72">Fluxos com transcrição, apoio operacional e leitura de dados para equipes que precisam ganhar tempo.</p>
                        </div>
                    </article>
                </div>
                <div class="mt-10 text-center">
                    <a class="inline-flex items-center justify-center gap-2 rounded-full border border-white/10 bg-white/5 px-8 py-4 font-headline text-base font-bold text-white transition hover:border-cyan/30 hover:bg-white/10" href="/cases.php">Ver mais projetos <span>↗</span></a>
                </div>
            </div>
        </section>

        <section class="py-24 bg-surface/70">
            <div class="mx-auto max-w-7xl px-6">
                <div class="grid items-center gap-10 overflow-hidden rounded-[2.5rem] border border-white/5 bg-panel px-8 py-10 md:px-12 lg:grid-cols-2 lg:px-16">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/80">Operação e publicação</span>
                        <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-5xl">Da estrutura técnica ao pós-lançamento.</h2>
                        <p class="mt-5 text-lg leading-relaxed text-muted">Integrações, publicação, organização de acessos e evolução do produto sem deixar seu time sozinho depois da entrega.</p>
                        <div class="mt-8 grid gap-3 text-sm text-white/85 sm:grid-cols-2">
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Publicação em produção</div>
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Integrações e automações</div>
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Treinamento inicial</div>
                            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3">Ajustes pós-lançamento</div>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-[2rem] border border-white/5 bg-background p-6 text-center">
                            <div class="text-xs uppercase tracking-[0.22em] text-muted">Sistemas web</div>
                            <div class="mt-4 font-headline text-3xl font-extrabold text-cyan">Painel + operação</div>
                            <div class="mt-2 text-sm text-white/70">Fluxo pensado para rotina real.</div>
                        </div>
                        <div class="rounded-[2rem] border border-white/5 bg-background p-6 text-center sm:translate-y-8">
                            <div class="text-xs uppercase tracking-[0.22em] text-muted">Apps mobile</div>
                            <div class="mt-4 font-headline text-3xl font-extrabold text-green">iOS + Android</div>
                            <div class="mt-2 text-sm text-white/70">Produto com cara profissional desde a estreia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="overflow-hidden rounded-[2.8rem] border border-white/10 bg-gradient-to-r from-cyan/18 via-cyanDeep/18 to-green/12 px-8 py-14 text-center md:px-16 md:py-20">
                    <span class="text-xs font-bold uppercase tracking-[0.24em] text-cyan/90">Contato direto</span>
                    <h2 class="mt-4 font-headline text-4xl font-extrabold md:text-6xl">Vamos tirar seu projeto do papel?</h2>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/78">Se você já tem um rascunho, uma ideia validada ou um gargalo claro na operação, a gente pode transformar isso em produto e fluxo real.</p>
                    <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                        <a class="inline-flex items-center justify-center gap-2 rounded-full bg-green px-10 py-5 font-headline text-lg font-black text-slate-950 transition hover:scale-[1.02]" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20falar%20sobre%20um%20projeto%20com%20a%20IzziHub." target="_blank" rel="noopener">Começar no WhatsApp <span>↗</span></a>
                        <a class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-10 py-5 font-headline text-lg font-bold text-white transition hover:bg-white/10" href="mailto:contato@izzihub.com.br">contato@izzihub.com.br</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a class="whatsapp-fab fixed bottom-6 right-6 z-50 inline-flex h-16 w-16 items-center justify-center rounded-full bg-[#25D366] text-white transition hover:scale-105" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20falar%20com%20a%20IzziHub." target="_blank" rel="noopener" aria-label="Falar no WhatsApp">
        <svg class="h-8 w-8 fill-current" viewBox="0 0 16 16" aria-hidden="true">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 8.004 0C3.58 0 0 3.58 0 8.004a7.97 7.97 0 0 0 1.14 4.111L0 16l4.01-1.052a7.97 7.97 0 0 0 3.994 1.071h.003A7.997 7.997 0 0 0 16 8.018a7.85 7.85 0 0 0-2.399-5.692zM8.007 14.66h-.002a6.62 6.62 0 0 1-3.374-.924l-.242-.144-2.38.624.635-2.32-.157-.238a6.61 6.61 0 0 1-1.022-3.536c0-3.654 2.975-6.629 6.635-6.629a6.59 6.59 0 0 1 4.691 1.944 6.59 6.59 0 0 1 1.939 4.694c-.001 3.654-2.975 6.629-6.623 6.629zm3.636-4.974c-.198-.099-1.173-.579-1.355-.645-.182-.066-.314-.099-.446.1-.132.198-.512.645-.628.777-.115.132-.23.148-.429.05-.198-.1-.838-.308-1.596-.981-.59-.526-.99-1.173-1.106-1.372-.115-.198-.012-.304.087-.402.09-.09.198-.231.297-.347.1-.116.132-.198.198-.33.066-.132.033-.248-.017-.347-.05-.1-.446-1.074-.611-1.471-.161-.387-.325-.335-.446-.341a7.03 7.03 0 0 0-.38-.006c-.132 0-.347.05-.528.248-.182.198-.694.678-.694 1.652 0 .975.711 1.917.81 2.049.1.132 1.398 2.136 3.387 2.994.473.205.842.327 1.13.418.474.15.905.129 1.246.078.38-.057 1.174-.479 1.339-.942.165-.463.165-.86.116-.942-.05-.083-.182-.132-.38-.231z"></path>
        </svg>
    </a>

    <footer class="border-t border-white/5 bg-black/20">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-6 py-10 md:flex-row">
            <div class="flex items-center gap-3">
                <img src="logo.png" alt="IzziHub" class="h-9 w-auto">
                <span class="text-sm text-white/65">Software, apps e sites para PMEs.</span>
            </div>
            <p class="text-center text-xs uppercase tracking-[0.18em] text-white/40">© <span id="year"></span> IzziHub. São Paulo, Brasil.</p>
            <div class="flex gap-5 text-sm font-semibold text-white/60">
                <a class="transition hover:text-white" href="/cases.php">Portfólio</a>
                <a class="transition hover:text-white" href="mailto:contato@izzihub.com.br">E-mail</a>
                <a class="transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20falar%20com%20a%20IzziHub." target="_blank" rel="noopener">WhatsApp</a>
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
        const year = document.getElementById("year");
        if (year) {
            year.textContent = new Date().getFullYear();
        }
    </script>
</body>
</html>
