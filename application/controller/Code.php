<?php
namespace app\controller;
use think\captcha\Captcha;
use think\Controller;
use think\facade\Request;

class Code extends Controller
{
    public function index()
    {
        $data = [
            'code'  =>  Request::post('code'),
        ];

        $flag = $this->validate($data, [
            'code|验证码'  =>  'require|captcha'
        ]);

        dump($flag);
    }

    public function show()
    {
        $config = [
            //字体大小
            'fontSize' => 50,
            //验证码位数
            'length' => 4,
            //验证码杂点
            'useNoise' => false,
        ];
        $captcha = new Captcha($config);
        return $captcha->entry(1);
    }

    public function check()
    {
        $captcha = new Captcha();
        dump($captcha->check(Request::post('code'),1));
    }
}