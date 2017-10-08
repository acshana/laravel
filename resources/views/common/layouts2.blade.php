<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>舰娘 @yield('title')</title>
    <!-- Bootstrap CSS 文件 -->
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    @section('style')
    @show
</head>
<body>

<!-- 头部 -->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <img
                    src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1507383612008&di=bcc9e80ecb1115661633b6b43704f003&imgtype=0&src=http%3A%2F%2Fimg.newyx.net%2Fzt%2F201706%2F07%2F7a470acc47.jpg"
                    align="right"/>
            <h2>碧蓝航线</h2>
            <p> Made By: Ac.one</p>
        </div>
    </div>
@show

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-3">
            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('blhx')}}" class="list-group-item active">舰娘列表</a>
                    <a href="http://huati.weibo.com/5191116" class="list-group-item">AzurLane微博话题</a>
                    <a href="http://wiki.joyme.com/blhx/%E9%A6%96%E9%A1%B5" class="list-group-item">碧蓝Wiki</a>
                </div>
            @show
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

<!-- 尾部 -->
@section('footer')
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2017.10.07 Azurlane</span>
        </div>
    </div>
@show

<!-- jQuery 文件 -->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')

@show

</body>
</html>