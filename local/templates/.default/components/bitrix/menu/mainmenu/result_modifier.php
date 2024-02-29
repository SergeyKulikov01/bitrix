<?php
$menu = [];
$count = ceil(count($arResult) /2);

foreach ($arResult as $key => $item)  {
    if ($key < 5) {
        $menu[0][] =$item;
    } else {
        $menu[1][] =$item;
    }
}
$arResult = $menu;
