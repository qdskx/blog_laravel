<!DOCTYPE html>
<head>
    <title>星星博客--修改个签</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="/public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="/public/css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center margin-bottom-15">个性签名</h1>
            <form class="form-horizontal templatemo-contact-form-2 templatemo-container" role="form" action="/index/doautograph" method="post">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    <img class="form-control" style="height:200px;width:420px;margin-top:80px;float:left" id="message" src="/public/images/3.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    <a href="/index/set" style="margin-left:360px;">返回</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-pencil-square-o"></i>
                                <textarea rows="10" cols="50" name = "autograph" class="form-control" id="message" placeholder="个性签名">{{$result[0]->autograph}}</textarea>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
                <input type="hidden" name="test" value="autograph" />
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="submit" name="sub" value="提交"  class="btn btn-warning pull-right">
                  </div>
                </div>
              </form>

        </div>
    </div>
</body>
</html>