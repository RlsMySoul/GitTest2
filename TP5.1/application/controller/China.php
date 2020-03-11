<?php
namespace app\controller;
use app\model\User;
use think\Db;

class China
{
    public function index()
    {
//        $result = Db::name('user')->where([
//            'price'         =>      100,
//            'gender'        =>      '男'
//        ])->select();

//        $result = Db::name('user')->where([
//            'price'         =>      [60,70,80],
//            'gender'        =>      '男'
//        ])->select();

//        $result = Db::name('user')->where([
//            ['price', '=', 100],
//            ['gender', '=', '男']
//        ])->select();

        //$map[] = ['price', 'in', [60,70,80]];
        //$map[] = ['gender', '=', '男'];
        //$result = Db::name('user')->where($map)->select();

        //$result = Db::name('user')->where('gender="男" AND price IN (60, 70, 80)')->select();
        //$result = Db::name('user')->field('id,username,email')->select();
        //$result = Db::name('user')->field(['id', 'username', 'email'])->select();
        //$result = Db::name('user')->field('SUM(price)')->select();
        //$result = Db::name('user')->field(['id', 'LEFT(email, 5)'=>'leftemail'])->select();
        //$result = Db::name('user')->alias('a')->field('details, uid', true)->select();

        //$result = Db::name('user')->limit(5)->select();
        //$result = Db::name('user')->limit(2, 5)->select();

        //第一页
        //$result = Db::name('user')->limit(0, 5)->select();
        //第二页
        //$result = Db::name('user')->limit(5, 5)->select();

        //第一页
        //$result = Db::name('user')->page(1, 5)->select();
        //第二页
        //$result = Db::name('user')->page(2, 5)->select();

        //$result = Db::name('user')->order('id', 'desc')->select();
        //$result = Db::name('user')->order(['create_time'=>'desc', 'price'=>'asc'])->select();
        //$result = Db::name('user')->field('gender, sum(price)')->group('gender')->select();

        //$result = Db::name('user')->field('gender, sum(price)')->group('gender,password')->select();

//        $result = Db::name('user')
//                            ->field('gender, sum(price)')
//                            ->group('gender')
//                            ->having('sum(price)>600')
//                            ->select();

        $result = User::select();

        return json($result);
    }

    public function insert()
    {
        $data = [
            'username'      =>      '辉夜',
            'password'      =>      '123',
            'gender'        =>      '女',
            'email'         =>      'huiye@163.com',
            'price'         =>      90,
            'details'       =>      '123',
            'create_time'   =>      date('Y-m-d H:i:s')
        ];

        $insert = Db::name('user')->field('username, password,details,create_time')->insert($data);

        return $insert;
    }

}