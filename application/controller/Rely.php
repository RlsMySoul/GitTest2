<?php
namespace app\controller;
//use think\Controller;
//
//class Rely extends Controller
//{
//    public function index()
//    {
//        return $this->request->param('name');
//    }
//}

//use think\Request;
//
//class Rely
//{
//    public function index(Request $request)
//    {
//        return $request->param('name');
//    }
//}

//use think\Request;
//
//class Rely
//{
//    protected $request;
//
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
//
//    public function index()
//    {
//        return $this->request->param('name');
//    }
//}

use think\facade\Request;
use think\facade\Url;

class Rely
{
    public function index()
    {
        //return Request::param('name');
        //return Request::url(true);

        //dump(Request::has('id', 'get'));
        //dump(Request::has('name', 'post'));
        //dump(Request::param('name'));
        //dump(Request::param());
        ///dump(Request::param(false));
        //dump(Request::param(true));
        //dump(Request::param('id', 1));
        //dump(Request::param('name', '', 'htmlspecialchars'));
        //dump(Request::only(['ID']));
        //dump(Request::param('ID/d'));
        //dump(input('?get.id'));
        //dump(input('param.ID'));

        //return Request::method();
        //return Request::method(true);
        //dump(Request::isGet());
        //dump(Request::isPost());
        //dump(Request::isPut());

        //dump(Request::isAjax());
        dump(Request::header());
    }

    public function read(\think\Request $request)
    {
        return $request->name;
    }

    public function edit($id)
    {
        dump(Request::param('id'));
        dump(Request::get('id'));
        dump(Request::route('id'));
        return $id;
    }

    public function url()
    {
        return Url::build().', '.Request::ext();
    }

    public function get($id, $name)
    {
        return 'get:'.$id.', '.$name;
    }

    public function res()
    {
        $data = 'Hello, World';
        //return response($data, 201);
        return response($data)->code(202)->header(['Cache-control' => 'no-cache,must-revalidate']);
    }

    public function rdc()
    {
        //return redirect('http://www.baidu.com');
        //return redirect('edit/5');
        //return redirect('/address/details/id/5');
        return redirect('/address/details')->params(['id'=>5]);
    }

    public function image()
    {
        return download('12.jpg', 'dasgl');
    }

    public function text()
    {
        $data = '这是一个测试文本';
        return download($data, 'text.txt', true);
    }
}

//class Rely
//{
//    public function index()
//    {
//        return request()->param('name');
//    }
//}