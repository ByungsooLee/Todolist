<?php
class Controller_Welcome extends Controller
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
		$view = View::forge('welcome/index');  
		// set the template variables 
		$this->template['title'] = "Welcome index page"; 
		$view->set('header',\View::forge('template/header'));
		$view->set('footer',\View::forge('template/footer'));
		$view->set_global($this->template,null,false);
		return $view;
	}
	
	public function action_test ()
	{	
		//データベース接続
		$quary = DB::select()->from('dvd')->excute();
		echo $row['title']."<br>";
		'endforeach';
	}

	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}

}


