<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

 if(!empty($arResult['ITEMS'])): ?>
    <div class="body-main">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <div class="card__portfolio" id="<?=$this->GetEditAreaId($arItem['ID']);?>" onclick="morePortfolio(this);">
                <div class="portfolio__name"><?echo $arItem['PREVIEW_TEXT']?> <?php $arItem['ID']?></div>
                <img class="portfolio__image" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
            </div>
            <div class="card__popup" id="popup__<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="popup__container">
                    <div class="container__body">
                        <div class="body__top">
                            <div class="top__name">
                                <?echo $arItem["NAME"]?>
                            </div>
                            <div class="top__close" id="<?=$this->GetEditAreaId($arItem['ID']);?>" onclick="closePopup(this);">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 26L25.9999 2.00009" stroke="black" stroke-width="3"/>
                                    <path d="M26 26L2.00009 2.00009" stroke="black" stroke-width="3"/>
                                </svg>
                            </div>
                        </div>
                        <div class="body__medium">
                            <a class="medium-button-prev">
                                <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M45.7236 53.1982C46.0921 52.7916 46.0921 52.1309 45.7236 51.7243L33.9541 38.7643L45.7236 25.7788C46.0921 25.3722 46.0921 24.7115 45.7236 24.3049C45.3551 23.8984 44.7563 23.8984 44.3877 24.3049L31.9734 38.0019C31.7891 38.2052 31.697 38.4593 31.697 38.7388C31.697 38.993 31.7891 39.2725 31.9734 39.4758L44.3877 53.1727C44.7563 53.6047 45.3551 53.6047 45.7236 53.1982Z" fill="black"/>
                                    <circle cx="39" cy="39" r="38.25" transform="matrix(-1 0 0 1 78 0)" stroke="black" stroke-width="1.5"/>
                                </svg>
                            </a>
                            <div class="medium__swiper">
                                <div class="swiper__body swiper mySwiper">
                                    <div class="body__slides swiper-wrapper">
                                        <?php foreach ($arItem['PROPERTIES']['work_examples']['VALUE'] as $example): ?>
                                            <img class="slides__slide swiper-slide" src="<?=CFile::GetPath($example)?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <a class="medium-button-next">
                                <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.2764 53.1982C33.9079 52.7916 33.9079 52.1309 34.2764 51.7243L46.0459 38.7643L34.2764 25.7788C33.9079 25.3722 33.9079 24.7115 34.2764 24.3049C34.6449 23.8984 35.2437 23.8984 35.6123 24.3049L48.0266 38.0019C48.2109 38.2052 48.303 38.4593 48.303 38.7388C48.303 38.993 48.2109 39.2725 48.0266 39.4758L35.6123 53.1727C35.2437 53.6047 34.6449 53.6047 34.2764 53.1982Z" fill="black"/>
                                    <circle cx="39" cy="39" r="38.25" stroke="black" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </div>
                        <div class="body__bottom">
                            <?echo $arItem['PROPERTIES']['work_descriptions']['VALUE'];?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>