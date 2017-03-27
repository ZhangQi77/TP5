<?php
namespace app\index\controller;
use use think\Db;

class Index
{
    public function index()
    {
        $result = Db::execute('insert into data (id, name ,status) values (5, "thinkphp",1)');
		dump($result);
    }
}
