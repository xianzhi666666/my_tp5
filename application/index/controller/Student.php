<?php
namespace app\index\controller;

use think\Db;
class Student
{
    public function message()
    {
        //查询所有学生的信息
        $a = Db::table('student')->select();
//        echo "<pre>";print_r($a);echo "</pre>";
        //查询年龄大于20的学生信息
        $b = Db::table('student')
            ->where('age','>',20)
            ->select();
//        echo "<pre>";print_r($b);echo "</pre>";
        //查询年龄小于1 8的学生信息(只显示10条，倒序排序)
        $c = Db::table('student')
            ->where('age','<',18)
            ->order('id','desc')
            ->limit(10)
            ->select();
//        echo "<pre>";print_r($c);echo "</pre>";
        //查询性别为女的学生信息
        $d = Db::table('student')
            ->where('sex',1)
            ->select();
//        echo "<pre>";print_r($d);echo "</pre>";
        //查询男同学的信息
        $d = Db::table('student')
            ->where('sex',0)
            ->select();
//        echo "<pre>";print_r($d);echo "</pre>";
        //查询综合积分在150分以上的同学的信息
        $e = Db::table('student')
            ->where('score','>',150)
            ->select();
//        echo "<pre>";print_r($e);echo "</pre>";
        //查询综合积分小于59学生的姓名、年龄
        $f = Db::table('student')
            ->where('score','<',59)
            ->select();
//        echo "<pre>";print_r($f);echo "</pre>";
        //查询年龄在18-25岁之间的学生信息
        $g = Db::table('student')
            ->where('age','between','18,25')
            ->select();
//        echo "<pre>";print_r($g);echo "</pre>";
        //查询女童学年龄小于20的学生的姓名年龄
        $g = Db::table('student')
            ->where('age','<','20')
            ->select();
//        echo "<pre>";print_r($g);echo "</pre>";
        //查询id为5的一条数据
        $k = Db::table('student')
            ->where('id',5)
            ->select();
//        echo "<pre>";print_r($k);echo "</pre>";
        //查询综合积分小于150的
        $l = Db::table('student')
            ->where('score','<',150)
            ->select();
//        echo "<pre>";print_r($l);echo "</pre>";
        //查询id为5-10之间同学的综合积分
        $m = Db::table('student')
            ->where('id','between','5,10')
            ->select();
        echo "<pre>";print_r($m);echo "</pre>";
    }
}
