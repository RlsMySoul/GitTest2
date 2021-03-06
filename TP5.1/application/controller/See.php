<?php
namespace app\controller;
use think\Controller;
use app\model\User as UserModel;
use think\facade\Request;
use think\facade\Session;

class See extends Controller
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub

//        $this->filter(function ($content) {
//            return str_replace('1', '<br>', $content);
//        });
    }

    public function index()
    {
        //自动定位
        //return $this->fetch();
        //return $this->fetch('edit');
        //return $this->fetch('public/edit');
        //return $this->fetch('../template/public/edit');
        //return $this->fetch('admin@public/edit');
        //return $this->fetch('/edit');
        //return view('edit');

        $this->assign('name', 'Mr.Lee');
//        $this->assign([
//            'username'          =>          '辉夜',
//            'email'             =>          'huiye@163.com'
//        ]);
//
//        return $this->fetch('index');

//        return $this->fetch('index', [
//            'username'          =>          '辉夜',
//            'email'             =>          'huiye@163.com'
//        ]);

//        return view('index', [
//            'username'          =>          '辉夜',
//            'email'             =>          'huiye@163.com'
//        ]);

//        $this->filter(function ($content) {
//            return str_replace('1', '<br>', $content);
//        });

        return view('index')->assign([
            'username' => '辉1夜',
            'email' => 'huiye@163.com'
        ]);

    }

    public function testDisplay()
    {
        $content = '{$username}.{$email}';
        return $this->display($content, [
            'username' => '辉1夜',
            'email' => 'huiye@163.com'
        ]);
    }

    public function varOutput()
    {
        $this->assign('name', '');

        $data['username'] = '辉夜';
        $data['email'] = 'huiye@163.com&';
        $this->assign('user', $data);

        $obj = new \stdClass();
        $obj->username = '辉夜';
        $obj->email = 'huiye@163.com';
        $this->assign('obj', $obj);

        $this->assign('password', '123456');
        $this->assign('time', time());
        $this->assign('number', 14);

        return $this->fetch('var');
    }

    public function loop()
    {
        $list = UserModel::all();
        $this->assign('list', $list);
        return $this->fetch('loop');
    }

    public function compare()
    {
        $this->assign('username', 'Mr.Lee');
        $this->assign('number', 10);
        return $this->fetch('compare');
    }

    public function condition()
    {
        $this->assign('number', 20);

        $user = new \stdClass();
        $user->username = 'Mr.Lee';
        $this->assign('user', $user);

        $this->assign('email', '');

        return $this->fetch('condition');
    }

    public function other()
    {
        //$this->assign('name', 'ThinkPHP');
        return $this->fetch('other');
    }

    public function vali()
    {
        echo Request::token();
        echo '<br>';
        echo Session::get('__token__');
        return $this->fetch('vali');
    }

    public function code()
    {
        return $this->fetch('code');
    }

}