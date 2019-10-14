<!doctype html>
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
                <div class="meun-item" aria-controls="user" role="tab" data-toggle="tab"><a href="/admin/user"><img src="/public/images/icon_chara_grey.png">用户管理</div></a>
                <div class="meun-item meun-item-active" aria-controls="sour" role="tab" data-toggle="tab"><a href="/admin/art"><img src="/public/images/icon_user_grey.png">文章管理</a></div>
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
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ">
                                        标题
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        内容
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        图片
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        操作
                                    </div>
                                </div>

                                <div class="tablebody">

                                @if (!empty($result1))
                                    @foreach ($result1 as $value)
                                    <div class="row" style="line-height:60px;">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="overflow:hidden;height:70px;">
                                            {{$value->title}}
                                        </div>
                                        <div id="topAD" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSystem" aria-expanded="true" aria-controls="collapseOne" style="overflow: hidden;height:70px;">
                                             <span>{{$value->content}}</span>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <img src="{{$value->picture}}" style="height:65px;">
                                        </div>
                                        <form action="/admin/delart" method="post">
                                        {{csrf_field()}}
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >
                                            <input type="hidden" name="aid" value="{{$value->aid}}" />
                                            <input class="btn btn-danger btn-xs" type="submit" name="sub1" value="删除" />
                                        </div>
                                        </form>
                                    </div>
                                    @endforeach
                                @endif

                                </div>

                            </div>

                            <!--页码块-->
                            <div style="margin:30px;padding-bottom:20px;float:right;color:#1b54f2;">共{{$count}}条数据</div>
                            <div style="margin:30px;padding-bottom:20px;float:right;">
                                {!! $result1->links() !!}
                            </div>



                        </div>
                </div>
            </div>
        </div>
    </body>
</html>