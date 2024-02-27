<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

    <form class="header-search__inner" action="<?=$arResult["FORM_ACTION"]?>">
        <div class="header-search__input">
            <div class="input-wrapper" data-input-parent=""><input type="text" name="q" class="input" data-input="" required data-input-search="header" placeholder="Что вы хотите найти?"><svg class="input-wrapper-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                    <path d="M6.69678 6.6967L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.69662 17.3033L17.3032 6.6967" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
        </div><button class="header-search__btn btn-hover_parent" name="s" type="submit">
            <div class="btn-hover_circle"></div><span><?=GetMessage("BSF_T_SEARCH_BUTTON");?></span>
        </button>
    </form>



