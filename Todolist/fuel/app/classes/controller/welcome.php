<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */




	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
		$view = View::forge('welcome/index'); 
		// Create the view object 
		$view = View::forge('welcome/login'); 
		$view = View::forge('welcome/signup'); 
		// set the template variables 
		$this->template->title = "Welcome index page"; 
		$this->template->content = $view;
	}





public function action_signup()
{
return Response::forge(View::forge('welcome/signup'));
$view = View::forge('welcome/signup'); 
if ($_POST)
{
//POSTデータを受け取る
$username=Input::post('username');
$password=Input::post('password');
$email=Input::post('email');
// Authのインスタンス化
$auth = Auth::instance();
//ユーザー登録
$auth->create_user($username,$password,$email);
}
// 登録フォームの表示
echo View::forge('welcome/signup');
}




public function action_login()
{
	return Response::forge(View::forge('welcome/login'));
	// Create the view object 
	$view = View::forge('welcome/login');
	// set the template variables 
	$data = array();
	if ($_POST)
	{
	// Authのインスタンス化
	$auth = Auth::instance();
	// 資格情報の確認
	if ($auth->login($_POST['username'],$_POST['password']))
	{
	// 認証OKならトップページへ
	Response::redirect('welcome/content.php');
	}
	else
	{
	//認証が失敗したときの処理
	$data['username'] = $_POST['username'];
	$data['login_error'] = 'ユーザー名かパスワードが違います。再入力して下さい。';
	}
	}
	// ログインフォームの表示
	echo View::forge('login',$data);
	}


public function before()
{
	parent::before();
	// 初期処理
	// POSTチェック
	$post_methods = array(
			'created',
			'updated',
			'removed',
	);
	$method = Uri::segment(2);
	if (Input::method() !== 'POST' && in_array($method, $post_methods)) {
			Response::redirect('auth/timeout');
	}
	// ログインチェック
	$auth_methods = array(
			'logined',
			'logout',
			'update',
			'remove',
	);
	if (in_array($method, $auth_methods) && !Auth::check()) {
			Response::redirect('welcome/login');
	}
	// ログイン済みチェック
	$nologin_methods = array(
			'login',
	);
	if (in_array($method, $nologin_methods) && Auth::check()) {
			Response::redirect('welcome/logined');
	}
	// CSRFチェック
}


public function action_test ()
{
	//データベース接続
	$quary = DB::select()->from('dvd')->excute();
	echo $row['title']."<br>";
'endforeach';
}



		public function action_logout()
		{
		//ログアウト
		Auth::logout();
		//ログアウト画面の表示
		echo View::forge('welcome/logout');
		}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}


