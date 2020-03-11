<?php
namespace app\controller;
use think\Controller;

class Short extends Controller
{
    public function index()
    {
        return 'index';
    }

    public function getInfo()
    {
        return 'getInfo';
    }

    public function postInfo()
    {
        return 'postInfo';
    }

    public function getList()
    {
        return 'getList';
    }
}