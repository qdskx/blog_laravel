<html>
    <head>
        <title>后台管理</title>
        <meta charset="utf-8">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/common1.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/slide1.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min1.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/flat-ui.min1.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/jquery.nouislider1.css">
    </head>
    <body>
        <div id="wrap">
            <div class="leftMeun" id="leftMeun">
                <div id="logoDiv">
                    <p id="logoP"><span>后台管理</span></p>
                </div>
                <div id="personInfor">
                    <p id="userName">{{$username}}</p>
                    <p><span>1198087586@qq.com</span> <a href="http://www.mycodes.net/" target="_blank">归宿</a></p>
                    <p>
                        <a href="/admin/exit">退出登录</a>
                    </p>
                </div>
                <div class="meun-item meun-item-active" aria-controls="user" role="tab" data-toggle="tab"><a href="/admin/user"><img src="/public/images/icon_chara_grey.png">用户管理</div></a>
                <div class="meun-item" aria-controls="sour" role="tab" data-toggle="tab"><a href="/admin/art"><img src="/public/images/icon_user_grey.png">文章管理</a></div>
                <div class="meun-item" aria-controls="char" role="tab" data-toggle="tab"><a href="/admin/rev"><img src="/public/images/icon_source_grey.png">回复管理</div></a>
                <div class="meun-item" aria-controls="stud" role="tab" data-toggle="tab"><a href="/admin/mess"><img src="/public/images/icon_card_grey.png">人员信息</div></a>
            </div>
            <div id="rightContent">
                <a class="toggle-btn" id="nimei">
                    <i class="glyphicon glyphicon-align-justify"></i>
                </a>
                <div class="tab-content">



                        <div role="tabpanel" class="tab-pane active" id="user">
                            <div class="check-div form-inline">
                                <div class="col-xs-3">
                                    <a href="index.php" target="_blank"><img src="/public/images/logo.bmp" style="margin-top:-2px;" /></a>
                                </div>
                            </div>

                            <div class="data-div">
                                <div class="row tableHeader">
                                    <div class="col-xs-2 ">
                                        用户名
                                    </div>
                                    <div class="col-xs-2">
                                        省份
                                    </div>
                                    <div class="col-xs-2">
                                        用户类型
                                    </div>
                                    <div class="col-xs-2">
                                        电话
                                    </div>
                                    <div class="col-xs-2">
                                        性别
                                    </div>
                                    <div class="col-xs-2">
                                        操作
                                    </div>
                                </div>

                        @if (!empty($result))
                            @foreach ($result as $value)
                                <div class="tablebody">

                                    <div class="row">
                                        <div class="col-xs-2 ">
                                            {{$value->username}}
                                        </div>
                                        <div class="col-xs-2">
                                            {{$value->province}}
                                        </div>
                                        <div class="col-xs-2">

                                            @if ($value->type==1)
                                            博主
                                            @else
                                            普通用户
                                            @endif

                                        </div>
                                        <div class="col-xs-2">
                                            {{$value->number}}
                                        </div>
                                        <div class="col-xs-2">

                                            @if ($value->sex == 1)
                                            男
                                            @elseif ($value->sex==0)
                                            女
                                            @else
                                            保密
                                            @endif

                                        </div>
                                        <div class="col-xs-2">
                                            @if ($value->type == 1)
                                            @else
                                            <form method="post" action="/admin/deluser" style="margin-top:20px;">
                                            {{csrf_field()}}
                                                <input type="hidden" name="uid" value="{{$value->uid}}" />
                                                <input type="submit" name="del" class="btn  btn-xs btn-danger" value="删除"/>
                                            </form>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif

                            </div>

                            <!--页码块-->
                            <div style="margin:30px;padding-bottom:20px;float:right;color:black;">
                                {!! $result->links() !!}
                            </div>



                        </div>








                </div>
            </div>
        </div>
    </body>
</html>