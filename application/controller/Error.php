<?php
namespace app\controller;
use think\Request;

class Error
{
    public function index(Request $r)
    {
        return '此控制器不存在：'.$r->controller();
    }

    public function miss()
    {
        return '路由规则不存在，404！';
    }
}