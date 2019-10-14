<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>留言板—星星博客</title>
<meta name="keywords" content="个人博客,段亮个人博客," />
<meta name="description" content="" />
<link href="{{ URL::asset('public/css/index.css') }}" rel="stylesheet">
<link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>


<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
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
<h1 class="t_nav"><span>既然来了，那么就留下你的足迹吧！</span><a href="/" class="n1">网站首页</a><a href="" class="n2">留言板</a></h1>
<div class="bloglist left">
   <div id="gustbook">
     <form action="/index/domespost" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
            @if (!empty($result))
              @foreach ($result as $value)
              <div style="width:100px;height:100px;border:1px dashed #6493af;border-radius:50px 50px 50px 50px;line-height: 100px;float:left;">
                <span style="font-size: 30px;font-weight:700;color:#a22076;">{{$value->name}}</span>
              </div>
              <img src="/public/images/hand.png" style="float:left;margin-top:10px;" />
              <div style="width:500px;min-height:100px;border:1px dashed #6493af;border-radius:50px 50px 50px 50px;float:left;">
                <p style="width:400px;margin:30px;color:#c3a6cb;">
                  {{$value->content}}
                  <br />
                  <span style="color:#1b54f2;">留言时间：{{$value->addtime}}</span>
                </p>
              </div>
              @endforeach
            @else
              <span style="color:red;font-size:20px;font-weight:700;">暂时没有人留言</span>
            @endif


              <div style="margin:30px;padding-bottom:20px;float:right;">
                {!! $result->links() !!}
              </div>



                <div class="editormd" id="test-editormd" style="margin-top: 10px;">
                    <textarea name="content" style="width:700px;height:100px;"></textarea>
                </div>



                <input type="submit" name="sub" value="发表" style="height:30px;width:50px;">


        </form>
   </div>
</div>
<!--right-->
<aside class="right">
 <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
   <div class="rnav">
      <ul>
       <li class="rnav1"><a href="#">SEO基础入门</a></li>
       <li class="rnav2"><a href="#">SEO进阶优化</a></li>
       <li class="rnav3"><a href="#">SEO实战案例</a></li>
       <li class="rnav4"><a href="#">SEO心得笔记</a></li>
     </ul>
    </div>

<div class="news">
    <embed src="http://www.blogclock.cn/swf/S1002288b078029-d.swf" Width="200px" Height="200px" type="application/x-shockwave-flash" quality="high" wmode="transparent"></embed>
    <iframe allowtransparency="true" frameborder="0" width="195" height="96" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=0&v=0&d=1&bd=0&k=000000&f=&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=57516&w=195&h=96&align=center"></iframe>
    </div>
</aside>
</article>
<footer>
  <p><span>Design By:<a href="www.duanliang920.com" target="_blank">星星仔</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="/public/js/nav.js"></script>
  <!-- Baidu Button BEGIN -->

    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
    <!-- Baidu Button END -->
</body>
</html>