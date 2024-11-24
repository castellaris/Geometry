<?php
ob_start();
// Only include the class definition if it hasn't been defined yet
if (!class_exists('Database')) {
    class Database
    {
        private static $cont = null;

        public static function connect()
        {
            $host = 'den1.mysql1.gear.host';
            $db = 'geometry1';
            $user = 'geometry1';
            $pass = 'Ln0F6F~JvUJ_';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES    => false,
            ];

            if (null == self::$cont) {
                try {
                    self::$cont = new PDO($dsn, $user, $pass, $opt);
                } catch (PDOException $e) {
                    echo "Невозможно установить соединение с базой данных. " . $e->getMessage();
                }
            }
            return self::$cont;
        }

        public static function disconnect()
        {
            self::$cont = null;
        }
    }
}
?>
