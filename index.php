<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Здоровые Продукты");
?><section class="top-section top-section_main">
   <? require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/pages/main/slider.php"); ?>
<div class="main-slider mobile-mob">
    <? require_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/pages/main/slider_mobile.php"); ?>
</div>
    </section>
    <section class="main-catalog container" data-aos="fade-up" data-aos-duration="1500">
        <div class="main-catalog__top" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="main-catalog__title animation-title" data-splitting data-effect1><span>каталог</span><span>продукции</span></h2>
            <div class="title-rombs">
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
            </div>
        </div>
        <div class="main-catalog__list" data-aos="fade-up" data-aos-duration="1500"><a class="main-catalog__item btn-hover_parent" href="#">
                <div class="main-catalog__item-bg desktop">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg1.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg1.png">
                    </picture>
                </div>
                <div class="main-catalog__item-bg mobile">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg1-mobile.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg1-mobile.png">
                    </picture>
                </div>
                <div class="main-catalog__item-row">
                    <div class="main-catalog__item-title white">мороженое</div>
                </div>
                <div class="main-catalog__item-svg">
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </a><a class="main-catalog__item btn-hover_parent" href="#">
                <div class="main-catalog__item-bg desktop">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg2.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg2.png">
                    </picture>
                </div>
                <div class="main-catalog__item-bg mobile">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg2-mobile.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg2-mobile.png">
                    </picture>
                </div>
                <div class="main-catalog__item-row">
                    <div class="main-catalog__item-title white">замороженные полуфабрикаты</div>
                </div>
                <div class="main-catalog__item-svg">
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </a><a class="main-catalog__item btn-hover_parent" href="#">
                <div class="main-catalog__item-bg desktop">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg3.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg3.png">
                    </picture>
                </div>
                <div class="main-catalog__item-bg mobile">
                    <picture class="picture">
                        <source type="image/webp" srcset="assets/images/main-catalog-item-bg3-mobile.webp"><img class="picture__img" src="assets/images/main-catalog-item-bg3-mobile.png">
                    </picture>
                </div>
                <div class="main-catalog__item-row">
                    <div class="main-catalog__item-title blue">дистрибуция</div>
                </div>
                <div class="main-catalog__item-svg">
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </a></div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>