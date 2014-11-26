@extends('layouts.passagelist')

@section('list')

@foreach($list['list'] as $data)
<div><span><a href="./passage/{{$data->url_path}}"><li class="list">{{$data->title}}</li></a></span><span class="time">{{ date("Y-m-d H:i:s",$data->time) }}</span></div>

@endforeach
@stop


@section('page')

<div class="pagination" id="page">
    {{ $list['page']->links()}}
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="#">上一页</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">1</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">2</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">3</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">4</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">5</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">下一页</a>-->
<!--        </li>-->
<!--    </ul>-->
</div>
@stop