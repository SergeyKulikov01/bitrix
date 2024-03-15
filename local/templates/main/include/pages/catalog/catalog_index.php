<section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">

	<? $APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"main_catalog",
		array(
			"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "N",
			"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
			"FILTER_NAME" => "sectionsFilter",
			"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "content",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array(
				0 => "CODE",
				1 => "NAME",
				2 => "PICTURE",
				3 => "DETAIL_PICTURE",
				4 => "",
			),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(
				0 => "UF_FONTCOLOR",
				1 => "",
			),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "1",
			"VIEW_MODE" => "LINE",
			"COMPONENT_TEMPLATE" => "main_catalog"
		),
		false
	); ?>
</section>