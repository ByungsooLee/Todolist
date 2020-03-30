<?php
class Controller_Signup extends Controller
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
		$view = View::forge('signup/signup'); 
		$this->template['title'] = "Welcome signup page"; 
		$view->set_global($this->template,null,false);
		$view->set('header',\View::forge('template/header'));
		$view->set('footer',\View::forge('template/footer'));
		return $view;
	}

	//post用のメソッドを用意すればif分岐しなくてよくなる！
	public function post_index()
	{	

		//POSTデータを受け取る
		$post = \Input::post();
		$auth = Auth::instance();
		//ユーザー登録
		if(!empty($_post["submit"])):
			$auth->create_user($post['name'],$post['password'],$post['email']);
		endif;

		return \Response::redirect(\Uri::base());
	}
}