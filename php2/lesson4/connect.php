<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'php2lesson4');
define('PORT', '3305');
define('USER_NAME', 'root');
define('USER_PASS', '');

function showTwig($stack) {
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
}
function render($c) {
    $stack = [];

    try {
        $db = new PDO('mysql:host=' . DB_HOST . ';port='. PORT . ';dbname=' . DB_NAME .';', USER_NAME, USER_PASS );
        $sth = $db->query('SELECT * FROM `photos` LIMIT ' . $c);

        while ($data = $sth -> fetch()) {
            echo $data['id'].'/';
            if($data['id'] == 50 || $data['id'] == 100 ) {
                echo '<br>';
            }
            array_push($stack, 'photos/'.$data['addr']);
        };

    }catch (PDOException $e) {
        echo $e;
    }
    showTwig($stack);
}

if(isset($_POST['postname'])) {
    $c = $_POST['postname'];
    render($c);
}



