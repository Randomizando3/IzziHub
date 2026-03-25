<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>IzziHub • Agência de Publicidade e Software em São Paulo</title>
    <link rel="icon" href="imagens/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO básico -->
    <meta name="description" content="IzziHub é uma agência de publicidade e desenvolvimento de software em São Paulo. Criamos marcas, sites, aplicativos e sistemas sob medida e soluções prontas para restaurantes, igrejas e associações.">
    <meta name="keywords" content="IzziHub, agência de publicidade, agência digital, desenvolvimento de software, criação de sites, criação de aplicativos, sistema para restaurante, sistema para igreja, sistemas sob medida, marketing digital, São Paulo">
    <meta name="robots" content="index,follow" />

    <!-- Open Graph / Social -->
    <meta property="og:title" content="IzziHub • Agência de Publicidade e Software em São Paulo">
    <meta property="og:description" content="Agência de publicidade e software que cria marcas, sites, apps e sistemas sob medida para o seu negócio.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.izzihub.com.br/">
    <meta property="og:image" content="imagens/og-izzihub-1200.png">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "IzziHub",
          "url": "https://www.izzihub.com.br/",
          "logo": "imagens/logo-izzihub-512.png",
          "description": "Agência de publicidade e desenvolvimento de software em São Paulo, especializada em branding, sites, aplicativos e sistemas sob medida.",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "São Paulo",
            "addressRegion": "SP",
            "addressCountry": "BR"
          },
          "sameAs": [
            "https://www.instagram.com/seu_perfil",
            "https://www.linkedin.com/in/seu_perfil"
          ]
        }
    </script>

    <!-- Fonte Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS principal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <!-- NAVBAR -->
        <header>
            <div class="container">
                <nav class="nav">
                    <a href="#top" class="nav-brand">
                        <img src="imagens/logo.png" height="50" alt="IzziHub - Publicidade &amp; Software Studio">
                    </a>

                    <button class="nav-toggle" aria-label="Menu">
                        <span></span>
                    </button>

                    <div class="nav-links-wrapper">
                        <div class="nav-links">
                            <a href="#servicos">Serviços</a>
                            <a href="#solucoes">Soluções</a>
                            <a href="/cases.php">Cases</a>
                            <a href="#processo">Processo</a>
                            <a href="#sobre">Sobre</a>
                            <a href="#contato">Contato</a>
                        </div>
                        <button class="nav-cta" onclick="scrollToSection('contato')">
                            <span>⚡</span> Orçamento
                        </button>
                    </div>
                </nav>
            </div>
        </header>

        <main id="top">
            <!-- HERO -->
            <section class="hero">
                <div class="container hero-grid">
                    <div class="hero-left reveal">
                        <div class="pill">
                            <span class="pill-dot"></span>
                            <span>Agência & Dev Studio</span>
                        </div>
                        <h1>
                            Criamos <span>marcas, sites e apps</span> que conversam com pessoas de verdade.
                        </h1>
                        <p class="hero-sub">
                            A IzziHub une publicidade, design e programação. Do visual das campanhas ao código dos sistemas, tudo em um só lugar.
                        </p>

                        <div class="hero-badges">
                            <div class="badge"><strong>Branding</strong> & campanhas</div>
                            <div class="badge"><strong>Web & Apps</strong> sob medida</div>
                            <div class="badge"><strong>Soluções prontas:</strong> restaurante, igreja, associações...</div>
                        </div>

                        <div class="hero-actions">
                            <button class="btn btn-primary" onclick="scrollToSection('contato')">
                                Quero falar da minha ideia <span class="btn-icon">→</span>
                            </button>
                            <button class="btn btn-ghost" onclick="scrollToSection('solucoes')">
                                Ver soluções prontas
                            </button>
                        </div>
                    </div>

                    <!-- LADO DIREITO: BANNER -->
                    <div class="hero-right reveal">
                        <div class="hero-image-wrapper">
                            <img src="imagens/banner1.png" alt="Painel digital e soluções da IzziHub" class="hero-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- SERVIÇOS -->
            <section id="servicos">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">O que fazemos</div>
                            <h2 class="section-title">Serviços <span>sob medida</span> para a sua marca</h2>
                        </div>
                    </div>

                    <div class="services-grid">
                        <div class="card reveal">
                            <div class="card-icon">🎨</div>
                            <h3>Branding & Publicidade</h3>
                            <p>
                                Logotipo, identidade visual e materiais para redes sociais e anúncios.
                            </p>
                            <div class="card-tags">
                                <span class="tag">Identidade Visual</span>
                                <span class="tag">Social Media</span>
                                <span class="tag">Anúncios</span>
                            </div>
                            <a class="card-link" href="#sobre">
                                Ver mais sobre o estilo <span>↗</span>
                            </a>
                        </div>

                        <div class="card reveal">
                            <div class="card-icon">💻</div>
                            <h3>Desenvolvimento Web & Apps</h3>
                            <p>
                                Sites, landings, painéis administrativos, APIs e aplicativos.
                            </p>
                            <div class="card-tags">
                                <span class="tag">Sites responsivos</span>
                                <span class="tag">Dashboards</span>
                                <span class="tag">Aplicativos</span>
                            </div>
                            <a class="card-link" href="#processo">
                                Ver como trabalhamos <span>↗</span>
                            </a>
                        </div>

                        <div class="card reveal">
                            <div class="card-icon">⚙️</div>
                            <h3>Integração & Automação</h3>
                            <p>
                                Integrações de pagamento, automações de atendimento e APIs.
                            </p>
                            <div class="card-tags">
                                <span class="tag">APIs</span>
                                <span class="tag">Pagamentos</span>
                                <span class="tag">Automação</span>
                            </div>
                            <a class="card-link" href="#contato">
                                Falar sobre integrações <span>↗</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SOLUÇÕES PRONTAS -->
            <section id="solucoes">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">Para ir mais rápido</div>
                            <h2 class="section-title">Soluções <span>já predefinidas</span></h2>
                        </div>
                    </div>

                    <div class="solutions-grid">
                        <div class="solution-card reveal">
                            <div class="solution-image">
                                <img src="imagens/placeholder-restaurante.jpg" alt="Sistema para restaurantes - IzziHub">
                                <div class="solution-tag">Delivery, salão & comandas</div>
                            </div>
                            <div class="solution-body">
                                <h3>Hub Restaurante</h3>
                                <p>
                                    Sistema para cardápio, mesas, comandas, pedidos e relatórios de vendas.
                                </p>
                                <div class="solution-meta">
                                    • Painel web<br>
                                    • Telas para balcão/garçom<br>
                                    • Impressão de cozinha
                                </div>
                                <div class="solution-cta">
                                    <div>
                                        <div class="solution-price">Licença + mensalidade</div>
                                        <small>Personalização visual incluída</small>
                                    </div>
                                    <button class="btn btn-ghost" onclick="scrollToSection('contato')">
                                        Quero detalhes
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="solution-card reveal">
                            <div class="solution-image">
                                <img src="imagens/placeholder-igreja.jpg" alt="Sistema para igrejas - IzziHub">
                                <div class="solution-tag">Membros & celebrações</div>
                            </div>
                            <div class="solution-body">
                                <h3>Hub Igreja</h3>
                                <p>
                                    Gestão de membros, eventos, escalas e comunicação com a comunidade.
                                </p>
                                <div class="solution-meta">
                                    • Área administrativa<br>
                                    • Portal de membros<br>
                                    • Comunicação segmentada
                                </div>
                                <div class="solution-cta">
                                    <div>
                                        <div class="solution-price">Pacotes sob consulta</div>
                                        <small>Ideal para igrejas em crescimento</small>
                                    </div>
                                    <button class="btn btn-ghost" onclick="scrollToSection('contato')">
                                        Saber mais
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="solution-card reveal">
                            <div class="solution-image">
                                <img src="imagens/placeholder-associacoes.jpg" alt="Sistema para associações e clubes - IzziHub">
                                <div class="solution-tag">Associações, clubes & studios</div>
                            </div>
                            <div class="solution-body">
                                <h3>Hub Associações</h3>
                                <p>
                                    Controle de associados, mensalidades, agendamentos e área do cliente.
                                </p>
                                <div class="solution-meta">
                                    • Painel de gestão<br>
                                    • Área do associado<br>
                                    • Relatórios simples
                                </div>
                                <div class="solution-cta">
                                    <div>
                                        <div class="solution-price">Implantação rápida</div>
                                        <small>Customizável por segmento</small>
                                    </div>
                                    <button class="btn btn-ghost" onclick="scrollToSection('contato')">
                                        Ver possibilidades
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PORTFÓLIO / CASES (OCULTO POR ENQUANTO) -->
            <section id="portfolio" style="display:none;">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">Portfólio</div>
                            <h2 class="section-title">Cases e <span>projetos digitais</span></h2>
                        </div>
                    </div>

                    <div class="portfolio-grid">
                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-landing.jpg" alt="Landing page para campanha de lançamento - IzziHub">
                                <div class="portfolio-label">Landing + Campanha</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Campanha de lançamento</h3>
                                <p>Landing page + criativos para captar leads qualificados.</p>
                            </div>
                        </div>

                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-dashboard.jpg" alt="Dashboard web personalizado - IzziHub">
                                <div class="portfolio-label">Sistema Web</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Painel de gestão para PME</h3>
                                <p>Dashboard com indicadores, clientes e relatórios.</p>
                            </div>
                        </div>

                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-app.jpg" alt="Aplicativo mobile sob medida - IzziHub">
                                <div class="portfolio-label">App Mobile</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Aplicativo de agendamentos</h3>
                                <p>App com notificações e integração com calendário.</p>
                            </div>
                        </div>

                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-branding.jpg" alt="Identidade visual completa para marca - IzziHub">
                                <div class="portfolio-label">Branding</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Identidade visual</h3>
                                <p>Logo, paleta de cores, tipografia e aplicações.</p>
                            </div>
                        </div>

                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-ecommerce.jpg" alt="Layout para loja virtual - IzziHub">
                                <div class="portfolio-label">E-commerce</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Loja virtual</h3>
                                <p>Layout otimizado para campanhas de tráfego pago.</p>
                            </div>
                        </div>

                        <div class="portfolio-item reveal">
                            <div class="portfolio-thumb">
                                <img src="imagens/placeholder-desktop.jpg" alt="Sistema desktop personalizado - IzziHub">
                                <div class="portfolio-label">Desktop</div>
                            </div>
                            <div class="portfolio-body">
                                <h3>Sistema interno</h3>
                                <p>Solução desktop integrada com banco de dados na nuvem.</p>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-more reveal">
                        <button type="button" class="btn btn-ghost" onclick="scrollToSection('contato')">
                            Ver mais projetos e cases
                        </button>
                    </div>
                </div>
            </section>

            <!-- TIER CASES (OCULTO PARA FUTURO) -->
            <section id="tier-cases" style="display:none;">
                <div class="container">
                    <div class="section-header">
                        <div>
                            <div class="section-kicker">Tiers de Cases</div>
                            <h2 class="section-title">Pacotes de <span>cases e entregas</span></h2>
                        </div>
                    </div>

                    <div class="tiers-grid">
                        <article class="tier-card">
                            <h3>Starter</h3>
                            <p>Ideal para quem está começando e quer um primeiro case bem estruturado.</p>
                            <ul>
                                <li>1 landing page</li>
                                <li>Peças para redes sociais</li>
                                <li>Relatório simples de resultados</li>
                            </ul>
                        </article>

                        <article class="tier-card">
                            <h3>Growth</h3>
                            <p>Para marcas que já têm tração e precisam de um pacote de cases mais robusto.</p>
                            <ul>
                                <li>Landing + mini-site</li>
                                <li>Pacote completo de criativos</li>
                                <li>Dashboard de acompanhamento</li>
                            </ul>
                        </article>

                        <article class="tier-card">
                            <h3>Custom</h3>
                            <p>Pacote totalmente sob medida, alinhado aos seus objetivos específicos.</p>
                            <ul>
                                <li>Escopo personalizado</li>
                                <li>Integrações específicas</li>
                                <li>Relatórios e apresentações de case</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <!-- PROCESSO -->
            <section id="processo">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">Fluxo de trabalho</div>
                            <h2 class="section-title">Um processo <span>claro e sem surpresas</span></h2>
                        </div>
                    </div>

                    <div class="process-grid">
                        <div class="reveal">
                            <div class="timeline">
                                <div class="step">
                                    <div class="step-title">
                                        <span>01</span> Descoberta & briefing
                                    </div>
                                    <p>Entendemos seu contexto, objetivos e prazos.</p>
                                </div>
                                <div class="step">
                                    <div class="step-title">
                                        <span>02</span> Proposta & protótipo
                                    </div>
                                    <p>Enviamos escopo, investimento e, se fizer sentido, telas-chave.</p>
                                </div>
                                <div class="step">
                                    <div class="step-title">
                                        <span>03</span> Design & desenvolvimento
                                    </div>
                                    <p>Layout, código, integrações e testes em ambiente seguro.</p>
                                </div>
                                <div class="step">
                                    <div class="step-title">
                                        <span>04</span> Ajustes, publicação & suporte
                                    </div>
                                    <p>Refinamos, publicamos e acompanhamos o início do uso.</p>
                                </div>
                            </div>
                        </div>

                        <aside class="process-side reveal">
                            <div class="process-stat">
                                <span>Tempo médio de um projeto enxuto</span>
                                <span>2–4 semanas</span>
                            </div>
                            <div class="process-stat">
                                <span>Formato</span>
                                <span>Remoto ou presencial</span>
                            </div>
                            <p style="font-size:.8rem;color:var(--muted);margin-top:.5rem;">
                                Atendemos de segunda a sexta, das 9h às 17h, com agenda combinada.
                            </p>
                        </aside>
                    </div>
                </div>
            </section>

            <!-- SOBRE -->
            <section id="sobre">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">Quem está por trás</div>
                            <h2 class="section-title">Sobre a <span>IzziHub</span></h2>
                        </div>
                    </div>

                    <div class="about-grid">
                        <div class="reveal">
                            <p style="font-size:.9rem;color:var(--muted);margin-top:0;">
                                A IzziHub é um hub que conecta design, publicidade e desenvolvimento. Um ponto único para cuidar tanto da comunicação quanto da tecnologia do seu negócio.
                            </p>
                            <p style="font-size:.9rem;color:var(--muted);">
                                Focamos em pequenos negócios, igrejas, criadores de conteúdo e empresas que querem soluções objetivas, com visual atual e funcionamento redondo.
                            </p>
                            <div style="margin-top:1rem;margin-bottom:.5rem;font-size:.82rem;color:var(--muted);">
                                Principais frentes:
                            </div>
                            <div class="pill-list">
                                <span>Branding & identidade visual</span>
                                <span>Social media e campanhas</span>
                                <span>Sites e landing pages</span>
                                <span>Sistemas web</span>
                                <span>Aplicativos mobile</span>
                                <span>Soluções desktop</span>
                                <span>Sistemas pré-prontos adaptáveis</span>
                            </div>
                        </div>

                        <div class="about-card reveal">
                            <div style="font-size:.8rem;color:var(--muted);margin-bottom:.6rem;">
                                Um pouco do que você pode esperar:
                            </div>
                            <div class="about-rows">
                                <div class="about-row">
                                    <span>Estilo visual</span>
                                    <strong>Moderno, limpo e leve</strong>
                                </div>
                                <div class="about-row">
                                    <span>Comunicação</span>
                                    <strong>Direta e sem enrolação</strong>
                                </div>
                                <div class="about-row">
                                    <span>Prazos</span>
                                    <strong>Alinhados antes de começar</strong>
                                </div>
                                <div class="about-row">
                                    <span>Suporte</span>
                                    <strong>Período pós-entrega combinado</strong>
                                </div>
                                <div class="about-row">
                                    <span>Forma de trabalho</span>
                                    <strong>Remoto ou presencial, das 9h às 17h</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTATO -->
            <section id="contato">
                <div class="container">
                    <div class="section-header reveal">
                        <div>
                            <div class="section-kicker">Próximo passo</div>
                            <h2 class="section-title">Vamos <span>tirar sua ideia do papel</span>?</h2>
                        </div>
                    </div>

                    <div class="contact-grid">
                        <aside class="contact-side reveal">
                            <div><strong>Atendimento direto e sem formulário</strong></div>
                            <div class="contact-channels">
                                <span>
                                    Voltamos para o visual antigo do site, mas o primeiro contato agora acontece só por WhatsApp ou e-mail para evitar spam e acelerar o atendimento.
                                </span>

                                <div class="pill-list">
                                    <span>Sites e landing pages</span>
                                    <span>Sistemas web sob medida</span>
                                    <span>Aplicativos mobile</span>
                                    <span>Branding e campanhas</span>
                                </div>

                                <a class="btn btn-primary" href="https://wa.me/5511982580565" target="_blank" rel="noopener">
                                    Chamar no WhatsApp <span class="btn-icon">↗</span>
                                </a>

                                <a class="btn btn-ghost" href="/cases.php">
                                    Ver cases publicados
                                </a>

                                <span>Se preferir, envie um resumo do projeto por e-mail e retomamos por lá.</span>
                            </div>
                        </aside>

                        <aside class="contact-side reveal">
                            <div><strong>Prefere falar direto?</strong></div>
                            <div class="contact-channels">
                                <span>Chame no WhatsApp ou envie um e-mail:</span>

                                <a class="btn-whatsapp" href="https://wa.me/5511982580565" target="_blank" rel="noopener">
                                    <span class="btn-whatsapp-icon">🟢</span>
                                    <span class="btn-whatsapp-text">
                                        Falar pelo WhatsApp · (11) 98258-0565
                                    </span>
                                </a>

                                <a href="mailto:contato@izzihub.com.br">
                                    • contato@izzihub.com.br
                                </a>

                                <span>Atendimento remoto ou presencial, de segunda a sexta, das 9h às 17h.</span>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </main>

        <!-- FOOTER -->
        <footer>
            <div class="container footer-inner">
                <div>© <span id="year"></span> IzziHub. Todos os direitos reservados.</div>
                <div class="footer-links">
                    <a href="#top">Topo</a>
                    <a href="#servicos">Serviços</a>
                    <a href="#solucoes">Soluções</a>
                    <a href="#contato">Contato</a>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS principal -->
    <script src="script.js"></script>
</body>
</html>
