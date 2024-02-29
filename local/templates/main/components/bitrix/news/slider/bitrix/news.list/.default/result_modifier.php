<?php
//$arResult['ITEMS']['2']['PROPERTIES']['mobile_image']
    foreach ($arResult['ITEMS'] as $arItems){
        foreach ($arItems as $arKey => $arItem ){
            $arResult['ITEMS'][$arKey] = $arItem['VALUE'];
        }
    }


?>