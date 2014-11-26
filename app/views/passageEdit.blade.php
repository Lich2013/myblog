@extends('layouts.passageEdit')

@section('form')
<form method="post" action="{{ $passage['func']}}">
    标题:<input type="text" name="title" placeholder="Title?" value="{{{ $passage['content'][0]->title or '' }}}" style="display: block;height: auto;" />
    文章简介:<input type="text" name="introduce" placeholder="Introduce" value="{{{$passage['content'][0]->introduce or ''}}}" style="display: block;height: auto;" />
    文章链接:<input type="text" name="url_path" placeholder="PASSAGE URL"  value="{{{ $passage['content'][0]->url_path or '' }}}" style="display: block;height: auto;" />
   封面链接:<input type="text" name="cover_path" placeholder="COVER URL"  value="{{{ $passage['content'][0]->cover_path or '' }}}" style="display: block;height: auto;" />
    <input type="hidden" name="passage_id" value="{{{ $passage['content'][0]->id or '' }}}" />
    <textarea name="content" data-provide="markdown" rows="20" >{{{ $passage['content'][0]->origin_content or '' }}}</textarea>
    <hr/>
    <button type="submit" class="btn">Submit</button>
</form>
@stop

