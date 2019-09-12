<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 12/09/19
 * Time: 11:43
 * Doc: Sert à se connecter à une base de données et à retourner une instance de PDO utilisable
 */

class PDOConnection
{

    /**
     * @var string
     */
    private $host;
    /**
     * @var string
     */
    private $port;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $pass;
    /**
     * @var string
     */
    private $dbName;

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * PDOConnection constructor.
     * @param string $host
     * @param string $port
     * @param string $userName
     * @param string $pass
     * @param string $dbName
     */
    public function __construct(string $host, string $port, string $userName, string $pass, string $dbName)
    {
        $this->host = $host;
        $this->port = $port;
        $this->userName = $userName;
        $this->pass = $pass;
        $this->dbName = $dbName;
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO('mysql:host=' .$this->host. ';dbname=' . $this->dbName. ';port=' . $this->port, $this->userName, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }




}