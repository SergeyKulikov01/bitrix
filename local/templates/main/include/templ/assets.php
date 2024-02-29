<?php use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH."/assets/styles/590.css");
$asset->addCss(SITE_TEMPLATE_PATH."/assets/styles/app.css");
$asset->addJs(SITE_TEMPLATE_PATH."/assets/vendor.js");
$asset->addJs(SITE_TEMPLATE_PATH."/assets/app.js");
$asset->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');

?>