<?php
/**
 * Created by Lich
 * Date: 2014/12/14
 * Time: 21:36
 */

class ImgManageController extends AdminController {

        public function index()
        {
            $data = Img::all();
            return $data;
            //return View::make('imageManageList')->with('data', $data);
        }

        public function del($id)
        {
            if(Img::deleted($id))
                return true;
            else
                return false;
        }

        public function edit($id, $path, $status, $alt)
        {
           foreach($id as $key => $value)
           {
               $img = Img::find($value);
               $img->save($path[$key]);
               $img->save($status[$key]);
               $img->save($alt[$key]);
           }
            return $this->index();
        }
}