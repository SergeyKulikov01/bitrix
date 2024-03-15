<section class="catalog-detail top-section container">
	<div class="catalog-detail__breadcrumbs mobile">
		<div class="breadcrumbs">
			<div class="breadcrumbs-wrapper">
				<div class="breadcrumbs-wrapper__row">
					<? $APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"breadcrumb_news",
						array(
							"PATH" => "",
							"SITE_ID" => "s1",
							"START_FROM" => "0"
						)
					); ?>
				</div>
			</div>
		</div>
	</div>



	<?
	$dir = $APPLICATION->GetCurDir();
	$path = explode("/", $dir);

	$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"catalog_detail",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_GROUPS" => "N",
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
			"ELEMENT_CODE" => $path[3],
			"ELEMENT_ID" => "",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "content",
			"IBLOCK_URL" => "",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Страница",
			"PROPERTY_CODE" => array(
				0 => "WEIGHT",
				1 => "icons",
				2 => "BOXES",
				3 => "CNT_IN_BOX",
				4 => "",
			),
			"SET_BROWSER_TITLE" => "Y",
			"SET_CANONICAL_URL" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"STRICT_SECTION_CHECK" => "N",
			"USE_PERMISSIONS" => "N",
			"USE_SHARE" => "N",
			"COMPONENT_TEMPLATE" => "catalog_detail"
		),
		false
	); ?>
</section>