<?php
/**
 * Created by Lich.
 * Date: 2015/1/2
 * Time: 19:47
 */

/**
 * Class VerifyCodeController
 * 拖动式验证码
 * @param int $cut_left 图片左坐标
 * @param int $cut_right 图片右坐标
 * @param int $cut_length 剪的图片长度
 */
class VerifyCodeController extends BaseController{

    private $cut_left;
    private $cut_right;
    private $cut_length = 20;

    //输出
    public function output()
    {
        $img = $this->code();
        return $img;
    }

    //验证
    public function verify()
    {
        $code = Input::all();
        $cut_left = Session::get('cut_left');
        $cut_right = Session::get('cut_right');
        $cut_length = Session::get('cut_length');
        $left = $code['left'];
        $rigth = $code['right'];
        $length = $code['length'];
        if($cut_left + 5 >= $left && $cut_left - 5 <= $left)
        {
            if($cut_right + 5 >= $rigth && $cut_right - 5 <= $rigth)
            {
                if ($cut_length == $length)
                {
                    return true;
                }
                else
                    return false;
            }
            else
                return false;
        }
         else
             return false;

    }

    //制作
    //TODO:裁剪还是覆盖?
    private function code()
    {
        $id_arr = DB::table('code')->select('id')->get();
        $num = round(0, count($id_arr));
        $id = $id_arr[$num];

        $path = DB::table('code')->select('path')->where('id', '=', $id);
        $img = fopen(storage().'/'.$path, 'r');
        $img = imagecreatefrompng(200,100);

        //随机裁剪img, 记录坐标, session化
        
        //获取图片长度
        //获取图片高度
        //创建两张画布
        //cut
        //储存

        $image['bg'] = $bg;
        $image['cut'] = $cut_img;
        return $image;

    }
}