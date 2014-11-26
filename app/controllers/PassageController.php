<?php
/**
 * Created by PhpStorm.
 * User: ASUS-PC
 * Date: 14-10-25
 * Time: 下午11:25
 */

class PassageController extends \BaseController {

    //文章列表
    public function passagelist()
    {
        $page_id = Input::get('page');
        if($page_id == null)
            $page_id = 1;

        $perpage = 10;
        $skip = $perpage*($page_id-1);

        $list['list'] = DB::table('passage')
                ->orderBy('id', 'desc')
                ->select('title', 'url_path', 'time')
                ->skip($skip)
                ->take($perpage)
                ->get();
        $page = DB::table('passage')->orderBy('id', 'desc')->paginate($perpage);
        $list['page'] = $page;


        return View::make('passagelist')->with('list', $list);
    }

    //文章详情
    public function passage($url)
    {
        $passage_data = DB::table('passage')
            ->where('url_path', '=' , $url)
            ->select('id', 'title', 'content', 'time')
            ->get();
        $tag_data = DB::table('tag_passage')
            ->where('passage_id', '=', $passage_data[0]->id)
            ->join('tag','tag_passage.tag_id', '=', 'tag.id' )
            ->select('tag')
            ->get();
        $passage_data[0]->tag = $tag_data;

        return View::make('passage')->with('data', $passage_data);
    }
} 