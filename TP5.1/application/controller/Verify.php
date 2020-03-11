<?php
namespace app\controller;
use think\Controller;
//use think\Validate;
use think\facade\Request;
use think\facade\Validate;
use think\validate\ValidateRule;

class Verify extends Controller
{
    //开启批量
    protected $batchValidate = true;
    //开启异常
    protected $failException = true;

    public function index()
    {
        $data = [
            'name'      =>      '12',
            'price'     =>      190,
            'email'     =>      'xiaoxin163.com'
        ];

        $validate = new \app\validate\User();

        if (!$validate->scene('edit')->batch()->check($data)) {
            dump($validate->getError());
        }

//        $result = $this->validate([
//            'name'      =>      '',
//            'price'     =>      190,
//            'email'     =>      'xiaoxin163.com'
//        ], '\app\validate\User.edit');
//
//        if ($result !== true) {
//            dump($result);
//        }

//        $validate = new Validate();
//        //$validate->rule('name', 'require|max:10');
//        $validate->rule([
//            'name|用户'              =>      'require|max:10',
//            'price|售价'             =>      'number|between:1,100',
//            'email|邮箱'             =>      'email'
//        ]);

        //$validate->rule('name', ValidateRule::isRequire()->max(10));
//        $validate->rule([
//            'name'              =>      ValidateRule::isRequire()->max(10),
//            'price'             =>      ValidateRule::isNumber()->between('1,100'),
//            'email'             =>      ValidateRule::isEmail()
//        ]);
//        $validate->message([
//            'name.require'      =>      'name_require',
//            'name.max'          =>      '姓名不得大于20 位',
//            'price.number'      =>      '价格必须是数字',
//            'price.between'     =>      '价格必须1-100 之间',
//            'email'             =>      '邮箱的格式错误'
//        ]);

//        $validate->rule([
//            'name'      =>       function ($value, $data) {
//                return $value != '' ? true : '姓名不可以为空！';
//            }
//        ]);

//        if (!$validate->batch()->check($data)) {
//            dump($validate->getError());
//        }
    }

    public function read($id)
    {
        return 'read:'.$id;
    }

    public function facade()
    {
        //dump(Validate::isEmail('bnbbs@163.com'));
        dump(Validate::checkRule(10, 'number|between:1,10'));
    }

    public function check()
    {
        $data = [
            'user'      =>      input('post.user'),
            '__token__' =>      input('post.__token__')
        ];

        $validate = new \think\Validate();
        $validate->rule([
            'user'      =>      'require|token'
        ]);

        if (!$validate->batch()->check($data)) {
            dump($validate->getError());
        }
    }

    public function make()
    {
        //dump(Validate::number(10));
        //dump(Validate::integer(-10));
        //dump(Validate::chs('蜡笔小新'));
        //dump(Validate::activeUrl('www.baidu.com'));
        //dump(Validate::url('http://www.baidu.com/public/index.html'));
        //dump(Validate::ip('127.0.0.1'));
        //dump(Validate::dateFormat('20-1-1', 'y-m-d'));
        //dump(Validate::eq('100', 120));
        //'field' =>  'eq:100', '=:100', 'same:100'
        //dump(Validate::regex(123456, '\d{6}'));

        //dump(Validate::file(Request::file('image')));
        //dump(Validate::image(Request::file('image'), '150,150,gif'));
        dump(Validate::fileExt(Request::file('image'), 'jpg,png,gif'));
    }
}