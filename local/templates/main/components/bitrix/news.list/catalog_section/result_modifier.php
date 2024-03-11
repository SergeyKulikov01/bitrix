<?php
    $sections = CIBlockSection::GetList (
        Array("sort" => "ASC"),
        Array("IBLOCK_ID" => $arResult['ID'], "GLOBAL_ACTIVE" => "Y" , "DEPTH_LEVEL" => 2),
        false,
        Array('ID', 'NAME', 'SECTION_PAGE_URL', 'CODE')
    );
    while($ar_fields = $sections->GetNext())
    {
        $arResult['SECTIONS'][] =  $ar_fields;
        $arr[$ar_fields['ID']] =  $ar_fields['NAME'];
    }

    foreach ($arResult['ITEMS'] as $key => $arItems){
        $file = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"]['ID'], array('width'=>310, 'height'=>310), BX_RESIZE_IMAGE_PROPORTIONAL, false);
		$arResult['ITEMS'][$key]['photo_path'] = $file['src'];
        if (isset($arItems['IBLOCK_SECTION_ID'])) {
            $arResult['ITEMS'][$key]['SECTION_NAME'] = $arResult['section_names'][$arItems['IBLOCK_SECTION_ID']];
        }
    }
?>