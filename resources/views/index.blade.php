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
            <a href="{{route('main')}}" class="header__link header__link_active header__link_click">Главная</a>
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
    <section class="main">
      <div class="container">
        <div class="main__inner">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <h1 class="main__title col-lg-7">
            Разработка чат-ботов в Алматы, Нур-Султане и в других городах
            Казахстана для вашего бизнеса
          </h1>
          <div class="main__subtitle col-lg-5">
            Избавьте бизнес от рутинных задач, закажите создание чат-бота и
            автоматизируйте обслуживания клиентов
          </div>
          <form class="form" action="{{route('request')}}" method="post">
              {{csrf_field()}}
            <input class="input" type="text" placeholder="Ваше имя" name="name" id="name"/>
            <input class="input" type="text" placeholder="Номер телефона" name="phone_number" id="phone_number"/>
            <button class="button btn_active" type="submit">Заказать чат-бот</button>
            <div class="form__subtitle">
              Нажимая на кнопку вы соглашаетесь на обработку персональных данных
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="about__inner">
          <div class="about__items">
            <div class="about__item">
              <div class="about__item-number">
                <span class="year">0</span> лет
              </div>
              <div class="about__item-descr">На рынке Казахстана</div>
            </div>
            <div class="about__item about__item-border">
              <div class="about__item-number">
                <span class="project">0</span>+
              </div>
              <div class="about__item-descr">
                Более 500 разработанных проектов
              </div>
            </div>
            <div class="about__item">
              <div class="about__item-number">
                <span class="worker">0</span>+
              </div>
              <div class="about__item-descr">Сотрудников в штате</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits">
      <div class="container">
        <div class="benefits__inner">
          <h1 class="title offset-lg-3 col-lg-6 offset-md-1 col-md-10">
            Для чего нужна разработка чат-бота
          </h1>
          <div class="benefits__items row">
            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-1.svg" alt="" />
              </div>
              <div class="benefits__item-title">Продажи</div>
              <div class="benefits__item-subtitle">
                Увеличение продаж посредством автомизации бизнес-процессов
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>

            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-2.svg" alt="" />
              </div>
              <div class="benefits__item-title">Опросы</div>
              <div class="benefits__item-subtitle">
                Сбор информации о целевой аудитории для разработки стратегии
                продаж
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>

            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-3.svg" alt="" />
              </div>
              <div class="benefits__item-title">Рассылка</div>
              <div class="benefits__item-subtitle">
                Автоматизированные рассылки новостей, акций, продающих писем и
                т.п.
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>

            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-4.svg" alt="" />
              </div>
              <div class="benefits__item-title">Тех. поддержка</div>
              <div class="benefits__item-subtitle">
                Чат-бот консультирует и помогает решать проблемы действуя по
                заданным алгоритмам или же использует алгоритмы исскуственного
                интеллекта (NLP) для анализа текстовых сообщений
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>

            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-5.svg" alt="" />
              </div>
              <div class="benefits__item-title">Автоматизация задач</div>
              <div class="benefits__item-subtitle">
                Разработанные нами чат-боты способны реализовать любые
                поставленные задачи: Заказ столиков, события, покупка билетов,
                подбор туров и т.п.
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>

            <div class="benefits__item col-lg-4 col-md-6">
              <div class="benefits__item-img">
                <img src="img/main-page/benefits-6.svg" alt="" />
              </div>
              <div class="benefits__item-title">Переводы</div>
              <div class="benefits__item-subtitle">
                Денежные переводы, проверка баланса, и другие финансовые
                операции
              </div>
              <div class="benefits__item-link">Узнать больше</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="container">
        <div class="services__inner">
          <div class="title offset-md-3 col-md-6">
            Интеграция с онлайн-сервисами
          </div>
          <div class="services__wrap">
            <div class="services__circle">
              <img src="img/main-page/services-circle.png" alt="" />
            </div>
            <div class="services__img">
              <img src="img/main-page/services.png" alt="" />
            </div>
            <div class="services__txt services__txt1">CRM системы</div>
            <div class="services__txt services__txt2">Облачные хранилища</div>
            <div class="services__txt services__txt3">Рекламные системы</div>
            <div class="services__txt services__txt4">
              Маркетплейсы и интернет-магазины
            </div>
            <div class="services__txt services__txt5">Платежные системы</div>
            <div class="services__txt services__txt6">+более 2000 сервисов</div>
            <div class="services__circleIcon">
              <img src="img/main-page/сircle-icon.svg" alt="" />
              <img src="img/main-page/сircle-icon.svg" alt="" />
              <img src="img/main-page/сircle-icon.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="work-us">
      <div class="container">
        <div class="work-us__inner">
          <div class="title">Наши работы</div>
          <div class="work-us__sliders">
              @foreach($isWork as $work)
            <div class="work-us__slider">
              <div class="row">
                <div
                  class="work-us__slider-img offset-xl-2 col-xl-3 offset-lg-1 col-lg-4">
                    <img src="{{asset('storage/'.$work['image'])}}"  style="width: 102%; height: 598px; border-radius: 32px">
                </div>
                <div
                  class="work-us__slider-txt offset-xl-1 col-xl-5 offset-lg-1 col-lg-5"
                >

                  <div class="work-us__slider-wrap">
                    <div class="work-us__slider-title">{{$work['name']}}</div>
                    <div class="work-us__slider-subtitle">
                        {{$work['description']}}
                    </div>
                  </div>
                  <div class="work-us__slider-wrap">
                    <div class="work-us__slider-title">Результат</div>
                    <div class="work-us__slider-subtitle">
                        {{$work['description']}}
                    </div>
                  </div>
                  <button class="work-us__slider-button">
                    Посмотреть проект
                  </button>
                </div>

              </div>
            </div>
              @endforeach

{{--            <div class="work-us__slider">--}}
{{--              <div class="row">--}}
{{--                <div--}}
{{--                  class="work-us__slider-img offset-xl-2 col-xl-3 offset-lg-1 col-lg-4"--}}
{{--                ></div>--}}
{{--                <div--}}
{{--                  class="work-us__slider-txt offset-xl-1 col-xl-5 offset-lg-1 col-lg-5"--}}
{{--                >--}}
{{--                  <div class="work-us__slider-wrap">--}}
{{--                    <div class="work-us__slider-title">Название проекта</div>--}}
{{--                    <div class="work-us__slider-subtitle">--}}
{{--                      По общему правилу рефинансирование недоказуемо. Сделка--}}
{{--                      трансформирует Кодекс.--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="work-us__slider-wrap">--}}
{{--                    <div class="work-us__slider-title">Результат</div>--}}
{{--                    <div class="work-us__slider-subtitle">--}}
{{--                      Ставка рефинансирования, в представлениях континентальной--}}
{{--                      школы права--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <button class="work-us__slider-button">--}}
{{--                    Посмотреть проект--}}
{{--                  </button>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="work-us__slider">--}}
{{--              <div class="row">--}}
{{--                <div--}}
{{--                  class="work-us__slider-img offset-xl-2 col-xl-3 offset-lg-1 col-lg-4"--}}
{{--                ></div>--}}
{{--                <div--}}
{{--                  class="work-us__slider-txt offset-xl-1 col-xl-5 offset-lg-1 col-lg-5"--}}
{{--                >--}}
{{--                  <div class="work-us__slider-wrap">--}}
{{--                    <div class="work-us__slider-title">Название проекта</div>--}}
{{--                    <div class="work-us__slider-subtitle">--}}
{{--                      По общему правилу рефинансирование недоказуемо. Сделка--}}
{{--                      трансформирует Кодекс.--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="work-us__slider-wrap">--}}
{{--                    <div class="work-us__slider-title">Результат</div>--}}
{{--                    <div class="work-us__slider-subtitle">--}}
{{--                      Ставка рефинансирования, в представлениях континентальной--}}
{{--                      школы права--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <button class="work-us__slider-button">--}}
{{--                    Посмотреть проект--}}
{{--                  </button>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
          </div>
        </div>
      </div>
    </section>
    <section class="clients">
      <div class="container">
        <div class="clients__inner">
          <div class="clients__wrap">
            <div class="title">Наши клиенты</div>
            <div class="clients__title">+400 компаний</div>
          </div>
          <div class="clients__img">
            <img src="img/main-page/clients.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="feedback">
      <div class="container">
        <div class="feedback__inner">
          <div class="feedback__wrap offset-lg-6 col-lg-4 offset-md-5 col-md-7">
            <div class="feedback__title">Обратная связь</div>
            <div class="feedback__subtitle">
              Будем рады ответить на любой ваш вопрос по телефону
            </div>
            <form class="form" action="{{route('request')}}">
              <input class="input" type="text" placeholder="Ваше имя" name="name" id="name"/>
              <input class="input" type="text" placeholder="Номер телефона" name="phone_number" id="phone_number"/>
              <button class="button btn_active" type="submit">Перезвоните мне</button>
              <div class="form__subtitle">
                Нажимая на кнопку вы соглашаетесь на обработку персональных
                данных
              </div>
            </form>
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
