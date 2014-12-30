<?php

class Comment extends Eloquent{

    protected $fillable = array('name', 'content', 'email');
    public $timestamps = false;

    //保存评论
    public function saveComment($comment)
    {
       $validator = Validator::make(
                array(
                    'email'=>$comment['email'],
                    'name'=>$comment['name'],
                    'content'=>trim($comment['content']),
                ),
                array(
                    'email'=>'require|email',
                    'name'=>'require',
                    'content'=>'require',
                )
        );
        if($validator->fails())
            return Response::make('输入数据有误', 403);

        $comment['ip'] = Request::getClientIp();
        $comment['time'] = time();
        DB::table('comment')->insert($comment);
        return '评论成功';
    }

    //递归取评论和评论的回复(分页)
    public function getComment($page_id)
    {
        $perpage = 20;
        $skip = $perpage*($page_id-1);      
        $comment_father_list[] = DB::table('comment')
                                    ->orderBy('id', 'desc')
                                    ->where('father_id', '=', '0')
                                    ->skip($skip)
                                    ->take($perpage)
                                    ->get();
        foreach ($comment_father_list as $value) 
        {           
         $comment_son_list[] = DB::table('comment')
                                ->where('father_id', '=', $value['id'])
                                ->orderBy('id', 'desc')
                                ->get();
        }
        $list['comment'] = array('comment' => $comment_father_list, 'reply' => $comment_son_list );
        $page = DB::table('comment')->orderBy('id', 'desc')->paginate($perpage);
        $list['page'] = $page;
        return $list;
    }

    //

}