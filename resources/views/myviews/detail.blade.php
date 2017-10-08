@extends('common.layouts')

@section('title')
    —详情页
@stop
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">舰娘详情</div>

        <table class="table table-bordered table-striped table-hover ">
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>{{$al->id}}</td>
            </tr>
            <tr>
                <td>姓名</td>
                <td>{{$al->name}}</td>
            </tr>
            <tr>
                <td>炮击</td>
                <td>{{$al->pj}}</td>
            </tr>
            <tr>
                <td>雷击</td>
                <td>{{$al->lj}}</td>
            </tr>
            <tr>
                <td>防空</td>
                <td>{{$al->fk}}</td>
            </tr>
            <tr>
                <td>航空</td>
                <td>{{$al->hk}}</td>
            </tr>
            <tr>
                <td>装填</td>
                <td>{{$al->zt}}</td>
            </tr>
            <tr>
                <td>耐久</td>
                <td>{{$al->nj}}</td>
            </tr>
            {{--<tr>--}}
                {{--<td>添加日期</td>--}}
                {{--<td>2016-01-01</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>最后修改</td>--}}
                {{--<td>2016-03-01</td>--}}
            {{--</tr>--}}
            </tbody>
        </table>
    </div>
@stop