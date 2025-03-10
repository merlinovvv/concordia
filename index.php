<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?php bloginfo('name') ?>
    </title>
    <link
            href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;1,400&family=Inter:wght@200;300;400;500&family=Raleway:wght@400;500&display=swap"
            rel="stylesheet"/>
    <?php
    wp_head();
    ?>
</head>

<body>
<div class="container">
    <div class="firstscreen">
        <div class="firstscreen__menu">
            <nav class="menu__navigation">
                <h2 data-text="Navigation" class="menu__title">
                    Navigation
                    <div class="menu__underline-box">
                        <span class="underline-box__line"></span>
                        <span class="underline-box__line"></span>
                    </div>
                </h2>


                <ul class="menu__list">
                    <li class="menu__link">
                        <span class="link__num">01</span>
                        <a href="#history" class="link__text">Про комплекс</a>
                    </li>
                    <li class="menu__link">
                        <span class="link__num">02</span>
                        <a href="#services" class="link__text">Послуги</a>
                    </li>
                    <li class="menu__link">
                        <span class="link__num">03</span>
                        <a href="#reviews" class="link__text">Відгуки</a>
                    </li>
                </ul>
                <button class="menu__btn red-button burger--btn">
                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                         viewBox="0 0 238 238" fill="none">
                        <path
                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                stroke="#FF1919"/>
                    </svg>
                    <div class="red-button__eclipse">
                        <p class="red-button__text">
                            повернутися <br/>
                            на головну
                        </p>
                        <div class="red-button__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                 fill="none">
                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                      stroke-width="0.515667"/>
                                <mask id="path-2-inside-1_315_147" fill="white">
                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                </mask>
                                <path
                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                            </svg>
                        </div>
                    </div>
                </button>
            </nav>
            <div class="menu__contacts">
                <h2 data-text="Contacts" class="menu__title"><span>Contacts</span></h2>
                <div class="menu__info">
                    <span class="info__line"></span>
                    <div class="info__content">
                        <div class="content__block content__block--first">
                            <p class="block__name">Центр “Конкордія”</p>
                        </div>
                        <div class="content__block content__block--second">
                            <p class="block__name">instagram</p>
                            <a target="_blank" href="<?php the_field('instagram_link'); ?>" class="block__link">@concordia_dim</a>
                        </div>
                    </div>
                    <span class="info__line"></span>
                    <div class="info__content">
                        <div class="content__block content__block--first">
                            <p class="block__name">Власниця Юлія</p>
                        </div>
                        <div class="content__block content__block--second">
                            <p class="block__name">phone</p>
                            <a target="_blank" href="https://t.me/<?php the_field('number_link'); ?>"
                               class="block__link">
                                <?php the_field('number_link'); ?>
                            </a>
                        </div>
                        <div class="content__block content__block--third">
                            <p class="block__name">instagram</p>
                            <a target="_blank" href="<?php the_field('owner_instagram_link'); ?>"
                               class="block__link">@mazurenko_yulia_</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/menu__sculp.jpg"
                 class="menu__image-container"/>


            <svg class="menu__close burger--btn" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                 viewBox="0 0 27 27" fill="none">
                <path d="M2 2L25 25" stroke="white" stroke-width="3"/>
                <path d="M2 25L25 2" stroke="white" stroke-width="3"/>
            </svg>
            <button class="menu__btn red-button burger--btn mobile-menu-btn">
                <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                     viewBox="0 0 238 238" fill="none">
                    <path
                            d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                            stroke="#FF1919"/>
                </svg>
                <div class="red-button__eclipse">
                    <p class="red-button__text">
                        повернутися <br/>
                        на головну
                    </p>
                    <div class="red-button__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                             fill="none">
                            <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white" stroke-width="0.515667"/>
                            <mask id="path-2-inside-1_315_147" fill="white">
                                <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                            </mask>
                            <path
                                    d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                    fill="white" mask="url(#path-2-inside-1_315_147)"/>
                        </svg>
                    </div>
                </div>
            </button>
        </div>
        <header class="firstscreen__header">
            <div class="header__logo" href="">
                <?php the_custom_logo(); ?>
                <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo.png" alt="" /> -->
            </div>
            <div class="header__text">
                твій дім гармонії <br/>
                & духовного і тілесного розвитку
            </div>
            <div class="header__burger-btn burger--btn">
                <span></span>
            </div>
        </header>
        <div class="firstscreen__content">
            <div class="firstscreen__text">
                <h4 class="text__title">Welcome.</h4>
                <p class="text__desc">
                    Мене звати Юлія Мазуренко,
                    <br/><br/>
                    і я Вітаю тебе в нашому центрі духовного і тілесного розвитку
                    людини
                </p>
            </div>
            <div class="content__social">
                <a target="_blank" href="<?php the_field('instagram_link'); ?>" class="social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M3.98017 9.41812C4.04097 8.08953 4.249 7.23266 4.53033 6.50531L4.53412 6.49527C4.8129 5.75513 5.24963 5.08463 5.81391 4.53045L5.82183 4.52268L5.8296 4.51476C6.38425 3.94976 7.05497 3.51346 7.79447 3.23541L7.80722 3.23053C8.5329 2.94832 9.3881 2.74106 10.7178 2.68027M3.98017 9.41812C3.91625 10.8377 3.89996 11.2777 3.89996 14.9582C3.89996 18.6397 3.91536 19.0786 3.98014 20.4985M3.98017 9.41812L3.98017 9.77619M4.53527 23.4218C4.81332 24.1613 5.24962 24.8321 5.81462 25.3867L5.82253 25.3945L5.83029 25.4024C6.38451 25.9666 7.05502 26.4034 7.79516 26.6822L7.80621 26.6864C8.53256 26.9681 9.38817 27.1754 10.7178 27.2362M4.53527 23.4218L4.53039 23.4091C4.24818 22.6834 4.04093 21.8282 3.98014 20.4985M4.53527 23.4218L4.5186 23.3341M3.98014 20.4985L4.00191 20.6132M3.98014 20.4985L3.98014 20.1395M4.5186 23.3341L4.00191 20.6132M4.5186 23.3341C4.29916 22.7543 4.07319 21.9454 4.00191 20.6132M4.5186 23.3341C4.5263 23.3544 4.53399 23.3744 4.54167 23.3942C4.81996 24.1445 5.26091 24.8238 5.83282 25.3834C6.39221 25.9552 7.07127 26.3961 7.82126 26.6743C8.42314 26.9088 9.27124 27.1538 10.7176 27.2201C12.1772 27.2865 12.6282 27.3001 16.2581 27.3001C19.888 27.3001 20.3393 27.2865 21.799 27.2201C23.2471 27.1537 24.0942 26.9073 24.694 26.6747C25.4444 26.3965 26.1238 25.9555 26.6834 25.3834C27.2551 24.824 27.696 24.145 27.9742 23.395C28.2087 22.7931 28.4537 21.9451 28.5199 20.4987C28.5864 19.0391 28.5999 18.5872 28.5999 14.9582C28.5999 11.3292 28.5864 10.877 28.5199 9.41735C28.4532 7.96163 28.2046 7.11328 27.9709 6.51299C27.6654 5.72428 27.2779 5.12778 26.6824 4.53225C26.0881 3.93908 25.4932 3.55143 24.7039 3.2456C24.1015 3.01007 23.2525 2.763 21.799 2.69638C21.6726 2.69063 21.5537 2.68527 21.4397 2.68029M4.00191 20.6132C3.9999 20.5756 3.99801 20.5375 3.99625 20.4991C3.99049 20.3726 3.98513 20.2536 3.98014 20.1395M10.7178 2.68027C12.1377 2.61549 12.5775 2.6001 16.2581 2.6001C19.9386 2.6001 20.3783 2.61637 21.7978 2.68029M10.7178 2.68027L11.0768 2.68027M21.7978 2.68029L21.4397 2.68029M21.7978 2.68029C23.1266 2.74106 23.9836 2.94906 24.711 3.23042L24.721 3.23425C25.4612 3.51304 26.1317 3.94977 26.6859 4.51404L26.6935 4.52188L26.7014 4.52958C27.2658 5.08381 27.7024 5.75449 27.981 6.49483L27.9858 6.50736C28.268 7.23304 28.4752 8.08824 28.536 9.41793M11.0768 2.68027L21.4397 2.68029M11.0768 2.68027C12.2791 2.6277 12.9436 2.61639 16.2581 2.61639C19.5728 2.61639 20.2372 2.6277 21.4397 2.68029M11.0768 2.68027C10.9627 2.68526 10.8437 2.69062 10.7172 2.69638C9.26904 2.76275 8.42195 3.00913 7.8222 3.24175C7.06897 3.52097 6.38726 3.96427 5.8265 4.53952C5.23653 5.13192 4.85036 5.72557 4.54551 6.5123C4.30997 7.11474 4.06285 7.96407 3.99623 9.41773C3.99049 9.54384 3.98515 9.66243 3.98017 9.77619M28.536 20.4985C28.4752 21.8281 28.268 22.6838 27.9863 23.4101L27.9821 23.4212C27.7033 24.1613 27.2665 24.8318 26.7023 25.386L26.6943 25.3938L26.6866 25.4017C26.1319 25.9667 25.4612 26.403 24.7217 26.681L24.7089 26.6859C23.9833 26.9681 23.1281 27.1754 21.7984 27.2362M3.98014 20.1395C3.92757 18.9372 3.91625 18.2727 3.91625 14.9582C3.91625 11.6428 3.92756 10.9792 3.98017 9.77619M3.98014 20.1395L3.98017 9.77619M14.0601 20.2646C14.757 20.5533 15.5038 20.7018 16.2581 20.7018C17.7814 20.7018 19.2423 20.0967 20.3194 19.0196C21.3966 17.9424 22.0017 16.4815 22.0017 14.9582C22.0017 13.4349 21.3966 11.974 20.3194 10.8969C19.2423 9.81975 17.7814 9.21462 16.2581 9.21462C15.5038 9.21462 14.757 9.36319 14.0601 9.65183C13.3633 9.94047 12.7301 10.3635 12.1968 10.8969C11.6634 11.4302 11.2403 12.0634 10.9517 12.7602C10.6631 13.4571 10.5145 14.204 10.5145 14.9582C10.5145 15.7125 10.6631 16.4594 10.9517 17.1562C11.2403 17.853 11.6634 18.4862 12.1968 19.0196C12.7301 19.5529 13.3633 19.976 14.0601 20.2646ZM12.184 10.8841C13.2645 9.80356 14.73 9.19652 16.2581 9.19652C17.7862 9.19652 19.2517 9.80356 20.3322 10.8841C21.4128 11.9646 22.0198 13.4301 22.0198 14.9582C22.0198 16.4863 21.4128 17.9518 20.3322 19.0324C19.2517 20.1129 17.7862 20.7199 16.2581 20.7199C14.73 20.7199 13.2645 20.1129 12.184 19.0324C11.1034 17.9518 10.4964 16.4863 10.4964 14.9582C10.4964 13.4301 11.1034 11.9646 12.184 10.8841ZM25.2642 7.85507C25.2642 8.29244 25.0904 8.7119 24.7812 9.02117C24.4719 9.33043 24.0524 9.50418 23.6151 9.50418C23.1777 9.50418 22.7582 9.33043 22.449 9.02117C22.1397 8.7119 21.9659 8.29244 21.9659 7.85507C21.9659 7.4177 22.1397 6.99824 22.449 6.68898C22.7582 6.37971 23.1777 6.20596 23.6151 6.20596C24.0524 6.20596 24.4719 6.37971 24.7812 6.68898C25.0904 6.99824 25.2642 7.4177 25.2642 7.85507Z"
                                stroke="white" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a target="_blank" href="<?php the_field('facebook_link'); ?>" class="social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M28.5999 15.5998C28.5999 8.42015 22.7796 2.59987 15.6 2.59987C8.42026 2.59987 2.59998 8.42015 2.59998 15.5998C2.59998 22.0885 7.35388 27.4666 13.5687 28.4419V19.3577H10.2679V15.5998H13.5687V12.7358C13.5687 9.47767 15.5095 7.67798 18.479 7.67798C19.9013 7.67798 21.389 7.93189 21.389 7.93189V11.1311H19.7497C18.1348 11.1311 17.6312 12.1332 17.6312 13.1613V15.5998H21.2367L20.6603 19.3577H17.6312V28.4419C23.846 27.4666 28.5999 22.0885 28.5999 15.5998Z"
                                stroke="white" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a target="_blank" href="<?php the_field('telegram_link'); ?>" class="social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M28.5961 15.6001C28.5961 22.7798 22.7759 28.6001 15.5962 28.6001C8.41648 28.6001 2.59619 22.7798 2.59619 15.6001C2.59619 8.42039 8.41648 2.6001 15.5962 2.6001C22.7759 2.6001 28.5961 8.42039 28.5961 15.6001ZM16.062 12.1973C14.7976 12.7232 12.2705 13.8117 8.48072 15.4629C7.86532 15.7076 7.54295 15.947 7.5136 16.1811C7.464 16.5767 7.95944 16.7325 8.6341 16.9446C8.72587 16.9735 8.82095 17.0034 8.91843 17.0351C9.58219 17.2508 10.4751 17.5033 10.9392 17.5133C11.3603 17.5224 11.8302 17.3488 12.349 16.9925C15.8899 14.6023 17.7177 13.3942 17.8325 13.3682C17.9134 13.3498 18.0256 13.3267 18.1016 13.3943C18.1777 13.4618 18.1702 13.5898 18.1621 13.6241C18.1131 13.8333 16.1683 15.6414 15.1619 16.577C14.8481 16.8687 14.6256 17.0756 14.5801 17.1229C14.4782 17.2287 14.3743 17.3288 14.2745 17.4251C13.6578 18.0195 13.1954 18.4653 14.3001 19.1933C14.8309 19.5431 15.2557 19.8324 15.6795 20.121C16.1423 20.4362 16.604 20.7505 17.2012 21.1421C17.3534 21.2418 17.4987 21.3454 17.6403 21.4463C18.1789 21.8303 18.6628 22.1753 19.2606 22.1203C19.608 22.0883 19.9668 21.7617 20.149 20.7875C20.5797 18.4852 21.4262 13.4967 21.6219 11.4411C21.639 11.261 21.6175 11.0306 21.6001 10.9294C21.5828 10.8282 21.5466 10.684 21.4151 10.5773C21.2594 10.4509 21.0189 10.4243 20.9114 10.4261C20.4224 10.4348 19.6722 10.6956 16.062 12.1973Z"
                              stroke="white" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <h1 class="firstscreen__title">
            <span>Concordia</span>

            <a href="#services" class="firstscreen__btn red-button">
                <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                     viewBox="0 0 238 238" fill="none">
                    <path
                            d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                            stroke="#FF1919"/>
                </svg>
                <div class="red-button__eclipse">
                    <p class="red-button__text">
                        переглянути <br/>
                        послуги
                    </p>
                    <div class="red-button__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                             fill="none">
                            <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white" stroke-width="0.515667"/>
                            <mask id="path-2-inside-1_315_147" fill="white">
                                <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                            </mask>
                            <path
                                    d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                    fill="white" mask="url(#path-2-inside-1_315_147)"/>
                        </svg>
                    </div>
                </div>
            </a>
        </h1>
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/firstpage-photo.png" alt=""
             class="firstscreen__bg"/>
    </div>
    <div class="concept">
        <div class="concept__left-text">
            <h3 class="left-text__title">Авторська методика</h3>
            <p class="left-text__small-text">засновниці та головного</p>
            <p class="left-text__medium-text">
                ідеолога центру <span>Юлії Мазуренко</span>
            </p>
        </div>
        <div class="concept__ellipses">
            <div class="ellipse ellipse-dirt">
                <span>Земля</span>
            </div>
            <div class="ellipse ellipse-water">
                <span>Вода</span>
            </div>
            <div class="ellipse ellipse-fire">
                <span>Вогонь</span>
            </div>
            <div class="ellipse ellipse-wind">
                <span>Повітря</span>
            </div>
        </div>

        <div class="concept__right-text">
            <h3 class="right-text__title">Сила 4 стихій</h3>
            <p class="right-text__desc">
                Концепція «Concordia» — це цілісний підхід до кожної Жінки. Для
                зцілення Твого Тіла та Душі я застосовую Силу 4-х Стихій Природи,
                які природньо та гармонійно зв’язані з нашою жіночою суттю
            </p>
        </div>
    </div>
    <div class="owner">
        <div class="owner__header-text">
            <h4 class="header__text-title">Owner.</h4>
            <p class="header__text-desc">
                <?php the_field('header-text_owner'); ?>
            </p>
        </div>
        <div class="owner__idea">
            <img src="<?php the_field('image_owner'); ?>" alt="" class="idea__img"/>
            <a target="_blank" href='<?php the_field('instagram_link'); ?>' class="idea__btn red-button">
                <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                     viewBox="0 0 238 238" fill="none">
                    <path
                            d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                            stroke="#FF1919"/>
                </svg>
                <div class="red-button__eclipse">
                    <p class="red-button__text">
                        записатися на <br/>
                        консультацію
                    </p>
                    <div class="red-button__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                             fill="none">
                            <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white" stroke-width="0.515667"/>
                            <mask id="path-2-inside-1_315_147" fill="white">
                                <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                            </mask>
                            <path
                                    d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                    fill="white" mask="url(#path-2-inside-1_315_147)"/>
                        </svg>
                    </div>
                </div>
            </a>
            <div class="idea__text">
                <p>
                    <?php the_field('main-text_owner'); ?>
                </p>
            </div>
        </div>
        <div class="owner__footer-text">
            <p>Юлія Мазуренко</p>
            <p>
                <?php the_field('about_owner'); ?>
            </p>
        </div>
    </div>
    <div class="consultation">
        <div class="consultation__container">
            <div class="consultation__text">
                <h4 class="consultation__title">
                    <?php the_field('title_consultation'); ?>
                </h4>
                <div class="consultation__desc">
                    <?php the_field('subtitle_consultation'); ?>
                </div>
            </div>
            <div class="consultation__content">
                <div class="content__text">
                    <?php the_field('subtitle2_consultation'); ?>
                </div>
                <div class="content__box">
                    <p>
                        <?php the_field('block-text1_consultation'); ?>
                    </p>
                    <a target="_blank" href='<?php the_field('instagram_link'); ?>' class="content__btn red-button">
                        <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                             viewBox="0 0 238 238" fill="none">
                            <path
                                    d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                    stroke="#FF1919"/>
                        </svg>
                        <div class="red-button__eclipse">
                            <p class="red-button__text">
                                залишити <br/>
                                заявку
                            </p>
                            <div class="red-button__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                     fill="none">
                                    <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                          stroke-width="0.515667"/>
                                    <mask id="path-2-inside-1_315_147" fill="white">
                                        <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                    </mask>
                                    <path
                                            d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                            fill="white" mask="url(#path-2-inside-1_315_147)"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
<!--                <div class="content__box content__box--second">-->
                    <!--                <p>-->
                    <!--                    --><?php //the_field('block-text2_consultation'); ?>
                    <!--                </p>-->
                    <!--                <a target="_blank" href='--><?php //the_field('instagram_link'); ?><!--' class="content__btn red-button">-->
                    <!--                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"-->
                    <!--                         viewBox="0 0 238 238" fill="none">-->
                    <!--                        <path-->
                    <!--                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"-->
                    <!--                                stroke="#FF1919"/>-->
                    <!--                    </svg>-->
                    <!--                    <div class="red-button__eclipse">-->
                    <!--                        <p class="red-button__text">онлайн</p>-->
                    <!--                        <div class="red-button__arrow">-->
                    <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"-->
                    <!--                                 fill="none">-->
                    <!--                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"-->
                    <!--                                      stroke-width="0.515667"/>-->
                    <!--                                <mask id="path-2-inside-1_315_147" fill="white">-->
                    <!--                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>-->
                    <!--                                </mask>-->
                    <!--                                <path-->
                    <!--                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"-->
                    <!--                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>-->
                    <!--                            </svg>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </a>-->

<!--                </div>-->
            </div>
        </div>

        <div class="consultation__image-container">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/owner-sculp.jpg" alt=""
                 class="consultation__img"/>
        </div>
    </div>
    <div class="marquees">
        <div class="items-wrap">
            <div class="items marquee">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_1',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
            <div aria-hidden="true" class="items marquee">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_1',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
        <div class="items-wrap">
            <div class="items marquee reverce">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_2',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
            <div aria-hidden="true" class="items marquee reverce">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_2',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
        <div class="items-wrap">
            <div class="items marquee">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_3',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
            <div aria-hidden="true" class="items marquee">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'ticker_3',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="item">
                        <?php the_title(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </div>
    <div id="services" class="services">
        <div class="services__sidebar">
            <div class="sidebar__text">
                <h4 class="sidebar__title">
                    Оберіть <br/>
                    послугу
                </h4>
                <div class="services__price-time">
                    <div class="bottom-content__note">

                    </div>
                    <div class="price-time__block">
                        <div class="price-time__price price__1">ціна</div>
                        <div class="price-time__time time__1">час</div>
                    </div>
                    <div class="price-time__block">
                        <div class="price-time__price price__2"></div>
                        <div class="price-time__time time__2"></div>
                    </div>
                    <div class="price-time__block">
                        <div class="price-time__price price__3"></div>
                        <div class="price-time__time time__3"></div>
                    </div>
                </div>
                <p class="sidebar__desc">
                    Для того, аби преглянути усі послуги - натискайте на круглі кнопки справа
                    <br/><br/>
                    Для того, аби преглянути детальний опис послуги - натисніть на неї
                </p>
            </div>

            <div class="sidebar__bottom-content">
                <a target="_blank" href='<?php the_field('instagram_link'); ?>' class="sidebar__btn red-button">
                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                         viewBox="0 0 238 238" fill="none">
                        <path
                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                stroke="#FF1919"/>
                    </svg>
                    <div class="red-button__eclipse">
                        <p class="red-button__text">
                            записатися <br> на сеанс
                        </p>
                        <div class="red-button__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                 fill="none">
                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                      stroke-width="0.515667"/>
                                <mask id="path-2-inside-1_315_147" fill="white">
                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                </mask>
                                <path
                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="services__main">
            <div class="main__text">
                <p class="main__desc">
                    Що ви можете отримати <br/>
                    в центрі “Concordia”
                </p>
                <h2 class="main__title">Our services</h2>
            </div>
            <div class="main__swiper swiper swiper-services">
                <div class="swiper__container swiper-wrapper">
                    <?php
                    $parent_category_id = 6;

                    $args = array(
                        'child_of' => $parent_category_id,
                        'hide_empty' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $categories = get_categories($args);
                    $total_categories = count($categories);

                    foreach ($categories as $key => $category) {
                        ?>
                        <div class="swiper__block swiper-slide">
                            <div class="block__content">
                                <p class="content__title">
                                    <?php echo $category->name; ?>
                                </p>
                                <div class="content__attendances">
                                    <?php
                                    // Запрос записей внутри текущей дочерней рубрики
                                    $child_category_posts = new WP_Query(
                                        array(
                                            'category__in' => array($category->term_id),
                                            'posts_per_page' => -1,
                                            'orderby' => 'date',
                                            'order' => 'ASC'
                                        )
                                    );

                                    if ($child_category_posts->have_posts()):
                                        while ($child_category_posts->have_posts()):
                                            $child_category_posts->the_post();

                                            // Получение данных из групп полей ACF
                                            $title_service = get_field('title_service');
                                            $desc_service = get_field('desc_service');
                                            $price_service_1 = get_field('price_service_1');
                                            $price_service_2 = get_field('price_service_2');
                                            $price_service_3 = get_field('price_service_3');
                                            $duration_service_1 = get_field('duration_service_1');
                                            $duration_service_2 = get_field('duration_service_2');
                                            $duration_service_3 = get_field('duration_service_3');
                                            $postscript_service = get_field('postscript_service');
                                            ?>
                                            <div class="attendances_block" data-title='<?php echo $title_service; ?>'
                                                 data-desc="<?php echo $desc_service; ?>"
                                                 data-price-1="<?php echo $price_service_1; ?>"
                                                 data-price-2="<?php echo $price_service_2; ?>"
                                                 data-price-3="<?php echo $price_service_3; ?>"
                                                 data-duration-1="<?php echo $duration_service_1; ?>"
                                                 data-duration-2="<?php echo $duration_service_2; ?>"
                                                 data-duration-3="<?php echo $duration_service_3; ?>"
                                                 data-note='<?php echo $postscript_service; ?>'>
                                                <?php the_title(); ?>
                                            </div>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata(); // Сброс данных записей
                                    else:
                                        echo 'Послуг немає.';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div class="content__nav-btns">
                    <div class="nav-bns__pred">
                        <!-- Вывод обеих кнопок для промежуточных категорий -->
                    </div>
                    <div class="nav-bns__next">
                        <!-- Вывод обеих кнопок для промежуточных категорий -->
                    </div>
                </div>
            </div>
            <button class="main__btn">Групові заняття</button>
            <div class="main__mobile-content hidden">
                <div class="swiper swiper-mobile-services">
                    <div class="swiper-wrapper">
                        <?php
                        $parent_category_id = 6;

                        $args = array(
                            'child_of' => $parent_category_id,
                            'hide_empty' => 0,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );

                        $categories = get_categories($args);
                        $total_categories = count($categories);

                        foreach ($categories as $key => $category) {
                            ?>
                            <?php
                            // Запрос записей внутри текущей дочерней рубрики
                            $child_category_posts = new WP_Query(
                                array(
                                    'category__in' => array($category->term_id),
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'ASC'
                                )
                            );

                            if ($child_category_posts->have_posts()):
                                while ($child_category_posts->have_posts()):
                                    $child_category_posts->the_post();

                                    // Получение данных из групп полей ACF
                                    $title_service = get_field('title_service');
                                    $desc_service = get_field('desc_service');
                                    $price_service_1 = get_field('price_service_1');
                                    $price_service_2 = get_field('price_service_2');
                                    $price_service_3 = get_field('price_service_3');
                                    $duration_service_1 = get_field('duration_service_1');
                                    $duration_service_2 = get_field('duration_service_2');
                                    $duration_service_3 = get_field('duration_service_3');
                                    $postscript_service = get_field('postscript_service');
                                    $service_image = get_field('service_image')
                                    ?>
                                    <div class="service_block swiper-slide" data-title='<?php echo $title_service; ?>'
                                         data-image="<?php echo $service_image; ?>"
                                         data-desc="<?php echo $desc_service; ?>"
                                         data-price-1="<?php echo $price_service_1; ?>"
                                         data-price-2="<?php echo $price_service_2; ?>"
                                         data-price-3="<?php echo $price_service_3; ?>"
                                         data-duration-1="<?php echo $duration_service_1; ?>"
                                         data-duration-2="<?php echo $duration_service_2; ?>"
                                         data-duration-3="<?php echo $duration_service_3; ?>"
                                         data-note='<?php echo $postscript_service; ?>'>
                                        <div class="service__image"
                                             style="background-image: url(<?php echo $service_image; ?>)">
                                            <div class="service__info-header">
                                                <div class="service__info-title">
                                                    <?php the_title(); ?>
                                                </div>
                                                <div class="service__info-prices">
                                                    <div class="info__prices">
                                                        <?php if ($price_service_1 !== '') {
                                                            ?>
                                                            <div class="info-price prices_block"><?php echo $price_service_1; ?></div>
                                                            <?php
                                                        } ?>
                                                        <?php if ($duration_service_1 !== '') {
                                                            ?>
                                                            <div class="info-time prices_block"><?php echo $duration_service_1; ?></div>
                                                            <?php
                                                        } ?>
                                                    </div>
                                                    <div class="info__prices">
                                                        <?php if ($price_service_2 !== '') {
                                                            ?>
                                                            <div class="info-price prices_block"><?php echo $price_service_2; ?></div>
                                                            <?php
                                                        } ?>
                                                        <?php if ($duration_service_2 !== '') {
                                                            ?>
                                                            <div class="info-time prices_block"><?php echo $duration_service_2; ?></div>
                                                            <?php
                                                        } ?>
                                                    </div>
                                                    <div class="info__prices">
                                                        <?php if ($price_service_3 !== '') {
                                                            ?>
                                                            <div class="info-price prices_block"><?php echo $price_service_3; ?></div>
                                                            <?php
                                                        } ?>
                                                        <?php if ($duration_service_3 !== '') {
                                                            ?>
                                                            <div class="info-time prices_block"><?php echo $duration_service_3; ?></div>
                                                            <?php
                                                        } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service__info-click hidden">
                                                <?php echo $desc_service; ?>
                                            </div>
                                            <div class="service__image-filter"></div>
                                        </div>
                                        <span class="service__line"></span>
                                        <div class="service__info">

                                            <div class="service__buttons">
                                                <a target="_blank" href='<?php the_field('instagram_link', 2); ?>' class="service__btn red-button">
                                                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                                                         viewBox="0 0 238 238" fill="none">
                                                        <path
                                                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                                                stroke="#FF1919"/>
                                                    </svg>
                                                    <div class="red-button__eclipse">
                                                        <p class="red-button__text">
                                                            записатися
                                                        </p>
                                                        <div class="red-button__arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                                                 fill="none">
                                                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                                                      stroke-width="0.515667"/>
                                                                <mask id="path-2-inside-1_315_147" fill="white">
                                                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                                                </mask>
                                                                <path
                                                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a id="desc_service_btn" class="service__btn desc_service_btn red-button white">
                                                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                                                         viewBox="0 0 238 238" fill="none">
                                                        <path
                                                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                                                stroke="#FF1919"/>
                                                    </svg>
                                                    <div class="red-button__eclipse">
                                                        <p class="red-button__text">
                                                            опис
                                                        </p>
                                                        <div class="red-button__arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                                                 fill="none">
                                                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                                                      stroke-width="0.515667"/>
                                                                <mask id="path-2-inside-1_315_147" fill="white">
                                                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                                                </mask>
                                                                <path
                                                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata(); // Сброс данных записей
                            else:
                                echo 'Послуг немає.';
                            endif;
                            ?>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="shedule__table-mobile">
                    <?php
                    $post_id = 610;
                    $post = get_post($post_id);
                    setup_postdata($post);

                    // Вывод заголовка и содержания записи
                    ?>
                    <h4 class="sidebar__title">
                        <?php the_title(); ?>
                    </h4>
                    <?php
                    the_content();

                    wp_reset_postdata();

                    ?>
                </div>
            </div>
        </div>
        <div class="services__schedule">
            <div class="schedule__sidebar">
                <div class="sidebar__text">
                    <h4 class="sidebar__title">
                        Групові заняття
                    </h4>

                    <div class="sidebar__menu">
                        <div class="sidebar__list">
                            <?php
                            $args = array(
                                'category_name' => 'menu_schedule',
                                'posts_per_page' => -1,
                                // Показать все записи из этой категории
                                'orderby' => 'date',
                                'order' => 'ASC',
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    $toggle_value = get_field('subscription_schedule');
                                    $image_url = get_field('image_schedule');
                                    ?>

                                    <div class="sidebar__link<?php if ($toggle_value)
                                        echo ' sidebar__link--bold'; ?>"
                                         data-image="<?php echo esc_url($image_url); ?>">
                                        <?php the_title(); ?>
                                    </div>

                                <?php endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <img src="" class="sidebar__image">
                    </div>

                </div>

                <div class="schedule__info">
                    <div class="schedule__info-text">
                        <p class="info__one-time">
                            <?php the_field('price_one-time_schedule'); ?>
                        </p>
                        <p class="info__subscribe">
                            <?php the_field('info_menu_schedule'); ?>
                        </p>
                        <div class="services__price-time">
                            <div class="price-time__block">
                                <div class="price-time__price">
                                    <?php the_field('count_class_schdule_1'); ?>
                                </div>
                                <div class="price-time__time">
                                    <?php the_field('price_schdule_1'); ?>
                                </div>
                            </div>
                            <div class="price-time__block">
                                <div class="price-time__price">
                                    <?php the_field('count_class_schdule_2'); ?>
                                </div>
                                <div class="price-time__time">
                                    <?php the_field('price_schdule_2'); ?>
                                </div>
                            </div>
                            <div class="price-time__block">
                                <div class="price-time__price">
                                    <?php the_field('count_class_schdule_3'); ?>
                                </div>
                                <div class="price-time__time">
                                    <?php the_field('price_schdule_3'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href='<?php the_field('instagram_link'); ?>' class="sidebar-schedule__btn red-button">
                        <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                             viewBox="0 0 238 238" fill="none">
                            <path
                                    d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                    stroke="#FF1919"/>
                        </svg>
                        <div class="red-button__eclipse">
                            <p class="red-button__text">
                                записатися <br> на сеанс
                            </p>
                            <div class="red-button__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                     fill="none">
                                    <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                          stroke-width="0.515667"/>
                                    <mask id="path-2-inside-1_315_147" fill="white">
                                        <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                    </mask>
                                    <path
                                            d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                            fill="white" mask="url(#path-2-inside-1_315_147)"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="shedule__table">
                <?php
                $post_id = 610;
                $post = get_post($post_id);
                setup_postdata($post);

                // Вывод заголовка и содержания записи
                ?>
                <h4 class="sidebar__title">
                    <?php the_title(); ?>
                </h4>
                <?php
                the_content();

                wp_reset_postdata();

                ?>
                <button class="table__btn red-button">
                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                         viewBox="0 0 238 238" fill="none">
                        <path
                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                stroke="#FF1919"/>
                    </svg>
                    <div class="red-button__eclipse">
                        <p class="red-button__text">
                            назад
                        </p>
                        <div class="red-button__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                 fill="none">
                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                      stroke-width="0.515667"/>
                                <mask id="path-2-inside-1_315_147" fill="white">
                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                </mask>
                                <path
                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div id="reviews" class="reviews">
        <div id="scrollContainer" class="reviews__swiper">
            <?php
            $args = array(
                'category_name' => 'reviews_slider',
                // Замените на вашу категорию
                'posts_per_page' => -1,
                // Получить все записи

                'orderby' => 'date',
                'order' => 'ASC'
            );

            $reviews_query = new WP_Query($args);

            $left_column_reviews = '';
            $right_column_reviews = '';

            $count = 0;

            if ($reviews_query->have_posts()):
                while ($reviews_query->have_posts()):
                    $reviews_query->the_post();
                    $its_video = get_field('its_video'); // Получаем значение поля "its_video"

                    ob_start(); // Начинаем буферизацию вывода
                    ?>
                    <div class="reviews__block <?php echo $its_video ? 'video' : ''; ?>">
                        <div class="reviews__content">
                            <?php
                            if ($its_video):
                                $review_field = get_field('review'); // Получаем значение поля 'review'

                                // Используем DOMDocument для парсинга HTML-кода
                                $dom = new DOMDocument();
                                $dom->loadHTML($review_field);

                                // Находим первый тег <a> в HTML-коде
                                $anchor = $dom->getElementsByTagName('a')->item(0);

                                if ($anchor) {
                                    $src = $anchor->getAttribute('href'); // Используйте 'href', если ссылка находится в атрибуте 'href'
                                } else {
                                    // Обработка случая, если тег <a> не был найден
                                    $src = ''; // Можете присвоить значение по умолчанию или выводить сообщение об ошибке
                                }
                                ?>
                                <video class="content__video" autoplay muted loop>
                                    <source src="<?php echo $src; ?>" type="video/webm"/>
                                </video>
                                <svg class="video__soundoff" xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                     viewBox="0 0 120 120" fill="none">
                                    <path d="M90 70L100 60M100 60L110 50M100 60L90 50M100 60L110 70" stroke="white"
                                          stroke-width="7.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                            d="M10 69.285V50.715C10 48.0628 11.0536 45.5193 12.9289 43.6439C14.8043 41.7686 17.3478 40.715 20 40.715H34.5C35.4776 40.7148 36.4337 40.4279 37.25 39.89L67.25 20.11C68.0038 19.6136 68.8778 19.3305 69.7795 19.2907C70.6812 19.2509 71.5768 19.4559 72.3713 19.8839C73.1659 20.312 73.8298 20.9471 74.2926 21.722C74.7554 22.4968 74.9999 23.3825 75 24.285V95.715C74.9999 96.6175 74.7554 97.5032 74.2926 98.2781C73.8298 99.0529 73.1659 99.688 72.3713 100.116C71.5768 100.544 70.6812 100.749 69.7795 100.709C68.8778 100.67 68.0038 100.386 67.25 99.89L37.25 80.11C36.4337 79.5721 35.4776 79.2853 34.5 79.285H20C17.3478 79.285 14.8043 78.2314 12.9289 76.3561C11.0536 74.4807 10 71.9372 10 69.285Z"
                                            stroke="white" stroke-width="7.5"/>
                                </svg>
                                <svg class="video__soundon" xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                     viewBox="0 0 120 120" fill="none">
                                    <path
                                            d="M5 69.285V50.715C5 48.0628 6.05357 45.5193 7.92893 43.6439C9.8043 41.7686 12.3478 40.715 15 40.715H29.5C30.4776 40.7148 31.4337 40.4279 32.25 39.89L62.25 20.11C63.0038 19.6136 63.8778 19.3305 64.7795 19.2907C65.6812 19.2509 66.5768 19.4559 67.3713 19.8839C68.1659 20.312 68.8298 20.9471 69.2926 21.7219C69.7554 22.4968 69.9999 23.3825 70 24.285V95.715C69.9999 96.6175 69.7554 97.5032 69.2926 98.278C68.8298 99.0529 68.1659 99.688 67.3713 100.116C66.5768 100.544 65.6812 100.749 64.7795 100.709C63.8778 100.67 63.0038 100.386 62.25 99.89L32.25 80.11C31.4337 79.5721 30.4776 79.2852 29.5 79.285H15C12.3478 79.285 9.8043 78.2314 7.92893 76.3561C6.05357 74.4807 5 71.9372 5 69.285Z"
                                            stroke="white" stroke-width="7.5"/>
                                    <path
                                            d="M87.5 37.5C87.5 37.5 95 45 95 57.5C95 70 87.5 77.5 87.5 77.5M102.5 22.5C102.5 22.5 115 35 115 57.5C115 80 102.5 92.5 102.5 92.5"
                                            stroke="white" stroke-width="7.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                </svg>
                            <?php else: ?>
                                <p>
                                    <?php the_field('review'); ?>
                                    <br/>
                                    <i>
                                        <?php the_field('autor_review'); ?>
                                    </i>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    $review_output = ob_get_clean(); // Получаем содержимое буфера

                    if ($count % 2 == 0) {
                        $left_column_reviews .= $review_output; // Добавляем отзыв в левую колонку
                    } else {

                        $right_column_reviews .= $review_output; // Добавляем отзыв в правую колонку
                    }

                    $count++;
                endwhile;
                wp_reset_postdata(); // Сбрасываем данные после цикла
            endif;
            ?>

            <div class="swiper__column--left">
                <?php echo $left_column_reviews; ?>
                <span id='scrollArea'></span>
            </div>
            <div class="swiper__column--right">
                <?php echo $right_column_reviews; ?>
            </div>

        </div>
        <div class="swiper swiper-reviews">
            <div class="swiper__mobile-swiper swiper-wrapper">
                <?php
                $reviews_query = new WP_Query($args);

                if ($reviews_query->have_posts()):
                    while ($reviews_query->have_posts()):
                        $reviews_query->the_post();
                        $its_video = get_field('its_video'); // Получаем значение поля "its_video"
                        if (!$its_video):
                            ?>
                            <div class="reviews__block swiper-slide">
                                <div class="reviews__content">
                                    <p>
                                        <?php the_field('review'); ?>
                                        <br/>
                                        <i>
                                            <?php the_field('autor_review'); ?>
                                        </i>
                                    </p>
                                </div>
                            </div>
                        <?php
                        endif;
                    endwhile;
                    wp_reset_postdata(); // Сбрасываем данные после цикла
                endif;
                ?>
            </div>
        </div>
        <div class="reviews__text">
            <div class="rewiews__title">
                <h2>Reviews.</h2>
                <p>Відгуки</p>
            </div>
            <div class="reviews__desc">
                <div class="desc__large">Час <span>—</span></div>
                <div class="desc__medium">обмежений ресурс</div>
                <div class="desc__small">
                    Кожен день ви можете використовувати з користю для себе,
                    наближаючи поставлені цілі і покращуючи якість свого життя. Сотні
                    жінок вже вдосконалюють себе разом з Конкордією
                </div>
            </div>
        </div>

    </div>
    <div id="history" class="history">
        <div class="history__block block--orange">
            <h4 class="history__title">
                <?php the_field('title_history'); ?>
            </h4>
            <div class="history__content">
                <div class="history__num"><span>0</span><span>1</span></div>
                <div class="history__text">
                    <?php the_field('text_history_1'); ?>
                </div>
            </div>
        </div>
        <div class="history__block block--white">
            <div class="history__content">
                <div class="history__num"><span>0</span><span>2</span></div>
                <div class="history__text">
                    <?php the_field('text_history_2'); ?>
                </div>
            </div>
        </div>
        <div class="history__block block--black">
            <div class="history__content">
                <div class="history__num"><span>0</span><span>3</span></div>
                <div class="history__text">
                    <?php the_field('text_history_3'); ?>
                </div>
            </div>
        </div>
        <div class="history__block block--conclusion">
            <div class="history__conclusion">
                Будь здорова <b>і тілом і душею</b> разом з центром
                <span>«Concordia»</span>
            </div>
        </div>
    </div>
    <div class="about-yulia">
        <div class="about-yulia__image">
            <img src="<?php the_field('image_about'); ?>" alt=""/>
            <div class="image__desc">
                <h4>Юлія Мазуренко</h4>
                <p>Автор проєкту</p>
            </div>
        </div>
        <div class="about-yulia__history">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/history-sculp.png" alt=""/>
            <p>
                <?php the_field('text_about'); ?>
            </p>
            <p class="history__orange-text">
                Приходь до мене — і ти швидко побачиш шлях до цього стану.
            </p>
        </div>
    </div>
    <div class="where-we">
        <div class="where-we__text">
            <h3 class="where-we__title">
                <?php the_field('title_map'); ?>
            </h3>
            <p class="where-we__subtitle">
                <?php the_field('adress_map'); ?>
            </p>
            <a href="<?php the_field('link_map'); ?>" target="_blank" class="where-we__btn red-button">
                <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                     viewBox="0 0 238 238" fill="none">
                    <path
                            d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                            stroke="#FF1919"/>
                </svg>
                <div class="red-button__eclipse">
                    <p class="red-button__text">
                        переглянути <br/>
                        на карті
                    </p>
                    <div class="red-button__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25
                                25" fill="none">
                            <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white" stroke-width="0.515667"/>
                            <mask id="path-2-inside-1_315_147" fill="white">
                                <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                            </mask>
                            <path
                                    d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                    fill="white" mask="url(#path-2-inside-1_315_147)"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <img src="<?php the_field('image_map'); ?>" alt="" class="where-we__map"/>
    </div>
    <div class="consul-form">
        <div class="content__social">
            <a target="_blank" href="<?php the_field('instagram_link'); ?>" class="social__link">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path
                            d="M3.98017 9.41812C4.04097 8.08953 4.249 7.23266 4.53033 6.50531L4.53412 6.49527C4.8129 5.75513 5.24963 5.08463 5.81391 4.53045L5.82183 4.52268L5.8296 4.51476C6.38425 3.94976 7.05497 3.51346 7.79447 3.23541L7.80722 3.23053C8.5329 2.94832 9.3881 2.74106 10.7178 2.68027M3.98017 9.41812C3.91625 10.8377 3.89996 11.2777 3.89996 14.9582C3.89996 18.6397 3.91536 19.0786 3.98014 20.4985M3.98017 9.41812L3.98017 9.77619M4.53527 23.4218C4.81332 24.1613 5.24962 24.8321 5.81462 25.3867L5.82253 25.3945L5.83029 25.4024C6.38451 25.9666 7.05502 26.4034 7.79516 26.6822L7.80621 26.6864C8.53256 26.9681 9.38817 27.1754 10.7178 27.2362M4.53527 23.4218L4.53039 23.4091C4.24818 22.6834 4.04093 21.8282 3.98014 20.4985M4.53527 23.4218L4.5186 23.3341M3.98014 20.4985L4.00191 20.6132M3.98014 20.4985L3.98014 20.1395M4.5186 23.3341L4.00191 20.6132M4.5186 23.3341C4.29916 22.7543 4.07319 21.9454 4.00191 20.6132M4.5186 23.3341C4.5263 23.3544 4.53399 23.3744 4.54167 23.3942C4.81996 24.1445 5.26091 24.8238 5.83282 25.3834C6.39221 25.9552 7.07127 26.3961 7.82126 26.6743C8.42314 26.9088 9.27124 27.1538 10.7176 27.2201C12.1772 27.2865 12.6282 27.3001 16.2581 27.3001C19.888 27.3001 20.3393 27.2865 21.799 27.2201C23.2471 27.1537 24.0942 26.9073 24.694 26.6747C25.4444 26.3965 26.1238 25.9555 26.6834 25.3834C27.2551 24.824 27.696 24.145 27.9742 23.395C28.2087 22.7931 28.4537 21.9451 28.5199 20.4987C28.5864 19.0391 28.5999 18.5872 28.5999 14.9582C28.5999 11.3292 28.5864 10.877 28.5199 9.41735C28.4532 7.96163 28.2046 7.11328 27.9709 6.51299C27.6654 5.72428 27.2779 5.12778 26.6824 4.53225C26.0881 3.93908 25.4932 3.55143 24.7039 3.2456C24.1015 3.01007 23.2525 2.763 21.799 2.69638C21.6726 2.69063 21.5537 2.68527 21.4397 2.68029M4.00191 20.6132C3.9999 20.5756 3.99801 20.5375 3.99625 20.4991C3.99049 20.3726 3.98513 20.2536 3.98014 20.1395M10.7178 2.68027C12.1377 2.61549 12.5775 2.6001 16.2581 2.6001C19.9386 2.6001 20.3783 2.61637 21.7978 2.68029M10.7178 2.68027L11.0768 2.68027M21.7978 2.68029L21.4397 2.68029M21.7978 2.68029C23.1266 2.74106 23.9836 2.94906 24.711 3.23042L24.721 3.23425C25.4612 3.51304 26.1317 3.94977 26.6859 4.51404L26.6935 4.52188L26.7014 4.52958C27.2658 5.08381 27.7024 5.75449 27.981 6.49483L27.9858 6.50736C28.268 7.23304 28.4752 8.08824 28.536 9.41793M11.0768 2.68027L21.4397 2.68029M11.0768 2.68027C12.2791 2.6277 12.9436 2.61639 16.2581 2.61639C19.5728 2.61639 20.2372 2.6277 21.4397 2.68029M11.0768 2.68027C10.9627 2.68526 10.8437 2.69062 10.7172 2.69638C9.26904 2.76275 8.42195 3.00913 7.8222 3.24175C7.06897 3.52097 6.38726 3.96427 5.8265 4.53952C5.23653 5.13192 4.85036 5.72557 4.54551 6.5123C4.30997 7.11474 4.06285 7.96407 3.99623 9.41773C3.99049 9.54384 3.98515 9.66243 3.98017 9.77619M28.536 20.4985C28.4752 21.8281 28.268 22.6838 27.9863 23.4101L27.9821 23.4212C27.7033 24.1613 27.2665 24.8318 26.7023 25.386L26.6943 25.3938L26.6866 25.4017C26.1319 25.9667 25.4612 26.403 24.7217 26.681L24.7089 26.6859C23.9833 26.9681 23.1281 27.1754 21.7984 27.2362M3.98014 20.1395C3.92757 18.9372 3.91625 18.2727 3.91625 14.9582C3.91625 11.6428 3.92756 10.9792 3.98017 9.77619M3.98014 20.1395L3.98017 9.77619M14.0601 20.2646C14.757 20.5533 15.5038 20.7018 16.2581 20.7018C17.7814 20.7018 19.2423 20.0967 20.3194 19.0196C21.3966 17.9424 22.0017 16.4815 22.0017 14.9582C22.0017 13.4349 21.3966 11.974 20.3194 10.8969C19.2423 9.81975 17.7814 9.21462 16.2581 9.21462C15.5038 9.21462 14.757 9.36319 14.0601 9.65183C13.3633 9.94047 12.7301 10.3635 12.1968 10.8969C11.6634 11.4302 11.2403 12.0634 10.9517 12.7602C10.6631 13.4571 10.5145 14.204 10.5145 14.9582C10.5145 15.7125 10.6631 16.4594 10.9517 17.1562C11.2403 17.853 11.6634 18.4862 12.1968 19.0196C12.7301 19.5529 13.3633 19.976 14.0601 20.2646ZM12.184 10.8841C13.2645 9.80356 14.73 9.19652 16.2581 9.19652C17.7862 9.19652 19.2517 9.80356 20.3322 10.8841C21.4128 11.9646 22.0198 13.4301 22.0198 14.9582C22.0198 16.4863 21.4128 17.9518 20.3322 19.0324C19.2517 20.1129 17.7862 20.7199 16.2581 20.7199C14.73 20.7199 13.2645 20.1129 12.184 19.0324C11.1034 17.9518 10.4964 16.4863 10.4964 14.9582C10.4964 13.4301 11.1034 11.9646 12.184 10.8841ZM25.2642 7.85507C25.2642 8.29244 25.0904 8.7119 24.7812 9.02117C24.4719 9.33043 24.0524 9.50418 23.6151 9.50418C23.1777 9.50418 22.7582 9.33043 22.449 9.02117C22.1397 8.7119 21.9659 8.29244 21.9659 7.85507C21.9659 7.4177 22.1397 6.99824 22.449 6.68898C22.7582 6.37971 23.1777 6.20596 23.6151 6.20596C24.0524 6.20596 24.4719 6.37971 24.7812 6.68898C25.0904 6.99824 25.2642 7.4177 25.2642 7.85507Z"
                            stroke="white" stroke-linejoin="round"/>
                </svg>
            </a>
            <a target="_blank" href="<?php the_field('facebook_link'); ?>" class="social__link">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path
                            d="M28.5999 15.5998C28.5999 8.42015 22.7796 2.59987 15.6 2.59987C8.42026 2.59987 2.59998 8.42015 2.59998 15.5998C2.59998 22.0885 7.35388 27.4666 13.5687 28.4419V19.3577H10.2679V15.5998H13.5687V12.7358C13.5687 9.47767 15.5095 7.67798 18.479 7.67798C19.9013 7.67798 21.389 7.93189 21.389 7.93189V11.1311H19.7497C18.1348 11.1311 17.6312 12.1332 17.6312 13.1613V15.5998H21.2367L20.6603 19.3577H17.6312V28.4419C23.846 27.4666 28.5999 22.0885 28.5999 15.5998Z"
                            stroke="white" stroke-linejoin="round"/>
                </svg>
            </a>
            <a target="_blank" href="<?php the_field('telegram_link'); ?>" class="social__link">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M28.5961 15.6001C28.5961 22.7798 22.7759 28.6001 15.5962 28.6001C8.41648 28.6001 2.59619 22.7798 2.59619 15.6001C2.59619 8.42039 8.41648 2.6001 15.5962 2.6001C22.7759 2.6001 28.5961 8.42039 28.5961 15.6001ZM16.062 12.1973C14.7976 12.7232 12.2705 13.8117 8.48072 15.4629C7.86532 15.7076 7.54295 15.947 7.5136 16.1811C7.464 16.5767 7.95944 16.7325 8.6341 16.9446C8.72587 16.9735 8.82095 17.0034 8.91843 17.0351C9.58219 17.2508 10.4751 17.5033 10.9392 17.5133C11.3603 17.5224 11.8302 17.3488 12.349 16.9925C15.8899 14.6023 17.7177 13.3942 17.8325 13.3682C17.9134 13.3498 18.0256 13.3267 18.1016 13.3943C18.1777 13.4618 18.1702 13.5898 18.1621 13.6241C18.1131 13.8333 16.1683 15.6414 15.1619 16.577C14.8481 16.8687 14.6256 17.0756 14.5801 17.1229C14.4782 17.2287 14.3743 17.3288 14.2745 17.4251C13.6578 18.0195 13.1954 18.4653 14.3001 19.1933C14.8309 19.5431 15.2557 19.8324 15.6795 20.121C16.1423 20.4362 16.604 20.7505 17.2012 21.1421C17.3534 21.2418 17.4987 21.3454 17.6403 21.4463C18.1789 21.8303 18.6628 22.1753 19.2606 22.1203C19.608 22.0883 19.9668 21.7617 20.149 20.7875C20.5797 18.4852 21.4262 13.4967 21.6219 11.4411C21.639 11.261 21.6175 11.0306 21.6001 10.9294C21.5828 10.8282 21.5466 10.684 21.4151 10.5773C21.2594 10.4509 21.0189 10.4243 20.9114 10.4261C20.4224 10.4348 19.6722 10.6956 16.062 12.1973Z"
                          stroke="white" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <form method="POST" id="contact-form" class="consul-form__form">
            <h2 class="form__title">Консультація</h2>
            <div class="form__main">
                <div class="main__text-form">
                    <h5 class="text-form__title">
                        Зустріч особисто <br/>
                        з Юлією Мазуренко
                    </h5>
                    <p class="text-form__desc">
                        Приходь і отримай детальний розбір запиту та знаходження
                        ефективних практик для вирішення твоєї проблеми
                    </p>
                    <p class="text-form__price">
                        <?php the_field('price_form'); ?>
                    </p>
                </div>
                <div class="main__inputs">
                    <input placeholder="Ваше ім' я" name="Ім'я" type="text" class="main__input"/>
                    <input placeholder="Ваше номер телефону" name="Телефон" type="tel" class="main__input"/>
                    <textarea placeholder="Повідомлення для Юлії" name="Повідомлення" id=""
                              class="main__input main__textarea"></textarea>
                </div>
                <div class="main__postscript">
                    Ця форма конфединційна. Всі ваші дані будуть захищені і надіслані
                    в наш телеграм для обробки менеджерами
                </div>
                <div class="main__text-form--mobile">
                    <p class="text-form__desc">
                        Приходь і отримай детальний розбір запиту та знаходження
                        ефективних практик для вирішення твоєї проблеми
                    </p>
                    <p class="text-form__price">Вартість - 1500 грн / 2 години</p>
                </div>
            </div>
            <button type="submit" class="form__btn red-button">
                <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                     viewBox="0 0 238 238" fill="none">
                    <path
                            d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                            stroke="#FF1919"/>
                </svg>
                <div class="red-button__eclipse">
                    <p class="red-button__text">
                        записатися на <br/>
                        зустріч
                    </p>
                    <div class="red-button__arrow">

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                             fill="none">
                            <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white" stroke-width="0.515667"/>
                            <mask id="path-2-inside-1_315_147" fill="white">
                                <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                            </mask>
                            <path
                                    d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                    fill="white" mask="url(#path-2-inside-1_315_147)"/>
                        </svg>
                    </div>
                </div>
            </button>
        </form>
    </div>
    <footer class="footer">
        <nav class="footer__nav">
            <a href="#history" class="nav__link">
                <div class="link__num">01</div>
                <div class="link__text">Про Центр “Concordia”</div>
            </a>
            <a href="#services" class="nav__link">
                <div class="link__num">02</div>
                <div class="link__text">Наші послуги</div>
            </a>
            <a href="#reviews" class="nav__link">
                <div class="link__num">03</div>
                <div class="link__text">Ваші відгуки</div>
            </a>
        </nav>
        <div class="footer__main">
            <div class="footer__contacts">
                <h3 class="footer__title-contacts">
                    <?php the_field('left_title_footer'); ?>
                </h3>
                <div class="contacts__box">
                    <div class="box__title">
                        <p>Контакти</p>
                        <div class="footer__social">
                            <a target="_blank" href="<?php the_field('instagram_link'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                     fill="none">
                                    <path
                                            d="M4.10687 9.7179C4.16961 8.34702 4.38426 7.46287 4.67454 6.71238L4.67845 6.70201C4.96611 5.93832 5.41674 5.24648 5.99898 4.67466L6.00715 4.66663L6.01517 4.65846C6.58747 4.07548 7.27954 3.62529 8.04257 3.33839L8.05574 3.33336C8.80452 3.04217 9.68693 2.82831 11.059 2.76559M4.10687 9.7179C4.04092 11.1826 4.02411 11.6367 4.02411 15.4343C4.02411 19.233 4.03999 19.6859 4.10684 21.151M4.10687 9.7179L4.10687 10.0874M4.67964 24.1674C4.96654 24.9304 5.41673 25.6225 5.99971 26.1948L6.00787 26.2028L6.01588 26.2109C6.58773 26.7932 7.27959 27.2438 8.04329 27.5315L8.05469 27.5358C8.80416 27.8265 9.687 28.0404 11.059 28.1031M4.67964 24.1674L4.67461 24.1542C4.38341 23.4054 4.16956 22.523 4.10684 21.151M4.67964 24.1674L4.66244 24.0768M4.10684 21.151L4.1293 21.2693M4.10684 21.151L4.10684 20.7806M4.66244 24.0768L4.1293 21.2693M4.66244 24.0768C4.43601 23.4786 4.20285 22.644 4.1293 21.2693M4.66244 24.0768C4.67038 24.0978 4.67832 24.1185 4.68624 24.1389C4.97339 24.913 5.42838 25.6139 6.01849 26.1913C6.59568 26.7813 7.29636 27.2363 8.07022 27.5234C8.69126 27.7653 9.56635 28.0181 11.0587 28.0865C12.5648 28.155 13.0301 28.169 16.7756 28.169C20.521 28.169 20.9867 28.155 22.4928 28.0865C23.9871 28.018 24.8611 27.7638 25.48 27.5237C26.2543 27.2367 26.9554 26.7817 27.5327 26.1913C28.1227 25.6141 28.5775 24.9135 28.8646 24.1397C29.1066 23.5186 29.3593 22.6436 29.4277 21.1512C29.4963 19.6451 29.5103 19.1789 29.5103 15.4343C29.5103 11.6898 29.4963 11.2232 29.4277 9.7171C29.3589 8.21506 29.1024 7.3397 28.8612 6.7203C28.546 5.90649 28.1462 5.291 27.5317 4.67651C26.9185 4.06447 26.3046 3.66447 25.4902 3.34891C24.8686 3.10589 23.9927 2.85094 22.4928 2.78221C22.3624 2.77627 22.2398 2.77075 22.1221 2.7656M4.1293 21.2693C4.12722 21.2305 4.12528 21.1912 4.12346 21.1516C4.11752 21.021 4.11198 20.8983 4.10684 20.7806M11.059 2.76559C12.524 2.69874 12.9779 2.68286 16.7756 2.68286C20.5732 2.68286 21.0269 2.69965 22.4916 2.7656M11.059 2.76559L11.4294 2.76559M22.4916 2.7656L22.1221 2.7656M22.4916 2.7656C23.8627 2.82831 24.747 3.04293 25.4976 3.33325L25.5079 3.3372C26.2716 3.62486 26.9635 4.07549 27.5353 4.65773L27.5432 4.66581L27.5513 4.67376C28.1336 5.24563 28.5842 5.93765 28.8716 6.70157L28.8766 6.71449C29.1678 7.46327 29.3816 8.34569 29.4443 9.71771M11.4294 2.76559L22.1221 2.7656M11.4294 2.76559C12.67 2.71134 13.3556 2.69967 16.7756 2.69967C20.1958 2.69967 20.8813 2.71135 22.1221 2.7656M11.4294 2.76559C11.3116 2.77074 11.1889 2.77627 11.0584 2.78221C9.56409 2.85069 8.69003 3.10491 8.07119 3.34494C7.29398 3.63305 6.59058 4.09045 6.01197 4.68401C5.40321 5.29527 5.00476 5.90782 4.69021 6.71959C4.44717 7.3412 4.19218 8.21757 4.12344 9.7175C4.11752 9.84762 4.112 9.96999 4.10687 10.0874M29.4443 21.151C29.3816 22.5229 29.1678 23.4058 28.8771 24.1553L28.8727 24.1667C28.5851 24.9304 28.1344 25.6222 27.5522 26.194L27.544 26.202L27.536 26.2102C26.9637 26.7932 26.2716 27.2434 25.5086 27.5303L25.4954 27.5353C24.7467 27.8265 23.8642 28.0404 22.4922 28.1031M4.10684 20.7806C4.05259 19.54 4.04091 18.8543 4.04091 15.4343C4.04091 12.0134 4.05258 11.3286 4.10687 10.0874M4.10684 20.7806L4.10687 10.0874M14.5077 20.9096C15.2267 21.2075 15.9973 21.3608 16.7756 21.3608C18.3474 21.3608 19.8548 20.7364 20.9662 19.6249C22.0776 18.5135 22.702 17.0061 22.702 15.4343C22.702 13.8626 22.0776 12.3552 20.9662 11.2437C19.8548 10.1323 18.3474 9.50792 16.7756 9.50792C15.9973 9.50792 15.2267 9.66122 14.5077 9.95905C13.7886 10.2569 13.1353 10.6934 12.585 11.2437C12.0347 11.794 11.5981 12.4474 11.3003 13.1664C11.0025 13.8854 10.8492 14.6561 10.8492 15.4343C10.8492 16.2126 11.0025 16.9833 11.3003 17.7023C11.5981 18.4213 12.0347 19.0746 12.585 19.6249C13.1353 20.1753 13.7886 20.6118 14.5077 20.9096ZM12.5718 11.2305C13.6867 10.1156 15.1989 9.48925 16.7756 9.48925C18.3523 9.48925 19.8645 10.1156 20.9794 11.2305C22.0943 12.3454 22.7207 13.8576 22.7207 15.4343C22.7207 17.0111 22.0943 18.5232 20.9794 19.6382C19.8645 20.7531 18.3523 21.3794 16.7756 21.3794C15.1989 21.3794 13.6867 20.7531 12.5718 19.6382C11.4569 18.5232 10.8305 17.0111 10.8305 15.4343C10.8305 13.8576 11.4569 12.3454 12.5718 11.2305ZM26.0683 8.1051C26.0683 8.55639 25.8891 8.9892 25.5699 9.30831C25.2508 9.62742 24.818 9.8067 24.3667 9.8067C23.9154 9.8067 23.4826 9.62742 23.1635 9.30831C22.8444 8.9892 22.6651 8.55639 22.6651 8.1051C22.6651 7.65381 22.8444 7.221 23.1635 6.90189C23.4826 6.58278 23.9154 6.4035 24.3667 6.4035C24.818 6.4035 25.2508 6.58278 25.5699 6.90189C25.8891 7.221 26.0683 7.65381 26.0683 8.1051Z"
                                            stroke="#BB2C09" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a target="_blank" href="<?php the_field('facebook_link'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                     fill="none">
                                    <path
                                            d="M29.7033 16.0964C29.7033 8.68813 23.6978 2.68259 16.2896 2.68259C8.88134 2.68259 2.87579 8.68813 2.87579 16.0964C2.87579 22.7916 7.78101 28.3409 14.1937 29.3472V19.9738H10.7878V16.0964H14.1937V13.1411C14.1937 9.77931 16.1962 7.92234 19.2602 7.92234C20.7278 7.92234 22.2629 8.18433 22.2629 8.18433V11.4854H20.5714C18.9051 11.4854 18.3855 12.5194 18.3855 13.5801V16.0964H22.1057L21.511 19.9738H18.3855V29.3472C24.7981 28.3409 29.7033 22.7916 29.7033 16.0964Z"
                                            stroke="#BB2C09" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a target="_blank" href="<?php the_field('telegram_link'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                     fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M29.8923 16.0966C29.8923 23.5048 23.8868 29.5104 16.4786 29.5104C9.07035 29.5104 3.0648 23.5048 3.0648 16.0966C3.0648 8.68841 9.07035 2.68286 16.4786 2.68286C23.8868 2.68286 29.8923 8.68841 29.8923 16.0966ZM16.9592 12.5855C15.6546 13.1282 13.047 14.2513 9.13663 15.955C8.50165 16.2075 8.16901 16.4546 8.13873 16.6961C8.08756 17.1043 8.59876 17.2651 9.2949 17.484C9.38959 17.5138 9.4877 17.5446 9.58828 17.5773C10.2732 17.7999 11.1945 18.0604 11.6734 18.0707C12.1078 18.0801 12.5927 17.901 13.1281 17.5334C16.7817 15.0671 18.6677 13.8206 18.7861 13.7937C18.8696 13.7747 18.9854 13.7509 19.0638 13.8206C19.1422 13.8903 19.1345 14.0223 19.1262 14.0577C19.0756 14.2736 17.0689 16.1392 16.0304 17.1047C15.7067 17.4056 15.4771 17.6191 15.4301 17.6679C15.325 17.7771 15.2178 17.8804 15.1148 17.9797C14.4785 18.5931 14.0014 19.0531 15.1412 19.8042C15.689 20.1652 16.1273 20.4636 16.5646 20.7614C17.0421 21.0867 17.5184 21.411 18.1347 21.815C18.2917 21.9179 18.4417 22.0248 18.5877 22.129C19.1435 22.5252 19.6428 22.8811 20.2597 22.8244C20.6181 22.7914 20.9883 22.4543 21.1764 21.4491C21.6207 19.0735 22.4942 13.9263 22.6961 11.8053C22.7138 11.6195 22.6915 11.3817 22.6736 11.2773C22.6558 11.1729 22.6184 11.0241 22.4827 10.914C22.322 10.7836 22.0739 10.7561 21.963 10.7579C21.4584 10.7669 20.6844 11.0361 16.9592 12.5855Z"
                                          stroke="#BB2C09" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <span class="box__line"></span>
                    <div class="contacts__data">
                        <div class="data__block">
                            <p class="data__title">Центр “Конкордія”</p>
                            <div class="data__box">
                                <p class="box__name">instagram</p>
                                <a target="_blank" class="box__link" href="<?php the_field('instagram_link'); ?>">@concordia_dim</a>
                            </div>
                        </div>
                        <div class="data__block">
                            <p class="data__title">Власниця Юлія</p>
                            <div class="data__box">
                                <p class="box__name">phone</p>
                                <a class="box__link" href="tel:<?php the_field('number_link'); ?>">
                                    <?php the_field('number_link'); ?>
                                </a>
                            </div>
                            <div class="data__box">
                                <p class="box__name">instagram</p>
                                <a target="_blank" class="box__link"
                                   href="<?php the_field('owner_instagram_link'); ?>">@mazurenko_yulia_</a>
                            </div>
                        </div>
                    </div>
                    <span class="box__line"></span>
                </div>
            </div>
            <div class="footer__invite">
                <h3 class="footer__title-invite">
                    <?php the_field('right_title_footer'); ?>
                </h3>
                <img class="invite__img" src="<?php the_field('image_footer'); ?>" alt=""/>
                <a target="_blank" href='<?php the_field('instagram_link'); ?>' class="invite__btn red-button">
                    <svg class="red-button__stroke" xmlns="http://www.w3.org/2000/svg" width="238" height="238"
                         viewBox="0 0 238 238" fill="none">
                        <path
                                d="M237.5 119.163C237.5 184.518 184.446 237.5 119 237.5C53.5536 237.5 0.5 184.518 0.5 119.163C0.5 102.945 8.27007 90.8504 19.8945 80.9574C31.5361 71.0498 47.0026 63.3851 62.3208 56.037C63.2899 55.5721 64.2585 55.1084 65.2255 54.6456C79.5118 47.807 93.4517 41.1343 103.647 33.0672C114.417 24.5447 121.095 14.3951 119.558 0.780922C148.87 -1.6225 178.267 11.5731 200.393 33.5253C222.646 55.6038 237.5 86.4981 237.5 119.163Z"
                                stroke="#FF1919"/>
                    </svg>
                    <div class="red-button__eclipse">
                        <p class="red-button__text">
                            приєднатися <br/>
                            до нас
                        </p>
                        <div class="red-button__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                 fill="none">
                                <path d="M0.738647 0.986816L23.9411 24.1574" stroke="white"
                                      stroke-width="0.515667"/>
                                <mask id="path-2-inside-1_315_147" fill="white">
                                    <path d="M5.15723 5.39941H24.3084V24.5243H5.15723V5.39941Z"/>
                                </mask>
                                <path
                                        d="M24.3084 24.5243V25.5243H25.3084V24.5243H24.3084ZM23.3084 5.39941V24.5243H25.3084V5.39941H23.3084ZM24.3084 23.5243H5.15723V25.5243H24.3084V23.5243Z"
                                        fill="white" mask="url(#path-2-inside-1_315_147)"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer__copyright">
            <p>Design by: <a target="_blank" href="https://www.instagram.com/valeria.fess/">Valeriia Fesenko</a></p>
            <p>Development by: <a target="_blank" href="https://t.me/merlinovvv">Andriy Merlinov</a></p>
        </div>
        <div class="footer__ellipse"></div>
    </footer>
</div>
<script>
    window.botToken = <?php echo json_encode(get_field('bot_token')); ?>;
    window.chatId = <?php echo json_encode(get_field('telegram_chat_id')); ?>;
</script>
<?php
wp_footer();
?>
</body>

</html>