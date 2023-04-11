<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.elesy.ru';
    $mail->Port = 25;
    $mail->SMTPAuth = false;
    $mail->Username = '';
    $mail->Password = '';
    $mail->setFrom('noreply.scadaint@scadaint', 'test');
    $mail->addAddress('int@scadaint.ru', 'work mail');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
Company: {$_POST['company']}
Tel: {$_POST['tel']}
EOT;
        if (!$mail->send()) {
            $msg = 'dont send';
        } else {
            $msg = 'MESAGE YSHLO';
        }
    } else {
        $msg = 'che galko chtole?';
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Главная</title>
</head>
<body class="body">
    <button class="up">
        <svg width="36" height="22" viewBox="0 0 36 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 19L18 4L33 19" stroke="#004578" stroke-width="5" stroke-linecap="round"/>
        </svg>
    </button>
    <header class="header header__block">
        <div class="header__logo-block">
            <picture>
                <source srcset="./media/logo-mobile.svg" media="(max-width: 440px)">
                <img class="header__logo" width="41" height="41" src="./media/logo.svg" alt="Логотип">
            </picture>
            <h1 class="header__title">ИНТ</h1>
        </div>
        <div class="header__container">
            <div class="header__container-items">
                <p class="header__p">
                    <a class="header__link" href="./about.html">о нас</a>
                </p>    
                <div class="header__p header__p-hover-product">
                    <button class="btn__header-p">
                        <a class="header__link" href="./products.html">продукты</a>
                    </button>
                    <div class="dropdown">
                        <div class="dropdown__content">
                            <a href="./iserver.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityServer</p>
                                </div>
                            </a>
                            <a href="./reports.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityReports</p>
                                </div>
                            </a>
                            <a href="./datatransport.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityDataTransport</p>
                                </div>
                            </a>
                            <a href="./historyserver.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityHistoryServer</p>
                                </div>
                            </a>
                            <a href="./hmi.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityHMI</p>
                                </div>
                            </a>
                            <a href="./trends.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityTrends</p>
                                </div>
                            </a>
                            <a href="./alarms.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">IntegrityAlarms</p>
                                </div>
                            </a>
                            <a href="./webhmi.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Web Приложения</p>
                                </div>
                            </a>
                            <a href="./licence.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Политика лицензирования</p>
                                </div>
                            </a>
                            <a href="systemreq.html">
                                <div class="dropdown__item dropdown__border">
                                    <p class="dropdown__text">Аппаратные системные требования</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__p header__p-hover-supports">
                    <button class="btn__header-p">
                        <a class="header__link" href="./supports.html">поддержка</a>
                    </button>
                    <div class="dropdown">
                        <div class="dropdown__content">
                            <a href="./supports.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Техническая поддержка</p>
                                </div>
                            </a>
                            <a href="./integrator.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Интеграторам</p>
                                </div>
                            </a>
                            <a href="./documentation.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Запрос документации</p>
                                </div>
                            </a>
                            <a href="./demo.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Запрос пробной версии</p>
                                </div>
                            </a>
                            <a href="./price.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Запрос ценового предложения</p>
                                </div>
                            </a>
                            <a href="./education.html">
                                <div class="dropdown__item">
                                    <p class="dropdown__text">Запрос на обучение</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="header__p">
                    <a class="header__link" href="./contacts.html">контакты</a>
                </p>
            </div>
            <a class="tel" href="+7 (3822) 601-000">+7 (3822) 601-000</a>
        </div>
        <div class="header__auth-links">
            <picture>
                <a href="./auth.html">
                    <svg class="header__avatar" width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"  d="M14.0001 7.75C15.9723 7.75 17.5716 9.34929 17.5716 11.3214C17.5716 13.2936 15.9723 14.8929 14.0001 14.8929C12.028 14.8929 10.4287 13.2936 10.4287 11.3214C10.4287 9.34929 12.028 7.75 14.0001 7.75ZM14.0001 9.25C15.1444 9.25 16.0716 10.1771 16.0716 11.3214C16.0716 12.4657 15.1444 13.3929 14.0001 13.3929C12.8559 13.3929 11.9287 12.4657 11.9287 11.3214C11.9287 10.1771 12.8559 9.25 14.0001 9.25Z"/>
                        <path fill-rule="evenodd"  d="M14 16.3929C18.8321 16.3929 22.75 19.895 22.75 24.2143L22.7493 24.25H20.6757C20.5721 21.3579 17.3414 18.4643 14.1071 18.4643C10.8736 18.4643 7.71929 21.3586 7.61571 24.25H5.25071L5.25 24.2143C5.25 19.895 9.16786 16.3929 14 16.3929Z"/>
                        <path fill-rule="evenodd"  d="M14 26C20.6274 26 26 20.6274 26 14C26 7.37258 20.6274 2 14 2C7.37258 2 2 7.37258 2 14C2 20.6274 7.37258 26 14 26ZM14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z"/>
                    </svg>
                </a>
            </picture>
            <a class="header__auth-link" href="./auth.html">Вход</a>
            <span class="header__span">|</span>
            <a class="header__auth-link" href="./reg.html">Регистрация</a>
        </div>
    </header>
    <div class="mob__menu">
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu">
            <span class="hamb-line"></span>
            <div class="header__auth-link-mobile">
                <picture>
                    <img class="header__avatar" src="./media/auth_avatar.svg" alt="Аватарка">
                </picture>
                <a class="header__auth-link" href="./auth.html">Вход</a>
                <span class="header__span">|</span>
                <a class="header__auth-link" href="./reg.html">Регистрация</a>
            </div>
        </label>

        <nav class="nav">
            <ul class="menu">
                <div class="menu__block menu__block-product">
                    <p class="menu__item">Продукты</p>
                    <svg class="svg" width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L10 11L2 20" stroke="white" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="product__mobile-list mobile-list">
                    <div class="select__ll" >
                        <div class="ll">
                            <a href="./iserver.html">
                                <p class="ll-text">IntegrityServer</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./reports.html">
                                <p class="ll-text">IntegrityReports</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./datatransport.html">
                                <p class="ll-text">IntegrityDataTransport</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./historyserver.html">
                                <p class="ll-text">IntegrityHistoryServer</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./hmi.html">
                                <p class="ll-text">IntegrityHMI</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./trends.html">
                                <p class="ll-text">IntegrityTrends</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./alarms.html">
                                <p class="ll-text">IntegrityAlarms</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./webhmi.html">
                                <p class="ll-text">IntegrityWebHMI</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu__block menu__block-supports">
                    <p class="menu__item">Поддержка</p>
                    <svg class="svg-support" width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L10 11L2 20" stroke="white" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="supports__mobile-list mobile-list">
                    <div class="select__ll" >
                        <div class="ll">
                            <a href="./supports.html">
                                <p class="ll-text">Техническая поддержка</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./integrator.html">
                                <p class="ll-text">Интеграторам</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./documentation.html">
                                <p class="ll-text">Запрос документации</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./demo.html">
                                <p class="ll-text">Запрос пробной версии</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./price.html">
                                <p class="ll-text">Запрос ценового предложения</p>
                            </a>
                        </div>
                        <div class="ll">
                            <a href="./education.html">
                                <p class="ll-text">Запрос на обучение</p>
                            </a>
                        </div>
                    </div>
                </div>
                <li><a href="./contacts.html">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <main class="main__index__mobile">
        <section class="preview">
            <div class="container">
                <picture>
                    <source srcset="./media/int-logo-mob.png" media="(max-width: 460px)">
                    <a href="./products.html"><img class="preview__photo" src="./media/integrity-logo-header.png" alt="Integrity"></a>
                </picture>
                <h2 class="preview__title">ОТЕЧЕСТВЕННАЯ SCADA НА LINUX</h2>
                <h3 class="preview__subtitle">для управления технологическими процессами</h3>
                <p class="preview__text">Платформа для создания систем управления и автоматизации, без ограничения на использование по отраслям промышленности.</p>
                <div class="preview__buttons">
                    <a href="./demo.html"><button class="preview__btn-demo">демо</button></a>
                    <a href="./price.html"><button class="preview__btn-price">узнать цену</button></a>
                </div>
            </div>
        </section>
        <section class="scada">
            <div class="container">
                <a href="./products.html"><h2 class="scada__title">Integrity SCADA</h2></a>
                <div class="scada__blocks">
                    <a href="./hmi.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/product-hmi.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityHMI</h3>
                                    <p class="scada__block-subtitle">Приложение визуализации</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">Визуализация технологического процесса посредством графических примитивов, динамик и других способов отображения технологических данных. В основе лежит современный векторный редактор с поддержкой объектного подхода к конфигурированию. </p>
                        </div>
                    </a>
                    <a href="./webhmi.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/web-icon.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityWeb</h3>
                                    <p class="scada__block-subtitle">Web-приложение визуализации</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Реализация клиента визуализации посредством Web клиента для отображения на любой
                                платформе, в любом браузере, поддерживающем HTML5. Поддержаны компоненты
                                IntegrityAlarms и IntegrityTrends для работы в составе Web проекта визуализации.
                              </p>
                        </div>
                    </a>
                    <a href="./trends.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/reports-icon.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityTrends</h3>
                                    <p class="scada__block-subtitle">Приложение отображения графиков</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">Отображение в виде настраиваемых графиков и гистограмм изменений оперативных и исторических технологических параметров. </p>
                        </div>
                    </a>
                    <a href="./alarms.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/alarms-icon.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityAlarms</h3>
                                    <p class="scada__block-subtitle">Приложение отображение событий</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Отображение в табличном представлении с цветовой и звуковой маркировкой оперативных
                                и исторических событий и аварий. Реализует механизм квитирования сообщений.
                            </p>
                        </div>
                    </a>
                    <a href="./iserver.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/server-icon.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityServer</h3>
                                    <p class="scada__block-subtitle">Cервер ввода/вывода оперативных данных</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Сбор данных по технологическим протоколам, математическая обработка данных,
                                генерация сообщений о событиях и авариях, предоставление данных сторонним системам и
                                клиентским приложениям.
                            </p>
                        </div>
                    </a>
                    <a href="./historyserver.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/product-history-server.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityHistoryServer</h3>
                                    <p class="scada__block-subtitle">Сервер истории</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Сбор и хранение данных технологического процесса, а также предоставление
                                исторических данных сторонним системам и клиентским приложениям. СУБД собственной
                                разработки.
                            </p>
                        </div>
                    </a>
                    <a href="./reports.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/product-reports.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityReports</h3>
                                    <p class="scada__block-subtitle">Система формирования отчетов</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Формирование отчетов различного уровня сложности для анализа исторических данных и
                                оперативной производственной информации. Рассылка отчетов посредством e-mail.
                            </p>
                        </div>
                    </a>
                    <a href="./datatransport.html">
                        <div class="scada__block">
                            <div class="scada__block-top">
                                <img class="scada__block-icon" src="./media/data-trans-icon.svg" alt="иконка">
                                <div class="scada__block-titles">
                                    <h3 class="scada__block-title">IntegrityDataTransport</h3>
                                    <p class="scada__block-subtitle">Сервер транспорта данных</p>
                                </div>
                            </div>
                            <p class="scada__block-text mt-20">
                                Организация единого адресного пространства, обеспечение транспорта данных, как между
                                компонентами ПК, так и в рамках территориально распределенных источников данных и
                                клиентских компонент.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="buy">
            <div class="container">
                <h2 class="buy__title">Что вы получите приобретая наши продукты?</h2>
                <div class="buy__blocks">
                    <div class="buy__block">
                        <div class="buy__block-top">
                            <picture>
                                <img class="buy__avatar" src="./media/icon_3.svg" alt="аватарка">
                            </picture>
                            <h3 class="buy__block-title">Инжиниринг</h3>
                        </div>
                        <ul class="buy__items">
                            <li class="buy__item marker">Гибкость конфигурирования</li>
                            <li class="buy__item marker">Короткие сроки разработки проектов автоматизации</li>
                            <li class="buy__item marker">Возможность использования готовых библиотек объектов визуализации</li>
                            <li class="buy__item marker">Возможность построения распределенных систем</li>
                            <li class="buy__item marker">Открытость</li>
                            <li class="buy__item marker">Простота разработки и развития</li>
                        </ul>
                    </div>
                    <div class="buy__block">
                        <div class="buy__block-top">
                            <picture>
                                <img class="buy__avatar" src="./media/exploitation.svg" alt="аватарка">
                            </picture>
                            <h3 class="buy__block-title">ЭКСПЛУАТАЦИЯ</h3>
                        </div>
                        <ul class="buy__items">
                            <li class="buy__item marker">Надежность</li>
                            <li class="buy__item marker">Высокую производительность</li>
                            <li class="buy__item marker">Fault Tolerance - высокую отказоустойчивость</li>
                            <li class="buy__item marker">Использование привычных технологий АСУ ТП</li>
                            <li class="buy__item marker">Простоту обслуживания</li>
                            <li class="buy__item marker">Обучение и сопровождение рабочего процесса</li>
                            <li class="buy__item marker">Техническую поддержку</li>
                        </ul>
                    </div>
                    <div class="buy__block">
                        <div class="buy__block-top">
                            <picture>
                                <img class="buy__avatar" src="./media/manage.svg" alt="аватарка">
                            </picture>
                            <h3 class="buy__block-title">менеджмент</h3>
                        </div>
                        <ul class="buy__items">
                            <li class="buy__item marker">Маштабируемость</li>
                            <li class="buy__item marker">Легкую интеграцию</li>
                            <li class="buy__item marker">Открытую и понятную архитектуру</li>
                            <li class="buy__item marker">Снижение сроков внедрения проектов</li>
                            <li class="buy__item marker">Гибкий подход к лицензированию</li>
                            <li class="buy__item marker">Снижение издержек на разработку</li>
                            <li class="buy__item marker">Большое количество сертифицированных интеграторов</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="container">
                <div class="info__blocks">
                    <div class="info__block">
                        <p class="info__num info__num-year" data-max="22">1</p>
                        <p class="info__text">Года опыта разработки
                            собственной SCADA
                            системы
                        </p>
                    </div>
                    <div class="info__block">
                        <p class="info__num info__num-projects" data-max="1250">1200</p>
                        <p class="info__text">реализованных проектов автоматизации</p>
                    </div>
                    <div class="info__block">
                        <p class="info__num info__num-licence" data-max="25000">24955</p>
                        <p class="info__text">выпущенных лицензий</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="astra">
            <div class="container">
                <div class="astra__blocks">
                    <picture class="picture__astra">
                        <source srcset="./media/astra-mobile.png" media="(max-width: 440px)">
                        <a class="astra__target" target="_blank" href="https://astralinux.ru/ready-for-software/integrityscada/"><img class="astra__block-img" src="./media/astra.png" alt="Astra Linux"></a>
                    </picture>
                    <div class="astra__block">
                        <h2 class="astra__block-title">Совместимость с отечественными операционными системами</h2>
                        <p class="astra__block-text">подтвержденная совместимость с ведущей отечественной защищенной операционной системой Astra Linux, сертифицированной ФСТЭК; </p>
                        <p class="astra__block-text">возможность работы в режиме замкнутой программной среды ОС Astra Linux Смоленск. </p>
                    </div>
                </div>
                <div class="astra__certs">
                    <picture>
                        <img width="150" height="212" class="astra__cert cert1" src="./media/sert-big.webp" alt="сертификат">
                    </picture>
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                    <picture>
                        <img width="150" height="212" class="astra__cert cert2" src="./media/cert_2.webp" alt="сертификат">
                    </picture>
                    <div id="myModal2" class="modal">
                        <span class="close2">&times;</span>
                        <img class="modal-content" id="img02">
                        <div id="caption2"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="container">
                <hr class="slider__top slider__hr">
                <div class="partners__block">
                    <h2 class="partners__title">Наши <br> Партнёры</h2>
                    <img class="partners__cursor cursor__left" src="./media/prev-icon.svg" alt="Стрелка">
                    <div class="slider">
                        <img loading="lazy" class="partners__slider lykoil" src="./media/lykoil.svg" alt="Лукойл">
                        <img loading="lazy" class="partners__slider gazprom" src="./media/gazprom.svg" alt="Газпром">
                        <img loading="lazy" class="partners__slider syek" src="./media/syek.svg" alt="СУЭК">
                        <img loading="lazy" class="partners__slider rosseti" src="./media/rosseti.svg" alt="РОССЕТИ">
                        <img loading="lazy" class="partners__slider metro" src="./media/mm.svg" alt="Московский метрополитен">
                        <img loading="lazy" class="partners__slider transneft" src="./media/transneft.svg" alt="Транснефть">
                    </div>
                    <img class="partners__cursor cursor__right" src="./media/part-icon.svg" alt="Стрелка">
                </div>
                <hr class="slider__bottom slider__hr">
            </div>
        </section>
        <section class="visual">
            <div class="container">
                <h2 class="visual__title">Возможности визуализации</h2>
                <div class="visual__container">
                    <div class="visual__left-arrow visual__arrow">
                        <svg width="40" height="58" viewBox="0 0 40 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_2134_2537)">
                            <path class="visual__arrow-hover" d="M29 7L9 26.6803L29 46.3606" stroke="#fff" stroke-width="8" stroke-linecap="round"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2134_2537" x="0.296875" y="0" width="39.7031" height="57.3606" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="2" dy="2"/>
                            <feGaussianBlur stdDeviation="2.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2134_2537"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2134_2537" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="visual__blocks">
                        <div class="visual__top">
                            <div class="visual__top-big visual-big">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img loading="lazy" class="visual__hover visual-one" src="./media/example-top-left.png" alt="мнемосхема">
                                    </picture>
                                    <div id="myModal3" class="modal">
                                        <span class="close3">&times;</span>
                                        <img class="modal-content-visual" id="img03">
                                        <div id="caption3"></div>
                                    </div>
                                </div>
                                <p>АСУ ТП нефтеперерабатывающего завода. Общая мнемосхема</p>
                            </div>
                            <div class="visual__top-small visual-small">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img loading="lazy" class="visual__hover 2" src="./media/visual-top-small.png" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>АСУ ТП нефтеперерабатывающего завода. Общая мнемосхема</p>
                            </div>
                        </div>
                        <!--<div class="visual__modal">
                            <div class="visual__modal-arrow visual__arrow-left">
                                <svg width="40" height="58" viewBox="0 0 40 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_2134_2537)">
                                    <path class="visual__arrow-hover" d="M29 7L9 26.6803L29 46.3606" stroke="#fff" stroke-width="8" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_2134_2537" x="0.296875" y="0" width="39.7031" height="57.3606" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dx="2" dy="2"/>
                                    <feGaussianBlur stdDeviation="2.5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2134_2537"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2134_2537" result="shape"/>
                                    </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="visual__modal-block">
                                <img width="1180" height="738" class="visual__modal-img" src="./media/vusial_modal_1.png" alt="модальное окно">
                                <span class="visual__modal-esc">X</span>
                            </div>
                            <div class="visual__modal-arrow visual__arrow-right">
                                <svg width="40" height="58" viewBox="0 0 40 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_2134_2540)">
                                    <path class="visual__arrow-hover" d="M7 7L27 26.6803L7 46.3606" stroke="white" stroke-width="8" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_2134_2540" x="0" y="0" width="39.7031" height="57.3606" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dx="2" dy="2"/>
                                    <feGaussianBlur stdDeviation="2.5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2134_2540"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2134_2540" result="shape"/>
                                    </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>-->
                        <div class="visual__bottom">
                            <div class="visual__bottom-small visual-small">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img loading="lazy" class="visual__hover 3" src="./media/example-bottom-left.svg" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>Система диспетчерского контроля магистрального газопровода</p>
                            </div>
                            <div class="visual__bottom-big visual-big">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img loading="lazy" class="visual__hover 4" src="./media/example-bottom-right.svg" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>Окно диагностики аппаратной и программной частей среднего и верхнего уровня в
                                    системе АСУ ТП
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="visual__blocks-2">
                        <div class="visual__top">
                            <div class="visual__top-big visual-big">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img class="visual__hover" width="720" height="263" src="./media/exm-top-left-slider.png" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>АСУ ТП нефтеперерабатывающего завода. Общая мнемосхема</p>
                            </div>
                            <div class="visual__top-small visual-small">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img class="visual__hover" width="380" height="263" src="./media/exm-top-slider.png" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>АСУ ТП нефтеперерабатывающего завода. Общая мнемосхема</p>
                            </div>
                        </div>
                        <div class="visual__bottom">
                            <div class="visual__bottom-small visual-small">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img class="visual__hover" width="380" height="263" src="./media/exm-bottom-slider.png" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>Система диспетчерского контроля магистрального газопровода</p>
                            </div>
                            <div class="visual__bottom-big visual-big">
                                <div style="overflow: hidden;">
                                    <picture>
                                        <img class="visual__hover" width="720" height="263" src="./media/exm-bottom-big-slider.png" alt="мнемосхема">
                                    </picture>
                                </div>
                                <p>Окно диагностики аппаратной и программной частей среднего и верхнего уровня в
                                    системе АСУ ТП
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="visual__right-arrow visual__arrow">
                        <svg width="40" height="58" viewBox="0 0 40 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_2134_2540)">
                            <path class="visual__arrow-hover" d="M7 7L27 26.6803L7 46.3606" stroke="white" stroke-width="8" stroke-linecap="round"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_2134_2540" x="0" y="0" width="39.7031" height="57.3606" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="2" dy="2"/>
                            <feGaussianBlur stdDeviation="2.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2134_2540"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2134_2540" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="visual__points">
                    <div class="visual__point"></div>
                    <div class="visual__point-active"></div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <h2 class="news__title">Новости</h2>
                <div class="news__blocks">
                    <div class="news-hover">
                        <div class="news__block">
                            <picture>
                                <img loading="lazy" class="news__block-image" src="./media/news-agro.png" alt="баннер">
                            </picture>
                            <h3 class="news__block-title">"АГРОПРОМДАШ-2022"</h3>
                            <p class="news__block-text">28-я международная выставка «Оборудование, технологии, сырье и ингредиенты для пищевой и перерабатывающей промышленности...</p>
                            <p class="news__block-text">Август 2022</p>
                        </div>
                    </div>
                    <div class="news-hover">
                        <div class="news__block">
                            <picture>
                                <img loading="lazy" class="news__block-image" src="./media/news-inno.png" alt="баннер">
                            </picture>
                            <h3 class="news__block-title">Выставка «Радиоэлектроника и приборостроение»</h3>
                            <p class="news__block-text" style="margin-top: 0.7rem">С 21 по 23 сентября 2022 г. в Санкт-Петербурге состоялась выставка «Радиоэлектроника и приборостроение», где наша компания представила решения на основе коплекса Integrity SCADA. Акцент на удобстве использования, гибкости...</p>
                            <p class="news__block-text">Август 2022</p>
                        </div>
                    </div>
                    <div class="news-hover">
                        <div class="news__block">
                            <picture>
                                <img loading="lazy" class="news__block-image" src="./media/news-second.png" alt="баннер">
                            </picture>
                            <h3 class="news__block-title">Релиз 1.0.3</h3>
                            <p class="news__block-text">Упор обновления сделан на клиентские компоненты, расширены возможности среды визуализации, упрощающие работу с проектом, расширен функционал клиентских приложений отображения графиков и событий. Добавлен протокол Unet...</p>
                            <p class="news__block-text">Август 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form__main">
            <div class="container">
                <form id="form" class="form__main-block form" method="POST">
                    <h2 class="form__product-title">Хотите получить доступ к онлайн-версии, бесплатному
                        дистрибутиву для тестирования платформы
                        или задать вопрос?
                    </h2>
                    <h3 class="form__product-subtitle">Заполните форму и получите доступ к приложению.</h3>
                    <!--<p class="form__product-warning">Пожалуйста, заполните все обязательные поля.</p>-->
                    <input name="fio" class="form__main-fio" type="text" placeholder="ФИО">
                    <div class="form__inputs">
                        <div class="form__left-input">
                            <input name="company" class="content__input-small" type="text" placeholder="Компания">
                            <div class="div__input-select">
                                <select class="content__input-small content__input-select" name="target__request" id="product__select">
                                    <option selected disabled value="">Цель запроса</option>
                                    <option class="option" value="Техническая поддержка">Техническая поддержка</option>
                                    <option class="option" value="Интеграторам">Интеграторам</option>
                                    <option class="option" value="Запрос документации">Запрос документации</option>
                                    <option class="option" value="Запрос пробной версии">Запрос пробной версии</option>
                                    <option class="option" value="Запрос ценового предложения">Запрос ценового предложения</option>
                                    <option class="option" value="Запрос на обучение">Запрос на обучение</option>
                                </select>
                            </div>
                            <!--<input class="content__input-small" type="text" placeholder="Цель запроса">-->
                        </div>
                        <div class="form__right-input">
                            <input name="email" class="content__input-small" type="email" placeholder="Электронная почта">
                            <input pattern="^((\+7|7|8)+([0-9]){10})$" name="tel" class="content__input-small" type="tel" placeholder="Телефон">
                        </div>
                    </div>
                    <input name="message" class="product__input" type="text" placeholder="Сообщение">
                    <div class="btn__submit-main">
                        <p class="form__text"><span class="form__blue">Отправляя запрос, Вы даёте согласие на обработку</span> <br> <span class="warning">ПЕРСОНАЛЬНЫХ ДАННЫХ</span></p>
                        <input class="btn__product-submit" type="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__blocks">
                <div class="footer__block">
                    <h2 class="footer__title">Головной офис</h2>
                    <p class="footer__item footer__email-icon mt-30">int@scadaint.ru</p>
                    <p class="footer__item footer__mobile-icon">+7 (3822) 601-000</p>
                </div>
                <div class="footer__block">
                    <h2 class="footer__title">Техническая поддержка</h2>
                    <p class="footer__item footer__email-icon mt-30">support@scadaint.ru</p>
                    <p class="footer__item footer__mobile-icon">+7 (3822) 601-000</p>
                </div>
                <div class="footer__block">
                    <h2 class="footer__title">Коммерческий отдел</h2>
                    <p class="footer__item footer__email-icon mt-30">commerce@scadaint.ru</p>
                    <p class="footer__item footer__mobile-icon">+7 (3822) 601-000</p>
                </div>
            </div>
        </div>
        <hr class="footer__hr mt-50">
        <h4 class="footer__copyright">(с) 2022 Все права защищены </h4>
    </footer>
<script src="./scripts/index.js"></script>
<script src="./scripts/about.js"></script>
</body>
</html>