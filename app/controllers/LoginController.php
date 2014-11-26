<?php
/**
 * Created by PhpStorm.
 * User: ASUS-PC
 * Date: 14-10-26
 * Time: 下午8:40
 */
class LoginController extends \BaseController{

    private $rules;
    private static  $salt = 'longzy';

    public function index(){

       return View::make('login');
    }

    public function verify(){

        $this->rules = array('username'=>'required',
                             'password'=>'required|min:6|max:18',
                            );

        $data = Input::only('username', 'password');

        $validator = Validator::make($data, $this->rules);

        if($validator->fails())
        {
            return Redirect::to('login')
                ->withErrors($validator);
        }
        else
        {

          if(Auth::attempt(array(
                                'username'=>$data['username'],
                                'password'=>$data['password'].self::$salt,
                                )
                          )
            )
          {
                return Redirect::to('admin/passage');
          }
          else
          {
             $error = 'the username or password is false!';
              return Redirect::to('login')->withErrors($error);
          }
        }

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}