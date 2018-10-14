<?php
/**
 * @var $this yii\web\View
 * @var $acats array
 * @var $afrs array
 */
$this->title = 'Каталог франшиз и франчайзинг предложений БИБОСС';
?>
<div class="site-index">
    <div id="wrap" class="js-wrap">
    <div id="main">
        <div class="b b_fr-main-page">
            <div class="b__body">
                <div class="b__row">
                    <div class="b__block b__block_fr-main-header">
                        <div class="header header_main-fr">
                            <div class="header__body">
                                <div class="container">
                                    <div class="header__row header__row_1">
                                        <div class="header_main-fr__link-what-is">
                                            <a href="https://www.beboss.ru/franchise/wiki" class="glob-link">Что такое франчайзинг?</a>
                                        </div>
                                        <h1 class="page-title">Каталог франшиз. 347 предложений по франчайзингу</h1>
                                    </div>
                                    <div class="header__row header__row_2">
                                        <div class="header__col header__col_1">
                                            <ul class="list list_fr-category">
                                                <li class="list__item list__item_category">
                                                    <a href="#" class="list-item glob-link js-btn-show-category">
                                                        <div class="list-item__icon list-item__icon_w20">
                                                            <i class="icon-20_grey_settings"></i>
                                                        </div>
                                                        <div class="list-item__txt list-item__txt_right">Категории франшиз</div>
                                                        <div class="list-item__icon list-item__icon_arrow js-icon-arrow">
                                                            <div></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_all"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Все франшизы</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/auto" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_auto"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Авто</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/jewelry" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_jewelry"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Бижутерия и аксессуары</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/hotels" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_hotels"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Гостиницы</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/children" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_children"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Детские франшизы</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/home-biz" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_home-biz"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Домашний бизнес</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/it" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_it"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">ИТ и интернет</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/restaurants" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_restaurants"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Кафе и рестораны</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/low-cost" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_low-cost"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Недорогие франшизы</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/shoes" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_shoes"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Обувь</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/study" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_study"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Обучение и образование</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/clothes" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_clothes"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Одежда</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/entertainment" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_entertainment"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Отдых и развлечения</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/food" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_food"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Питание</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/gifts" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_gifts"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Подарки</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/production" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_production"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Производство</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/retail" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_retail"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Розничная торговля</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/beauty" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_beauty"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Спорт, здоровье и красота</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/construction" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_construction"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Строительство</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/household" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_household"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Товары для дома</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/health" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_health"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Товары для здоровья</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/b2b-services" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_b2b-services"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Услуги для бизнеса (b2b)</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/services" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_services"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Услуги для населения</div>
                                                    </a>
                                                </li>
                                                <li class="list__item js-fr-category list__item_mob-hide">
                                                    <a href="/franchise/search/finances" class="list-item glob-link">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_finances"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Финансовые услуги</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header__col header__col_2">
                                            <div class="list list_fr-filter">
                                                <a href="/franchise/search/new" class="list__item glob-link">
                                                    <div class="list-item">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_new_fr"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Новые франшизы</div>
                                                        <div class="list-item__icon list-item__icon_arrow">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/franchise/sales"  class="list__item glob-link">
                                                    <div class="list-item">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_sale_fr"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Франшизы со скидкой</div>
                                                        <div class="list-item__icon list-item__icon_arrow">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/franchise/reviews"  class="list__item glob-link">
                                                    <div class="list-item">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_grey_feedback"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Франшизы с отзывами</div>
                                                        <div class="list-item__icon list-item__icon_arrow">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="https://www.beboss.ru/rating" class="list__item glob-link">
                                                    <div class="list-item">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-20_black_star opacity02"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Рейтинг ТОП-100 франшиз</div>
                                                        <div class="list-item__icon list-item__icon_arrow">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/franchise/add" class="list__item glob-link list__item_add-fr">
                                                    <div class="list-item">
                                                        <div class="list-item__icon list-item__icon_w20"><i class="icon-17_grey_plus"></i></div>
                                                        <div class="list-item__txt list-item__txt_right">Добавить франшизу</div>
                                                        <div class="list-item__icon list-item__icon_arrow">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="b__block b__block_fr-main-showcase">
                            <div class="b__title">
                                <h2>Витрина франшиз</h2>

                            </div>
                            <div class="b__content b_bor-top-g">
                                <div class="share share_six share_border-no">
                                    <div class="share__body">
                                        <?php for ($i = 0; $i<= count($afrs['frs']['fr']); $i++) : ?>
                                        <div class="share__item">
                                            <div class="article article_showcase">
                                                <a href="#" class="logo">
                                                    <img alt="<?=$afrs['frs']['fr'][$i]['name']?>" src="https://www.beboss.pro/listings/fr/<?=$afrs['frs']['fr'][$i]['id']?>/<?=$afrs['frs']['fr'][$i]['logo']?>">
                                                    <div class="desc">
                                                        <p><?=$afrs['frs']['fr'][$i]['cat_name']?></p>

                                                        <p><?=\number_format($afrs['frs']['fr'][$i]['invest'],0,'.',' ') ?> руб.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="share__item share__item_border"></div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Футер-->
    <div class="beboss-footer">
        <div class="beboss-footer__main">
            <div class="container">
                <div class="beboss-footer__main-top">
                    <a href="https://www.beboss.ru" class="beboss-footer__logo-container">
                        <div class="beboss-footer__logo-icon"><i class="icon-logo-3"></i></div>
                        <div class="beboss-footer__logo-text">БИБОСС</div>
                    </a>
                </div>
                <div class="beboss-footer__main-bottom">
                    <div class="beboss-footer__col">
                        <div class="beboss-footer__subtitle">Разделы</div>
                        <ul class="beboss-footer__menu">
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/qa" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_qa"></i></div>
                                    <div class="bf-item__text">Сообщество</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/kn" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_kn"></i></div>
                                    <div class="bf-item__text">Коммерческая недвижимость</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/franchise" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_fr"></i></div>
                                    <div class="bf-item__text">Франшизы</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/business" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_gb"></i></div>
                                    <div class="bf-item__text">Готовый бизнес</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/dealer" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_opt"></i></div>
                                    <div class="bf-item__text">Товары для бизнеса</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/investments" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_invest"></i></div>
                                    <div class="bf-item__text">Инвестпроекты</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/bizideas" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_idea"></i></div>
                                    <div class="bf-item__text">Бизнес-идеи</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/bplans" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_bplan"></i></div>
                                    <div class="bf-item__text">Бизнес-планы</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/bigboard" class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_req"></i></div>
                                    <div class="bf-item__text">Заявки</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="beboss-footer__col">
                        <div class="beboss-footer__subtitle">Проекты</div>
                        <ul class="beboss-footer__menu">
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/journal/franchise" class="bf-item">
                                    <div class="bf-item__text">Бизнес-журнал</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/journal/events" class="bf-item">
                                    <div class="bf-item__text">Календарь мероприятий</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/rating" class="bf-item">
                                    <div class="bf-item__text">Рейтинг франшиз</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/rating-tc" class="bf-item">
                                    <div class="bf-item__text">Рейтинг торговых центров</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/rating/premia" class="bf-item">
                                    <div class="bf-item__text">Франчайзинговая премия</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/start" class="bf-item">
                                    <div class="bf-item__text">Как начать бизнес</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="beboss-footer__col">
                        <div class="beboss-footer__subtitle">Бибосс</div>
                        <ul class="beboss-footer__menu">
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/about" class="bf-item">
                                    <div class="bf-item__text">О портале</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/blogs" class="bf-item">
                                    <div class="bf-item__text">Статьи пользователей</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/feedback" class="bf-item">
                                    <div class="bf-item__text">Отзывы о нас</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/services" class="bf-item">
                                    <div class="bf-item__text">Рекламные услуги</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/job" class="bf-item">
                                    <div class="bf-item__text">Работа у нас</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/books" class="bf-item">
                                    <div class="bf-item__text">Книги</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.beboss.ru/adresses" class="bf-item">
                                    <div class="bf-item__text">Контактные данные</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="beboss-footer__soc-container">
                        <div class="beboss-footer__subtitle">Соцсети</div>
                        <ul class="beboss-footer__menu beboss-footer__menu_soc">
                            <li class="beboss-footer__item">
                                <a href="https://www.facebook.com/BeBoss.ru" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_fb"></i></div>
                                    <div class="bf-item__text">Facebook</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="http://vk.com/beboss" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_vk"></i></div>
                                    <div class="bf-item__text">Вконтакте</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://t.me/beboss_ru" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_tg"></i></div>
                                    <div class="bf-item__text">Телеграм</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.instagram.com/bebossru/" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_inst"></i></div>
                                    <div class="bf-item__text">Instagram</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://www.youtube.com/user/beboss2009" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_yt"></i></div>
                                    <div class="bf-item__text">Youtube</div>
                                </a>
                            </li>
                            <li class="beboss-footer__item">
                                <a href="https://ok.ru/beboss" class="bf-item" rel="nofollow" target="_blank">
                                    <div class="bf-item__icon"><i class="icon-24_white_ok"></i></div>
                                    <div class="bf-item__text">Одноклассники</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="beboss-footer__btn-container">
                        <div class="beboss-footer__btn">
                            <a href="https://t.me/BEBOSSchat" class="button white full">
                                <div class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_tg"></i></div>
                                    <div class="bf-item__text">Чат предпринимателей</div>
                                </div>
                            </a>
                        </div>
                        <div class="beboss-footer__btn">
                            <a href="https://www.beboss.ru/mobile" class="button white full">
                                <div class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_iphone"></i></div>
                                    <div class="bf-item__text">Мобильные приложения</div>
                                </div>
                            </a>
                        </div>
                        <div class="beboss-footer__btn hide-md-down">
                            <a href="#" class="button white full js-link-mfp">
                                <div class="bf-item">
                                    <div class="bf-item__icon"><i class="icon-24_white_help_center"></i></div>
                                    <div class="bf-item__text">Служба поддержки</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="beboss-footer__bottom">
            <div class="container">
                <div class="beboss-footer__bottom-container">
                    <div class="beboss-footer__bottom-subtitle">
                        <div class="beboss-footer__subtitle">Другие страны</div>
                    </div>
                    <div class="beboss-footer__country-container">
                        <div class="beboss-footer__country">
                            <a href="http://www.beboss.ua" class="bf-item">
                                <div class="bf-item__icon"><img src="/img/footer/Ukraina.jpg"></div>
                                <div class="bf-item__text">Украина</div>
                            </a>
                        </div>
                        <div class="beboss-footer__country">
                            <a href="http://www.beboss.kz/" class="bf-item">
                                <div class="bf-item__icon"><img src="/img/footer/Kazakhstan.jpg"></div>
                                <div class="bf-item__text">Казахстан</div>
                            </a>
                        </div>
                        <div class="beboss-footer__country">
                            <a href="http://www.beboss.by" class="bf-item">
                                <div class="bf-item__icon"><img src="/img/footer/Belarus.jpg"></div>
                                <div class="bf-item__text">Белоруссия</div>
                            </a>
                        </div>
                    </div>
                    <div class="beboss-footer__copyright">
                        <div class="bf-item">
                            <div class="bf-item__text">
                                © БИБОСС 2006-2018                        </div>
                        </div>
                        <div class="beboss-footer__li">
                            <a href="//www.liveinternet.ru/stat/BeBossru/index.html?id=0;id=5;period=month;total=yes" class="footer-office__link" target="_blank" rel="nofollow">
                                <img src="/img/footer/Counter.jpg" alt="flag" title="LiveInternet: показано число просмотров и посетителей за 24 часа">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--конец футера-->
</div>
</div>
