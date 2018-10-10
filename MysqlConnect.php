<?php

namespace App\Model;

use PDO;

class MysqlConnect{
    private static $pdo;
    public  static function Conecta_Db() {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=DATANAME;charset=utf8", 'USER', 'SENHA');
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
