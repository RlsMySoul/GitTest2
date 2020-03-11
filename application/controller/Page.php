<?php
namespace app\controller;
use think\Controller;
use think\Db;

class Page extends Controller
{
    public function index()
    {
//        $list = Db::name('user')->paginate(5, 10)->each(function ($item, $key) {
//            $item['gender'] = '【'.$item['gender'].'】';
//            return $item;
//        });
        $list = Db::name('user')->paginate(5, true);

        //$page = $list->render();

        //echo $list->total();
        //echo $list->currentPage();
        //echo $list->count();


        $this->assign('list', $list);
        //$this->assign('page', $page);
        return $this->fetch('index');
        //return json($list);
    }
}