<?php

namespace Helper;

/**
 * Class Database
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Helper
 */
class Database
{
    private static $pdo = null;

    /**
     * @return \PDO $pdo
     */
    public static function get()
    {
        if(is_null(self::$pdo)){
            try{
                self::$pdo = new \PDO('mysql:host=localhost;dbname=poo-si','root', 'root');
                self::$pdo->exec("SET NAMES UTF8;");
            } catch(\PDOException $exception) {
                die('Oops, I did it again.');
            }
        }
        return self::$pdo;
    }
}