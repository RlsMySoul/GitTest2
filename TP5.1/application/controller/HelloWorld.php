<?php
namespace app\controller;

class HelloWorld
{
    public function index()
    {
        return 'Hello, World!';
    }

    public function det($id)
    {
        return 'det的id:'.$id;
    }
}