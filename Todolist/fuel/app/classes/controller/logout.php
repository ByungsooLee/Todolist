<?php
class Controller_Logout extends Controller
{
  public function action_logout()
	{
		//ログアウト
		Auth::logout();
		//ログアウト画面の表示
		echo View::forge('logout/logout.php');
	}
}