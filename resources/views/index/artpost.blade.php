<!DOCTYPE html>
<html>
<head>
    <title>发表-星星博客</title>
    <meta name="keywords" content="个人博客,段亮个人博客,个人博客模板," />
    <meta name="description" content="" />
    <link href="{{ URL::asset('public/css/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/ty.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/editor/css/editormd.css') }}" rel="stylesheet">

    <script src="/public/editor/js/jquery.min.js"></script>
    <script src="/public/editor/editormd.min.js"></script>
    <script type="text/javascript">
        $(function() {
            testEditor = editormd("test-editormd", {
                    width   : "90%",
                    height  : 400,
                    syncScrolling : "single",
                    path    : "/public/editor/lib/"
                });

        });
    </script>
</head>
<body style="background:url(public/images/back3.jpg) 0% 0% / cover no-repeat scroll rgb(255,255,255)">
    <header>
        <div id="logo">
            <a href="/"></a>
        </div>
        <nav class="topnav" id="topnav">
            <a href="/"><span>首页</span><span class="en">Home</span></a>
           <!--  <a href="index.php?m=about&a=about"><span>关于我</span><span class="en">About</span></a>
           <a href="index.php?m=diary&a=diary"><span>个人日记</span><span class="en">Diary</span></a>
           <a href="index.php?m=article&a=article"><span>SEO技术</span><span class="en">Seo</span></a>
           <a href="weblist.html"><span>WEB前端</span><span class="en">Web</span></a>
                   <a href="index.php?m=message&a=message"><span>留言版</span><span class="en">Gustbook</span></a> -->
        @if (empty(session('user')))
          <a href="/index/login"><span>登录</span><span class="en">login</span></a>
            <a href="/index/register"><span style="margin-right:15px;">注册</span><span style="margin-right:10px;" class="en">Register</span></a>
        @else
          <a href="/index/artpost"><span>发表</span><span class="en">post</span></a>
          <a href="/index/exit"><span style="margin-right:15px;">退出</span><span style="margin-right:10px;" class="en">exit</span></a>
        @endif
        </nav>
    </header>
<!--     <div class="banner">
    <section class="box">
        <ul class="texts">
            <p class="p1">纪念我们:</p>
            <p class="p2">终将逝去的青春</p>
            <p class="p3">By:少年</p>
        </ul>
    </section>
</div> -->

    <div style="width:1000px;height:600px;margin:20px auto;text-align: center;">
        <form action="/index/doartpost" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
                <h2>请输入标题：<input type="text" name="title" style="height:30px;"></h2>

                <div class="editormd" id="test-editormd" style="margin-top: 10px;">
                    <textarea style="display:none;" name="content"></textarea>
                </div>

                <div style="color:red;">
                    请选择一张图片：<input type="file" name="pic" />(不选也可以)
                </div>

                <input type="submit" value="发表" style="height:30px;width:50px;">


        </form>
    </div>



    <script src="/public/js/nav.js"></script>
      <!-- Baidu Button BEGIN -->

    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">
        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
    </script>
</body>
</html>