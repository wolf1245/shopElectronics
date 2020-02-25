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
$_ENV["user"] = 'root';

// подключение путей
require_once $_SERVER["DOCUMENT_ROOT"]."/core/config/path.php";

echo file_get_contents(__VIEWS."header.tpl");


echo file_get_contents(__VIEWS."main.tpl");


echo file_get_contents(__VIEWS."footer.tpl");
