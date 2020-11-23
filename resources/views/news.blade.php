<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>A-LUX Chat-bot-dev</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body>
    <section class="active__header">
      <div class="active__menu active__menu-left">
        <a class="active__logo" href="{{route('main')}}"
          ><img src="img/logo.svg" alt="logo"
        /></a>
        <div class="container">
          <div class="active__link">
            <a href="{{route('main')}}" class="close_navbar scroll-btn2">Главная</a>
            <a href="{{route('about')}}" class="close_navbar scroll-btn2">О компании</a>
            <a href="{{route('works')}}" class="close_navbar scroll-btn2">Наши Работы</a>
            <a href="{{route('blog')}}" class="close_navbar scroll-btn2">Блог</a>
            <a href="{{route('contacts')}}" class="close_navbar scroll-btn2">Контакты</a>
            <a href="tel:+77273171698" class="active-border">+7 727 317-16-98</a>
            <a href="tel:+77054503916" class="active__num active-border">+7 705 450-39-16</a>
          </div>
        </div>
      </div>
    </section>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <a href="{{route('main')}}" class="header__logo">
            <img src="img/logo.svg" alt="" />
          </a>
          <nav class="header__navbar">
            <a href="{{route('main')}}" class="header__link header__link_active">Главная</a>
            <a href="{{route('about')}}" class="header__link header__link_active">О КОМПАНИИ</a>
            <a href="{{route('works')}}" class="header__link header__link_active">Наши работы</a>
            <a href="{{route('blog')}}" class="header__link header__link_active">блог</a>
            <a href="{{route('contacts')}}" class="header__link header__link_active">контакты</a>
          </nav>
          <div class="header__wrap">
            <button class="header__button">Заказать услугу</button>
            <div class="header__phones">
              <a href="" class="header__phone"
                ><img src="img/main-page/header-phone.svg" alt="" /> +7 727 317
                16 98</a
              >
              <a href="" class="header__phone"
                ><img src="img/main-page/header-phone.svg" alt="" /> +7 705 450
                39 16</a
              >
            </div>
          </div>
          <div class="hamburger">
            <span></span>
          </div>
        </div>
      </div>
    </header>
    <section class="blog-main">
      <div class="container"></div>
    </section>
    <section class="news">
      <div class="container">
        <div class="news__inner">
          <div class="news__wrap">
            <div class="news__name">Новости</div>
            <div class="news__date">13.10.25 2020</div>
          </div>
          <div class="title col-lg-7">
            Полярный круг точно декларирует альбатрос, потому что именно
          </div>
          <div class="row">
            <div class="news__description col-xl-7 col-lg-6">
                @foreach($isNews as $post)
              <p>
                  {{$post['name']}}
{{--                      Понятие модернизации, на первый взгляд, постоянно. Технология--}}
{{--                      коммуникации, как правило, однозначно означает институциональный--}}
{{--                      референдум. Политическое учение Н. Макиавелли символизирует--}}
{{--                      механизм власти, указывает в своем исследовании К.Поппер.--}}
              </p>
                @endforeach
              <p>
                В таких странах, как Мексика и Венесуэла, понятие политического
                участия практически иллюстрирует онтологический коллапс
                Советского Союза. Борьба демократических и олигархических
                тенденций, несмотря на внешние воздействия, вызывает
                антропологический референдум. Идея правового государства
                существенно отражает современный доиндустриальный тип
                политической культуры. Понятие политического участия доказывает
                теоретический субъект власти, хотя на первый взгляд, российские
                власти тут ни при чем.
              </p>
              <p>
                Согласно концепции М.Маклюэна, субъект политического процесса
                иллюстрирует экзистенциальный культ личности. Механизм власти
                верифицирует авторитаризм. Политическое лидерство, в первом
                приближении, обретает кризис легитимности. Согласно
                классификации М.Вебера, политическое учение Монтескье
                верифицирует марксизм. Правовое государство доказывает
                референдум, впрочем, это несколько расходится с концепцией
                Истона.
              </p>
              <p>
                Политическое учение Платона, на первый взгляд, доказывает
                функциональный постиндустриализм. Политические учения Гоббса,
                однако, важно формирует гуманизм, впрочем, не все политологи
                разделяют это мнение. Безусловно, политическое учение Аристотеля
                представляет собой бихевиоризм (отметим, что это особенно важно
                для гармонизации политических интересов и интеграции общества).
              </p>
              <p>
                Технология коммуникации формирует континентально-европейский тип
                политической культуры. Авторитаризм, короче говоря, ограничивает
                функциональный континентально-европейский тип политической
                культуры, утверждает руководитель аппарата Правительства.
                Капиталистическое мировое общество важно определяет
                христианско-демократический национализм. Общеизвестно, что
                континентально-европейский тип политической культуры однозначно
                приводит тоталитарный тип политической культуры, последнее
                особенно ярко выражено в ранних работах В.И.Ленина.
              </p>
              <p>
                Социально-экономическое развитие, как правило, обретает
                постиндустриализм. Социально-экономическое развитие
                предсказуемо. Рационально-критическая парадигма, как правило,
                вызывает субъект политического процесса. Политический процесс в
                современной России традиционен.
              </p>
            </div>
            <div
              class="news__similar offset-xl-1 col-xl-4 offset-lg-1 col-lg-5"
            >
              <div class="news__similar-title">Похожие новости:</div>
              <div class="news__similar-item">
                <div class="news-content__item news_content_news">
                  <img
                    class="news-content__item-img"
                    src="img/blog-page/img2.png"
                    alt="1"
                  />
                  <div class="news-content__item-inner">
                    <div class="news-content__item-title">
                      Прямоугольная матрица позитивно соответствует скачок
                    </div>
                    <div class="news-content__item-date">29.09.2020</div>
                    <div class="news-content__item-sort2 news-content__sort">
                      Статьи
                    </div>
                  </div>
                </div>
                <div class="news-content__item news_content_reports">
                  <img
                    class="news-content__item-img"
                    src="img/blog-page/img3.png"
                    alt="1"
                  />
                  <div class="news-content__item-inner">
                    <div class="news-content__item-title">
                      Натуральный логарифм нормально распределен выражение
                    </div>
                    <div class="news-content__item-date">29.09.2020</div>
                    <div class="news-content__item-sort1 news-content__sort">
                      Новости
                    </div>
                  </div>
                </div>
                <div class="news-content__item news_content_news">
                  <img
                    class="news-content__item-img"
                    src="img/blog-page/img4.png"
                    alt="1"
                  />
                  <div class="news-content__item-inner">
                    <div class="news-content__item-title">
                      Эпсилон окрестность, исключая очевидный случай
                    </div>
                    <div class="news-content__item-date">29.09.2020</div>
                    <div class="news-content__item-sort2 news-content__sort">
                      Статьи
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="socials">
      <div class="container">
        <div class="socials__inner">
          <div class="socials__title">Поделиться с помощью:</div>
          <div class="socials__wrap">
            <a href="https://vk.com/club6291800" class="socials__link">
              <img src="img/news-page/icon1.svg" alt="" />
            </a>
            <a href="https://www.instagram.com/aluxkz/" class="socials__link">
              <img src="img/news-page/icon2.svg" alt="" />
            </a>
            <a href="" class="socials__link">
              <img src="img/news-page/icon3.svg" alt="" />
            </a>
            <a href="" class="socials__link">
              <img src="img/news-page/icon4.svg" alt="" />
            </a>
            <a href="" class="socials__link">
              <img src="img/news-page/icon5.svg" alt="" />
            </a>
            <a href="" class="socials__link">
              <img src="img/news-page/icon6.svg" alt="" />
            </a>
            <a href="" class="socials__link">
              <img src="img/news-page/icon7.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="row">
            <div class="col-md-4">
              <div class="footer__description">
                COPYRIGHT © 2007-2020 ALMATY LUXURY CHAT BOT DEV. Создание
                чат-ботов в Алматы
              </div>
              <a href="" class="footer__chatBot"
                >2020 — <span>chat-bots.kz</span></a
              >
            </div>
            <div class="col-md-5 footer__wrap">
              <div class="footer__title">Все страницы:</div>
              <div class="footer__row">
                <a href="{{route('main')}}" class="footer__link">Главная</a>
                <a href="{{route('about')}}" class="footer__link">О компании</a>
                <a href="{{route('works')}}" class="footer__link">Наши работы</a>
                <a href="{{route('blog')}}" class="footer__link">Блог</a>
                <a href="{{route('contacts')}}" class="footer__link">Контакты</a>
              </div>
            </div>
            <div class="col-md-3 footer__wrap2">
              <div class="footer__title">Наши телефоны:</div>
              <div class="footer__row">
                <a href="tel:77273171698" class="footer__link"
                  >+7 727 317 16 98</a
                >
                <a href="tel:77054503916" class="footer__link"
                  >+7 705 450 39 16</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
