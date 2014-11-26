<?php
/**
 * Created by PhpStorm.
 * User: ASUS-PC
 * Date: 14-10-27
 * Time: 下午10:25
 */
use dflydev\markdown\MarkdownParser;

class PassageManageController extends AdminController{

        //文章管理列表页面
        public function index()
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


            return View::make('passageManageList')->with('list',$list);
        }

        //文章发布页面
        public function publishPassage()
        {
            $passage['func'] = '../createPassage';
            return View::make('passageEdit')->with('passage',$passage);
        }

        //发表文章方法
        public function createPassage()
        {
            $data['md_passage'] = Input::get('content');
            $data['url_path'] = Input::get('url_path');
            $data['cover_path'] = Input::get('cover_path');
            $data['title'] = Input::get('title');
            $data['introduce'] = Input::get('introduce');
            $md_passage = $data['md_passage'];
            $url_path = $data['url_path'];
            $cover_path = $data['cover_path'];
            $title = $data['title'];
            $introduce = $data['introduce'];
            if($this->savePassage($md_passage, $url_path, $cover_path, $title, $introduce))
                return Redirect::to('admin/passage');
        }

        //修改文章 TODO:命名不好
        public function editPassage($url_path)
        {
            $passage['content'] = $this->getPassage($url_path);
            $passage['func'] = '../getNewPassage';
            return View::make('passageEdit')->with('passage',$passage);
        }

        //获取修改后文章
        public function getNewPassage()
        {
            $data['md_passage'] = Input::get('content');
            $data['url_path'] = Input::get('url_path');
            $data['cover_path'] = Input::get('cover_path');
            $data['passage_id'] = Input::get('passage_id');
            $data['introduce'] = Input::get('introduce');
            $data['title'] = Input::get('title');
            $md_passage = $data['md_passage'];
            $url_path = $data['url_path'];
            $cover_path = $data['cover_path'];
            $passage_id = $data['passage_id'];
            $title = $data['title'];
            $introduce = $data['introduce'];
            if($this->updatePassage($md_passage, $url_path, $cover_path, $passage_id, $title,  $introduce))
                return Redirect::to('admin/passage');
            else
                return  Response::json(array('error'=>'failed'));
        }
        //更新文章
        private  function updatePassage($md_passage, $url_path, $cover_path, $passage_id, $title,  $introduce)
        {
            $html_passage = $this->transformPassage($md_passage);
            if( DB::table('passage')->where('id', '=', $passage_id)->update(
                array(
                    'origin_content' => $md_passage,
                    'content' => $html_passage,
                    'time' => time(),
                    'url_path' => $url_path,
                    'cover_path' => $cover_path,
                    'title' => $title,
                    'introduce' => $introduce,
                )
            ))
                return true;
            else
                return false;
        }

        //预览文章(ajax)
        public function viewPassage()
        {
            if(Request::ajax())
            {
                $md_passage = Input::json();
                $md_passage = json_decode($md_passage);
                $html_passage = $this->transformPassage($md_passage);

                return  Response::json(array('content' => $html_passage));
            }
            else
                return Response::json(array('error'=>'false'));
        }


        public function deletePassage($url_path)
        {
            if($url_path == null)
            {
                $error = array('error' => 'id is null');
                return Response::json($error);
            }
            else
            {
                DB::table('passage')->where('url_path', '=', $url_path)->delete();
                return Redirect::to('admin/passage');
            }
        }
        //获取原文章
        private function getPassage($url_path)
        {
            $passage = DB::table('passage')
                            ->where('url_path', '=', $url_path)
                            ->select('origin_content', 'url_path', 'title', 'cover_path', 'id', 'introduce')
                            ->get();

            return $passage;

        }

        //保存新文章
        private function savePassage($md_passage, $url_path, $cover_path, $title, $introduce)
        {
            $html_passage = $this->transformPassage($md_passage);
            if( DB::table('passage')->insert(
                array(
                    'origin_content' => $md_passage,
                    'content' => $html_passage,
                    'time' => time(),
                    'url_path' => $url_path,
                    'cover_path' => $cover_path,
                    'title' => $title,
                    'introduce' => $introduce,
                )
            ))
                return true;
            else
                return false;
                //return Response::json(array('error'=>'failed'));
        }


        //md转化为html
        private function transformPassage($md_passage)
        {
            $parser = new MarkdownParser();
            $html_passage = $parser->transformMarkdown($md_passage);

            return $html_passage;
        }



}