<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
$el = new CIBlockElement;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = array();
    $requestData = file_get_contents('php://input'); // Читаем значения из запроса 
    $data = json_decode($requestData, true); // Декодируем значения 
    if ($data['phone'] == "" || $data['email'] == "" || $data['session'] == "" || $data['name'] == "" || $data['prod_name'] == "" || $data['prod_link'] == "") {
        $response['mess'] = 'Не все обязательные поля заполнены';
        die();
    }
    if (bitrix_sessid() != $data['session']) {
        $response['mess'] = 'Сессия не действительна';
        die();
    }
    unset($data['session']);
    $data['comment'] = htmlspecialchars($data['comment']);
    $data['prod_link'] = $_SERVER['HTTP_HOST'] . $data['prod_link'];

    if (!preg_match('/^([а-яА-Яё]+)$/u', $data['name'])) { // проверка имени
        $response['mess'] = 'Проверка имени не пройдена';
        die();
    }
    if (!preg_match('/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/', $data['phone'])) { // проверка номера телефона
        $response['mess'] = 'Проверка номера не пройдена';
        die();
    }
    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $data['email'])) { // проверка емейла
        $response['mess'] = 'Проверка емейла не пройдена';
        die();
    }

    $preview_text = '';
    foreach ($data as $key => $value) { // заполнение текста для preview
        $preview_text .= $key . ":" . $value . " <br> ";
    }

    $new_request = [
        "ACTIVE_FROM" => date('d.m.Y H:i:s'),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 5534,
        "NAME" => "Задать вопрос по продукту",
        "PREVIEW_TEXT" => $preview_text,
        "ACTIVE" => "Y"
    ];
    if ($newElementId = $el->Add($new_request)) { // создание нового элемента
        $response['mess'] = 'Element has been added';
        $response['status'] = 'success';
    } else {
        $response['mess'] = 'Error';
        $response['status'] = 'error';
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    die();
}
