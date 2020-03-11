<?php
namespace app\controller;
use think\facade\Request;

class Upload
{
    public function index()
    {
        $file = Request::file('image');
        //$info = $file->move('../application/uploads');
//        $info = $file->validate([
//            'size'  =>  102400,
//            'ext'   =>  'jpg,png,gif'
//        ])->move('../application/uploads');
        //$info = $file->rule('date')->move('../application/uploads');
        //$info = $file->move('../application/uploads', '');
        $info = $file->move('../application/uploads');
        if ($info) {
            echo $info->getExtension();
            echo '<br>';
            echo $info->getSaveName();
            echo '<br>';
            echo $info->getFileName();
        } else {
            echo $file->getError();
        }
    }

    public function uploads()
    {
        $files = Request::file('image');
        foreach ($files as $file) {
            $info = $file->move('../application/uploads');
            if ($info) {
                echo $info->getExtension();
                echo '<br>';
                echo $info->getSaveName();
                echo '<br>';
                echo $info->getFileName();
            } else {
                echo $file->getError();
            }
        }
    }
}