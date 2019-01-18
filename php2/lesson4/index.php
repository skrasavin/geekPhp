
<form method="post" name="form">
    <input name="submit" type="submit" value="Добавить">
</form>

<?php
include_once 'connect.php';
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('list.tmpl');

    echo $template->render(array (
        'items' => $stack
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}


?>

