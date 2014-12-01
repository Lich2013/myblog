@extends('layouts.passageManageList')

@section('list')

@foreach($list['list'] as $data)
<div>
    <span><a href="./passage/{{$data->url_path}}"><li class="list">{{$data->title}}</li></a></span>
    <span class="time"><a href="./PassageDelete/{{$data->url_path}}">删除</a></span>
    <span class="time"><a href="./admin/{{$data->url_path}}">修改</a></span>
    <span class="time">{{ date("Y-m-d H:i:s",$data->time) }}</span>
</div>

@endforeach
@stop


@section('page')
<div class="pagination" id="page">
    {{ $list['page']->links()}}
</div>
@stop