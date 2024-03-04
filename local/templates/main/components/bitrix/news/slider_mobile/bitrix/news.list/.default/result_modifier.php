<?php
//$arResult['ITEMS']['2']['PROPERTIES']['mobile_image']
    foreach ($arResult['ITEMS'] as $key => $arItems){ // key это id элемента
        $arResult['ITEMS'][$key]['iconca'] = $arItems['DISPLAY_PROPERTIES']['iconca']['DISPLAY_VALUE'];
        $arResult['ITEMS'][$key]['discription'] = $arItems['DISPLAY_PROPERTIES']['discription']['DISPLAY_VALUE'];
        $photo_path = CFile::GetPath($arItems['PROPERTIES']['mobile_image']['VALUE']);
        $file = CFile::ResizeImageGet($arItems['PROPERTIES']['mobile_image']['VALUE'], array('width'=>670, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, false);
        if (isset($file['src'])){
            $arResult['ITEMS'][$key]['photo_path'] = $file['src'];
        } else {
            $arResult['ITEMS'][$key]['photo_path'] =$photo_path['src'];
        }
    }
$arResult = $arResult['ITEMS'];
?>