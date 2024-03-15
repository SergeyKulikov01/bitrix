<?
$dir = $APPLICATION->GetCurDir();
$path = explode("/", $dir);
global $arrFilter;
$arrFilter = [];
if ($_REQUEST['brand'] != '') {
	$arrFilter['PROPERTY_BRAND'] = $_REQUEST['brand'];
}
if ($_REQUEST['top'] == 'Y') {
	$arrFilter['PROPERTY_ICONS_VALUE'] = 'top';
}
if ($_REQUEST['fat'] != '') {
	$arrFilter['PROPERTY_FAT'] = $_REQUEST['fat'];
}

$arrSortBy;
$arrOrderBy;

use Bitrix\Main\Application;

$arrSortBy = 'ID';
$arrOrderBy = 'DESC';
if (Application::getInstance()->getContext()->getRequest()->getCookie("sort") == 'new') {
	$arrSortBy = 'ID';
	$arrOrderBy = 'DESC';
}
if (Application::getInstance()->getContext()->getRequest()->getCookie("sort") == 'popular') {
	$arrSortBy = 'show_counter';
	$arrOrderBy = 'DESC';
}
?>
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"catalog_section",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "SHOW_COUNTER",
				1 => "",
			),
			"FILTER_NAME" => "arrFilter",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => $path[2],
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "WEIGHT",
				1 => "icons",
				2 => "nutritional_value_desc",
				3 => "storage_cond_desc",
				4 => "nutritional_value",
				5 => "constituents",
				6 => "BOXES",
				7 => "storage_cond",
				8 => "CNT_IN_BOX",
				9 => "brand",
				10 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => $arrSortBy,
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => $arrOrderBy,
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "catalog_section"
		),
		false
	); ?>