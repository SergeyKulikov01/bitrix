<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<!--<div class="mfeedback">-->
<?//if(!empty($arResult["ERROR_MESSAGE"]))
//{
//	foreach($arResult["ERROR_MESSAGE"] as $v)
//		ShowError($v);
//}
//if($arResult["OK_MESSAGE"] <> '')
//{
//	?><!--<div class="mf-ok-text">--><?php //=$arResult["OK_MESSAGE"]?><!--</div>--><?//
//}
//?>
<!---->
<!--<form action="--><?php //=POST_FORM_ACTION_URI?><!--" method="POST">-->
<?php //=bitrix_sessid_post()?>
<!--	<div class="mf-name">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_NAME")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_name" value="--><?php //=$arResult["AUTHOR_NAME"]?><!--">-->
<!--	</div>-->
<!--	<div class="mf-email">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_EMAIL")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_email" value="--><?php //=$arResult["AUTHOR_EMAIL"]?><!--">-->
<!--	</div>-->
<!--    <div class="mf-email">-->
<!--        <div class="mf-text">-->
<!--            --><?php //=GetMessage("MFT_PHONE")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_phone", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--        </div>-->
<!--        <input type="text" name="user_phone" value="--><?php //=$arResult["user_phone"]?><!--">-->
<!--    </div>-->
<!---->
<!--	<div class="mf-message">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_MESSAGE")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<textarea name="MESSAGE" rows="5" cols="40">--><?php //=$arResult["MESSAGE"]?><!--</textarea>-->
<!--	</div>-->
<!---->
<!--	--><?//if($arParams["USE_CAPTCHA"] == "Y"):?>
<!--	<div class="mf-captcha">-->
<!--		<div class="mf-text">--><?php //=GetMessage("MFT_CAPTCHA")?><!--</div>-->
<!--		<input type="hidden" name="captcha_sid" value="--><?php //=$arResult["capCode"]?><!--">-->
<!--		<img src="/bitrix/tools/captcha.php?captcha_sid=--><?php //=$arResult["capCode"]?><!--" width="180" height="40" alt="CAPTCHA">-->
<!--		<div class="mf-text">--><?php //=GetMessage("MFT_CAPTCHA_CODE")?><!--<span class="mf-req">*</span></div>-->
<!--		<input type="text" name="captcha_word" size="30" maxlength="50" value="">-->
<!--	</div>-->
<!--	--><?//endif;?>
<!--	<input type="hidden" name="PARAMS_HASH" value="--><?php //=$arResult["PARAMS_HASH"]?><!--">-->
<!--	<input type="submit" name="submit" value="--><?php //=GetMessage("MFT_SUBMIT")?><!--">-->
<!--</form>-->
<!--</div>-->


<form class="popup-vacancies__form" action="<?=POST_FORM_ACTION_URI?>" data-form="mail-corp" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="input-wrapper" data-input-parent="">
        <div class="input-wrapper__placeholder"><?=GetMessage("MFT_NAME")?></div><input class="input" data-input="" required data-mask-text="" data-parsley-pattern="^[А-Яа-яЁё -]+$" placeholder="<?=GetMessage("MFT_NAME")?>">
    </div>
    <div class="input-wrapper" data-input-parent="">
        <div class="input-wrapper__placeholder"><?=GetMessage("MFT_PHONE")?></div><input class="input" data-input="" required type="tel" placeholder="<?=GetMessage("MFT_PHONE")?>" data-mask-phone="">
    </div>
    <div class="input-wrapper" data-input-parent="">
        <div class="input-wrapper__placeholder"><?=GetMessage("MFT_EMAIL")?></div><input class="input" data-input="" required type="email" placeholder="<?=GetMessage("MFT_EMAIL")?>">
    </div>
    <div class="input-wrapper input-wrapper_textarea" data-input-parent="">
        <div class="input-wrapper__placeholder placeholder_background"><?=GetMessage("MFT_MESSAGE")?></div><textarea class="textarea" data-input="" type="text" placeholder="<?=GetMessage("MFT_MESSAGE")?>"></textarea>
    </div>
    <p class="popup-vacancies__form-policy">Нажимая на кнопку «Отправить», вы даете согласие с&nbsp;<a href="#">политикой в отношении обработки персональных данных</a></p><button class="popup-vacancies__form-button btn-hover_parent" type="submit" data-form-button="mail-corp" data-btn-inputs>
        <div class="btn-hover_circle"></div><span><?=GetMessage("MFT_SUBMIT")?></span>
    </button>
</form>