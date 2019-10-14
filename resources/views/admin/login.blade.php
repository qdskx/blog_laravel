<!DOCTYPE html>
<html>
<head>
  <title>Elegant Login Form Flat Responsive Widget Template :: w3layouts</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme  -->
<link rel="stylesheet" href="/public/css/style1.css">
   <!-- font-awesome icons -->
<link href="/public/css/font-awesome1.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
      <div class="login-title w3_title">
           <h1>Elegant login Form</h1>
      </div>
           <div class="login w3_login">
                <h2 class="login-header w3_header">Log in</h2>
                    <div class="w3l_grid">
                        <form class="login-container" action="/admin/doLogin" method="post">
                        {{csrf_field()}}
                             <input type="text" placeholder="博主名" Name="username" required="" style="width:320px;height:15px;padding:13px;" >
                             <input type="password" placeholder="Password" Name="password" required="">
                             <input type="submit" name="log" value="Submit">
                        </form>




                  </div>
       </div>

</div>





<div class="footer-w3l">
        <p class="agile"> &copy; 2017 Elegant Login Form . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
</body>
</html>