<?php
class Controller_Login extends Controller
{  
	public function before()
	{
		parent::before();
		// 初期処理
		// loginチェック
		if (Auth::check())
        {
        	return Response::redirect('content');
        }
	}

  public function action_index()
	{
		// Create the view object 
		$view = View::forge('login/login');
		$this->template['title'] = "Welcome login page"; 
		$view->set_global($this->template,null,false);
		$view->set('header',\View::forge('template/header'));
		$view->set('footer',\View::forge('template/footer'));

		return $view;
	}

	public function post_index()
	{
		// set the template variables 
		if ($_POST)
		{
			// Authのインスタンス化
			$auth = Auth::instance();
			// 資格情報の確認
		}
		if ($auth->login($_POST['username'],$_POST['password']))
		{
			// 認証OKならトップページへ
			return Response::redirect('content');
		}
		else
		{
			//認証が失敗したときの処理
			$this->template['username'] = $_POST['username'];
			$this->template['login_error'] = 'ユーザー名かパスワードが違います。再入力して下さい。';
		}

		// ログインフォームの表示
		$view = View::forge('login/login');
		$this->template['title'] = "Welcome login page"; 
		$view->set_global($this->template,null,false);
		$view->set('header',\View::forge('template/header'));
		$view->set('footer',\View::forge('template/footer'));

		return $view;
	}

	public function action_logout()
	{
		//ログアウト
		Auth::logout();
		//ログアウト画面の表示
		echo View::forge('welcome/logout');
	}
}