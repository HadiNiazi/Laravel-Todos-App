<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
    return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
         Todo::create($request->all());
          return redirect('todo');
    }


    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', compact('todo'));
    }
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit',compact('todo'));
    }
    public function update(Request $request, $id)
    {
        Todo::findOrFail($id)->update($request->all());
        return redirect('todo');
    }
    public function destroy(Request $request, $id)
    {
       $todo = Todo::findOrFail($id)->delete();
       return redirect('todo');
    }
    public function completed($id){
        $todo = Todo::findOrFail($id);
        $todo->completed = true;
        $todo->update();
        return redirect('todo');
    }
}
