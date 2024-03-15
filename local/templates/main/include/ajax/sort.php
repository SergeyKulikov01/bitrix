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

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);
echo "Значение: " . $data . "<br>";
echo json_encode(['success' => true]);
if (isset($data)) {
    $cookie = new Cookie('sort', $data, time() + (7 * 24 * 60 * 60));
    Application::getInstance()->getContext()->getResponse()->addCookie($cookie);
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');
