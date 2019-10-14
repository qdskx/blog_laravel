<!DOCTYPE html>
<head>
    <title>星星博客--资料</title>
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
            <h1 class="text-center margin-bottom-15">修改资料</h1>
            <form class="form-horizontal templatemo-contact-form-2 templatemo-container" role="form" action="/index/dodata" method="post">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-user"></i>
@if (!empty($name))
                                    <div class="form-control" id="name"><span style="margin-left:18px" >{{$name}}</span></div>
@endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-envelope"></i>
                                    <input type="qq" class="form-control" value="{{$result[0]->qq}}" name="qq" id="qq" placeholder="qq">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" class="form-control" value="{{$result[0]->number}}" id="phone" placeholder="Phone" , name="phone"/>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="tebie">籍贯</span>
                                    <span>
                                        <select name="place" class="main2_3_5" >
                                            <option value="">-省份-</option>
                                            <option did="1" value="北京市" >北京市</option>
                                            <option did="2" value="天津市" >天津市</option>
                                            <option did="3" value="河北省" >河北省</option>
                                            <option did="4" value="山西省" >山西省</option>
                                            <option did="5" value="内蒙古自治区" >内蒙古自治区</option>
                                            <option did="6" value="辽宁省" >辽宁省</option>
                                            <option did="7" value="吉林省" >吉林省</option>
                                            <option did="8" value="黑龙江省" >黑龙江省</option>
                                            <option did="9" value="上海市" >上海市</option>
                                            <option did="10" value="江苏省" >江苏省</option>
                                            <option did="11" value="浙江省" >浙江省</option>
                                            <option did="12" value="安徽省" >安徽省</option>
                                            <option did="13" value="福建省" >福建省</option>
                                            <option did="14" value="江西省" >江西省</option>
                                            <option did="15" value="山东省" >山东省</option>
                                            <option did="16" value="河南省" >河南省</option>
                                            <option did="17" value="湖北省" >湖北省</option>
                                            <option did="18" value="湖南省" >湖南省</option>
                                            <option did="19" value="广东省" >广东省</option>
                                            <option did="20" value="广西壮族自治区" >广西壮族自治区</option>
                                            <option did="21" value="海南省" >海南省</option>
                                            <option did="22" value="重庆市" >重庆市</option>
                                            <option did="23" value="四川省" >四川省</option>
                                            <option did="24" value="贵州省" >贵州省</option>
                                            <option did="25" value="云南省" >云南省</option>
                                            <option did="26" value="西藏自治区" >西藏自治区</option>
                                            <option did="27" value="陕西省" >陕西省</option>
                                            <option did="28" value="甘肃省" >甘肃省</option>
                                            <option did="29" value="青海省" >青海省</option>
                                            <option did="30" value="宁夏回族自治区" >宁夏回族自治区</option>
                                            <option did="31" value="新疆维吾尔自治区" >新疆维吾尔自治区</option>
                                            <option did="32" value="台湾省" >台湾省</option>
                                            <option did="33" value="香港特别行政区" >香港特别行政区</option>
                                            <option did="34" value="澳门特别行政区" >澳门特别行政区</option>
                                            <option did="35" value="海外" >海外</option>
                                            <option did="36" value="其他" >其他</option>
                                        </select>
                                    </span>
                                    <div class="form-control" id="name" style="width: 150px;float: right;margin-top: -13px;margin-right: 50px"><span>{{$result[0]->province}}</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="templatemo-input-icon-container">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" id="optionsRadios1" value="1"
                                    @if ($result[0]->sex==1)
                                    checked
                                    @endif
                                     /> 男&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="sex" id="optionsRadios2" value="0" @if ($result[0]->sex==0)
                                    checked
                                    @endif
                                    /> 女
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="sex" id="optionsRadios2" value="2"@if ($result[0]->sex==2)
                                    checked
                                    @endif
                                    /> 保密

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                                <a href="/index/set" style="margin-left:360px;">返回</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <div class="col-md-12">
                            <div class="templatemo-input-icon-container1">
                                <img class="form-control" style="height:200px;width:450px;float: left; margin-left: -20px;" id="message" src="/public/images/3.png" />
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="hidden" name="test" value="data" />
                    <input type="submit" name="sub" value="修改" class="btn btn-warning pull-right">
                  </div>
                </div>
              </form>

        </div>
    </div>
</body>
</html>