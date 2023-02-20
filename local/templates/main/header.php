<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<?$APPLICATION->ShowHead();?>

        <title><?$APPLICATION->ShowTitle();?></title>

        <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/style.css');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main.js');
        ?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="body-header">
            <div class="body-header__top">
                <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                    'AREA_FILE_SHOW' => 'file',
                    'PATH' => SITE_TEMPLATE_PATH . '/includes/header/top-logo.php'
                ]); ?>
                <div class="top__socials">
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/top-firstSocials.php'
                    ]); ?>
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/top-secondSocials.php'
                    ]); ?>
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/top-thirdSocials.php'
                    ]); ?>
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/top-fourthSocials.php'
                    ]); ?>
                </div>
            </div>
            <div class="body-header__medium">
                <p class="medium__more">
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/medium-more.php'
                    ]); ?>
                </p>
                <a class="medium__more-info" onclick="moreInfo();">
                    Подробнее
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="var(--color-svg)" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="14.25" transform="rotate(90 15 15)" stroke="var(--color-circle)" stroke-width="1.5"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6036 16.8444C18.4083 17.0519 18.0917 17.0519 17.8964 16.8444L15.25 14.0326L12.6036 16.8444C12.4083 17.0519 12.0917 17.0519 11.8964 16.8444C11.7012 16.6369 11.7012 16.3006 11.8964 16.0931L14.8964 12.9056C15.0917 12.6981 15.4083 12.6981 15.6036 12.9056L18.6036 16.0931C18.7988 16.3006 18.7988 16.6369 18.6036 16.8444Z" fill="var(--color-firstPath)" stroke="var(--color-secondPath)" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="body-header__bottom">
                <p class="bottom__adress">
                    <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => SITE_TEMPLATE_PATH . '/includes/header/bottom-adress.php'
                    ]); ?>
                </p>
                <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                    'AREA_FILE_SHOW' => 'file',
                    'PATH' => SITE_TEMPLATE_PATH . '/includes/header/bottom-phone.php'
                ]); ?>
                <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
                    'AREA_FILE_SHOW' => 'file',
                    'PATH' => SITE_TEMPLATE_PATH . '/includes/header/bottom-mail.php'
                ]); ?>
            </div>
        </div>
	
						