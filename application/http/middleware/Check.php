<?php

namespace app\http\middleware;
use think\Request;

class Check
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->param('name') == 'index') {
            echo '跳转！';
        }
        return $next($request);
    }
}
