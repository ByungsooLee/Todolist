<?php
class Controller_Content extends Controller
{
	public function before()
	{
		parent::before();
		// 初期処理
		// loginチェック
		if (! Auth::check())
        {
					return Response::redirect('login');
        }
	}

	public function action_index()
	{
		// Create the view object 
		$view = View::forge('content/index');  
		// set the template variables 
		$this->template['title'] = "Welcome content page"; 
		$view->set('header',\View::forge('template/header'));
		$view->set('footer',\View::forge('template/footer'));
		$view->set_global($this->template,null,false);
		return $view;
	}
}


