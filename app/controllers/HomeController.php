<?php
class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    //首页数据获取
	public function index()
	{
        $stdarray1 = DB::table('img')->where('status', '=', '1')->get();

        $passage = DB::table('passage')
                        ->select('id', 'title', 'introduce', 'cover_path', 'url_path')
                        ->orderBy('id','desc')
                        ->take(3)
                        ->get();
        //$page = DB::table('passage')->paginate(1);

        $i = 0;
        foreach( $stdarray1 as $v)
        {
               $item[$i]['path'] = $v->path;
               $item[$i]['explain'] = $v->explain;
               $item[$i]['alt'] = $v->alt;
               ++$i;
        }

        $data = array(
                        'title'=> 'Myblog',
                        'item' => $item,
                        'passage'=> $passage,

                    );

        return View::make('index')->with('data',$data);
	}



}
