<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use DB;
// use Illuminate\Http\Request;
use Request;
use Redirect;
use Session;

class UserController extends Controller
{
    // 注册
	public function register()
    {
        return view('index.register');
    }
    // 进行注册
    function doRegister(Request $request)
    {
        if (!empty($_POST['reg'])){
            if (is_numeric($_POST['pwd'])){
                exit("<script>alert('密码不能为纯数字');history.go(-1);</script>");
            }
            if (strcmp($_POST['pwd'],$_POST['repwd'])){
                exit("<script>alert('两次密码不一致');history.go(-1);</script>");
            }

            /*if (strcmp($_SESSION['code'],$_POST['verify'])){
                $msg = '验证码错误';
                $this->notice($msg);
                exit;
            }*/
            $reg = '/^1[34578]\d{9}$/';
            $number = $_POST['number'];
            if (preg_match($reg,$number,$smatch)){
                // $_SESSION['name'] = $_POST['username'];
                //$request->session()->put('user',$name);
            }else {
                exit("<script>alert('手机号格式不正确');history.go(-1);</script>");
            }
            $data['number'] = $number;
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['pwd']);
            // $_SESSION['name'] = $_POST['username'];
            $name = $_POST['username'];
            // $request->session()->put('user',$_POST['username']);
            session(['user'=>$name]);
            $user = Db::table('user')->insert($data);
            if ($user){
                exit("<script>alert('注册成功');location='/';</script>");
            }else {
                exit("<script>alert('注册失败');history.go(-1);</script>");
            }
        }
    }




    // 登录
    public function login()
    {
        return view('index.login');
    }
    // 进行登录
    function doLogin(Request $request)
    {
        if(request::all()){
            $all = request::all();
            $name = $all['username'];
            // var_dump($name);
            $u = Db::table('user')->where('username',$name)->get();
            if (empty($u[0])){
                exit("<script>alert('用户名不存在');history.go(-1);</script>");
            }
            $pwd = md5($_POST['password']);
            if (strcmp($pwd,$u[0]->password)){
                exit("<script>alert('密码错误');history.go(-1);</script>");
            }
            // $request->session()->put('user',$name);
            session(['user'=>$name]);
            // var_dump(session('user'));die;
            echo "<script>alert('登录成功');location='/';</script>";
        }
    }

    // 退出
    function exit(Request $request)
    {
        $request->session()->flush();
        // echo session()->get('user');die;
        echo "<script>alert('退出成功');location='/';</script>";
    }
}