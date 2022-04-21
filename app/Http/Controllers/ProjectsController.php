<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Type;

class ProjectsController extends Controller
{

    public function list()
    {
        return view('projects.list', [
            'projects' => Project::all()
        ]);
    }

    public function addForm()
    {
        return view('projects.add', [
            'types' => Type::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'technology' => 'required',
            'url1' => 'nullable|url',
            'url2' => 'nullable|url',
        ]);

        $project = new Project();
        $project->title = $attributes['title'];
        $project->content = $attributes['content'];
        $project->technology = $attributes['technology'];
        $project->url1 = $attributes['url1'];
        $project->url2 = $attributes['url2'];
        $project->user_id = Auth::user()->id;
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'types' => Type::all(),
        ]);
    }

    public function edit(Project $project)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'technology' => 'required',
            'url1' => 'nullable|url',
            'url2' => 'nullable|url',
        ]);

        $project->title = $attributes['title'];
        $project->content = $attributes['content'];
        $project->technology = $attributes['technology'];
        $project->url1 = $attributes['url1'];
        $project->url2 = $attributes['url2'];
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(Project $project)
    {
        $project->delete();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project has been deleted!');        
    }

    public function imageForm(Project $project)
    {
        return view('projects.image', [
            'project' => $project,
        ]);
    }

    public function image(Project $project)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($project->image);
        
        $path = request()->file('image')->store('projects');

        $project->image = $path;
        $project->save();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project image has been edited!');
    }
    
}
