<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 01.04.2019
 * Time: 22:57
 */

namespace App;


class Db
{
    protected $dbh;
    public function __construct()
    {
     $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
    }
    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

}