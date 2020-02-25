<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.02.2020
 * Time: 19:20
 */


namespace connect;


class connect {
    
    protected function sql() {
       return $pdo = new PDO("mysql:host=$_ENV[host];$_ENV[dbname]","$_ENV[user]","");
    }
    
}