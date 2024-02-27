<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <li class="footer-nav__list-item"><a class="footer-content__nav-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endforeach?>
<?endif?>