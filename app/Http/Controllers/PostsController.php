<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['']]);
    }

    /**
     * Create a new controller instance.
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        // $posts = Post::orderBy('id', 'DESC')->get();
        //$posts = DB::select('select * from posts');
        // $posts = Post::orderBy('id', 'DESC')->take(1)->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(4);

        return view('mail.mail-inbox')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mail.mail-compose')->with('posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
               [
                   'to' => 'required',
                   'subject' => 'required',
                   'body' => 'required',
               ]);
        $posts = new Post();
        $posts->to = $request->input('to');
        $posts->subject = $request->input('subject');
        $posts->body = $request->input('body');
        $posts->user_id = Auth()->user()->id;
        $posts->save();

        return redirect('/post')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('mail.mail-single')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if (Auth()->user()->id !== $post->user_id) {
            return redirect('\post')->with('error', 'Unable to open');
        } else {
            return view('mail.mail-compose')->with('post', $post);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'body' => 'required',
        ]);

        // if ($request->hasFile('mycoverimage')) {
        //     //get file with ex
        //     $filenamewithex = $request->file('mycoverimage')->getClientOriginalName();
        //     //get just name
        //     $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
        //     //get just extension
        //     $fileex = $request->file('mycoverimage')->getClientOriginalExtension();
        //     //getfile to store plus timestamp when it was sent to make it unique
        //     $filetostore = $filename.'_'.time().'.'.$fileex;
        //     //upload the image
        //     $path = $request->file('mycoverimage')->storeAs('public/cover_images', $filetostore);
        // }

        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        //$posts->mycoverimage = $request->input('mycoverimage');
        // if ($request->hasFile('mycoverimage')) {
        //     $posts->mycoverimage = $filetostore;
        // }
        $posts->save();

        return redirect('/post')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();
        if (Auth()->user()->id !== $post->user_id) {
            return redirect('\post')->with('error', 'Unable to open');
        }
        if ($post->mycoverimage != 'noimage.png') {
            Storage::delete('public/cover_images/'.$post->mycoverimage);

            return redirect('/post')->with('success', 'Post Deleted');
        }
    }
}
