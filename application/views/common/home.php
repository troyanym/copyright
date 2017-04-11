<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 03.04.2017
 * Time: 10:57
 */
?>

<div id="request_copyright" class="modal-form">
    <a class="modal_close" href="#">x</a>
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Пожалуйста заполните нужные поля</h4>
        </div>
        <form class="ajax-form" action="/pages/send_req" method="post">
            <div class="contact-form">
                <div class="form-group field-form-name required">
                    <input required="required" class="form-control" name="client_name" placeholder="Имя" type="text">
                </div>
                <div class="form-group field-form-email required">
                    <input required="required" class="form-control email-input" name="client_email" placeholder="Email" type="email">
                </div>
                <div class="form-group field-form-phone required">
                    <input required="required" class="form-control phone-input" name="client_phone" placeholder="Телефон" type="text">
                </div>
                <div class="form-group field-form-product required">
                    <textarea class="form-control" name="client_text" placeholder="Краткое описание?" type="text"></textarea>
                </div>
            </div>
            <div class="loading-status"><span class="loading">Отправка...</span></div>
            <button type="submit" class="btn btn-block">Оставить заявку</button>
        </form>
    </div>
</div>

<div id="question_copyright" class="modal-form">
    <a class="modal_close" href="#">x</a>
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Пожалуйста заполните нужные поля</h4>
        </div>
        <form class="ajax-form" action="/pages/send_ask" method="post">
            <div class="contact-form">
                <div class="form-group field-form-name required">
                    <input required="required" class="form-control" name="client_name" placeholder="Имя" type="text">
                </div>
                <div class="form-group field-form-email required">
                    <input required="required" class="form-control email-input" name="client_email" placeholder="Email" type="email">
                </div>
                <div class="form-group field-form-product required">
                    <textarea class="form-control" name="client_ask" placeholder="Какой возник вопрос?" type="text"></textarea>
                </div>
            </div>
            <div class="loading-status"><span class="loading">Отправка...</span></div>
            <button type="submit" class="btn btn-block">Задать вопрос</button>
        </form>
    </div>
</div>

<section class="header slide">
    <div class="section-inner">
        <div class="container">
            <div clas="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <h1>Качественные копирайты</h1>
                    <span class="subtitle">Точно в срок</span>
                    <ul class="servicelist">
                        <li>Бесплатные консультации и полное погружение в ваш бизнес</li>
                        <li>Любые правки - бесплатно до полного принятия материала</li>
                        <li>Рекорд конверсии моего текста - 66,7% (есть скриншоты метрики)</li>
                    </ul>
                    <a id="request_btn" class="btn" href="#">Оставить заявку на копирайтинг</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="aboutme">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Обо мне</span>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Мы супер-герои использующие всю силу кофе для создания самых качественных и современных сайтов. Мы команда из талантливых разработчиков, которые готовы сложить все свои усилия, чтобы сделать идеальный и неповторимый сайт для Вас и вашего бизнеса.</p>
                    <p>Каждый проект пронизан предпринимательским ароматом, с помощью которого можно сделать идеальный продукт. Наши программисты только и ждут уникальные и сложные задачи для того, чтобы находить элегантные решения для разработки Вашего сайта!</p>
                </div>
                <div class="col-md-6">
                    <img title="About my work" src="/assets/catalog/images/work-process.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="myservice">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Что именно я предлагаю</span>
            </div>
            <div class="row-icons row">
                <div class="col-icon col-sm-4 col-md-4">
                    <figure class="md-icon">
                        <div class="image">
                            <img title="icon image" src="/assets/catalog/images/icons/copyright.jpg" />
                        </div>
                        <figcaption class="title">Копирайтинг</figcaption>
                        <figcaption class="subtitle">Качественный копирайтинг используют успешные компании для создания текстов на главную, описания преимуществ компании.</figcaption>
                    </figure>
                </div>
                <div class="col-icon col-sm-4 col-md-4">
                    <figure class="md-icon">
                        <img title="icon image" src="/assets/catalog/images/icons/reright.jpg" />
                        <figcaption class="title">Рерайтинг</figcaption>
                        <figcaption class="subtitle">Рерайтинг – это обработка, уникализация уже существующего текста с различных источников, обеспечивает поднятие сайта в ТОП.</figcaption>
                    </figure>
                </div>
                <div class="col-icon col-sm-4 col-md-4">
                    <figure class="md-icon">
                        <img title="icon image" src="/assets/catalog/images/icons/seo_copyright.jpg" />
                        <figcaption class="title">SEO-копирайтинг</figcaption>
                        <figcaption class="subtitle">СЕО-оптимизированные статьи – это один из лучших методов «белого» продвижения, который увеличивает посещаемость сайта.</figcaption>
                    </figure>
                </div>
            </div>
            <div class="row-icons row">
                <div class="col-icon col-sm-4 col-md-4">
                    <figure class="md-icon">
                        <img title="icon image" src="/assets/catalog/images/icons/booklen.jpg" />
                        <figcaption class="title">Тексты для листовок, буклетов и брошюр</figcaption>
                        <figcaption class="subtitle">Разрабатываю бьющие точно в цель тексты для печатной продукции. Ваш продукт заметят! Прототип в подарок!</figcaption>
                    </figure>
                </div>
                <div class="col-icon col-sm-4 col-md-4">
                    <figure class="md-icon">
                        <img title="icon image" src="/assets/catalog/images/icons/reclama.jpg" />
                        <figcaption class="title">Рекламные тексты</figcaption>
                        <figcaption class="subtitle">Уникальные продающие тексты, которые будут стимулировать клиентов совершить покупку товара или услуги.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="askme slide">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Вы можете бесплатно задать вопрос!</span>
                <span class="subtitle">Это совершенно бесплатно, и ни к чему вас не обязывает.</span>
                <a id="ask_btn" class="btn" href="#">Задать вопрос</a>
            </div>
        </div>
    </div>
</section>
<section class="myworks">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Мои работы</span>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/idea_house.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Статья для журнала "Идеи вашего дома"</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="https://drive.google.com/file/d/0B02gJUE7ojMieEM1RUdpcThHZHM/view">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/ploskostop.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Плоскостопие у женщин</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://www.stylefitness.ru/ploskostopie-u-zhenshchin.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/fitnes_oshibki.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>8 проблем, с которыми сталкиваются поклонницы фитн "</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://www.stylefitness.ru/fitnes-oshibki.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/limited_edition_bg.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Пресс-релиз коллекции посуды от Alessi</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="https://drive.google.com/file/d/0Bw7-ZwwMt_9yRTdTeEhqVENEdTA/view">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/Yas_fKMVjlE.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Стиральная машина Samsung AddWash</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="/assets/catalog/images/myworks/Yas_fKMVjlE.jpg">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/0bf5295315d874369632923fe7290a6c.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Менструальный цикл и тренировки</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://www.stylefitness.ru/menstrualnyy-tsikl-i-trenirovki.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/strobbing-1.jpg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Строббинг в летнем макияже</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://artvisage.com.ua/sovety-vizazhista/66-strobbing-effektivnaya-tekhnika-dlya-velikolepnogo-letnego-makiyazha.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/целлюлит.JPG">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Как избавиться от целлюлита</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://www.stylefitness.ru/kak-izbavitsya-ot-tsellyulita.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-mywork">
                        <img class="pf_img" src="/assets/catalog/images/myworks/image-09-06-16-07-22-1.jpeg">
                        <div class="pf_hover">
                            <div class="lms2_container">
                                <div class="lms2b_desc">
                                    <span>Микроблейдинг бровей</span>
                                </div>
                                <div class="lms2b_btn">
                                    <a class="btn" href="http://artvisage.com.ua/sovety-vizazhista/62-mikroblejding-brovej-detalnoe-opisanie-protsedury.html">Смотреть проект</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-price slide">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Сколько стоит копирайтинг</span>
                <span class="subtitle">ФОРМИРОВАНИЕ ЦЕНЫ НА ТЕКСТЫ </span>
            </div>
            <div class="row">
                <div class="price-col-left col-md-6">
                    <p>Цены берутся не с потолка. Они четко выстраиваются пропорционально времени, потраченному на проект. Опыт работы позволяет уже на стадии переговоров и ознакомления с техническим заданием оценить окончательную стоимость.</p>
                    <p>Можно в любое время обратиться ко мне, и я скажу, сколько будет стоить работа в вашем конкретном случае.</p>
                </div>
                <div class="col-md-6">
                    <span class="b">Приблизительные цены:</span>
                    <ul class="price">
                        <li>Копирайтинг — от 40₴ за 1000 символов</li>
                        <li>Написание статей — от 45₴ за 1000 символов</li>
                        <li>Нейминг и слоганы — от 100₴ за штуку</li>
                        <li>Стихи, песни, проза — от 50₴ за 1000 символов</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-themes">
    <div class="section-inner">
        <div class="container">
            <div class="head-section">
                <span class="title">Тематика</span>
            </div>
            <div class="row">
                <div class="col-md-6" style="text-align: center;">
                    <img style="width: 290px;" title="work themes" src="/assets/catalog/images/work-themes.png">
                </div>
                <div class="col-md-6">
                    <span class="b">Успешно работаю с такими тематиками, как:</span>
                    <ul class="price">
                        <li>психология;</li>
                        <li>спорт и похудение (спортивное питание, диеты, фитнес);</li>
                        <li>мода и стиль;</li>
                        <li>искусство (кино, литература, живопись);</li>
                        <li>секс и отношения (в т.ч. описания товаров для взрослых);</li>
                        <li>туризм;</li>
                        <li>красота и здоровье (косметика, домашние и салонные процедуры по уходу за собой, рецепты приготовления домашних косметических средств и др.);</li>
                        <li>эзотерика (магические ритуалы, заговоры, атрибутика);</li>
                        <li>дизайн интерьеров;</li>
                        <li>кулинария;</li>
                        <li>воспитание детей.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>