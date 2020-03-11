<?php
namespace app\controller;

use think\facade\Log;

class Record
{
    public function index()
    {
        //Log::close();
        //Log::record('测试日志！');
        //Log::record('测试日志！', 'error');
        Log::record('测试日志！', 'diy');
        //Log::clear();
        //$logs = Log::getLog();
        //dump($logs);
    }
}