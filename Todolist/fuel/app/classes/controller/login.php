<?php
class Controller_Login extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('welcome/login'));
  }

  public function action_login()
    {
      $data = array();
      if ($_POST)
      {
      // Authのインスタンス化
      $auth = Auth::instance();
      // 資格情報の確認
      if ($auth->login($_POST['username'],$_POST['password']))
      {
      // 認証OKならトップページへ
      Response::redirect('welcome/content');
      }
      else
      {
      //認証が失敗したときの処理
      $data['username'] = $_POST['username'];
      $data['login_error'] = 'ユーザー名かパスワードが違います。再入力して下さい。';
      }
      }
      // ログインフォームの表示
      echo View::forge('welcome/login',$data);
    }
}

