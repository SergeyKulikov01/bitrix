<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult["SECTIONS"] as $key => $arItems){
    $file = CFile::ResizeImageGet($arResult["SECTIONS"][$key]["DETAIL_PICTURE"] , array('width'=>1200, 'height'=>1200), BX_RESIZE_IMAGE_EXACT, false);
    $file_mobile = CFile::ResizeImageGet($arResult["SECTIONS"][$key]["PICTURE"]["ID"] , array('width'=>324, 'height'=>460), BX_RESIZE_IMAGE_EXACT, false);
    $arResult["SECTIONS"][$key]['desktop_path'] = $file['src'];
    $arResult["SECTIONS"][$key]['mobile_path'] = $file_mobile['src'];
    if (isset($arItems['IBLOCK_SECTION_ID'])) {
        $arResult['ITEMS'][$key]['SECTION_NAME'] = $arResult['section_names'][$arItems['IBLOCK_SECTION_ID']];
    }
}

?>