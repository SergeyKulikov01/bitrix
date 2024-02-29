<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
        <?
        foreach($arResult as $arItem):?>
        <div class="footer-content__subcol">
                <div class="footer-content__subcol-top">
                    <nav class="footer-content__nav">
                        <ul class="footer-content__nav-list">
                            <? foreach($arItem as $item):?>
                                <li class="footer-nav__list-item"><a class="footer-content__nav-item" href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
                            <?endforeach?>
                        </ul>
                    </nav>
                </div>
        </div>
        <?endforeach?>
<?endif?>