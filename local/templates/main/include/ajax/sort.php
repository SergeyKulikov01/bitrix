<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Web\Cookie;
use Bitrix\Main\Application;

$json_data = file_get_contents('php://input'); // Читаем значения из запроса
$data = json_decode($json_data); // Декодируем значения 
if (isset($data)) {
    $cookie = new Cookie('sort', $data, time() + (7 * 24 * 60 * 60));
    Application::getInstance()->getContext()->getResponse()->addCookie($cookie);
}
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');
