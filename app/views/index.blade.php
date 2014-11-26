@extends('layouts.main')

@section('title')
<title>{{$data['title']}}</title>
@stop



@section('item')
@parent


<div class="item active">
    <img alt="" src="{{$data['item'][0]['path']}}" />
    <div class="carousel-caption">
        <h4>
            {{$data['item'][0]['alt']}}
        </h4>
        <p>
            {{$data['item'][0]['explain']}}
        </p>
    </div>
</div>


@stop




@section('item_wait')
<?php
array_shift($data['item']);
?>
@foreach($data['item'] as $v)

<div class="item">
    <img alt="" src="{{$v['path']}}" />
    <div class="carousel-caption">
        <h4>
            {{$v['alt']}}
        </h4>
        <p>
            {{$v['explain']}}
        </p>
    </div>
</div>
@endforeach
@stop



@section('span4')

@foreach($data['passage'] as $v)

<li class="span4">
    <div class="thumbnail">
        <img alt="300x200" src="{{$v->cover_path}}" />
        <div class="caption">
            <h3>
                {{$v->title}}
            </h3>
            <p>
                {{$v->introduce}}
            </p>
            <p>
                <a class="btn btn-primary" href="./passage/{{$v->url_path}}">浏览</a>
            </p>
        </div>
    </div>
</li>


@endforeach

@stop


