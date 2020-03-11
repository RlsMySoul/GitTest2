<?php
namespace app\behavior;

class Test
{
    public function run($params)
    {
        //echo $params.'，只要触发，就执行';
    }

    public function appInit()
    {
        //echo '初始化触发！';
    }

    public function eat($params)
    {
        //echo $params.'触发！';
    }
}