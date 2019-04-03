<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 01.04.2019
 * Time: 22:03
 */
require_once __DIR__.'/autoload.php';

$db = new \App\Db();

$res = $db->execute('CREATE TABLE foo (id SERIAL)');

var_dump($res);
//var_dump($db->dbh);
//echo 'test';