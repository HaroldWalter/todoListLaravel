<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('name', 'DESC')->get();
        return view('home')->with('todos', $todos);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(TodoRequest $request)
    {
        // On crée une instance et on l'enregistre dans la table Todo
        Todo::create($request->all());
        // On redirecte vers la page home
        return redirect('/');
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo.edit')->with('todo', $todo);
    }

    public function edit(TodoRequest $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->name = $request->input('name');
        $todo->qty = $request->input('qty');
        $todo->price = $request->input('price');
        $todo->save();
        return redirect('/');
    }

    public function destroy( $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/');
    }
}
