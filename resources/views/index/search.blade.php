<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>搜索-星星博客</title>
<meta name="keywords" content="个人博客,段亮个人博客,个人博客模板," />
<meta name="description" content="" />
<link href="{{ URL::asset('public/css/index.css') }}" rel="stylesheet">
<link href="{{ URL::asset('public/css/ty.css') }}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
   <nav class="topnav" id="topnav">
    <a href="/"><span>首页</span><span class="en">Home</span></a>
    <a href="/index/search"><span>搜索</span><span class="en">About</span></a>
    <a href="/index/article"><span>SEO技术</span><span class="en">Seo</span></a>
    <a href="/index/message"><span>留言版</span><span class="en">Gustbook</span></a>
    @if (empty(session('user')))
      <a href="{{url ('index/login')}}"><span>登录</span><span class="en">login</span></a>
      <a href="{{url ('index/register')}}"><span style="margin-right:15px;">注册</span><span style="margin-right:10px;" class="en">Register</span></a>
    @else
      @if (session('user') == '星星仔')
        <a href="/index/artpost"><span>发表</span><span class="en">post</span></a>
        <a href="/index/set"><span>{{Session::get('user')}}</span><span class="en">name</span></a>
        <a href="/index/exit"><span>退出</span><span class="en">exit</span></a>
        <a href="/index/admin"><span style="margin-right:15px;">后台</span><span style="margin-right:10px;" class="en">admin</span></a>
      @else
        <a href="/index/set"><span>{{Session::get('user')}}</span><span class="en">name</span></a>
        <a href="/index/exit"><span style="margin-right:15px;">退出</span><span class="en" style="margin-right:15px;">exit</span></a>
      @endif
    @endif
  </nav>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="/" class="n1">网站首页</a><a href="" class="n2">搜索</a></h1>
<div class="about left">
  <h2>请搜索您喜欢的内容吧</h2>
  <div id="me_text">
    <form action="/index/search" method="post">
    {{csrf_field()}}
    <div style="margin-left: 50px;">
      <input type="text" name="nr" placeholder="请输入内容" style="background:#eacdd1;width:200px;height:10px;padding:10px;" value="@if (!empty($content)){{$content}}@endif" />
      <input type="submit" name="sub" value="搜索" style="color:#006e5f;background:#eacdd1;width:50px;height:34px;" />
    </div>
    </form>
    <h2 style="background:#ccc;width:730px;margin-top:20px;">搜索到
    @if (empty($count))
    0
    @else
    {{$count}}
    @endif
    条数据</h2>
    @if (empty($res))
    <p class="p">对不起没有找到匹配结果</p>
    @endif
      @if (!empty($res))
        @foreach ($res as $v)
          <h2 style="margin-top:20px;">标题：<a href="/index/show" style="color:red;">{{$v->title}}</a></h2>
          <p style="min-height:78px;overflow: hidden;color:#2ec3e7;">{{$v->content}}</p>
          <h6>时间：{{$v->addtime}}</h6>
        @endforeach
      @endif

  </div>

</div>
<aside class="right">
    <div class="my">
     <h2>关于<span>博主</span></h2>
     <img src="../{{$pic}}" width="200" height="200" alt="博主">
       <ul>
        <li>博主：星星仔</li>
        <li>职业：PHP</li>
        <li>简介：一个不断学习和研究，web前端和SEO技术的90后草根站长.</li>
        <li></li>
       </ul>
    </div>
    <div class="about_c">
    <p>网名：<span>低调少年</span></p>
    <p>姓名：<a href="">星星</a></p>
    <p>星座：天蝎座</p>
    <p>现居：湖南省-长沙市</p>
    <p>博客：<a href="http://www.xfirst.top">www.xfirst.top</a></p>
    <p>喜欢的音乐：《一生所爱》..</p>
    <div class="about_qq"><span>联系博主：</span><a href="http://wpa.qq.com/msgrd?v=3&uin=1198087586&site=qq&menu=yes" title="联系博主" target="_blank"><p></p></a>
     <div class="clear"></div>
    </div>
    <div class="about_yx"><span>加入QQ群：</span><a href="http://shang.qq.com/wpa/qunwpa?idkey=89276e0cb9fadcbe6334cbba01277747ac448b27386421cc35e761282be31668" title="加入QQ群" target="_blank"><p></p></a>
    <div class="clear"></div>
    </div>
</div>
</aside>
</article>
<footer>
 <p><span>Design By:<a href="http://www.xfirst.top" target="_blank">星星仔</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="/public/js/nav.js"></script>
</body>
</html>