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
                <a class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-cyan to-cyanDeep px-6 py-2.5 font-headline text-sm font-bold text-slate-950 transition hover:scale-[1.02]" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20ver%20mais%20detalhes%20do%20portf%C3%B3lio%20da%20IzziHub." target="_blank" rel="noopener">WhatsApp</a>
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
                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://app.amoralovers.com" target="_blank" rel="noopener">Abrir projeto <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://avivmais.com.br" target="_blank" rel="noopener">Abrir projeto <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20ver%20mais%20sobre%20o%20case%20UnionBoard." target="_blank" rel="noopener">Pedir detalhes <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://freelizz.com" target="_blank" rel="noopener">Abrir projeto <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://audiogene.com.br" target="_blank" rel="noopener">Abrir referência <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="sistema">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20falar%20sobre%20um%20fluxo%20de%20automa%C3%A7%C3%A3o%20parecido." target="_blank" rel="noopener">Falar sobre algo assim <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="app">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20um%20app%20de%20rotina%20ou%20comunidade%20parecido." target="_blank" rel="noopener">Pedir orçamento <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="site">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20um%20site%20institucional%20nesse%20n%C3%ADvel." target="_blank" rel="noopener">Quero algo assim <span>↗</span></a>
                    </article>

                    <article class="case-card glass-card overflow-hidden rounded-[2rem] p-5" data-type="site">
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
                        <a class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan transition hover:text-white" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20quero%20uma%20landing%20ou%20site%20promocional%20parecido." target="_blank" rel="noopener">Conversar sobre este formato <span>↗</span></a>
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
                        <a class="inline-flex items-center justify-center gap-2 rounded-full bg-green px-10 py-5 font-headline text-lg font-black text-slate-950 transition hover:scale-[1.02]" href="https://wa.me/5511982580565?text=Ol%C3%A1%2C%20vi%20o%20portf%C3%B3lio%20da%20IzziHub%20e%20quero%20conversar%20sobre%20um%20projeto." target="_blank" rel="noopener">Falar sobre meu projeto <span>↗</span></a>
                        <a class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-10 py-5 font-headline text-lg font-bold text-white transition hover:bg-white/10" href="/">Voltar para a home</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

        const year = document.getElementById("year");
        if (year) {
            year.textContent = new Date().getFullYear();
        }
    </script>
</body>
</html>
