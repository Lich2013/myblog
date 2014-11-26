@extends('layouts.passage')


@section('webtitle')
<title>Myblog</title>
@show


@section('title')

     {{$data[0]->title}}

@stop

@section('content')

    {{$data[0]->content}}

@stop

@section('tag')
@foreach($data[0]->tag as $tag)
<a href=""><span class="label"> {{$tag->tag}}</span></a>
@endforeach

@stop
