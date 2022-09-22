<?php
include('init.php');

use core\Application;

if (!defined("CORE")) {
    die();
}



$app->pager->addJs("script.js");
$app->pager->addCss("style.css");
$app->pager->addString("<h1>It's Header</h1>");
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
$app->pager->addString("<h3>It's Footer</h3>");
$app->footer();
?>