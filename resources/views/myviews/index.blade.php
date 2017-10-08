@extends('common.layouts')
@section('title')
    —控制台
@stop

@section('content')

    @include('common.message')
    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">舰娘列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th><a href="{{Request::getPathInfo()=='/al/index/pj/0'
                ?  url('al/index',['sort'=>'pj','flag'=>1]):url('al/index',['sort'=>'pj','flag'=>0])}}">炮击</a></th>
                <th><a href="{{Request::getPathInfo()=='/al/index/lj/0'
                ?  url('al/index',['sort'=>'lj','flag'=>1]):url('al/index',['sort'=>'lj','flag'=>0])}}">雷击</a></th>
                <th><a href="{{Request::getPathInfo()=='/al/index/fk/0'
                ?  url('al/index',['sort'=>'fk','flag'=>1]):url('al/index',['sort'=>'fk','flag'=>0])}}">防空</a></th>
                <th><a href="{{Request::getPathInfo()=='/al/index/hk/0'
                ?  url('al/index',['sort'=>'hk','flag'=>1]):url('al/index',['sort'=>'hk','flag'=>0])}}">航空</a></th>
                <th><a href="{{Request::getPathInfo()=='/al/index/zt/0'
                ?  url('al/index',['sort'=>'zt','flag'=>1]):url('al/index',['sort'=>'zt','flag'=>0])}}">装填</a></th>
                <th><a href="{{Request::getPathInfo()=='/al/index/nj/0'
                ?  url('al/index',['sort'=>'nj','flag'=>1]):url('al/index',['sort'=>'nj','flag'=>0])}}">耐久</a></th>
                {{--<th>添加时间</th>--}}
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
                @foreach($als as $al)
                    <tr>
                        <th scope="row">{{$al->id}}</th>
                        <td>{{$al->name}}</td>
                        <td>{{$al->pj}}</td>
                        <td>{{$al->lj}}</td>
                        <td>{{$al->fk}}</td>
                        <td>{{$al->hk}}</td>
                        <td>{{$al->zt}}</td>
                        <td>{{$al->nj}}</td>
{{--                        <td>{{date('Y-M-D',$al->created_at)}}</td>--}}
                        <td>
                            <a href="{{url('al/detail',['id'=>$al->id])}}">详情</a>
                            <a href="{{url('al/update',['id'=>$al->id])}}">修改</a>
                            <a href="{{url('al/delete',['id'=>$al->id])}}"
                            onclick="if (confirm('是否确认删除？')==false) return false;">删除</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{$als->render()}}
        </div>
    </div>
@stop