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
            <a href="index.html" class="close_navbar scroll-btn2">Главная</a>
            <a href="about-us.html" class="close_navbar scroll-btn2">О компании</a>
            <a href="work.html" class="close_navbar scroll-btn2">Наши Работы</a>
            <a href="blog.html" class="close_navbar scroll-btn2">Блог</a>
            <a href="contacts.html" class="close_navbar scroll-btn2">Контакты</a>
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
            <a
              href="{{route('about')}}"
              class="header__link header__link_active header__link_click"
              >О КОМПАНИИ</a
            >
            <a href="{{route('works')}}" class="header__link header__link_active"
              >Наши работы</a
            >
            <a href="{{route('blog')}}" class="header__link header__link_active"
              >блог</a
            >
            <a href="{{route('contacts')}}" class="header__link header__link_active"
              >контакты</a
            >
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
    <section class="about-main"></section>
    <section class="about-us">
      <div class="container">
        <div class="about-us__inner">
          <div class="about-us__wrap1">
            <div class="about-us__title">О Нас</div>
            <div class="about-us__description">
              <p>
                Веб студия «Алматы Люкс» основана в 2007 году. За это время было
                реализовано более 400 веб проектов различной сложности. Над
                каждым сайтом работают профессионалы в области:
                программирования, дизайна, рекламы и интернет-маркетинга. В
                данный момент наша команда состоит из 11 человек стремящихся
                преуспеть в своем деле.
              </p>
              <p>
                Очень многие Веб студии Алматы предложат Вам свои услуги, но при
                создании сайта, мы, в первую очередь, думаем о Ваших клиентах и
                создаем привлекательный дизайн, формирующий позитивное
                впечатление о компании и настраиваем максимально эффективно Вашу
                рекламную компанию в Google,Yandex и Соц сетях. Так же детально
                продумываем мобильную версию веб сайта.
              </p>
              <p>
                В то же время, большое внимание мы уделяем структуре сайта. Это
                делается для того, чтобы Ваш потенциальный клиент мог легко
                найти интересующую его информацию. Как результат, гармоничное
                сочетание красоты и юзабилити делает пребывание Вашего клиента
                на сайте комфортным, приятным, а главное перспективным!
              </p>
            </div>
          </div>
          <div class="about-us__wrap2">
            <div class="about-us__item">
              <div class="about-us__item-title">
                <span class="year">0</span>лет
              </div>
              <div class="about-us__item-descr">На рынке Казахстана</div>
            </div>
            <div class="about-us__item">
              <div class="about-us__item-title project">0</div>
              <div class="about-us__item-descr">
                Более 500 разработанных проектов
              </div>
            </div>
            <div class="about-us__item">
              <div class="about-us__item-title">
                <span class="worker">0</span>+
              </div>
              <div class="about-us__item-descr">Сотрудников в штате</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-modal">
      <div class="container">
        <div class="about-modal__inner">
          <div class="about-modal__wrap offset-lg-6 offset-md-5">
            <div class="about-modal__icon">
              <img src="img/about-page/modal-icon.svg" alt="" />
            </div>
            <div class="about-modal__title">
              Наша <br />
              бизнес-модель
            </div>
            <div class="about-modal__description">
              <p>
                Вот уже второй десяток лет мы выстраиваем долгосрочные
                взаимовыгодные отношения с нашими клиентами.
              </p>
              <p>
                Наша бизнес-модель построена таким образом, что наши доходы
                напрямую зависят от доходов наших партнеров. Это гарантирует
                нашу максимальную заинтересованность в росте Ваших продаж.
              </p>
            </div>
          </div>
        </div>
        <div class="about-modal__inner2">
          <div class="about-modal__wrap2">
            <div class="about-modal__journal">
              <p>Журнал</p>
              <img src="img/about-page/forbes.svg" alt="" />
              <p>о нас</p>
            </div>
            <div class="about-modal__staff">
              <img src="img/about-page/staff.svg" alt="" />
            </div>
            <div class="about-modal__journal">
              <p>Телеканал</p>
              <img src="img/about-page/khabar.svg" alt="" />
              <p>о нас</p>
            </div>
          </div>
          <div
            class="about-modal__name offset-lg-3 col-lg-6 offset-md-2 col-md-8"
          >
            Востриков Иван Сергеевич
          </div>
        </div>
      </div>
    </section>
    <section class="about-quote">
      <div class="container">
        <div class="about-quote__inner">
          <img
            src="img/about-page/quote-arrow.svg"
            alt=""
            class="about-quote__arrow"
          />
          <div class="about-quote__descr">
            Каждый вечер 95 % всех активов моей компании разъезжаются на машинах
            по домам. Моя задача — создать такие условия труда, чтобы на
            следующее утро у всех этих людей возникло желание вернуться обратно.
            Креативность, которую они приносят в компанию, создает конкурентное
            преимущество.
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
