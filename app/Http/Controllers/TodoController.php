<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderby('created_at')->get();
        // $todos=[
        //     ['title'=>'Coding','description'=>"This is the coding desc"],
        //     ['title'=>'Cleaning','description'=>"This is the cleaning desc"]
        // ];
       return view('todos.index',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    dd($request);
       $todo =new Todo();
       $todo->title=$request->title;
       $todo->description=$request->description;
       $todo->save();
       return view("todos.index")->with('success','Todo Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
       return view("todos.show",['todo'=>$todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
