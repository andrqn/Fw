<?php
include('init.php');



if (!defined("CORE")) {
    die();
}



$app->pager->addJs("script.js");
$app->pager->addCss("style.css");
$app->pager->addString("<h1>It's Header</h1>");
$app->header();


?>
    <pre>
-------- 17.09.2022 --------
1) создан класс Page для работы с содержимым html страницы
2) Инициированы его методы.
3)Все файлы расположены и переименованы согласно PSR
-------- 22.09.2022 --------
1) Проверка работы index c изменениями .
2) Залита финальная версия 2 шага  на гит .
</pre>


<?php
$app->pager->addString("<h3>It's Footer</h3>");
$app->footer();
?>