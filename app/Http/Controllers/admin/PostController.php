<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = new Post;
        return view('admin.posts.create', compact(['post','categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:50',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|exists:tags,id'
        ], [
            'required' => 'The :attribute field must not be empty',
            'max' => 'The :attribute max legth is :max',
            'title.unique' => 'A post with the same title already exists',
        ]);

        $data = $request->all();
        $post = new Post();

        $post->user_id = Auth::id();
        $post->fill($data);
        $post->save();

        if(array_key_exists('tags', $data)) $post->tag()->attach($data['tags']);

        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        $tagIds = $post->tag->pluck('id')->toArray();
        return view('admin.posts.update', compact(['post', 'categories', 'tags', 'tagIds']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', Rule::unique('posts')->ignore($id), 'max:50'],
            'content' => 'required|string',
            'image' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|exists:tags,id'
        ], [
            'required' => 'The :attribute field must not be empty',
            'max' => 'The :attribute max legth is :max',
            'title.unique' => 'A post with the same title already exists',
        ]);

        $post = Post::findOrFail($id);
        $data = $request->all();

        $post->update($data);
        if(!array_key_exists('tags', $data)) {
            $post->tag()->detach();
        } else {
            $post->tag()->sync($data['tags']);
        }
        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index');
    }
}
