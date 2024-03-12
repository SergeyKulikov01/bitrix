<?php
    $dir = $APPLICATION->GetCurDir();
    $path = explode("/",$dir);

    $arResult['MAIN_SECTION'] = $arResult['SECTION']['PATH'][0];
    $sections = CIBlockSection::GetList (
        Array("sort" => "ASC"),
        Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y" , "DEPTH_LEVEL" => 2, "SECTION_ID" => $arResult['MAIN_SECTION']['ID']),
        false,
        Array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
    );
    while($ar_fields = $sections->GetNext())
    {
        $arResult['SECTIONS'][] =  $ar_fields;
    }

    $section = CIBlockSection::GetList (
    Array("sort" => "ASC"),
    Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y" , "CODE" => $arParams['SECTION_CODE'] = $path[2], "!property_brand" => false),
    false,
    Array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
);
    while($ar_fields = $section->GetNext())
    {
        $arResult['SECTION'] =  $ar_fields;
    }

    $brands = CIBlockElement::GetList(
        false,
        Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y","SECTION_ID" => $arResult['SECTION']['ID'] ),
        Array("PROPERTY_brand"),
        false,
    );
    while($ar_fields = $brands->GetNext())
    {
        if ($ar_fields["PROPERTY_BRAND_VALUE"] != ''){
            $brandIDS[] =  $ar_fields["PROPERTY_BRAND_VALUE"];
        }
    }
    if ($brandIDS != '') {
        $filterList = CIBlockElement::GetList(
            false,
            Array("ID" => $brandIDS),
            false,
        );
        while($ar_fields = $filterList->GetNext())
        {
            $arResult["FILTER_LIST"][$ar_fields["ID"]] =  $ar_fields["NAME"];
        }
    }

    $fat = CIBlockElement::GetList(
        false,
        Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y","SECTION_ID" => $arResult['SECTION']['ID'] ),
        Array('PROPERTY_fat'),
        false,
        false,
    );
    while($ar_fields = $fat->GetNext())
        {
            if ($ar_fields["PROPERTY_FAT_VALUE"] != '') {
                $arResult["FAT_LIST"][] = $ar_fields["PROPERTY_FAT_VALUE"];
            }
        }

        foreach ($arResult['ITEMS'] as $key => $arItems){
            $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"]["ID"], array('width'=>310, 'height'=>310), BX_RESIZE_IMAGE_PROPORTIONAL, false);
            $arResult['ITEMS'][$key]['photo_path'] = $file['src'];
        }

    if ($_REQUEST['top'] != '' or $_REQUEST['brand'] != '' or $_REQUEST['fat'] != '') {
        unset($arResult["ITEMS"]);
        if ($_REQUEST['top'] == 'Y'){
            $arrFilter['PROPERTY_TOP_VALUE'] = 'y';
        }
        if ($_REQUEST['brand'] != ''){
            $arrFilter['PROPERTY_BRAND'] = $_REQUEST['brand'];
        }
        if ($_REQUEST['fat'] != ''){
            $arrFilter['PROPERTY_FAT'] = $_REQUEST['fat'];
        }
        $arResult['filter'] = $arrFilter;
        $filtered = CIBlockElement::GetList(
            false,
            array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y", "SECTION_ID" => $arResult['SECTION']['ID'], $arrFilter),
            false,
            false,
            Array("PREVIEW_PICTURE","NAME","PREVIEW_TEXT","DETAIL_PAGE_URL","PROPERTY_BOXES","PROPERTY_WEIGHT", "PROPERTY_CNT_IN_BOX",)
        );
        while ($ar_fields = $filtered->GetNext()) {
            $arResult['ITEMS'][] = $ar_fields;
        }
        foreach ($arResult['ITEMS'] as $key => $arItems){
            $arResult['ITEMS'][$key]["DISPLAY_PROPERTIES"]["WEIGHT"]["DISPLAY_VALUE"] = $arItems["PROPERTY_WEIGHT_VALUE"];
            $arResult['ITEMS'][$key]["DISPLAY_PROPERTIES"]["BOXES"]["DISPLAY_VALUE"] = $arItems["PROPERTY_BOXES_VALUE"];
            $arResult['ITEMS'][$key]["DISPLAY_PROPERTIES"]["CNT_IN_BOX"]["DISPLAY_VALUE"] = $arItems["PROPERTY_CNT_IN_BOX_VALUE"];
            $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"], array('width'=>310, 'height'=>310), BX_RESIZE_IMAGE_PROPORTIONAL, false);
            $arResult['ITEMS'][$key]['photo_path'] = $file['src'];
        }
    }
?>