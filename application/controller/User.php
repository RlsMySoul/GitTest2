<?php
namespace app\controller;
use app\model\User as UserModel;
use think\Controller;
use think\Db;

class User extends Controller
{
    public function index()
    {
        //UserModel.class.php
        //UserController.class.php

        //$result = UserModel::select();

        //UserModel::destroy(1081);

        //$result = Db::name('user')->select();

        //echo ($result);

        //return $result;

        //$user = UserModel::get(129);
        //$user = UserModel::where('username', '辉夜')->find();

        //echo $user->email;
        //return json($user);

        //$user = new UserModel();
        //echo $user->getEmail();

        //$user = UserModel::all([79, 118, 128]);

        //UserModel::where('gender', '男')->order('id', 'asc')->limit(2)->select();

        //UserModel::where('id', 79)->value('username');
        //UserModel::whereIn('id',[79,118,128])->column('username','id');

        //return json(UserModel::getByUsername('辉夜'));

        //return UserModel::max();

        //print_r($user);
        //return json($user);


        //$user = UserModel::get(21);


        //return $user->getData('status');
        //return json($user->getData());
        //dump($user->nonthing);
        //return $user->status;

        //$result = UserModel::WithAttr('email', function ($value) {
        //    return strtoupper($value);
        //})->select();

        //$result = UserModel::WithAttr('status', function ($value) {
        //    $status = [-1=>'删除', 0=>'禁用', 1=>'正常', 2=>'待审核'];
        //    return $status[$value];
        //})->select();

//        $result = UserModel::withSearch(['email', 'create_time'=>'ctime'],[
//            'email'         =>  'xiao',
//            'ctime'         =>  ['2014-1-1', '2017-1-1'],
//            'sort'          =>  ['price'=>'desc']
//        ])->where('gender', '男')->select();

//        $resut = UserModel::where('id', 111)->select();
//        if ($resut->isEmpty()) {
//            return '数据结果集不存在！';
//        }

//        $result = UserModel::select()->where('price', '<', 80)->order('id', 'asc');
//        $result->hidden(['password'])->append(['nothing'])->withAttr('email', function ($value) {
//            return strtoupper($value);
//        });
//
//        $result = UserModel::select()->filter(function ($data) {
//            return $data['price'] > 100;
//        });

        //$result = UserModel::select()->where('price', '>', '100');
        //$result = UserModel::select()->order('price', 'desc');

        //return dump($result);


//        $result1 = UserModel::where('price', '>', '80')->select();
//        $result2 = UserModel::where('price', '<', '100')->select();
//
//        return json($result1->diff($result2));
//        return json($result2->intersect($result1));

        //return json($result);

    }

    public function insert()
    {
        //$user = new \app\model\User();

//        $user = new UserModel();

//        $user->username     =   '李白';
//        $user->password     =   '123';
//        $user->gender       =   '男';
//        $user->email        =   'libai@163.com';
//        $user->price        =   100;
//        $user->details      =   '123';
//        $user->uid          =   1011;
//        $user->create_time  =   date('Y-m-d H:i:s');

//        $insert = $user->save([
//            'username'      =>  '李白',
//            'password'      =>  '123',
//            'gender'        =>  '男',
//            'email'         =>  'libai@163.com',
//            'price'         =>  100,
//            'details'       =>  '123',
//            'uid'           =>  1011,
//            'create_time'   =>  date('Y-m-d H:i:s')
//        ]);

//        $dataAll = [
//            [
//                'username'      =>  '李白1',
//                'password'      =>  '123',
//                'gender'        =>  '男',
//                'email'         =>  'libai@163.com',
//                'price'         =>  100,
//                'details'       =>  '123',
//                'uid'           =>  1011,
//                'create_time'   =>  date('Y-m-d H:i:s')
//            ],
//            [
//                'username'      =>  '李白2',
//                'password'      =>  '123',
//                'gender'        =>  '男',
//                'email'         =>  'libai@163.com',
//                'price'         =>  100,
//                'details'       =>  '123',
//                'uid'           =>  1011,
//                'create_time'   =>  date('Y-m-d H:i:s')
//            ]
//        ];
//
//        $user = new UserModel();
//        print_r($user->saveAll($dataAll));

        //echo $user->id;
        //echo $insert;
        //return Db::getLastSql();
        //print_r($user);

        $user = new UserModel();

        $user->username     =   '李白';
        $user->password     =   '123';
        $user->gender       =   '男';
        $user->email        =   'libai@163.com';
        $user->price        =   100;
        $user->details      =   '123';

        $user->save();

    }

    public function delete()
    {
        //$user = UserModel::get(127);
        //print_r($user->delete());

        //UserModel::destroy(126);

        //UserModel::destroy([123, 124, 125]);

        //UserModel::where('id', '>', 120)->delete();

        UserModel::destroy(function ($query) {
            $query->where('id', '>', 118);
        });

    }

    public function update()
    {
//        $user = UserModel::get(118);
//        $user->username     =   '李黑';
//        $user->email        =   'lihei@163.com';
//        $user->isAutoWriteTimestamp(false)->readonly['username', 'email']->save();

//        $user = UserModel::where('username', '李黑')->find();
//        $user->username     =   '李白';
//        $user->email        =   'libai@163.com';
//        echo $user->isUpdate(true)->save();

//        $user = UserModel::get(118);
//        //$user->price        =   Db::raw('price+1');
//        $user->price        =   ['inc', 1];
//        echo $user->save();

//        $user = new UserModel();
//        $user->save([
//            'username'      =>  '李黑',
//            'email'         =>  'lihei@163.com'
//        ],['id'=>118]);

//        $user = new UserModel();
//        $user->saveAll([
//            ['id'=>118, 'username'=>'李白', 'email'=>'libai@163.com'],
//            ['id'=>128, 'username'=>'李白', 'email'=>'libai@163.com'],
//            ['id'=>129, 'username'=>'李白', 'email'=>'libai@163.com']
//        ]);

//        UserModel::where('id', 118)->update([
//            'username'      =>  '李黑',
//            'email'         =>  'lihei@163.com'
//        ]);

//        UserModel::update([
//            'id'            =>  118,
//            'username'      =>  '李黑',
//            'email'         =>  'lihei@163.com'
//        ]);

        $user = UserModel::get(165);
        $user->username     =   '李白';
        //$user->email        =   'lihei@163.com';
        $user->save();
    }

    public function typeConversion()
    {
        $user = UserModel::get(21);

        var_dump($user->price);
        var_dump($user->status);
        var_dump($user->create_time);
        var_dump($user->email);
    }

    public function queryScope()
    {
        //$result = UserModel::scope('gendermale')->select();
        //$result = UserModel::genderMale()->select();

        $result = UserModel::useGlobalScope(false)->emailLike('xiao')->priceGreater(80)->select();

        //return Db::getLastSql();
        return json($result);
    }

    public function view()
    {
        $user = UserModel::get(21);
        $this->assign('user', $user);
        return $this->fetch();
    }

    public function output()
    {
        $user = UserModel::get(21);
        //print_r($user->toArray());
        //print_r($user->hidden(['password', 'update_time'])->toArray());
        print_r($user->toJson());
    }

    public function json()
    {
//        $data = [
//            'username'      =>      '辉夜',
//            'password'      =>      '123',
//            'gender'        =>      '女',
//            'email'         =>      'huiye@163.com',
//            'price'         =>      90,
//            'details'       =>      ['content'=>123],
//            'uid'           =>      1011,
//            'list'          =>      ['username'=>'李白', 'gender'=>'男', 'email'=>'libai@163.com', 'uid'=>1011]
//        ];
//
//        Db::name('user')->json(['details', 'list'])->insert($data);

        //$user = Db::name('user')->json(['details','list'])->where('id', 191)->find();
        //dump($user);
        //return json($user);

        //$user = Db::name('user')->json(['details','list'])->where('list->username', '辉夜')->find();
        //return json($user);

        //$data['list']   =   ['username'=>'李黑', 'gender'=>'女'];
        //Db::name('user')->json(['details','list'])->where('id', 191)->update($data);

//        $data['list->gender']   =   '男';
//        Db::name('user')->json(['details','list'])->where('id', 191)->update($data);

//        $user = new UserModel();
//
//        $user->username     =   '李白';
//        $user->password     =   '123';
//        $user->gender       =   '男';
//        $user->email        =   'libai@163.com';
//        $user->price        =   100;
//        $user->status       =   1;
//        $user->details      =   ['content'=>123];
//        $user->list         =   ['username'=>'辉夜', 'gender'=>'女','email'=>'huiye@163.com','uid'=>1011];
//
//        $user->save();

        //$user = UserModel::get(191);
        //return $user->list->username;
        //$user = UserModel::where('list->username', '李黑')->find();
        //return json($user);
//
//        $user = UserModel::get(191);
//        $user->list->username = '李白';
//        $user->save();
    }

    public function softDelete()
    {
//        Db::name('user')
//                    ->where('id', 195)
//                    ->useSoftDelete('delete_time', date('Y-m-d H:i:s'))
//                    ->delete();
//
//        return Db::getLastSql();

        //$user = UserModel::select();

        //$user = UserModel::get(194);
        //$user->delete();

        //$user = UserModel::withTrashed()->select();
        //$user = UserModel::onlyTrashed()->select();
        //$user = UserModel::onlyTrashed()->find();
        //$user->restore();

        $user = UserModel::onlyTrashed()->get(195);
        $user->delete(true);

        //return Db::getLastSql();
        //return json($user);
    }
}