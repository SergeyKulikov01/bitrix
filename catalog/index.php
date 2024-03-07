<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("каталог");
?>
    <section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">
<?$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumb_news",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
);?>
<pre><? print_r($_REQUEST) ?></pre>
<? if (isset($_REQUEST["CODE"]))
{

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