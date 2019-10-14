<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // 用户页面
    public function user()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        $username = session('user');
        $count = Db::table('user')->count('uid');
        $result = Db::table('user')->paginate(5);
        return view('admin.user',compact('result','username'));
    }
    // 删除用户
    function deluser()
    {
        if (!empty($_POST['del'])){
            $uid = $_POST['uid'];
            $res = Db::table('user')->where('uid','=',$uid)->delete();
            $url = $_SERVER['HTTP_REFERER'];
            if ($res){
                exit("<script>alert('删除成功');location='$url';</script>");
            }
        }
    }

    // 文章管理
    public function art()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        $username = session('user');
        $count = Db::table('article')->count('aid');
        $result1 = Db::table('article')->paginate(3);
        return view('admin.art',compact('username','count','result1'));
    }
    // 删除文章
    public function delart()
    {
        if ($_POST['sub1']){
            $aid = $_POST['aid'];
            $res1 = Db::table('article')->where('aid','=',$aid)->delete();
            $url = $_SERVER['HTTP_REFERER'];
            if ($res1){
                exit("<script>alert('删除成功');location='$url';</script>");
            }
        }
    }

    // 回复管理
    public function rev()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        $username = session('user');
        $count = Db::table('review')->count('rid');
        $result2 = Db::table('review')->paginate(5);
        return view('admin.rev',compact('username','count','result2'));
    }
    // 删除回复
    public function delrev()
    {
        if ($_POST['sub1']){
            $rid = $_POST['rid'];
            $res2 = Db::table('review')->where('rid','=',$rid)->delete();
            $url = $_SERVER['HTTP_REFERER'];
            if ($res2){
                exit("<script>alert('删除成功');location='$url';</script>");
            }
        }
    }

    // 留言管理
    public function mess()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        $username = session('user');
        $count = Db::table('message')->count('mid');
        $result3 = Db::table('message')->paginate(5);
        return view('admin.mess',compact('username','count','result3'));
    }
    // 删除留言
    public function delmess()
    {
        if ($_POST['sub1']){
            $mid = $_POST['mid'];
            $res3 = Db::table('message')->where('mid','=',$mid)->delete();
            $url = $_SERVER['HTTP_REFERER'];
            if ($res3){
                exit("<script>alert('删除成功');location='$url';</script>");
            }
        }
    }

    // 登录
    public function login()
    {
        return view('admin.login');
    }
    // 进行登录
    function doLogin(Request $request)
    {
        if (!empty($_POST['log'])){
            $name = $_POST['username'];
            $u = Db::table('user')->where('username',$name)->get();
            if ($name !== '星星仔'){
                exit("<script>alert('您不是博主');history.go(-1);</script>");
            }
            $pwd = md5($_POST['password']);
            if (strcmp($pwd,$u[0]->password)){
                exit("<script>alert('密码错误');history.go(-1);</script>");
            }
            session(['user'=>$name]);
            //$this->notice('欢迎博主','index.php?m=admin&a=user');die;
            echo("<script>alert('欢迎博主');location='/admin/user';</script>");
        }
    }
    // 退出
    public function exit(Request $request)
    {
        // Session()->flush();
        $request->session()->flush();
        echo "<script>alert('退出成功');location='/admin/login';</script>";
    }
}