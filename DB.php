<?php

class DB {
    private static $pdo=null;

    //Jei sukuriam privatu konstruktoriu, tai apsidraudziam kad is isores niekas negaletu iskviesti new funkcijos
    private function __construct()
    {
    }

    public static function getPDO() {
        if (self::$pdo==null) {
            $dsn="mysql:host=localhost;dbname=product_list;charset=utf8mb4";
            self::$pdo=new PDO($dsn, 'root','');
        }
        return self::$pdo;
    }
}
