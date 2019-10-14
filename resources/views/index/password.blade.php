<!DOCTYPE html>
<head>
    <title>星星博客--修改密码</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="/public/css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
    <h1 class="margin-bottom-15">修改密码</h1>
    <div class="container">
        <div class="col-md-12">
            <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="/index/dopass" method="post">
            {{csrf_field()}}
                <div class="form-inner">
                    <div class="form-group">
                      <div class="col-md-6">
                        <label for="first_name" class="control-label">旧密码</label>
                        <input type="password" class="form-control" name="oldpassword" id="first_name" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <label for="password" class="control-label">修改密码</label>
                        <input type="password" class="form-control" name="newpass" id="password" placeholder="">
                      </div>
                      <div class="col-md-6">
                        <label for="password" class="control-label">确认密码</label>
                        <input type="password" class="form-control" name="repass" id="password_confirm" placeholder="">
                      </div>
                    </div>
                    <input type="hidden" name="test" value="pass" />
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="submit" name="sub" value="修改" class="btn btn-info">
                        <a href="/index/set" class="pull-right">返回</a>
                      </div>
                    </div>
                </div>
              </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
          </div>
          <div class="modal-body">
            <p>This form is provided by <a rel="nofollow" href="http://www.cssmoban.com/page/1">Free HTML5 Templates</a> that can be used for your websites. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>