<?php
class Controller_Todo extends Controller
{
    public function action_index()
    {
        $todos = Model_Todo::find('all');
        $todoVal['todos'] = $todos;

        return Response::forge(View::forge('content/index', $todoVal));

    }

    public function action_add()
    {
        if(Input::method() === 'GET') {
            return Response::forge(View::forge('content/ndex'));
        }

        $note = Input::post('note');

        $todo = Model_Todo::forge();
        $todo->note = $note;
        $todo->created = Date::forge()->format("%Y-%m-%d %H:%M:%S");
        $todo->save();

        return Response::redirect('content/index');

    }

    public function action_delete($todoId = null)
    {

        if ($todoId === null) {
            return Response::redirect('content/index');
        }

        if (Input::method() === 'GET') {
            $todoVal['todoId'] = $todoId;
            return Response::forge(View::forge('content/index', $todoVal));
        }

        $todo = Model_Todo::find($todoId);
        $todo->delete();

        return Response::redirect('content/index');
    }

    public function action_done($todoId = null)
    {

        if ($todoId === null) {
            return Response::redirect('content/index');
        }

        if (Input::method() === 'GET') {
            $todoVal['todoId'] = $todoId;
            return Response::forge(View::forge('content/index', $todoVal));

        }

        $todo = Model_Todo::find($todoId);
        $todo->delete();

        Session::set_flash('slide-msg','お疲れ様でした！');

        return Response::redirect('content/index');
    }
}