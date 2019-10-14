<!DOCTYPE html>
<html>

<!-- Head -->
<head>

    <title>用户中心</title>

    <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <link rel="stylesheet" href="{{ URL::asset('public/css/reslog.css') }}" type="text/css" media="all">



</head>
<!-- //Head -->

<!-- Body -->
<body>

    <h1>用户中心</h1>

    <div class="container w3layouts agileits">

        <div class="login w3layouts agileits">
            <h2>登 录</h2>
            <form action="/index/doLogin" method="post">
            {{csrf_field()}}
                <input type="text" name="username" placeholder="用户名" required="">
                <input type="password" name="password" placeholder="密码" required="">

                <ul class="tick w3layouts agileits">
                    <li>
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1"><span></span>记住我</label>
                    </li>
                </ul>
                <div class="send-button w3layouts agileits">
                        <input type="submit" name="log" value="登 录">
                </div>
            </form>
            <!-- <a href="./index.php?m=user&a=forget">找回密码</a> -->
            <a href="{{url ('index/register')}}">立即注册</a>
            <!-- <div class="social-icons w3layouts agileits">
                <p>- 其他方式登录 -</p>
                <ul>
                    <li class="qq"><a href="#">
                    <span class="icons w3layouts agileits"></span>
                    <span class="text w3layouts agileits">QQ</span></a></li>
                    <li class="weixin w3ls"><a href="#">
                    <span class="icons w3layouts"></span>
                    <span class="text w3layouts agileits">微信</span></a></li>
                    <li class="weibo aits"><a href="#">
                    <span class="icons agileits"></span>
                    <span class="text w3layouts agileits">微博</span></a></li>
                    <div class="clear"> </div>
                </ul>
            </div> -->
            <div class="clear"></div>

        </div><div class="copyrights">Collect from <a href="#" >企业网站模板</a></div>


        <div class="clear"></div>

    </div>

    <div class="footer w3layouts agileits">
        <p>Copyright &copy; 1997-2017 <a href="#" target="_blank" title="心灵博客">心灵博客</a> | 京ICP证09002463号</p>
    </div>

</body>
<!-- //Body -->

</html>