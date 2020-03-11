<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', function ($name) {
    return 'hello '.$name;
});


//\think\facade\Route::pattern([
//    'id'    =>  '\d+',
//    'uid'   =>  '\d+'
//]);

Route::get('/', 'index');
//\think\facade\Route::get('details/:id', 'Address/details')
//                    ->name('det')
//                    ->pattern('id', '\d+');
//\think\facade\Route::get('ad', 'Address/index');
//\think\facade\Route::get('search/:id/:uid$', 'Address/search')
//                    ->pattern([
//                        'id'    =>  '\d+',
//                        'uid'   =>  '\d+'
//                    ]);
//\think\facade\Route::get('find/:id/[:content]', 'Address/find');
//\think\facade\Route::get('url', 'Address/url');
//\think\facade\Route::rule('details/:id', 'Address/details', 'GET');
//\think\facade\Route::rule('details/:id', 'Address/details', 'GET|POST');

//\think\facade\Route::get('details-<id>', 'Address/details');
//\think\facade\Route::get('det-:name-:id', 'Hello_:name/det');

//\think\facade\Route::rule('details/:id', 'Address/details');
//\think\facade\Route::rule('details/:id', 'group.Address/details');
//\think\facade\Route::rule('details/:id', 'Address/details?flag=1&status=2');
//\think\facade\Route::rule('details/:id', 'app\controller\Address@details');
//\think\facade\Route::rule('stat/:id', 'app\controller\Address::stat');
//\think\facade\Route::rule('details/:id', 'http://www.liyanhui.com/details/:id')->status(302);
//\think\facade\Route::redirect('details/:id', 'http://www.liyanhui.com/details/:id', 302);
//\think\facade\Route::view('look/:name', 'See/other', ['email'=>'huiye@163.com']);

//Route::get('details/:id', 'Address/details', ['ext'=>'html', 'https'=>true]);
//Route::get('details/:id', 'Address/details')->ext('html');
//Route::get('details/:id', 'Address/details')->https();
//Route::get('details/:id', 'Address/details')->denyExt('gif|jpg|png');
//Route::get('details/:id', 'Address/details')->filter('id', 10);
//Route::get('user/:id', 'Address/getuser')->model('id', '\app\model\User');
//Route::get('details/:id', 'Address/details');
//Route::option('ext', 'html')->option('https', true);

//Route::get('short', 'Short/getInfo');
//Route::controller('short', 'Short');
//Route::get('see/:name', 'See/other');


//Route::group('col', [
//    ':id'       =>      'Collect/read',
//    ':name'     =>      'Collect/who'
//])->ext('html')->pattern(['id'=>'\d+$', 'name'=>'\w+$']);

//Route::group('col', function () {
//    Route::get(':id', 'read');
//    Route::get(':name', 'who');
//})->ext('html')->pattern(['id'=>'\d+$', 'name'=>'\w+$']);

//Route::group('col', function () {
//    Route::get(':id', 'read')->header('Access-Control-Allow-Origin','http://localhost')->allowCrossDomain();
//    Route::get(':name', 'who');
//    //Route::miss('miss');
//})->prefix('Collect/')->ext('html')->pattern(['id'=>'\d+$', 'name'=>'\w+$'])->append(['flag'=>1]);

//Route::miss('public/miss');

//Route::bind('admin');
//Route::bind('admin/user/read');
//Route::get('user/:id', 'user/read');

//Route::rest('create', ['GET', '/:id/add', 'add']);
//Route::alias('user', 'index/User')->ext('html');
//Route::resource('blog', 'Blog');
//Route::resource('blog', 'Blog')->only(['index','edit']);
//Route::resource('blog', 'Blog')->vars(['blog'=>'blog_id']);
//Route::resource('blog.comment', 'Comment');

//Route::domain('news', function () {
//    Route::get('edit/:id', 'Collect/edit');
//});

//Route::domain('news', [
//    'edit/:id'  =>  'Collect/edit'
//]);

//Route::domain('news.abc.com', function () {
//    Route::get('edit/:id', 'Collect/edit');
//});

//Route::domain(['news', 'blog', 'live'], function () {
//    Route::get('edit/:id', 'Collect/edit');
//});

//Route::get('edit/:id', 'Collect/edit')->domain('news');

//Route::domain('news', 'admin');

//Route::domain('*.news', function () {
//    Route::get('edit/:id', 'Collect/edit');
//});

//Route::domain('*', function () {
//    Route::get('edit/:id', 'Collect/edit');
//});

//Route::get('bc', 'Blog/create');
//Route::get('bl/cr', 'Blog/create');
//Route::get('read/:id/:uid','Blog/read');
//Route::get('read/:id','Blog/read');
//Route::get('edit/:id','Rely/edit')->cache(3600);
//Route::get('edit/:id','Rely/edit');

//Route::get('read/:id','Inject/read')->middleware(app\http\middleware\Auth::class);
//Route::get('read/:id','Inject/read')->middleware('Auth');
//Route::get('read/:id','Inject/read')->middleware('app\http\middleware\Auth');
//Route::get('read/:id','Inject/read')->middleware(['Auth:abc', 'Check']);
//Route::get('read/:id','Inject/read');
//Route::get('read/:id','Verify/read')
//                ->validate(\app\validate\User::class, 'edit');
Route::get('read/:id','Verify/read')
                ->validate([
                    'id'        =>      'number|between:1,10',
                    'email'     =>      'email'
                ],'edit', [
                    'id.number'     =>       '编号必须是数字',
                    'id.between'    =>      '编号必须是1-10之间',
                    'email'         =>      '邮箱格式错误'
                ], true);


return [

];
