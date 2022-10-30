<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $posts = Post::latest()->paginate(5);
 
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageName = time().'.'.$request->thumbnail->extension();  
        $request->thumbnail->move(public_path('blogs'), $imageName);
        
        $blog = Post::create([
            'thumbnail'     => $imageName,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('posts.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->file('thumbnail') == "") {
            
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);

            $blog = $post->update($request->all());
 
            if($blog){
                //redirect dengan pesan sukses
                return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diupdate!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('posts.index')->with(['error' => 'Data Gagal Diupdate!']);
            }
    
        } else {
            $this->validate($request, [
                'title' => 'required',
                'content' => 'required',
                'thumbnail' => 'required|image|mimes:png,jpg,jpeg',
            ]);

            File::delete('blogs/'. $post->thumbnail);

            $imageName = time().'.'.$request->thumbnail->extension();  
            $request->thumbnail->move(public_path('blogs'), $imageName);
            
            $blog = $post->update([
                'thumbnail'     => $imageName,
                'title'     => $request->title,
                'content'   => $request->content
            ]);
    
            if($blog){
                //redirect dengan pesan sukses
                return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('posts.index')->with(['error' => 'Data Gagal Diubah!']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        File::delete('blogs/'. $post->thumbnail);
        $post->delete();
 
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }

    public function tinyimg(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]); 
    }

}
