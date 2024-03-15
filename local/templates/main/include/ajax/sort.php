<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Web\Cookie;
use Bitrix\Main\Application;

echo Application::getInstance()->getContext()->getRequest()->getCookie('sort');
// if (isset($_REQUEST["sort"])) {
//     $cookie = new Cookie('Sort', $_REQUEST["sort"]);
// } else {
//     $cookie = new Cookie('Sort', "new");
// }
// $val = $_REQUEST['sort'];
// $cookie = new Cookie('sort', $val, time() +  60 * 60 * 24 * 60, false);
// echo "Файл открыт";
// echo Application::getInstance()->getContext()->getRequest()->getCookie('sort');

// Получаем данные из тела запроса
$json_data = file_get_contents('php://input');

// Декодируем JSON-строку в массив или объект PHP
$data = json_decode($json_data, true); // Второй аргумент true указывает на то, что данные должны быть декодированы в ассоциативный массив


// Пример: выводим значения переменных на экран
echo "Значение: " . $data . "<br>";

// Выполнение нужной логики с данными, например, сохранение в базу данных или отправка ответа клиенту
// ...

// Отправляем ответ клиенту (если необходимо)
echo json_encode(['success' => true]);
if (isset($data)) {
    $cookie = new Cookie('sort', $data, time() + (7 * 24 * 60 * 60));
    Application::getInstance()->getContext()->getResponse()->addCookie($cookie);
}


require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');
