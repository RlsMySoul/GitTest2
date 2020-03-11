<?php
namespace app\controller;
use think\Controller;
use think\facade\Url;

/**
 * Class Collect
 * @package app\controller
 * @route('col')
 */
class Collect extends Controller
{
    public function index()
    {
        //return Url::build('Blog');
        //return Url::build('Blog/create');
        //return Url::build('Blog/read', 'id=5', 'html', '127.0.0.1');
        //return Url::build('Blog/read', 'id=5&uid=10');
        //return Url::build('Blog/read', ['id'=>5, 'uid'=>10]);
        //return Url::build('Blog/read?id=6&uid=10#name', '', 'shtml');
        Url::root('/index.php');
        return Url::build('read/5', '', 'html', '127.0.0.1');
        //return 'index';
    }

    /**
     * @param $id
     * @return string
     * @route('col/:id', 'get')
     * ->ext('html')
     * ->pattern(['id'=>'\d+'])
     *
     */
    public function read($id)
    {
        //echo $this->request->param('flag');
        return 'read id:'.$id;
    }

    public function who($name)
    {
        return 'your name is:'.$name;
    }

    public function edit($id)
    {
        return 'edit id:'.$id;
    }


    public function miss()
    {
        return 'col miss 404';
    }
}