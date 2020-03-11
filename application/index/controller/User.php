<?php
namespace app\index\controller;

class User
{
    public function index()
    {
        return 'index index';
    }

    public function read($id)
    {
        return 'index read id:'.$id;
    }

    public function edit($id)
    {
        return 'index edit id:'.$id;
    }
}