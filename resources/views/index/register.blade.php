
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

<script src="../js/jquery-1.11.1.min.js" type="text/javascript">

</script>

<script type="text/javascript">
$(function(){

            $('#btn2').click(function(){
                 /*alert('qqqqqq');*/
                var phone=$('#dx').val();
                    /* alert(phone);*/
                data={
                    'number':phone
                }

                $.post('/index.php?m=User&a=phone',data,function(data){
                /*alert(data);*/

                })
            })
         })


</script>

</head>
<!-- //Head -->

<!-- Body -->
<body>

    <h1>用户中心</h1>

    <div class="container w3layouts agileits">
    <!-- <div class="copyrights">Collect from <a href="#" >企业网站模板</a></div> -->
        <div class="register w3layouts agileits">
            <h2>注 册</h2>
            <form action="/index/doRegister" method="post">
            {{csrf_field()}}
                <input type="text" Name="username" placeholder="用户名" required="">

                <input type="password" Name="pwd" placeholder="密码" required="">
                <input type="password" Name="repwd" placeholder="确认密码" required="">
                <input type="text" Name="number" id = 'dx'placeholder="手机号码" required="">
                <!-- <input type="text" Name="verify" placeholder="验证码" required="" style="width:150px;" >
                <div style="height:50px;position:absolute;top:430px;left:800px;"><a href='javascript:;' id='btn2'>点击获取短信验证码</a></div> -->

                <!-- <input type="text" name="yzm" placeholder="验证码" required="">
                <img src="index.php?m=user&a=verify" onclick="this.src='index.php?m=user&a=verify'"> -->

                <!-- <input type="text" Name="verify" placeholder="验证码" required="" style="width:150px;" ><img src="./vendor/framework/lk/src/verify.php" onclick="this.src='./vendor/framework/lk/src/verify.php'"/> -->

            <div class="send-button w3layouts agileits">

                    <input type="submit" name="reg" value="免费注册">

            </div>
            <div class="clear"></div>
            </form>
        </div>


        <div class="clear"></div>

    </div>

    <div class="footer w3layouts agileits">
        <p>Copyright &copy; 1997-2017 <a href="#" target="_blank" title="心灵博客">心灵博客</a> | 京ICP证09002463号</p>
    </div>

</body>
<!-- //Body -->

</html>