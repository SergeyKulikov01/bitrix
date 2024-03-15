<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("каталог");

$dir = $APPLICATION->GetCurDir();
$path = explode("/", $dir);

switch ($path) {
    case $path[3] != "":
        include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_detail.php");
        break;
    case $path[2] != "":
        include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_section.php");
        break;
    case $path[1] != "":
        include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/catalog/catalog_index.php");
        break;
}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
