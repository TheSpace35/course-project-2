<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработка мобильных приложений</title>

        <!--CSS-->
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
        <!-- js -->
        <script defer src="{{asset('js/DataBase.js')}}"></script>
        <script defer src="{{asset('js/auth.js')}}"></script>
        <script defer src="{{asset('js/main.js')}}"></script>
        <script defer src="{{asset('js/validation.js')}}"></script>

   
      
</head>
<body>


    <div class="form-overlay"></div>
<!-- Окно авторизации -->
    <div class="login-popup popup">
        <h2>Вход</h2>
        <form method="post" class="login-form">
            <label for="login" class="login-form__label">Логин:</label>
            <input type="text" name="login" class="login-form__input" placeholder="Введите здесь пароль" required>

            <label for="password" class="login-form__label">Пароль:</label>
            <input type="password" name="password" class="login-form__input" placeholder="Введите здесь пароль" required>

            <label for="remember" class="login-form__label">Запомнить</label>
            <input type="checkbox" name="remember" class="login-form__input">

            <button type="submit" class="login-form__button">Войти</button>

            <p class="login-form__message">Данные не верны!</p>
        </form>
    </div>

<!-- Окно заявки на обратную связь -->
    <div class="application-popup popup">
        <h2>Заказать звонок</h2>
        <form method="post" class="application-form">

            <div class="application-form_mainPart">

                <div class="application-form_part">
                    <label for="name" class="application-form__label">Имя:</label>
                    <input type="text" name="name" class="application-form__input" required>
                    <label for="name" name="name" class="application-form__label_error">Ошибка</label>
        
                    <br><label for="phone" class="application-form__label">Телефон:</label>
                    <input type="phone" name="phone" class="application-form__input" required>
                    <label for="phone" nmae='phone' class="application-form__label_error">Номер телефона должен быть в форате +7хххххххххх</label>
                </div>
    
                <div class="application-form_part">
                    <label for="message" class="application-form__label">Сообщение:</label>
                    <textarea class="application-form__input area" name="message" cols="30" rows="10" maxlength="255"></textarea>
                </div>

            </div>

            <button type="submit" class="application-form__button">Отправить</button>

            <p class="application-form__message">Заявка отправлена!</p>


        </form>
    </div>

    <div class="app-container">
        <nav class="top-nav" role="navigation">
            <div class="brand-logo" role="banner">LOGO/NAME</div>
            <button class="account-btn logInBtn" aria-label="Личный кабинет">Личный кабинет</button>
        </nav>

        <div class="divider" role="separator"></div>

        <main>
            <section class="hero-section" role="region" aria-label="Главный баннер">
                <img src="icons/section1-bg.svg" alt="" class="hero-bg" aria-hidden="true" />
                <div class="hero-content">
                    <h1 class="hero-title">Разработка мобильных приложений</h1>
                    <p class="hero-subtitle">
                        Разработка мобильных приложений индивидуально для вашей компании. Мы
                        реализуем широкий спектр решений под любую задачу области, а также
                        создаем современный и удобный дизайн в интересующем вас стиле.
                    </p>
                    <button class="cta-button call-backBtn" aria-label="Узнать подробнее">Подробнее</button>
                </div>
            </section>

            <div class="divider" role="separator"></div>

            <section class="feature-section" role="region" aria-label="Этапы разработки">
                <div class="feature-content">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/312b5ec04ebfda91e17f4f27833c7f654dd5b630717ce0940c68d5abbcf0a221?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-icon" aria-hidden="true" />
                    <div class="feature-details">
                        <h2 class="feature-title">ПРОЕКТИРОВАНИЕ</h2>
                        <p class="feature-description">
                            На этом этапе мы обсуждаем с вами то, каким вы хотите видеть
                            ваше будущее приложение и какие функции оно должно выполнять
                        </p>
                    </div>
                </div>
                <div class="feature-image-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef88eaf7a5905b28689d76f9d8786342fe6b733bebfab28cd94f912ba869c051?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-image" aria-hidden="true" />
                </div>
            </section>

            <section class="feature-section" role="region" aria-label="Этап разработки">
                <div class="feature-content">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0dd84be76d1777b8024e620311f466fa5346cfeb58bd4d96013ba39d2324eb92?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-icon" aria-hidden="true" />
                    <div class="feature-details">
                        <h2 class="feature-title">РАЗРАБОТКА</h2>
                        <p class="feature-description">
                            На этом этапе мы создаем все требуемые вами на этапе
                            проектирования функции, которые должно выполнять приложение
                        </p>
                    </div>
                </div>
                <div class="feature-image-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/85f2de11ddec5e03921167b63e39031aa7f05733f365ee5df4755631d53dea11?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-image" aria-hidden="true" />
                </div>
            </section>

            <section class="feature-section" role="region" aria-label="Этап внедрения">
                <div class="feature-content">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0d434911d4245f574642a947ebfede044fe3ca2a914a3c0f713c40f989cacbf1?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-icon" aria-hidden="true" />
                    <div class="feature-details">
                        <h2 class="feature-title">ВНЕДРЕНИЕ</h2>
                        <p class="feature-description">
                            На этом этапе мы запускаем готовое приложение и обеспечиваем
                            его продвижение в популярных сервисах
                        </p>
                    </div>
                </div>
                <div class="feature-image-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e8c25a2c6c895bc398f541e0da97c5a3a9270ca162a35eb5127a02d1afb8e12?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-image" aria-hidden="true" />
                </div>
            </section>

            <section class="feature-section" role="region" aria-label="Этап поддержки">
                <div class="feature-content">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4a4648328e88b84c366a0acd08c2406cffd876f5984150658faba2fec4f63d37?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-icon" aria-hidden="true" />
                    <div class="feature-details">
                        <h2 class="feature-title">ПОДДЕРЖКА</h2>
                        <p class="feature-description">
                            На этом этапе мы поддерживаем конкурентоспособность приложения
                            и, если нужно, вносим нужные вам изменения
                        </p>
                    </div>
                </div>
                <div class="feature-image-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0a758f9ddbc348b1de9e7a6d8461da1aa1ab767ac9309c7ceb505d52e86c27a?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="feature-image" aria-hidden="true" />
                </div>
            </section>

            <section class="benefits-section" role="region" aria-label="Преимущества">
                <div class="benefits-grid">
                    <article class="benefit-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/62af01e9df99e969503e29bda447c75826330c3990e127fd700010bc712ea8cf?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="benefit-icon" aria-hidden="true" />
                        <h3 class="benefit-title">Распространенность</h3>
                        <p class="benefit-description">
                            Мобильные приложения ускоряют распространение информации о компании
                        </p>
                    </article>

                    <article class="benefit-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a47a0cd0db27e3d26d1d337ec3118f7d5d34624c6086fc4c0d0bc70974e0d3c?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="benefit-icon" aria-hidden="true" />
                        <h3 class="benefit-title">Удобство</h3>
                        <p class="benefit-description">
                            Мобильные приложения можно использовать в любом месте
                        </p>
                    </article>

                    <article class="benefit-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/abaee540cf51240617db92e7bb58927dcbfea30d3c3102dc443d95a121fe7db4?placeholderIfAbsent=true&apiKey=6b8198d49c0d4c2aba0785b51097914d" alt="" class="benefit-icon" aria-hidden="true" />
                        <h3 class="benefit-title">Скорость</h3>
                        <p class="benefit-description">
                            Мобильные приложения ускоряют взаимодействие с требуемым функционалом
                        </p>
                    </article>
                </div>
            </section>

            <section class="contact-section" role="region" aria-label="Контакты">
                <div class="contact-content">
                    <h2 class="contact-title">
                        Интересно?
                        <br />
                        Есть вопросы?
                    </h2>
                    <p class="contact-description">
                        Приходите к нам или оставляйте заявку, чтобы обсудить идею!
                    </p>
                    <button class="cta-button call-backBtn" aria-label="Оставить заявку">Оставить заявку</button>
                </div>
                <div class="map-container" role="complementary" aria-label="Карта">
                    <iframe class="map-container__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.930311534313!2d37.60043991594311!3d55.72559548053559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afb7306836d%3A0x3a63a9751f5e14f1!2z0L_RgNC-0LHRg9C70L7RgdC40LzQvdCw0L3RgtC4!5e0!3m2!1sru!2sru!4v1656404541419!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </main>

        <footer class="footer" role="contentinfo">
            <div class="brand-logo">LOGO/NAME</div>
        </footer>
    </div>
</body>
</html>