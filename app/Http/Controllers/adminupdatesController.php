<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Adminupdate;
use DB;
use Illuminate\Support\Facades\Storage;

class adminupdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all();
        // $admins = Post::orderBy('id', 'DESC')->get();
        //$admins = DB::select('select * from posts');
        // $admins = Post::orderBy('id', 'DESC')->take(1)->get();
        // $admins = Post::orderBy('id', 'DESC')->paginate(4);

        return view('admins.profile')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'Hello world0';

        return view('admins.create')->with('admins');
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
                   'mycoverimage' => 'image|nullable|max:1999',
               ]);

        if ($request->hasFile('mycoverimage')) {
            //get file with ex
            $filenamewithex = $request->file('mycoverimage')->getClientOriginalName();
            //get just name
            $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
            //get just extension
            $fileex = $request->file('mycoverimage')->getClientOriginalExtension();
            //getfile to store plus timestamp when it was sent to make it unique
            $filetostore = $filename.'_'.time().'.'.$fileex;
            //upload the image
            $path = $request->file('mycoverimage')->storeAs('public/cover_images', $filetostore);
        } else {
            $filetostore = 'noimage.png';
        }
        $users = new User();
        $users->id = Auth()->user()->id;
        $users->coverimage = $filetostore;
        $users->save();

        return redirect('admins.profile')->with('success', 'Post Created');
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
                       'mycoverimage' => 'image|nullable|max:1999',
                   ]);

        if ($request->hasFile('mycoverimage')) {
            //get file with ex
            $filenamewithex = $request->file('mycoverimage')->getClientOriginalName();
            //get just name
            $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
            //get just extension
            $fileex = $request->file('mycoverimage')->getClientOriginalExtension();
            //getfile to store plus timestamp when it was sent to make it unique
            $filetostore = $filename.'_'.time().'.'.$fileex;
            //upload the image
            $path = $request->file('mycoverimage')->storeAs('public/cover_images', $filetostore);
        }

        $mycoverimage = User::find($id);
        $mycoverimage->coverimage = $request->input('coverimage');
        if ($request->hasFile('mycoverimage')) {
            $mycoverimage->mycoverimage = $filetostore;
        }
        $mycoverimage->save();

        return redirect('admins.profile')->with('success', 'Profile picture uploaded');
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
    }
}
