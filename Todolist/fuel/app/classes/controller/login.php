<?php
class Controller_Login extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('welcome/login'));
  }
}

// ログインしておらずゲストユーザーも有効になっていない場合、 login にリダイレクト
if ( ! Auth::check() and ! Auth::guest_login())
{
    Response::redirect('/login');
}