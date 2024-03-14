<?php
$dir = $APPLICATION->GetCurDir();
$path = explode("/", $dir);

$arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0];
$sections = CIBlockSection::GetList(
    array("sort" => "ASC"),
    array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y", "DEPTH_LEVEL" => 2, "SECTION_ID" => $arResult['MAIN_SECTION']['ID']),
    false,
    array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
);
while ($ar_fields = $sections->GetNext()) {
    $arResult['SECTIONS'][] =  $ar_fields;
}

$section = CIBlockSection::GetList(
    array("sort" => "ASC"),
    array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y", "CODE" => $arParams['SECTION_CODE'] = $path[2], "!property_brand" => false),
    false,
    array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
);
while ($ar_fields = $section->GetNext()) {
    $arResult['SECTION'] =  $ar_fields;
}

$brands = CIBlockElement::GetList(
    false,
    array("IBLOCK_ID" => $arResult['ID'], "ACTIVE" => "Y", "INCLUDE_SUBSECTIONS" => "Y", "SECTION_ID" => $arResult['SECTION']['ID']),
    array("PROPERTY_brand"),
    false,
);
while ($ar_fields = $brands->GetNext()) {
    if ($ar_fields["PROPERTY_BRAND_VALUE"] != '') {
        $brandIDS[] =  $ar_fields["PROPERTY_BRAND_VALUE"];
    }
}
if ($brandIDS != '') {
    $filterList = CIBlockElement::GetList(
        false,
        array("ID" => $brandIDS),
        false,
    );
    while ($ar_fields = $filterList->GetNext()) {
        $arResult["FILTER_LIST"]["BRAND"][$ar_fields["ID"]] =  $ar_fields["NAME"];
    }
}
if ($arResult["FILTER_LIST"]["BRAND"]) {
    asort($arResult["FILTER_LIST"]["BRAND"]);
}


$fat = CIBlockElement::GetList(
    false,
    array("IBLOCK_ID" => $arResult['ID'], "ACTIVE" => "Y", "SECTION_ID" => $arResult['SECTION']['ID'], "INCLUDE_SUBSECTIONS" => "Y"),
    array('PROPERTY_fat'),
    false,
    false,
);
while ($ar_fields = $fat->GetNext()) {
    if ($ar_fields["PROPERTY_FAT_VALUE"] != '') {
        $arResult["FILTER_LIST"]["FAT"][] = $ar_fields["PROPERTY_FAT_VALUE"];
    }
}
if ($arResult["FILTER_LIST"]["FAT"]) {
    sort($arResult["FILTER_LIST"]["FAT"], SORT_NATURAL | SORT_FLAG_CASE);
}


foreach ($arResult['ITEMS'] as $key => $arItems) {
    $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"]["ID"], array('width' => 310, 'height' => 310), BX_RESIZE_IMAGE_PROPORTIONAL, false);
    $arResult['ITEMS'][$key]['photo_path'] = $file['src'];
}
