<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php
    $sections = CIBlockSection::GetList (
        Array("sort" => "ASC"),
        Array("IBLOCK_ID" => $arResult['IBLOCK']['ID'], "ACTIVE" => "Y"),
        false,
        Array('ID', 'NAME')
    );
    while($ar_fields = $sections->GetNext())
    {
        $arr[$ar_fields['ID']] =  $ar_fields['NAME'];
    }

    $file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]['ID'], array('width'=>1200, 'height'=>800), BX_RESIZE_IMAGE_EXACT, false);
    $arResult["PATH"] = $file["src"];
    if (isset($arResult['IBLOCK']['ID'])) {
        $arResult['SECTION'] = $arr[$arResult["IBLOCK_SECTION_ID"]];
    }

?>