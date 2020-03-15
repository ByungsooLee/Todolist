<?php
class Controller_Signup extends Controller
{
  public function action_ndex()
  {
    return Response::forge(View::forge('welcome/signup'));
  }
}