<?php
class Controller_Signup extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('welcome/signup'));
  }
}