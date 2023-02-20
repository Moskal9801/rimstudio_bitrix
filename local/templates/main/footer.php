<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    <div class="body-footer">
        <?php $APPLICATION->IncludeComponent('bitrix:main.include','', [
            'AREA_FILE_SHOW' => 'file',
            'PATH' => SITE_TEMPLATE_PATH . '/includes/footer/body-footer.php'
        ]); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	</body>
</html>