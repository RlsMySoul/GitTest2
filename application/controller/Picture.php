<?php
namespace app\controller;
use think\Image;

class Picture
{
    public function index()
    {
        $image = Image::open('image.png');
//        echo $image->width();
//        echo $image->height();
//        echo $image->type();
//        echo $image->mime();
//        dump($image->size());

        //$image->crop(500,350, 10,10, 200,150)->save('crop1.png');
        //$image->thumb(500,500)->save('thumb1.png');
        //$image->rotate(180)->save('rotate1.png');
        //$image->water('mr.lee.png')->save('water1.png');
        $image->text('Mr.Lee',getcwd().'/1.ttf',30,'#ffffff',9,-50, 5)->save('text1.png');

    }
}