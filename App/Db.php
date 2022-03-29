<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/..' .'/App/config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']
        );
    }

    public function query(string $sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetchAll();

        $res = [];

        foreach ($data as $row) {
            $item = new $class;
            foreach ($row as $key => $val) {
                if (is_numeric($key)) {
                    continue;
                }
                $item->$key = $val;
            }
            $res[] = $item;
        }
        return $res;
    }
}



