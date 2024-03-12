<?php
    $brand = CIBlockElement::GetByID($arResult['PROPERTIES']['brand']['VALUE']);
    while($ar_fields = $brand->GetNext()) {
        $arResult['brandname'] =  $ar_fields['NAME'];
    }
    $next = CIBlockElement::GetByID($arResult['PROPERTIES']['next_goods']['VALUE']);
    while($ar_fields = $next->GetNext()) {

        $arResult['next_product']['name'] =  $ar_fields["NAME"];
        $file = CFile::ResizeImageGet($ar_fields["PREVIEW_PICTURE"], array('width'=>620, 'height'=>620), BX_RESIZE_IMAGE_PROPORTIONAL, false);
        $arResult['next_product']['src'] = $file['src'];
        $arResult['next_product']['detail_link'] =  $ar_fields["DETAIL_PAGE_URL"];
    }
    $rec_file = CFile::GetPath($arResult['PROPERTIES']['recommendation']['VALUE']);
    $arResult['recommendation'] = $rec_file;

    foreach ($arResult['PROPERTIES']['storage_cond']['VALUE'] as $key => $arItems){
        $arResult['storage_cond'][$arItems] = $arResult['PROPERTIES']['storage_cond_desc']['VALUE'][$key];
    }
    foreach ($arResult['PROPERTIES']['nutritional_value']['VALUE'] as $key => $arItems){
        $arResult['nutritional'][$arItems] = $arResult['PROPERTIES']['nutritional_value']['DESCRIPTION'][$key];
    }

    foreach ($arResult['PROPERTIES']['photo_slider']['VALUE'] as $key => $arItems){
        $file = CFile::ResizeImageGet($arItems, array('width'=>367, 'height'=>367), BX_RESIZE_IMAGE_PROPORTIONAL, false);
		$arResult['photo_path'][] = $file['src'];
    }
?>