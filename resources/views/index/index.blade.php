<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>星星个人博客</title>
	<meta name="keywords" content="个人博客模板,博客模板" />
	<meta name="description" content="优雅、稳重、大气,低调。" />
	<link href="{{ URL::asset('public/css/index.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- 图标 -->
  <link href="public/fonts/fonts/iconfont.css" rel="stylesheet">

  <script src="public/js/jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
  <script src="public/js/snow.js" type="text/javascript" charset="utf-8"></script>


</head>
<body class="snowbg">
<header>
	<div id="logo">
		<a href=""></a>
	</div>
	<nav class="topnav" id="topnav">
		<a href=""><span>首页</span><span class="en">Home</span></a>
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
        <a href="/admin/user"><span style="margin-right:15px;">后台</span><span style="margin-right:10px;" class="en">admin</span></a>
      @else
        <a href="/index/set"><span>{{Session::get('user')}}</span><span class="en">name</span></a>
        <a href="/index/exit"><span style="margin-right:15px;">退出</span><span class="en" style="margin-right:15px;">exit</span></a>
      @endif
		@endif

	</nav>
</header>
<!--end header-->
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p class="p1">纪念我们:</p>
      <p class="p2">终将逝去的青春</p>
      <p class="p3">By:少年</p>
    </ul>
  </section>
</div>
<!--end banner-->



<article>
  <h2 class="title_tj">
    <p>博主<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
   <!--wz-->
  @if (!empty($result))
  @foreach ($result as $value)
    <div class="wz">
    <h3>{{$value->title}}</h3>
    <p class="dateview">
      <span>{{$value->addtime}}发表</span>
    </p>
    <figure><img src="{{$value->picture}}"></figure>
    <ul>
      <p id="hid">{{$value->content}}</p>
      <a title="阅读全文" href="/index/show?aid={{$value->aid}}" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
  @endforeach
  @endif


  <div style="margin:30px;padding-bottom:20px;float:right;">
    {!! $result->links() !!}
  </div>
   <!--end-->
  </div>
  <!--right-->

  <aside class="right">

    <div class="my">
     <h2>关于<span>博主</span></h2>
     <img src="{{$pic}}" width="200" height="200" alt="博主">
       <ul>
        <li>博主：星星仔</li>
        <li>职业：PHP</li>
        <li>简介：一个不断学习和研究，web前端和SEO技术的90后草根站长.</li>
        <li></li>
       </ul>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
    <div class="news">
    <embed src="http://www.blogclock.cn/swf/S1002288b078029-d.swf" Width="200px" Height="200px" type="application/x-shockwave-flash" quality="high" wmode="transparent"></embed>



    </div>
  </aside>
</article>
<footer>
  <p><span>Design By:<a href="http://www.xfirst.top" target="_blank">星星仔</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="/public/js/nav.js"></script>
<!--百度分享-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>
