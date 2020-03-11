<?php
namespace app\taglib;
use think\template\TagLib;

class Html extends TagLib
{
    // 标签定义
    protected $tags = [
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'font'     => ['attr' => 'color,size', 'close' => 1],
    ];

    public function tagFont($tag, $content)
    {
        $parseStr = '<span style="font-size:'. ($tag['size'] * 10) .'px;color:'. $tag['color'] .';">' . $content . '</span>';
        return $parseStr;
    }
}