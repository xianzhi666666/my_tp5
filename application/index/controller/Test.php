<?php
namespace app\index\controller;

use think\Db;
class Test
{
    /**
     * 随机添加100条记录
     */
    public function add100()
    {
        for($i=0;$i<100;$i++)
        {
            //生成随机字符串
            $name = $this->randomStr(6);
            $sex = mt_rand(0,1);
            $age = mt_rand(15,30);
            $score = mt_rand(30,200);

            $data = [
                'stu_name'   => $name,
                'sex'        => $sex,
                'age'        => $age,
                'score'      => $score
            ];
            Db::table('student')->insert($data);
        }
    }

    /**
     * 生成随机字符串
     */
    private function randomStr($num=6)
    {
        $str0 = 'ABCDEFGHIGKLMNOPQRSTUVWXYZabcdefghigklmnopqrstuvwxyz';
        $res = "";
        for($i=0;$i<$num;$i++)
        {
            $rad = mt_rand(0,51);
            $res .= $str0[$rad];
        }
        return $res;
    }
}
