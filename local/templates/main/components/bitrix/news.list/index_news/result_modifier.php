<?php
    $sections = CIBlockSection::GetList (
        Array("sort" => "ASC"),
        Array("IBLOCK_ID" => $arResult['ID'], "ACTIVE" => "Y"),
        false,
        Array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
    );
    while($ar_fields = $sections->GetNext())
    {
        $arResult['SECTIONS'][] =  $ar_fields;
    }
    
    foreach ($arResult['ITEMS'] as $key => $arItems){
        $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"]['ID'], array('width'=>1200, 'height'=>800), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][$key]['photo_path'] = $file['src'];
        $arResult['ITEMS'][$key]['date'] = FormatDate("d F Y", MakeTimeStamp($arItems["ACTIVE_FROM"]));
        if (isset($arItems['IBLOCK_SECTION_ID'])) {
            $arResult['ITEMS'][$key]['SECTION_NAME'] = $arResult['section_names'][$arItems['IBLOCK_SECTION_ID']];
        }
    }
?>