<?php
include('init.php');

use core\Application;

if (!defined("CORE")) {
    die();
}

$app = Application::getInstance();
$app->header();


?>
    <pre>
-------- 19.12.2020 --------
1) создан класс Page для работы с содержимым html страницы
2) итд
-------- 18.12.2020 --------
1) создан конфиг и класс для работы с ними
2) создана функции авто регистрации классов
</pre>


<?php
$app->footer();
?>