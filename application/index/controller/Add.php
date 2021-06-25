<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\facade\Session;
class User2 extends Controller
{
    public function reg()
    {
        return $this->fetch();
    }

    public function reg2()
    {
        $list = Db::table('users')->insert($_POST);
        if($list)
        {
            $this->success('注册成功','/user2/login');
        }else{
            $this->success('注册失败','/user2/reg');
        }
    }

    public function login()
    {
        return $this->fetch();
    }

    public function login2()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $u = Db::table('users')->Where('username',$username)->find();

        if($u)
        {
            if($pass = $u['password'])
            {
                //设置session
                Session::set('user_id',$u['user_id']);
                Session::set('user_name',$u['username']);
                //个人中心
                $this->success('个人中心','/user2/list');
            }else
            {
                $this->success('密码错误','/user2/login');
            }
        }else
        {
            $this->success('查无此人','/user2/login');
        }
    }

    public function center()
    {
        $sess = session::get();
        if(empty($sess['user_name'])&&empty($sess['pass']))
        return $this->fetch();
    }
}
