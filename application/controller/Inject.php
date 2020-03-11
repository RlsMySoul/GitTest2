<?php
namespace app\controller;

//use app\model\One;
//
//class Inject
//{
//    protected $one;
//
//    public function __construct(One $one)
//    {
//        $this->one = $one;
//    }
//
//    public function index()
//    {
//        return $this->one->name;
//    }
//}

//use app\common\Test;

use app\facade\Test;
use think\Controller;
use think\Exception;
use think\exception\ErrorException;
use think\exception\HttpException;
use think\facade\Env;
use think\facade\Hook;
use think\facade\Log;
use think\Request;

class Inject extends Controller
{

    //protected $middleware = ['Auth', 'Check'];
    protected $middleware = [
        'Auth'  =>  ['only' =>  ['index', 'read']]
    ];

    public function index(Request $request)
    {
        //bind('user', 'app\model\User');
        //return app('user')->name;
        //$user = app('user', true);
        //return $user->name;
        //return app('app\model\One')->name;

//        bind([
//            'one'           =>      'app\model\One',
//            'user'           =>      'app\model\User',
//        ]);
//        bind([
//            'one'           =>      \app\model\One::class,
//            'user'           =>      \app\model\User::class,
//        ]);

        //return app('user')->name;

        //return app('request')->param('name');
        //return request()->param('name');

        //return '456'.$request->name;
        //return \think\facade\Request::param('name');

        try {
            echo 0/0;
        } catch (ErrorException $e) {
            echo $e->getMessage();
            Log::record($e->getMessage().':被除数不得为零！', 'error');
        }

        //echo 0/0;

        //return Env::get('think_path');

        //throw new Exception('异常信息', 10086);
        //throw new HttpException(404, '页面不存在！');
        abort(404, '页面不存在！');
        //echo Env::get('app_path');
    }

    public function test()
    {
        //$test = new Test();
        //return $test->hello('world!');

        return Test::hello('Mr.Lee');
    }

    public function bhv()
    {
        Hook::listen('eat', '吃饭');
    }

    public function read($id)
    {
        return 'read:'.$id;
    }
}

