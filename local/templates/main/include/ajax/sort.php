<?

use Bitrix\Main\Web\Cookie;
use Bitrix\Main\Application;

$cookie = new Cookie('Sort', $_REQUEST["sort"]);
if (isset($_REQUEST["sort"])) {
    $cookie = new Cookie('Sort', $_REQUEST["sort"]);
} else {
    $cookie = new Cookie('Sort', "new");
}
Application::getInstance()->getContext()->getResponse()->addCookie($cookie);
