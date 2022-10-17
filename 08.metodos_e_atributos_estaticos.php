<?php

use Login as GlobalLogin;

class Login{
    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." logou!<br>";
    }
    
    public function sairSistema() {
        echo "O usuário deslogou!";
    }
}

Login::$user = "Igor";
Login::verificaLogin();

$pessoa = new Login();
$pessoa->sairSistema();