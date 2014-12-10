<?php

/**
 * Class Img
 * 管理图片的模型类
 * 一般是首页图片轮播的
 * @return boolean
 * @param int $id 图片id
 * @param int $status 图片id
 */

class Img extends Eloquent
{
    protected $guarded = array('id');
    //查看图片
    public function viewImg()
    {
        if ($img_data = DB::table('img')->get()) {
            return $img_data;
        } else {
            return false;
        }
    }

    //编辑图片
    public function editImg($id, $path, $explain, $status, $alt)
    {
        if($path == null)
            return false;
        if($status == null)
            $status = 0;
        if (DB::table('img')->where('id', '=', $id)->update(array('paht' => $path, 'explain' => $explain, 'status' => $status, 'alt' => $alt)))
            return true;
        else
            return false;
    }

    //删除图片
    public function delImg($id)
    {
        if (DB::table('img')->where('id', '=', $id)->delete())
            return true;
        else
            return false;
    }

    //添加图片
    public function addImg($path, $explain, $status, $alt)
    {
        if($path == null)
            return false;
        if($status == null)
            $status = 0;
        if(DB::table('img')->insert(array('paht' => $path, 'explain' => $explain, 'status' => $status, 'alt' => $alt)))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}