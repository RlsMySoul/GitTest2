<?php
namespace app\controller;
use think\Controller;

class Block extends Controller
{
    public function index()
    {
        $this->view->engine->layout(true);
        $this->assign('title', '模版');
        return $this->fetch('index');
    }

    public function extend()
    {
        $this->assign('title', '模版');
        return $this->fetch('extend');
    }
}