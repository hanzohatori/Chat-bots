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
        <a class="active__logo" href="index.html"
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
            <a href="{{route('main')}}" class="header__link header__link_active"
              >Главная</a
            >
            <a href="{{route('about')}}" class="header__link header__link_active"
              >О КОМПАНИИ</a
            >
            <a href="{{route('works')}}" class="header__link header__link_active"
              >Наши работы</a
            >
            <a href="{{route('blog')}}" class="header__link header__link_active"
              >блог</a
            >
            <a
              href="{{route('contacts')}}"
              class="header__link header__link_active header__link_click"
              >контакты</a
            >
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
    <section class="contacts-page">
      <div class="container">
        <div class="contacts-page__inner">
          <div class="contacts-page__form">
            <div class="contacts-page__wrapss">
              <div class="feedback__title">Обратная связь</div>
              <div class="feedback__subtitle">
                Будем рады ответить на любой ваш вопрос по телефону
              </div>
            </div>
            <form class="form" action="{{route('request')}}">
              <input class="input" type="text" placeholder="Ваше имя" name="name" id="name"/>
              <input class="input" type="text" placeholder="Номер телефона" name="phone_number"/>
              <button class="button btn_active">Перезвоните мне</button>
              <div class="form__subtitle">
                Нажимая на кнопку вы соглашаетесь на обработку персональных
                данных
              </div>
            </form>
          </div>
          <div class="contacts-page__content">
            <div class="contacts-page__bg1">
              <img src="img/contacts-page/main-photo1.svg" alt="" />
            </div>
            <div class="contacts-page__items">
              <div class="contacts-page__item">
                <div>
                  <img
                    src="img/contacts-page/icon1.svg"
                    alt=""
                    class="contacts-page__item-img"
                  />
                </div>
                <div>
                  <div class="contacts-page__item-title">Адрес:</div>
                  <div class="contacts-page__item-link">
                    Республика Казахстан, г. Алматы, Ул. Шевченко 165Б, офис.511
                  </div>
                </div>
              </div>

              <div class="contacts-page__item">
                <div>
                  <img
                    src="img/contacts-page/icon2.svg"
                    alt=""
                    class="contacts-page__item-img"
                  />
                </div>
                <div>
                  <div class="contacts-page__item-title">Телефон:</div>
                  <div class="contacts-page__item-link">
                    <a href="">+7 727 317 16 98</a> <span>/</span>
                    <a href="">+7 705 450 39 16</a>
                  </div>
                </div>
              </div>

              <div class="contacts-page__item">
                <div>
                  <img
                    src="img/contacts-page/icon3.svg"
                    alt=""
                    class="contacts-page__item-img"
                  />
                </div>
                <div>
                  <div class="contacts-page__item-title">Почта:</div>
                  <div class="contacts-page__item-link">
                    <a href="">info@a-lux.kz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contacts-page__bg2">
        <img src="img/contacts-page/main-photo2.svg" alt="" />
      </div>
      <div class="contacts-page__bg3">
        <img src="img/contacts-page/main-photo3.svg" alt="" />
      </div>
    </section>
    <section class="maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.4041239886706!2d76.88994911548448!3d43.24295147913757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836914550a2389%3A0x8371034b772eb513!2z0YPQu9C40YbQsCDQqNC10LLRh9C10L3QutC-IDE2NdCxLzcyLCDQkNC70LzQsNGC0YsgMDUwMDAw!5e0!3m2!1sru!2skz!4v1604297161519!5m2!1sru!2skz"
        width="100%"
        height="550"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
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
                <a href="tel:77273171698" class="footer__link">+7 727 317 16 98</a>
                <a href="tel:77054503916" class="footer__link">+7 705 450 39 16</a>
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
