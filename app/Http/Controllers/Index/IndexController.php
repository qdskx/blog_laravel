<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //var_dump(session('user'));
        // 查询文章显示的内容
        $result = Db::table('article')->paginate(3);
        // 查询博主的头像
        $pic = Db::table('user')->where('username','星星仔')->value('picture');
        return view('index.index',compact('result','pic'));
    }
    // 搜索
    public function search(Request $request)
    {
        $content = trim($request->input('nr'));
        if (!empty($content)){
            $res = DB::table('article')->where('title','like','%'.$content.'%')->get();
            $count = Db::table('article')->where('title','like','%'.$content.'%')->count("aid");
        }else {
            $res = 0;
            $count = 0;
        }
        // 查询博主的头像
        $pic = Db::table('user')->where('username','星星仔')->value('picture');
        return view('index.search',compact('pic','content','count','res'));
    }
    // 文章
    public function article()
    {
        // 查询文章显示的内容
        $result = Db::table('article')->paginate(3);
        return view('index.article',compact('result'));
    }
    // 文章的展示
    public function show()
    {
        // 获取文章的ID
        $aid = $_GET['aid'];
        $result2 = Db::table('article')->where('aid',$aid)->get();
        // 获取回复数
        $count = $result2[0]->replycount;
        // 查询评论的内容
        $result=Db::table('review')->where('tid',$aid)->paginate(5);
        $result->setPath("show?aid=$aid");

        return view('index.show',compact('result','result2','count','aid'));
    }
    // 发表评论
    public function send(Request $request)
    {
        if (!empty($_POST)){
            // 获取用户的信息
            $name = session('user');
            if (empty($name)){
                exit("<script>alert('您没有登录，请先登录');history.go(-1);</script>");
            }
            // 判断内容是否为空
            if (empty($_POST['cont'])){
                exit("<script>alert('回复内容不能为空');history.go(-1);</script>");
            }
            $content = $_POST['cont'];
            // 获取主贴id
            $tid = $_GET['aid'];
            $data['tid'] = $tid;
            $data['author'] = $name;
            $data['content'] = $content;
            $result = Db::table('review')->insert($data);
            $url = $_SERVER['HTTP_REFERER'];
            // 回复改变Article里面的回复数量
            $replycount = Db::table('article')->value('replycount');
            $replycount = $replycount + 1;
            $update = Db::table('article')->where('aid',$tid)->update(['replycount'=>$replycount]);

            if ($result){
                exit("<script>alert('评论成功');location='$url';</script>");
            }
        }
    }
    // 留言
    public function message()
    {
        // 查询总数
        $result = Db::table('message')->paginate(5);
        return view('index.message',compact('result'));
    }
    public function domespost()
    {
        $name = session('user');
        if (empty($name)){
            exit("<script>alert('您没有登录，请先登录');history.go(-1);</script>");
        }
        if (!empty($_POST['sub'])){
            if (empty($_POST['content'])){
                exit("<script>alert('内容不能为空');history.go(-1);</script>");
            }
            $content = $_POST['content'];
            $data['name'] = $name;
            $data['content'] = $content;
            $res = Db::table('message')->insert($data);
            $url = $_SERVER['HTTP_REFERER'];
            if ($res){
                exit("<script>alert('留言成功');location='$url';</script>");
            }
        }
    }
    // 发表
    public function artpost()
    {
        return view('index.artpost');
    }
    public function doArtpost()
    {
        if (!empty($_POST)){
            if (empty($_POST['title'])){
                exit("<script>alert('标题不能为空');history.go(-1);</script>");
            }
            if (empty($_POST['content'])){
                exit("<script>alert('内容不能为空');history.go(-1);</script>");
            }

            $up = new Upload();
            $upload = $up->uploadFile('pic');
            // $pi = $up->newName;
            $data['title'] = $_POST['title'];
            $data['content'] = $_POST['content'];
            $data['picture'] = $upload;
            $res = Db::table('article')->insert($data);
            $url = $_SERVER['HTTP_REFERER'];
            if ($res){
                exit("<script>alert('发表成功');location='$url';</script>");
            }else {
                exit("<script>alert('发表失败');history.go(-1);</script>");
            }
        }

    }

    // 用户中心
    public function set()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        return view('index.set');
    }
    // 修改头像
    public function head()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        // 获取登录的用户信息
        $name = session('user');
        $result = Db::table('user')->where('username',$name)->get();
        return view('index.head',compact('result','name'));
    }
    function dohead()
    {
        if (!empty($_POST['profilesubmitbtn'])){
            $up = new Upload();
            $upload = $up->uploadFile('pic');
            $upload = trim($upload,'.');
            // $data['picture'] = $upload;
            // var_dump($data['picture']);
            if (!empty($upload)){
                $name = session('user');
                $result = Db::table('user')->where('username',$name)->update(['picture'=>$upload]);
                $url = $_SERVER['HTTP_REFERER'];
                if ($result){
                    exit("<script>alert('修改成功');location='$url';</script>");
                }
            }else {
                $url = $_SERVER['HTTP_REFERER'];
                // header("location:$url");
                exit("<script>alert('请别乱点');location='$url';</script>");
            }
        }
    }
    // 修改密码
    public function password()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        return view('index.password');
    }
    public function dopass(Request $request)
    {
        if (!empty($_POST['sub'])){
            // 获取旧的密码
            $name = session('user');
            $oldpass = Db::table('user')->where('username',$name)->value('password');
            $pass = md5($_POST['oldpassword']);
            if ($oldpass !== $pass){
                exit("<script>alert('旧密码不正确');history.go(-1);</script>");
            }
            $newpass = $_POST['newpass'];
            if (is_numeric($newpass)){
                 exit("<script>alert('新密码不能为纯数字');history.go(-1);</script>");
            }
            $repass = $_POST['repass'];
            if (strcmp($newpass,$repass)){
                 exit("<script>alert('两次密码不一致');history.go(-1);</script>");
            }
            $password = md5($newpass);
            $result = Db::table('user')->where('username',$name)->update(['password'=>$password]);
            if ($result){
                $request->session()->flush();
                echo "<script>alert('修改成功,请您重新登录');location='/';</script>";
            }else {
                exit("<script>alert('修改失败');history.go(-1);</script>");
            }
        }
    }

    // 修改资料
    public function data()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        // 获取登录的用户信息
        $name = session('user');
        $result = Db::table('user')->where('username',$name)->get();
        return view('index.data',compact('result','name'));
    }
    public function dodata()
    {
        if (!empty($_POST['sub'])){
            $data['qq'] = $_POST['qq'];
            $data['number'] = $_POST['phone'];
            $data['province'] = $_POST['place'];
            $name = session('user');
            $res = Db::table('user')->where('username',$name)->get();
            $place = $res[0]->province;
            if (empty($_POST['place'])){
                $data['province'] = $place;
            }
            $data['sex'] = $_POST['sex'];
            $result = Db::table('user')->where('username',$name)->update($data);

            if ($result){
                exit("<script>alert('修改成功');history.go(-1);</script>");
            }else {
                exit("<script>alert('修改失败');history.go(-1);</script>");
            }
        }
    }

    // 修改个签
    public function autograph()
    {
        if (empty(session('user'))){
            exit("<script>alert('请先登录');location='/';</script>");
        }
        $name = session('user');
        $result = Db::table('user')->where('username',$name)->get();
        return view('index.autograph',compact('result'));
    }
    public function doautograph()
    {
        if (!empty($_POST['sub'])){
            $data['autograph'] = $_POST['autograph'];
            $name = session('user');
            $result = Db::table('user')->where('username',$name)->update($data);
            if ($result){
                exit("<script>alert('修改成功');history.go(-1);</script>");
            }else {
                exit("<script>alert('修改失败');history.go(-1);</script>");
            }
        }
    }
}