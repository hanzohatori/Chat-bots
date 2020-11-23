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
            <a href="{{route('blog')}}" class="header__link header__link_active header__link_click">блог</a>
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

    <section class="news-content">
      <div class="container">
        <div class="news-content__inner">
          <div class="news-content__btns">
            <div
              class="news-content__check1 news-content__btn news-content__btn-active"
            >
              Все
            </div>
            <div onclick="getElements(3)" class="news-content__check2 news-content__btn">Новости</div>
            <div onclick="getElements(2)" class="news-content__check3 news-content__btn">Статьи</div>
            <div onclick="getElements(1)" id="category1" class="news-content__check3 news-content__btn">Вакансии</div>
          </div>

{{--            <script>--}}
{{--                function getElements(id) {--}}
{{--                    console.log(id);--}}
{{--                    $('.news-content__btn-active').removeClass('news-content__btn-active');--}}
{{--                    document.getElementById('category' + id).classList.add('news-content__btn-active');--}}
{{--                    axios.get('/categories', {--}}
{{--                        params: {--}}
{{--                            ID: id--}}
{{--                        }--}}
{{--                    })--}}
{{--                        .then(function (response) {--}}
{{--                            let template = `--}}
{{--                            <div class="news-content__item news_content_reports">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="${asset('storage/'.$blog['image'])}"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  ${$blog['title']}--}}
{{--                            </div>--}}
{{--                            <div class="news-content__item-date">$Z{$blog['created_at']}</div>--}}
{{--                <div class="news-content__item-sort1 news-content__sort">--}}
{{--                            Статья--}}
{{--                            Новости--}}
{{--                            Вакансии--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--`--}}
{{--                        })--}}
{{--                        .catch(function (error) {--}}
{{--                            console.log(error);--}}
{{--                        })--}}
{{--                }--}}
{{--            </script>--}}
          <div class="news-content__items">
              @foreach($blogs as $blog)
            <div class="news-content__item news_content_reports">
              <img
                class="news-content__item-img"
                src="{{asset('storage/'.$blog['image'])}}"
                alt="1"
              />
              <div class="news-content__item-inner">
                <div class="news-content__item-title">
                  {{$blog['title']}}
                </div>
                <div class="news-content__item-date">{{$blog['created_at']}}</div>
                <div class="news-content__item-sort1 news-content__sort">
                    @if($blog['blog_category_id']===1)
                        Статья
                    @endif
                    @if($blog['blog_category_id']===2)
                        Новости
                    @endif
                    @if($blog['blog_category_id']===3)
                        Вакансии
                    @endif
                </div>
              </div>
            </div>
              @endforeach
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img2.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Прямоугольная матрица позитивно соответствует скачок--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_reports">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img3.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Натуральный логарифм нормально распределен выражение--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort1 news-content__sort">--}}
{{--                  Новости--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img4.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Эпсилон окрестность, исключая очевидный случай--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img5.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Прямоугольная матрица позитивно соответствует скачок--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_reports">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img6.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Натуральный логарифм нормально распределен выражение--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort1 news-content__sort">--}}
{{--                  Новости--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img7.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Эпсилон окрестность, исключая очевидный случай--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img8.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Эпсилон окрестность, исключая очевидный случай--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="news-content__item news_content_news">--}}
{{--              <img--}}
{{--                class="news-content__item-img"--}}
{{--                src="img/blog-page/img9.png"--}}
{{--                alt="1"--}}
{{--              />--}}
{{--              <div class="news-content__item-inner">--}}
{{--                <div class="news-content__item-title">--}}
{{--                  Эпсилон окрестность, исключая очевидный случай--}}
{{--                </div>--}}
{{--                <div class="news-content__item-date">29.09.2020</div>--}}
{{--                <div class="news-content__item-sort2 news-content__sort">--}}
{{--                  Статьи--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="blog-content"></section> -->

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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
