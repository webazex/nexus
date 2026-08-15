<?php
?>
<!doctype html>
<html lang="uk" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <meta name="description" content="Nexus Digital — digital agency">
    <title>Головна — Nexus Digital</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="assets/app.js" defer></script>
</head>
<body>

<header class="site-header">
    <div class="wrap header-row">
        <a class="brand" href="home.html" aria-label="Nexus Digital — головна">
            <img class="brand-logo" src="assets/logo-mark.svg" width="36" height="36" alt="">
            <span class="brand-name">Nexus Digital</span>
        </a>
        <nav class="primary-nav" id="primary-navigation" data-nav aria-label="Головна навігація">

            <ul class="site-menu">
                <li><a href="home.html" aria-current="page">Головна</a></li>
                <li class="has-submenu">
                    <a href="services.html">Послуги</a>
                    <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="header-services-menu" aria-label="Відкрити підменю «Послуги»"><span class="submenu-toggle__icon" aria-hidden="true"></span></button>
                    <ul class="sub-menu" id="header-services-menu">
                        <li class="has-submenu">
                            <a href="service-web-development.html">Web development</a>
                            <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="header-web-menu" aria-label="Відкрити підменю «Web development»"><span class="submenu-toggle__icon" aria-hidden="true"></span></button>
                            <ul class="sub-menu" id="header-web-menu">
                                <li><a href="service-web-development.html#wordpress">WordPress</a></li>
                                <li><a href="service-web-development.html#corporate">Corporate sites</a></li>
                            </ul>
                        </li>
                        <li><a href="service-product-design.html">Product design</a></li>
                        <li><a href="service-performance.html">Performance</a></li>
                        <li><a href="service-support.html">Support</a></li>
                    </ul>
                </li>
                <li><a href="projects.html">Проєкти</a></li>
                <li><a href="blog.html">Блог</a></li>
                <li><a href="contact.html">Контакти</a></li>
            </ul>
        </nav>
        <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="primary-navigation">
            <span class="menu-toggle__lines" aria-hidden="true"><span></span><span></span></span>
            <span class="sr-only">Меню</span>
        </button>
        <button class="theme-toggle" type="button" data-theme-toggle aria-pressed="false">
            <span class="theme-toggle__icon" aria-hidden="true">◐</span>
            <span class="sr-only" data-theme-label>Увімкнути темну тему</span>
        </button>
    </div>
</header>
<main>
    <section class="hero home-section" data-home-section="1">
        <div class="wrap hero-grid">
            <div class="hero-main">
                <div class="eyebrow">DIGITAL PRODUCT STUDIO / ODESA</div>
                <h1>Створюємо цифрові продукти, які працюють швидше, ніж виглядають.</h1>
                <p class="hero-copy">Nexus Digital проєктує та розробляє швидкі digital-продукти: від структури й дизайну до production-ready WordPress та подальшого розвитку.</p>
                <div class="hero-actions">
                    <a class="btn" href="contact.html"><span class="btn-label">Обговорити проєкт</span><span class="btn-icon" aria-hidden="true">↗</span></a>
                    <a class="btn btn-ghost" href="#projects"><span class="btn-label">Переглянути роботи</span></a>
                </div>
            </div>
            <aside class="hero-side">
                <div class="hero-note"><span class="status-dot" aria-hidden="true"></span><span>Беремо нові проєкти на Q3/Q4 2026</span></div>
                <p>High-tech мінімалізм, керований контент і frontend, який не доведеться переписувати під CMS.</p>
                <ul class="plain-list"><li>Design → frontend → CMS</li><li>Performance-first</li><li>Без heavy builders</li></ul>
            </aside>
        </div>
    </section>

    <section class="section home-section" id="services" data-home-section="2">
        <div class="wrap">
            <div class="section-head">
                <div><div class="eyebrow">Послуги</div><h2>Від задачі — до працюючої системи.</h2></div>
                <div class="section-head__side"><p>На головній показані вибрані послуги; повний перелік — в окремому архіві.</p><a class="text-link" href="services.html">Усі послуги <span class="btn-icon" aria-hidden="true">↗</span></a></div>
            </div>
            <div class="services-grid"><article class="service-card">
                    <a class="service-card__link" href="service-web-development.html">
                        <div class="service-top"><span class="service-no">01</span><span class="card-icon" aria-hidden="true">↗</span></div>
                        <div><h3>Web development</h3><p>Корпоративні сайти, контентні платформи та custom WordPress без зайвого конструктора.</p></div>
                    </a>
                </article><article class="service-card">
                    <a class="service-card__link" href="service-product-design.html">
                        <div class="service-top"><span class="service-no">02</span><span class="card-icon" aria-hidden="true">↗</span></div>
                        <div><h3>Product design</h3><p>Структура, прототип, дизайн-система та інтерфейси, які не конфліктують із розробкою.</p></div>
                    </a>
                </article><article class="service-card">
                    <a class="service-card__link" href="service-performance.html">
                        <div class="service-top"><span class="service-no">03</span><span class="card-icon" aria-hidden="true">↗</span></div>
                        <div><h3>Performance</h3><p>Оптимізація Core Web Vitals, критичного CSS, медіа та runtime-поведінки.</p></div>
                    </a>
                </article><article class="service-card">
                    <a class="service-card__link" href="service-support.html">
                        <div class="service-top"><span class="service-no">04</span><span class="card-icon" aria-hidden="true">↗</span></div>
                        <div><h3>Support</h3><p>Розвиток після запуску: аналітика, експерименти, нові сценарії та технічна підтримка.</p></div>
                    </a>
                </article></div>
        </div>
    </section>

    <section class="section home-section" id="projects" data-home-section="3">
        <div class="wrap">
            <div class="section-head">
                <div><div class="eyebrow">Проєкти</div><h2>Вибрані роботи.</h2></div>
                <div class="section-head__side"><p>Порядок і склад цієї секції керуються окремо від архіву проєктів.</p><a class="text-link" href="projects.html">Усі проєкти <span class="btn-icon" aria-hidden="true">↗</span></a></div>
            </div>
            <div class="projects-grid"><article class="project-card">
                    <a class="project-card__media" href="project-finflow.html"><img src="assets/project-finflow.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту FinFlow"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>Fintech / Product</span><span>2026</span></div>
                        <h3><a href="project-finflow.html">FinFlow</a></h3><p>Особистий кабінет для щоденного контролю фінансових сценаріїв.</p>
                    </div>
                </article><article class="project-card">
                    <a class="project-card__media" href="project-northline.html"><img src="assets/project-northline.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту Northline"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>B2B / Platform</span><span>2026</span></div>
                        <h3><a href="project-northline.html">Northline</a></h3><p>Цифровий каталог і lead-generation платформа для сервісної компанії.</p>
                    </div>
                </article><article class="project-card">
                    <a class="project-card__media" href="project-forma.html"><img src="assets/project-forma.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту Forma"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>Retail / Commerce</span><span>2026</span></div>
                        <h3><a href="project-forma.html">Forma</a></h3><p>Легкий commerce-досвід із фокусом на продукт, контент і швидкість.</p>
                    </div>
                </article><article class="project-card is-hidden">
                    <a class="project-card__media" href="project-pulse.html"><img src="assets/project-pulse.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту Pulse"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>Media / Content</span><span>2026</span></div>
                        <h3><a href="project-pulse.html">Pulse</a></h3><p>Редакційна платформа з виразною типографікою та простим керуванням контентом.</p>
                    </div>
                </article><article class="project-card is-hidden">
                    <a class="project-card__media" href="project-atlas.html"><img src="assets/project-atlas.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту Atlas"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>SaaS / Dashboard</span><span>2026</span></div>
                        <h3><a href="project-atlas.html">Atlas</a></h3><p>Маркетинговий сайт для складного продукту без перевантаження деталями.</p>
                    </div>
                </article><article class="project-card is-hidden">
                    <a class="project-card__media" href="project-mova.html"><img src="assets/project-mova.svg" width="1200" height="760" loading="lazy" decoding="async" alt="Абстрактна обкладинка проєкту Mova"></a>
                    <div class="project-card__body">
                        <div class="project-meta"><span>Education / Content</span><span>2026</span></div>
                        <h3><a href="project-mova.html">Mova</a></h3><p>Контентний сервіс із системою матеріалів і гнучкими редакторськими блоками.</p>
                    </div>
                </article></div>
            <div class="load-wrap"><button class="btn btn-ghost" type="button" data-reveal-button data-reveal-selector="#projects .project-card.is-hidden" data-reveal-chunk="3"><span class="btn-label">Показати більше</span><span class="btn-icon" aria-hidden="true">↓</span></button></div>
        </div>
    </section>

    <section class="section home-section" id="about" data-home-section="4">
        <div class="wrap">
            <div class="section-head">
                <div><div class="eyebrow">Про Nexus Digital</div><h2>Менше декоративного шуму. Більше системності.</h2></div>
                <div class="section-head__side"><p>Проєктуємо так, щоб контент можна було редагувати, frontend — підтримувати, а продукт — розвивати.</p></div>
            </div>
            <div class="about-grid">
                <div class="about-media"><img src="assets/about-studio.svg" width="1200" height="900" loading="lazy" decoding="async" alt="Абстрактна ілюстрація студії Nexus Digital"></div>
                <div class="about-content">
                    <p class="about-lead">Ми не додаємо складність заради ефектного макета. Візуальна система повинна пережити реальний контент, CMS і наступний реліз.</p>
                    <div class="metric-grid">
                        <div class="metric"><span class="metric-icon" aria-hidden="true">↗</span><strong>90+</strong><span>mobile performance target</span></div>
                        <div class="metric"><span class="metric-icon" aria-hidden="true">↗</span><strong>95+</strong><span>desktop performance target</span></div>
                        <div class="metric"><span class="metric-icon" aria-hidden="true">◇</span><strong>AA</strong><span>цільовий контраст UI</span></div>
                        <div class="metric"><span class="metric-icon" aria-hidden="true">0</span><strong>0</strong><span>важких page builders</span></div>
                    </div>
                    <a class="btn btn-ghost" href="contact.html"><span class="btn-label">Обговорити задачу</span><span class="btn-icon" aria-hidden="true">↗</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section home-section" id="journal" data-home-section="5">
        <div class="wrap">
            <div class="section-head">
                <div><div class="eyebrow">Блог</div><h2>Нотатки про дизайн і розробку.</h2></div>
                <div class="section-head__side"><p>Чотири останні матеріали. Без Load More на головній.</p><a class="btn btn-ghost" href="blog.html"><span class="btn-label">Дивитися всі</span><span class="btn-icon" aria-hidden="true">↗</span></a></div>
            </div>
            <div class="posts-grid"><article class="post-card">
                    <a class="post-card__media" href="post-digital-product-system.html" aria-label="Відкрити статтю: Як digital-продукт перестає бути «ще одним сайтом»"><img src="assets/blog-01.svg" width="1200" height="760" loading="lazy" decoding="async" alt=""></a>
                    <div class="post-card__body">
                        <div class="post-meta"><a class="post-category" href="category-strategy.html">Стратегія</a><span class="meta-separator" aria-hidden="true">•</span><time datetime="2026-08-12">12 серпня 2026</time></div>
                        <h3 class="post-card__title"><a href="post-digital-product-system.html">Як digital-продукт перестає бути «ще одним сайтом»</a></h3><p>Про системність, чітку цінність і рішення, які користувач помічає ще до першого кліку.</p>
                    </div>
                </article><article class="post-card">
                    <a class="post-card__media" href="post-speed-as-design.html" aria-label="Відкрити статтю: Швидкість як частина дизайну"><img src="assets/blog-02.svg" width="1200" height="760" loading="lazy" decoding="async" alt=""></a>
                    <div class="post-card__body">
                        <div class="post-meta"><a class="post-category" href="category-development.html">Розробка</a><span class="meta-separator" aria-hidden="true">•</span><time datetime="2026-08-08">08 серпня 2026</time></div>
                        <h3 class="post-card__title"><a href="post-speed-as-design.html">Швидкість як частина дизайну</a></h3><p>Чому продуктивність не варто залишати на останній день перед релізом.</p>
                    </div>
                </article><article class="post-card">
                    <a class="post-card__media" href="post-design-system.html" aria-label="Відкрити статтю: Дизайн-система без зайвої бюрократії"><img src="assets/blog-03.svg" width="1200" height="760" loading="lazy" decoding="async" alt=""></a>
                    <div class="post-card__body">
                        <div class="post-meta"><a class="post-category" href="category-design.html">Дизайн</a><span class="meta-separator" aria-hidden="true">•</span><time datetime="2026-08-02">02 серпня 2026</time></div>
                        <h3 class="post-card__title"><a href="post-design-system.html">Дизайн-система без зайвої бюрократії</a></h3><p>Як зібрати візуальну мову, яка допомагає команді, а не створює ще один документ.</p>
                    </div>
                </article><article class="post-card">
                    <a class="post-card__media" href="post-prelaunch-check.html" aria-label="Відкрити статтю: Що ми перевіряємо перед запуском"><img src="assets/blog-04.svg" width="1200" height="760" loading="lazy" decoding="async" alt=""></a>
                    <div class="post-card__body">
                        <div class="post-meta"><a class="post-category" href="category-process.html">Процеси</a><span class="meta-separator" aria-hidden="true">•</span><time datetime="2026-07-27">27 липня 2026</time></div>
                        <h3 class="post-card__title"><a href="post-prelaunch-check.html">Що ми перевіряємо перед запуском</a></h3><p>Короткий production checklist: контент, доступність, аналітика, форми та критичні сценарії.</p>
                    </div>
                </article></div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="wrap footer-grid">
        <div class="footer-brand">
            <a class="brand" href="home.html"><img class="brand-logo" src="assets/logo-mark.svg" width="32" height="32" alt=""><span class="brand-name">Nexus Digital</span></a>
            <p>Digital-продукти, дизайн та розробка без зайвого шару між ідеєю й запуском.</p>
        </div>
        <nav class="footer-nav" aria-label="Навігація у футері">

            <ul class="footer-menu">
                <li><a href="home.html">Головна</a></li>
                <li class="has-submenu">
                    <a href="services.html">Послуги</a>
                    <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="footer-services-menu" aria-label="Відкрити підменю «Послуги»"><span class="submenu-toggle__icon" aria-hidden="true"></span></button>
                    <ul class="sub-menu" id="footer-services-menu">
                        <li class="has-submenu">
                            <a href="service-web-development.html">Web development</a>
                            <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="footer-web-menu" aria-label="Відкрити підменю «Web development»"><span class="submenu-toggle__icon" aria-hidden="true"></span></button>
                            <ul class="sub-menu" id="footer-web-menu">
                                <li><a href="service-web-development.html#wordpress">WordPress</a></li>
                                <li><a href="service-web-development.html#corporate">Corporate sites</a></li>
                            </ul>
                        </li>
                        <li><a href="service-product-design.html">Product design</a></li>
                        <li><a href="service-performance.html">Performance</a></li>
                        <li><a href="service-support.html">Support</a></li>
                    </ul>
                </li>
                <li><a href="projects.html">Проєкти</a></li>
                <li><a href="blog.html">Блог</a></li>
                <li><a href="contact.html">Контакти</a></li>
            </ul>
        </nav>
        <div class="footer-contact">
            <a href="mailto:hello@nexus.digital">hello@nexus.digital</a>
            <a href="tel:+380000000000">+380 00 000 00 00</a>
            <span>Одеса, Україна</span>
        </div>
    </div>
    <div class="wrap footer-bottom">
        <span>© 2026 Nexus Digital</span>
        <a href="privacy.html">Політика конфіденційності</a>
    </div>
</footer>
</body>
</html>

