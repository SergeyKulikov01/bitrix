<?php
    foreach ($arResult['ITEMS'] as $key => $arItems){
        $file = CFile::ResizeImageGet($arItems['PROPERTIES']['mobile_image']['VALUE'], array('width'=>670, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, false);
		$arResult['ITEMS'][$key]['photo_path'] = $file['src'];
    }
?>