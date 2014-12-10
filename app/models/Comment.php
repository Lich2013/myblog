<?php

class Comment extends Eloquent{

     protected $fillable = array('name', 'content', 'email');
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
    public function getComment(){}

}