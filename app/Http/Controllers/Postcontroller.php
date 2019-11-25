<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class Postcontroller extends Controller
{
    public function index()
    {
        //return view('welcome');
        $project = project::all();
        return view('projects.index', compact('project'));
    }

    
    public function create()
    {
        return view('projects.create');
    }

    
    public function store(Request $request)
    {
         $validate = request()->validate([
        'title' => 'required|min:4',
        'description' => 'required|min:6',
        'price' => 'required|min:2|integer'
        ]);
        
        project::create($validate);
        return redirect('/product'); 
    }

    public function show($id)
    {
        
        //$project = project::all();
        $project = project::findorfail($id);
        return view('projects.show', compact('project'));
    }

  
    public function edit($id)
    {
        $project = project::findorfail($id);
        return view('projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        $project = project::findorfail($id);
        $project->update(request()->validate([
        'title' => 'required|min:4',
        'description' => 'required|min:6',
        'price' => 'required|min:2|integer'
        ]));
        return redirect('/product'); 
    }


    public function destroy($id)
    {
        $project = project::findorfail($id);
        $project->delete();
        return redirect('/product'); 
    }
}
