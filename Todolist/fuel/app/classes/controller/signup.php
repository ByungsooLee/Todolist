<?php
class Controller_Signup extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('welcome/signup'));
  }
}

$auth = Auth::instance();
//ユーザー登録
$auth->create_user($username,$password,$email);