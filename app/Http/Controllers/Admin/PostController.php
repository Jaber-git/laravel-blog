<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

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
        $posts=post::all();

        return view('admin.post.show', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=tag::all();
        $categories= category::all();


        return view('admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'tittle'=>'required',
           'slug'=>'required',
           'image'=>'required',
           'content'=>'required'

       ] );

   $post=new post();

   $post->tittle=$request->tittle;
   $post->slug=$request->slug;
   $post->image=$request->image;
   $post->status=$request->status;
   $post->content=$request->content;
  
      $post->save();
      
      $post->tags()->sync($request->tags);
      $post->categories()->sync($request->categories);
   

      return redirect(route('post.index'));

          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $post=post::where('id', $id)->first(); 
        $tags=tag::all();
        $categories= category::all();

        return view('admin.post.edit', compact( 'tags','categories','post'));
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
        
       
        $this->validate($request,[
            'tittle'=>'required',
            'slug'=>'required',
            'image'=>'required',
            'content'=>'required'
 
        ] );
 
    $post=post::find($id);
 
    $post->tittle=$request->tittle;
    $post->slug=$request->slug;
    $post->image=$request->image;
    $post->status=$request->status;
    $post->content=$request->content;
   
       $post->save();

       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);

       return redirect(route('post.index'));

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
      return redirect()->back();
    }
}
