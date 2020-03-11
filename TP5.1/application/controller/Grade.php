<?php
namespace app\controller;
use app\model\User as UserModel;
use app\model\Profile as ProfileModel;

class Grade
{
    public function index()
    {
        //$user = UserModel::get(19);
        //return json($user->profile);
        //echo $user->profile->hobby;

        //关联修改
        //$user = UserModel::get(19);
        //$user->profile->save(['hobby'=>'迷恋大叔']);

        //关联新增
        //$user = UserModel::get(19);
        //$user->profile()->save(['hobby'=>'迷恋大叔']);

        //$profile = ProfileModel::get(1);
        //echo $profile->user->email;

        //$user = UserModel::hasWhere('profile', ['id'=>1])->find();
        //return $user->email;
        //$user = UserModel::hasWhere('profile', function ($query) {
        //    $query->where('profile.id', 1);
        //})->find();
        //return $user->email;


        //$user = UserModel::get(19);
        //return json($user->profile);
        //return json($user->profile()->where('id', '>', 10)->select());

        //$user = UserModel::has('profile', '>=', 2)->select();
        //return json($user);

        //$user = UserModel::hasWhere('profile', ['status'=>1])->select();
        //return json($user);

        //$user = UserModel::get(226);
        //$user->profile()->save(['hobby'=>'测试新增']);
        //$user->profile()->saveAll([
         //   ['hobby'=>'测试新增'],
         //   ['hobby'=>'测试新增']
        //]);

        //$user = UserModel::get(226, 'profile');
        //$user->together('profile')->delete();





    }

    public function before()
    {
//        $list = UserModel::with('profile')->all([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile);
//        }

//        $list = UserModel::with('profile,book')->all([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile.$user->book);
//        }

//        $list = UserModel::withJoin(['profile'=>['user_id','hobby']])->all([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile);
//        }

        $list = UserModel::all([19,20,21]);
        //....
        $list->load('profile');
        foreach ($list as $user) {
            dump($user->profile);
        }
    }

    public function count()
    {
        $list = UserModel::withCount('profile')->all([19,20,21]);
        foreach ($list as $user) {
            echo $user->profile_count.'<br>';
        }

        $list = UserModel::withSum(['profile'=>'ps'], 'status')->all([19,20,21]);
        foreach ($list as $user) {
            echo $user->ps.'<br>';
        }


    }

    public function view()
    {
        $list = UserModel::with('profile')->select();
        //return json($list->hidden(['username','password','profile.status']));
        //return json($list->hidden(['username','password','profile'=>['status', 'id']]));

        //return json($list->visible(['profile.hobby']));

        return json($list->append(['book.title']));
    }

    public function many()
    {
        //$user = UserModel::get(19);
        //return json($user->roles);

        $user = UserModel::get(27);
        //$user->roles()->save(['type'=>'测试管理员']);
        //$user->roles()->save(['type'=>'图片监察员']);
        //$user->roles()->save(1);
        //$user->roles()->attach(2);
        //$user->roles()->attach(2, ['details'=>'测试']);
        $user->roles()->detach([1,2,3]);

    }
}