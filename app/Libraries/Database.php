<?php

class Database
{
    
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DBNAME = 'framework';
    const PORT = 3306;
    const CHARSET = 'utf8mb4';
    const OPTIONS = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_PERSISTENT => true,
        \PDO::ATTR_EMULATE_PREPARES => false
    ];
    const DSN = 'mysql:host=' . self::HOST . 
            '; dbname=' . self::DBNAME . 
            '; port=' . self::PORT .
            '; charset=' . self::CHARSET;
    
    private $dbh;
    
    public function __construct()
    {
        try
        {
            $this->dbh = new \PDO(self::DSN, self::USER, self::PASS, self::OPTIONS);
        } catch (\PDOException $ex) {
            echo 'Error: ' . $ex->getMessage() . '<br />';
            die();
        }
        
    }
    
    /*
    public function Conectar()
    {
        try
        {
            $pdo = new \PDO(self::DSN, self::USER, self::PASS);
            return $pdo;
        } catch (\PDOException $ex) {
            echo 'Error: ' . $ex->getMessage() . '<br />';
            die();
        }
    }
     
     */
}
