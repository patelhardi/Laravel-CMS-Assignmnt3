<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\About;

class AboutsController extends Controller
{
    public function list()
    {
        return view('abouts.list', [
            'abouts' => About::all()
        ]);
    }

    public function editForm(About $about)
    {
        return view('abouts.edit', [
            'about' => $about,
        ]);
    }

    public function edit(About $about)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'url' => 'nullable|url',
        ]);

        $about->title = $attributes['title'];
        $about->content1 = $attributes['content1'];
        $about->content2 = $attributes['content2'];
        $about->url = $attributes['url'];
        $about->save();

        return redirect('/console/abouts/list')
            ->with('message', 'About Me has been edited!');
    }

    public function imageForm(About $about)
    {
        return view('abouts.image', [
            'about' => $about,
        ]);
    }

    public function image(About $about)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($about->image);
        
        $path = request()->file('image')->store('abouts');

        $about->image = $path;
        $about->save();
        
        return redirect('/console/abouts/list')
            ->with('message', 'About Me image has been edited!');
    }
}