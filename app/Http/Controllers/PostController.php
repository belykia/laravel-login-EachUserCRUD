<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use App\User;
use Gate ;
use View;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest()->paginate(5);
      return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('posts.create');
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






      'asnumber' => 'required|unique:posts|max:255',

      'peeringrs' => 'nullable|max:255',
      'peeringbd' => 'nullable|max:255',
      'asset' => 'nullable|max:255',
      'contact' => 'required|email',
    ]);

        $post = new Post ;





        // Set the posts properties
        $post->asnumber = $request->input('asnumber');
        $post->peeringrs = $request->input('peeringrs');
        $post->peeringdb = $request->input('peeringbd');
        $post->asset = $request->input('asset'); // fyi best to not use dashes or you will run into problems and have to work around them.
        $post->contact = $request->input('contact');
        $post->user_id=Auth::id();
        // save the post
        $post->save();





Session::flash('success', 'dont worry i saved your data!');
return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $posts=Post::find($id);
      Session::flash('show', 'here we are again !');
        return view('posts.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=Post::find($id);

      if (Gate::allows('update-post', $post)) {
      return view('posts.edit',compact('post'));
  }
  else{return view('posts.edit',compact('post')); }
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

      $post = Post::find($id);
      if (Gate::allows('update-post', $post)) {
      $request->validate([






      'asnumber' => 'required|unique:posts|max:255',

      'peeringrs' => 'nullable|max:255',
      'peeringbd' => 'nullable|max:255',
      'asset' => 'nullable|max:255',
      'contact' => 'required|email',
        ]);






        // Set the posts properties
        $post->asnumber = $request->input('asnumber');
        $post->peeringrs = $request->input('peeringrs');
        $post->peeringdb = $request->input('peeringbd');
        $post->asset = $request->input('asset'); // fyi best to not use dashes or you will run into problems and have to work around them.
        $post->contact = $request->input('contact');
        $post->user_id=Auth::id();
        // save the post
        $post->save();





Session::flash('update', 'easy , peasy ,I updated your datas!');

return redirect()->route('posts.index');
}else{
  Session::flash('error', 'OOPS!! i figured out that your not able to use the rrd_last update form ,because it doesnt belong to you ,go back please');

  return view('posts.error');

}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      $post = Post::find($id);
          $post->delete();
          Session::flash('suppression', 'breath , i deleted your datas!');

      return redirect()->route('posts.index');
}
}
