<div class="main-slider container desktop-t">
    <div class="main-slider__wrapper">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"slider", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "slide_name",
			1 => "discription",
			2 => "link",
			3 => "",
			4 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "slider",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
            </div>
            <div class="main-slider__buttons">
                <div class="slider-btn btn-hover_parent main-slider__button-left">
                    <div class="white-circle">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                        </svg>
                    </div>
                </div>
                <div class="slider-btn btn-hover_parent main-slider__button-right">
                    <div class="white-circle right">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="main-slider__pagination"></div>
        </div>
    </div>
</div>