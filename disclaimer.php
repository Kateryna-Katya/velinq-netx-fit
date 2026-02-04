<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
<link rel="icon" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='8' fill='%237C3AED'/%3E%3Cpath d='M10 22L14.5 17.5L17.5 20.5L23 14' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M18 14H23V19' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Ccircle cx='23' cy='14' r='1.5' fill='white'/%3E%3C/svg%3E" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@700;800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
  <body>
<header class="header">
    <div class="container header__container">
        <a href="./#hero" class="logo">
            <span class="logo__icon"></span>
            <span class="logo__text">
                <?= $domainTitle ?>
            </span>
        </a>

        <nav class="nav">
            <ul class="nav__list">
                <li><a href="./#hero" class="nav__link">Главная</a></li>
                <li><a href="./#about" class="nav__link">Платформа</a></li>
                <li><a href="./#benefits" class="nav__link">Преимущества</a></li>
                <li><a href="./#innovations" class="nav__link">Инновации</a></li>
                <li><a href="./#blog" class="nav__link">Блог</a></li>
            </ul>
        </nav>

        <a href="./#contact" class="btn btn--primary header__btn">Связаться</a>

        <button class="burger" aria-label="Menu">
            <span></span>
        </button>
    </div>
</header>
<div class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav__header">
        <a href="./#hero" class="logo">
            <span class="logo__text">
                <?= $domainTitle ?>
            </span>
        </a>
        <button class="close-menu" id="close-menu">&times;</button>
    </div>
    <ul class="mobile-nav__list">
        <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
        <li><a href="./#about" class="mobile-nav__link">Платформа</a></li>
        <li><a href="./#benefits" class="mobile-nav__link">Преимущества</a></li>
        <li><a href="./#innovations" class="mobile-nav__link">Инновации</a></li>
        <li><a href="./#blog" class="mobile-nav__link">Блог</a></li>
        <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
    </ul>
</div>

<main>
    <section class="pages">
        <div class="container">
            <h1>Отказ от ответственности (Дисклеймер)</h1>

            <p>
                <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они не являются и не должны
                рассматриваться как персональная инвестиционная рекомендация,
                профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                каких-либо финансовых операций.
            </p>

            <p>
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                относительно точности, полноты или актуальности представленной в блоге
                информации. Любые упоминания потенциального карьерного роста, пассивного дохода или прошлых
                результатов наших клиентов не гарантируют аналогичных результатов в будущем.
                Индивидуальные итоги вашей деятельности зависят от множества факторов и могут существенно
                отличаться от приведенных примеров.
            </p>

            <p>
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                его владельцы и аффилированные лица не несут ответственности за
                любые прямые или косвенные убытки, решения или действия,
                предпринятые вами на основе информации с этого ресурса. Вся
                ответственность за использование методологий и возможные последствия
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                источников, которые считаются надежными и общедоступными.
            </p>

            <p>
                <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                определенным уровнем риска. Перед принятием
                любых важных решений мы настоятельно рекомендуем провести
                собственное исследование и проконсультироваться с квалифицированным
                независимым специалистом в соответствующей области.
            </p>

            <p>
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете по собственной воле, полностью осознаете и принимаете все
                упомянутые риски и условия данного отказа от ответственности.
            </p>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__col">
            <a href="./#hero" class="logo footer__logo">
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>
            <p class="footer__description">
                Технологии, которые работают на вас. Переосмыслите подход к развитию карьеры в эпоху AI.
            </p>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Меню</h4>
            <ul class="footer__links">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#about">О платформе</a></li>
                <li><a href="./#benefits">Преимущества</a></li>
                <li><a href="./#blog">Блог</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Документы</h4>
            <ul class="footer__links">
                <li><a href="./privacy.php">Privacy Policy</a></li>
                <li><a href="./terms.php">Terms of Service</a></li>
                <li><a href="./cookies.php">Cookies Policy</a></li>
                <li><a href="./return.php">Refund Policy</a></li>
                <li><a href="./disclaimer.php">Disclaimer</a></li>
                <li><a href="./contact.php">Contact Us</a></li>
                <li><a href="./personal-data-policy.php">Personal Data Policy</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Контакты</h4>
            <ul class="footer__contact-info">
                <li>
                    <i data-lucide="phone" class="icon-sm"></i>
                    <a href="tel:+442079460681">+44 20 7946 0681</a>
                </li>
                <li>
                    <i data-lucide="mail" class="icon-sm"></i>
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@
                        <?= $fullDomain ?>
                    </a>
                </li>
                <li>
                    <i data-lucide="map-pin" class="icon-sm"></i>
                    <span>221B Baker St, London NW1 6XE, UK</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container footer__bottom">
        <p>&copy; 2026
            <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
        </p>
    </div>
</footer>
    <div id="cookie-popup" class="cookie-popup">
      <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
        </p>
        <button id="accept-cookies" class="btn btn--primary btn--sm">Принять</button>
      </div>
    </div>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script type="module" src="./main.js"></script>
  </body>
</html>
