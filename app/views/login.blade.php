@extends('layouts.login')

@section('form')
{{ Form::open(array('url' => 'verify','class'=>'form-horizontal')) }}
    <div class="control-group">
        <label class="control-label" for="inputEmail">用户名</label>
        <div class="controls">
            <input id="inputEmail" type="text"  placeholder="Username" name="username"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword"  >密码</label>
        <div class="controls">
            <input id="inputPassword" type="password" placeholder="Password" name="password" />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <!--                        <label class="checkbox"><input type="checkbox" /> Remember me</label> -->
            <button class="btn" type="submit">登陆</button>
        </div>
    </div>

{{ Form::close() }}

@stop