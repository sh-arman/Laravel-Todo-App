<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // home
    public function index()
    {

        return view('home');
    }

    // todo
    public function todo()
    {
        $todos = Todo::latest()->get();
        return view('todo')->with('todos', $todos);
    }

    // add
    public function add(Request $req)
    {

        $todos = new Todo;
        $todos->todo = $req->todo;
        $todos->save();
        return redirect()->back();
    }

    // completed
    public function complete($id)
    {
        $todos = Todo::find($id);
        $todos->completed = 1;
        $todos->save();
        return redirect()->back();
    }


    public function edit($id)
    {
        $todos = new Todo ;
        $todos = Todo::find($id);
        return view('edit')->with('todos' , $todos);
    }


    public function update(Request $req, $id)
    {
        $todo = new Todo ;
        $todo = Todo::find($id);
        $todo->todo = $req->todo;
        $todo->save();
        return redirect()->route('todo');
    }


    public function delete($id)
    {
        $todos = Todo::find($id);
        $todos->delete();
        return redirect()->back();
    }

    // Completed Todos
    public function completedtodos()
    {
        $todos = Todo::latest()->get();
        return view('completed')->with('todos', $todos);
    }

    // Restore
    public function restore($id)
    {
        $todos = Todo::find($id);
        $todos->completed = 0;
        $todos->save();
        return redirect()->route('todo');
    }
}
