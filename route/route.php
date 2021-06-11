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

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

//当用户访问 xxx.com/hello/xxx , 找到 Index控制器中的 hell方法
Route::get('hello/:name', 'index/hello');
Route::get('login', 'index/login');     //用户登录
Route::get('user/reg', 'index/reg');    //用户注册

//商品
Route::get('goods/:id', 'goods/detail');    //商品详情

//用户
Route::get('goods/reg', 'user/reg');    //注册
Route::get('goods/login', 'user/login');    //登录
Route::get('goods/center', 'user/center');    //个人中心

//学生信息
Route::get('student', 'student/message');
//随机添加数据
Route::get('add100', 'test/add100');


return [

];
