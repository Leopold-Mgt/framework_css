<?php

namespace Core;

class Database
{
    protected $dbh;
    protected $email;
    protected $password;

    public function __construct()
    {
        try {
            $this->dbh = new \PDO("mysql:host=localhost;dbname=PiePHP", "mleopold", "admin");
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];
        }
    }
}