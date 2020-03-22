<?php
class Controller_Signup extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('welcome/signup'));
  }


  public function action_create()
  {
      if ($_POST)
    {
    //POSTデータを受け取る
    $username=Input::post('username');
    $password=Input::post('password');
    $email=Input::post('email');
    //authインスタンス化
    $auth = Auth::instance();
    //ユーザー登録
    $auth->create_user($username,$password,$email);

    return Response::forge(View::forge('welcome/content'));
    }
  }
}
