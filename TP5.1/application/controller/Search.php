<?php
namespace app\controller;
use think\Db;

class Search
{
    public function index()
    {
        //$result = Db::name('user')->where('id', 80)->select();
        //$result = Db::name('user')->where('id','=',80)->select();
        //$result = Db::name('user')->where('id','<>',80)->select();
        //$result = Db::name('user')->where('email','like',['xiao%', 'wu%'], 'or')->select();
        //$result = Db::name('user')->whereNotLike('email','xiao%')->select();
        //$result = Db::name('user')->whereBetween('id',[20,25])->select();
        //$result = Db::name('user')->whereIn('id','19,20,21')->select();
        //$result = Db::name('user')->whereNull('uid')->select();
        //$result = Db::name('user')->where('id', 'exp', 'In (19,20,21)')->select();
        //$result = Db::name('user')->whereExp('id', 'In (19,20,21)')->select();
        //$result = Db::name('user')->where('create_time', '> time', '2018-1-1')->select();
        //$result = Db::name('user')->where('create_time', 'between time', ['2018-1-1 12:12:12', '2019-9-21'])->select();
        //$result = Db::name('user')->whereTime('create_time', '>', '2018-1-1')->select();
        //$result = Db::name('user')->whereBetween('create_time', ['2018-1-1 12:12:12', '2019-9-21'])->select();
        //$result = Db::name('user')->whereBetweenTime('create_time', '2018-1-1 12:12:12', '2019-9-21')->select();
        //$result = Db::name('user')->whereTime('create_time', 'd')->select();
        //$result = Db::name('user')->whereTime('create_time', '-2 hour')->select();
        //$result = Db::name('user')->whereBetweenTimeField('create_time', '-2 hour')->select();

        //$result = Db::name('user')->count();
        //$result = Db::name('user')->count('uid');
        //$result = Db::name('user')->max('price');
        //$result = Db::name('user')->max('price', false);
        //$result = Db::name('user')->min('price');
        //$result = Db::name('user')->avg('price');
        //$result = Db::name('user')->sum('price');

        //$subQuery = Db::name('user')->fetchSql(true)->select();
        //$subQuery = Db::name('user')->buildSql(true);

        //$subQuery = Db::name('two')->field('uid')->where('gender', '男')->buildSql(true);
        //$result = Db::name('one')->where('id', 'exp', 'IN '.$subQuery)->select();

        $result = Db::name('one')->where('id', 'in', function ($query) {
            $query->name('two')->field('uid')->where('gender', '男');
        })->select();

        //return Db::getLastSql();
        return json($result);
    }
}