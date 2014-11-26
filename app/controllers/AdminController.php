<?php
class AdminController extends \BaseController{

    function __construct()
    {
        if(!Auth::check())
        {
           return Redirect::to('login');
        }


    }

    protected function __clone()
    {
        //防止被clone改写
    }


}