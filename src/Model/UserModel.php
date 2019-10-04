<?php

namespace src\Model;

use Core\Database;

class UserModel extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save()
    {
        $request = $this->dbh->prepare('INSERT INTO Users (email, password) VALUES (:email, :password)');
        $request->bindValue(':email', $this->email);
        $request->bindValue(':password', password_hash($this->password, PASSWORD_DEFAULT));
        $request->execute();
    }

    public function login()
    {
        $request = $this->dbh->prepare('SELECT email, password FROM Users WHERE :email, :password');
        $request->bindValue(':email', $this->email);
        $request->bindValue(':password', password_hash($this->password, PASSWORD_DEFAULT));
        $request->execute();
    }
}