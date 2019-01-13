<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$items = array_slice(scandir('photos'), '2');

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('list.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание
    echo $template->render(array (
        'items' => $items
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>
