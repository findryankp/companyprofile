<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $data = Content::select('*')->get();
        return view('content.index', compact('data'));
    }

    public function create()
    {
        return view('content.create');
    }

    public function store(Request $request)
    {
        Content::create([
            'content'   => $request->content,
            'url'       => $request->url
        ]);

        return redirect('content');
    }

    public function show($id)
    {
        $data = Content::select('*')
                ->where('id',$id)
                ->get();

        return view('content.show', compact('data'));
    }

    public function edit($id)
    {
        return view('content.edit', compact('data'));
    }

    public function update(Request $request)
    {
        Content::where('id',$request->id)->update([
            'content'   => $request->content,
            'url'       => $request->url
        ]);

        return redirect('content/show/'.$request->id);
    }

    public function destroy($id)
    {
        Content::where('id',$request->id)->delete();
        return redirect('content');
    }
}
