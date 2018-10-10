<?php

namespace App\Model;

use PDO;

class MysqlConnect{
    private static $pdo;
    public  static function Conecta_Db() {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=ilibert;charset=utf8", 'root', '');
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
