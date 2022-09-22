<?php
include('init.php');

use core\Application;

if (!defined("CORE")) {
    die();
}



$app->pager->addJs("script.js");
$app->pager->addCss("style.css");
$app->pager->addString("<h1>TEST</h1>");
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
$app->pager->addString("<h6>TEST2</h6>");
$app->footer();
?>