@extends('father')

@section('header')
    @parent
    《header》
@stop

@section('content')
    content
    <!-- html 注释-->
    {{--<p>{{$name}}</p>--}}
    {{--<p>{{date('Y-M-D H:i:s',time())}}</p>--}}
    {{--<p>{{in_array($name,$arr) ? 'haha':'hoho'}}</p>--}}
    {{--<p>{{isset($name) ? $name:'zzz'}}</p>--}}
    {{--<p>{{$name1 or 'zxy'}}</p>--}}
    {{--@include('sub',['msg'=>'error log'])--}}
    {{--模版注释--}}

    <p>
    @if($name=='alex1')
        alex is here
    @elseif($name=='sean')
        sean is here
    @else
        nobody is here
    @endif
    </p>

    <p>
    @for($i=0;$i<5;$i++)
        {{$i}}
    @endfor
    </p>

    <p>
        @foreach($students as $student)
            {{$student->name}}
        @endforeach
    </p>

    <p>
        @forelse($arr2 as $arr)
            {{$arr->name}}
        @empty
            nothing
        @endforelse
    </p>

    <a href="{{url('url1')}}">url to urltest</a><br>
    <a href="{{action('StudentController@url1')}}">url action to urltest</a><br>
    <a href="{{route('haha')}}">haha to urltest</a>
@stop