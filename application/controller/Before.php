<?php
namespace app\controller;
use think\Controller;

class Before extends Controller
{
    protected $beforeActionList = [
        'first',
        'second'    =>  ['except'=>'one'],
        'third'     =>  ['only'=>'one,two']
    ];

    protected $flag = true;

    protected function first()
    {
        echo 'first<br/>';
    }
    protected function second()
    {
        echo 'second<br/>';
    }
    protected function third()
    {
        echo 'third<br/>';
    }

    public function index()
    {
        if ($this->flag) {
            $this->success('注册成功！', '../');
        } else {
            $this->error('失败！');
        }
        return 'index';
    }

    public function one()
    {
        return 'one';
    }

    public function two()
    {
        return 'two';
    }

}