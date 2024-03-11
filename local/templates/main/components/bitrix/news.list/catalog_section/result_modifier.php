<?php
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
    Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y" , "CODE" => $arParams['SECTION_CODE'] = $_REQUEST['SECTION_CODE']),
    false,
    Array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
);
    while($ar_fields = $section->GetNext())
    {
        $arResult['SECTION'] =  $ar_fields;
    }

    foreach ($arResult['ITEMS'] as $key => $arItems){
        $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"]['ID'], array('width'=>310, 'height'=>310), BX_RESIZE_IMAGE_PROPORTIONAL, false);
		$arResult['ITEMS'][$key]['photo_path'] = $file['src'];
    }
?>