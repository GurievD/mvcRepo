<?php


namespace App\Controllers;


use App\Models\Todo;
use Laminas\Diactoros\ServerRequest;

class TodoController
{

    function index() {
        /** @var Todo[] $todo_list */
        $todo_list = Todo::all();

        $ltrim = ltrim(date('d'), 0);

        return view('todo', [
            'todo_list' => $todo_list,
            'ltrim' => $ltrim
        ]);
    }

    function newTodo(ServerRequest $request)
    {
        $data = $request->getParsedBody();

        $todo = new Todo();
        $todo->todo_content = $data['todo'];

        if($todo->todo_content != null)
            $todo->save();

        return redirect('/todo');
    }
}