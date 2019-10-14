<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>星星博客</title>
<meta name="keywords" content="个人博客,星星个人博客" />
<meta name="description" content="星星个人博客，是记录博主学习和成长的一个自媒体博客。主要分享互联网上最前沿的web前端技术和SEO技术，同时博客也免费提供网站模板下载和个人博客模板下载。" />
<link href="{{ URL::asset('public/css/index.css') }}" rel="stylesheet">
<link href="{{ URL::asset('public/css/new.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
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
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="#">首页</a>&nbsp;&gt;&nbsp;<a href="#">详情</a></span><a href="/" class="n1">网站首页</a><a href="" class="n2">详情</a></h1>
  <div class="index_about">

    @if (!empty($result2))
    @foreach ($result2 as $value)
    <h2 class="c_titile">{{$value->title}}</h2>
    <p class="box_c"><span class="d_time">发布时间：{{$value->addtime}}</span><span>编辑：星星仔</span><span>互动QQ：<a href=""> 1198087586</a></span></p>
    <ul class="infos">
      <p>{{$value->content}}</p>
    </ul>
    @endforeach
    @endif
    <div class="keybq"><h3 style="margin-top:0px;">共有{{$count}}条回复</h3></div>
    @if (!empty($result))
    @foreach ($result as $value)
      <div class="review">
          <div class="rev">
            <span>{{$value->author}}</span>
            <span>评论于：{{$value->revtime}}</span>
          </div>
          <p class="rev_con">{{$value->content}}</p>
      </div>
    @endforeach
    @endif

    <div class="nextinfo" style="height:48px;">
      <a href="{{url('/index/show?aid='.$aid.'&page=1')}}" style="margin-left:10px;">首页</a>
      <a href="{{$result->previousPageUrl()}}" style="margin-left:10px;">上一页</a>
      <a href="{{$result->nextPageUrl()}}" style="margin-left:10px;">下一页</a>
      <a href="{{url('/index/show?aid='.$aid.'&page='.$result->lastPage())}}" style="margin-left:10px;">尾页</a>
    </div>
    <div class="send">
      <h3 class="keybq">请留下你的心</h3>
      <div class="send_k">
        <form action="/index/send?aid={{$aid}}" method="post" >
        {{csrf_field()}}
          <textarea name="cont" class="send_c"></textarea><br />
          <input class="sub" type="submit" name="send" value="提交" />
        </form>
      </div>
    </div>
  </div>

  <aside class="right">
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
    <!-- Baidu Button END -->
    <div class="blank"></div>
    <div class="news">
      <embed src="http://www.blogclock.cn/swf/S1002288b078029-d.swf" Width="200px" Height="200px" type="application/x-shockwave-flash" quality="high" wmode="transparent"></embed>
     <iframe allowtransparency="true" frameborder="0" width="195" height="96" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=0&v=0&d=1&bd=0&k=000000&f=&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=57516&w=195&h=96&align=center"></iframe>
    </div>
  </aside>
</article>
<footer>
  <p><span>Design By:<a href="http://www.xfirst.top" target="_blank">星星仔</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="/public/js/nav.js"></script>
</body>
</html>