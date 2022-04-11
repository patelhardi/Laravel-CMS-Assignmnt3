<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Header;

class HeadersController extends Controller
{
    public function list()
    {
        return view('headers.list', [
            'headers' => Header::all()
        ]);
    }

    public function addForm()
    {
        return view('headers.add', [
            'headers' => Header::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $header = new Header();
        $header->title = $attributes['title'];
        $header->url = $attributes['url'];
        $header->user_id = Auth::user()->id;
        $header->save();

        return redirect('/console/headers/list')
            ->with('message', 'Header has been added!');
    }

    public function editForm(Header $header)
    {
        return view('headers.edit', [
            'header' => $header,
        ]);
    }

    public function edit(Header $header)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $header->title = $attributes['title'];
        $header->url = $attributes['url'];
        $header->save();

        return redirect('/console/headers/list')
            ->with('message', 'Header has been edited!');
    }

    public function delete(Header $header)
    {
        $header->delete();
        
        return redirect('/console/headers/list')
            ->with('message', 'Header has been deleted!');        
    }
}