<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <nav class="header-main__navigation-nav"><a class="header-main__navigation-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></nav>
        <?endforeach?>
<?endif?>