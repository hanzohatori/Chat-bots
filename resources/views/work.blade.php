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
            <a href="{{route('about')}}" class="header__link header__link_active">О КОМПАНИИ</a><a href="" class="header__link header__link_active header__link_click">Наши работы</a>
            <a href="{{route('blog')}}" class="header__link header__link_active">блог</a>
            <a href="{{route('contacts')}}" class="header__link header__link_active">контакты</a>
          </nav>
          <div class="header__wrap">
            <button class="header__button">Заказать услугу</button>
            <div class="header__phones">
              <a href="" class="header__phone"><img src="img/main-page/header-phone.svg" alt="" /> +7 727 317 16 98</a>
              <a href="" class="header__phone"><img src="img/main-page/header-phone.svg" alt="" /> +7 705 450 39 16</a>
            </div>
          </div>
          <div class="hamburger">
            <span></span>
          </div>
        </div>
      </div>
    </header>

    <section class="work">
      <div class="container">
        <div class="work__inner">
          <h1 class="title">Наши работы</h1>
          <div class="work__btns">
            <div class="news-content__btns">
              <div class="work__btn news-content__btn news-content__btn-active">
                Все
              </div>
              <div class="work__btn news-content__btn">Чат-боты</div>
              <div class="work__btn news-content__btn">Веб-сайты</div>
              <div class="work__btn news-content__btn">Моб. приложения</div>
              <div class="work__btn news-content__btn">Видеоинфографика</div>
            </div>
          </div>
          <div class="work__items">
            <div class="work__item">
              <div class="work__item-img"></div>
              <div class="work__item-title">Концессия косвенно защищает</div>
            </div>
            <div class="work__item">
              <div class="work__item-img"></div>
              <div class="work__item-title">Концессия косвенно защищает</div>
            </div>
            <div class="work__item">
              <div class="work__item-img"></div>
              <div class="work__item-title">Концессия косвенно защищает</div>
            </div>
            <div class="work__item">
              <div class="work__item-img"></div>
              <div class="work__item-title">Концессия косвенно защищает</div>
            </div>
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
