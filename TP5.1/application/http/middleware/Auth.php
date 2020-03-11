<?php
namespace app\http\middleware;
use think\Request;

class Auth
{
    public function handle(Request $request, \Closure $next, $name)
    {
        echo $name;
        if ($request->param('id') == '10') {
            $request->name = 'Mr.Lee';
            echo '管理员！';
        }
        return $next($request);
    }
}