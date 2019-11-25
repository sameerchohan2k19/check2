<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specs;
use App\project;

class ProjectSpecsController extends Controller
{
    public function update(Specs $specs)
    {
        $specs->update([
        'completed' => request()->has('completed')
        ]);
        
        return back();
    }
    
    public function store(project $project)
    {
        //$project->addSpecs(request('description'));
        $attributes = request()->validate(['description' => 'required|min:6']);
        $project->addSpecs($attributes);
        return back();
    }
}
