<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("каталог");
?>
    <section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">

<? if (isset($_REQUEST["CODE"]))
{
    include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_detail.php");
}
else if (isset($_REQUEST["SECTION_CODE"]))
{
    include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_section.php");
} else {
    include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_index.php");
}
?>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>