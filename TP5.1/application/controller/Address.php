<?php
namespace app\controller;
use think\Controller;

class Address extends Controller
{
    public function index()
    {
        return 'Address index';
    }

    public function details($id)
    {
        //echo $_GET['flag'];
        //echo $this->request->param('flag');
        return 'details调用的id:'.$id;
    }

    public function getUser(\app\model\User $user)
    {
        return json($user);
    }

    public static function stat($id)
    {
        return 'stat调用的id:'.$id;
    }

    public function search($id, $uid)
    {
        return 'search调用的id:'.$id.'，uid:'.$uid;
    }

    public function find($id, $content = '')
    {
        return 'find调用的id:'.$id.'，content:'.$content;
    }

    public function url()
    {
        //return url('Address/details', ['id'=>10]);
        return url('det', ['id'=>10]);
    }

}