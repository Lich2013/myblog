<?php

/**
 * Class Tag
 * 用于对文章标签进行操作的model
 * @return boolean
 * @param string $tag 文章标签
 * @param stdClassArray $tags 所有文章标签
 * @param int $id     标签id
 * @param int $passage_id 文章id
 * @param int $tag_id     标签id
 * @Author Lich
 * 2014-12-3 23:08:23
 */

class Tag extends Eloquent {

        //添加标签
        public function addTag($tag)
        {
            if(DB::table('tag')->insert(array('tag'=>$tag)))
                return true;
            else
                return false;
        }

        //删除标签
        public function delTag($id)
        {
            if(DB::table('tag')->where('id', '=', $id)->delete())
                return true;
            else
                return false;
        }

        //修改标签
        public function editTag($id, $tag)
        {
            if(DB::table('tag')->where('id', '=', $id)->update(array('tag'=>$tag)))
                return true;
            else
                return false;
        }

        //列出所有标签
        public function searchTag()
        {
            if($tags = DB::table('tag')->get())
                return $tags;
            else
                return false;
        }

        //给文章添加标签
        public function addPassageTag($tag_id, $passage_id)
        {
            if(DB::table('tag_passage')->insert(array('tag_id'=>$tag_id, 'passage_id'=>$passage_id)))
                return true;
            else
                return false;
        }

        //删除文章标签
        public function delPassageTag($id)
        {
            if(DB::table('tag_passage')->where('id', '=', $id)->delete())
                return true;
            else
                return false;
        }

        //列出某文章所有标签
        public function searchPassageTag($passage_id)
        {
            if($tags = DB::table('tag_passage')->where('passage_id', '=', $passage_id)->get())
                return $tags;
            else
                return false;
        }
}