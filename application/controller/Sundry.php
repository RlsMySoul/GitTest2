<?php
namespace app\controller;
use think\facade\Cookie;
use think\facade\Lang;
use think\facade\Session;

class Sundry
{
    public function index()
    {
        dump(Session::get());
    }

    public function sess()
    {

//        Session::init([
//            'prefix'         => 'abc',
//            'auto_start'     => true,
//        ]);



        //Session::prefix('tp');
        //Session::set('user', 'Mr.Lee');

        //echo Session::pull('user');

        //Session::clear();
        //Session::clear('abc');
        //Session::delete('user');
        //Session::delete('user');
        //Session::delete('user','abc');
        //echo Session::get('user');
        //echo $_SESSION['think']['user'];
        //dump(Session::has('user'));
        //dump(Session::get());

        Session::flash('user', 'Mr.Lee');
        //Session::flush();
        Session::clear();
        dump(Session::get());
        echo Session::get('user');

        //dump($_SESSION);
    }

    public function cookie()
    {
        Cookie::prefix('tp_');

        //Cookie::set('user', 'Mr.Lee');
        //Cookie::set('arr', [1,2,3]);
        //Cookie::set('user', 'Mr.Lee', 60 * 60  * 24 * 7);
//        Cookie::set('user2', 'Mr.Wang', [
//            'expire'    =>  60 * 60  * 24 * 7,
//            'prefix'    =>  'think_'
//        ]);
        //Cookie::forever('user3', 'Mr.Zhang');

        //echo Cookie::has('user2', 'think_');
        //echo Cookie::get('user');
        //echo Cookie::get('user2', 'think_');
        //Cookie::delete('user');
        //Cookie::delete('user2', 'think_');
        //Cookie::clear('tp_');
    }

    public function error()
    {
        echo Lang::get('require_name');
        echo '<br>';
        echo Lang::get('email_error');
    }
}