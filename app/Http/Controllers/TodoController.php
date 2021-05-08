<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        // Return All Data From Database Using Model in Controller
        $todos = Todo::all();

        // More Than 1 variables
        // return view('todo', ['todos' => $todos]);
        
        // Using With 1 variables 
        // return view('todo')->with('todos' , $todos);

        // More Than 1 variables
        return view('todos.index', compact('todos'));
    }

    public function show($id){
        // find() -> search with primary key 
        $todo = Todo::find($id);
        return view('todos.show', compact('todo')) ;
    }

    public function create(){

        return view('todos.create');
    }

    // Converted from POST Method with create
    public function store(Request $request){

        // Validation 
        $validations = $request->validate([
            'title' => ['Required', 'min:4'] ,
            'description' => ['Required']
        ]);


        // Define inputs 
        $title = $request->input('title');
        $description =  $request->input('description');
        // Create new object to deal with table
        $todo = new Todo();
        // Add inputs to table
        $todo->title = $title;
        $todo->description = $description;
        $todo->save();

        $request->session()->flash('success', 'The task added sauccessfully');
        return redirect('/todo');

        // How To Get Inputs From Form 

        // return $request->all(); // => Dependency injection => all()=> all inputs from form 
        // dd($request); => Depndency injection 
        // dd(request()); => collect all data about server and html and json .... 
        // dd(request()->all()); => all data from Form 

    }

    public function edit(Todo $id){

        // $todo = Todo::find($id); // => fetch data to show
        return view('todos.edit')-> with('todo' , $id);
    }

    public function update(Request $request, Todo $id){

        $validation =$request->validate([
            'title' =>['Required', 'min:4'],
            'description' =>['Required'],
        ]);
        
        $title = $request->input('title');
        $description =$request->input('description');

        // $todo = Todo::find($id); // => fetch data to Update
        $id->title = $title;
        $id->description = $description;
        $id->update();

        $request->session()->flash('success', 'The task Updated sauccessfully');
        return redirect ('/todo');
    }

    public function remove($id){

        $todo = Todo::find($id);
        $todo->delete();

        session()->flash('delete', 'The task Deleted sauccessfully');
        return redirect('/todo');

    }

    public function compleate(Todo $id){
        $id->compleate = true;
        $id->update();

        session()->flash('success', 'Congrates Your Task Compleated sauccessfully');
        return redirect('/todo');

    }




}
