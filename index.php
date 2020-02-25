<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.02.2020
 * Time: 19:08
 */


if(!session_start()) {
    session_status();
}



// подключение путей
require_once $_SERVER["DOCUMENT_ROOT"]."/core/config/path.php";
// composer
require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";

//Dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// twig, после разработки включить кэш
$loader = new \Twig\Loader\FilesystemLoader(__VIEWS);
$twig = new \Twig\Environment($loader);


// для страничек
//echo $twig->render('main.tpl', ['the' => 'variables', 'go' => 'here']);

// для отдельных блоков
//echo $template->renderBlock('block_name', ['the' => 'variables', 'go' => 'here']);


spl_autoload_register(function($class) {// эта ф-я на вход принимает лямбду в виде class в анонимной ф-и
    if (file_exists("$class.php")) {
        require_once "$class.php";
        // мы подключаем его с помощью этой магической ф-и без расширения .php как в случаем с require_once!!!
    }else {
        echo "Что то пошло не так";
    }
});

echo $twig->render('header.tpl');
echo $twig->render('main.tpl');
echo $twig->render('footer.tpl');
