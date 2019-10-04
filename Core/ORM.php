<?php

namespace Core;

class ORM extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function verify_save() {
        $check = $this->dbh->prepare('SELECT email FROM Users WHERE email = :email');
        $check->bindValue(':email', $this->email);
        $check->execute();

        if ($check->rowCount() < 1) {
            $model = new \src\Model\UserModel();
            $model->save();

            return true;
        } else {
            return false;
        }
    }

    public function create($table, $fields)
    {
        $columns = "";
        $values = "";
        foreach ($fields as $key => $value) {
            $columns .= $key . ", ";
            $values .= $value . ", ";
        }
        $request = $this->dbh->prepare('INSERT INTO ' . $table . ' (' . substr($columns, 0, -2) . ') VALUES (' . substr($values, 0, -2) . ')');
        $request->execute();
    }

    public function read($table, $id)
    {
        $request = $this->dbh->prepare('SELECT * FROM ' . $table . ' WHERE id LIKE ' . $id);
        $request->execute();
    }

    public function update($table, $id, $fields)
    {
        $data = "";
        foreach ($fields as $key => $value) {
            $data .= $key . " = " . $value . ", ";
        }
        $request = $this->dbh->prepare('UPDATE ' . $table . ' SET ' . substr($data, 0, -2) . ' WHERE id LIKE ' . $id);
        $request->execute();
    }

    public function delete($table, $id)
    {
        $request = $this->dbh->prepare('DELETE FROM ' . $table . ' WHERE id LIKE ' . $id);
        $request->execute();
    }

    public function readall($table)
    {
        $request = $this->dbh->prepare('SELECT * FROM ' . $table);
        $request->execute();
    }
}