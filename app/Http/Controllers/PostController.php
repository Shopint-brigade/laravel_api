<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

/*Route::get('/image', function(){
    $post = Post::create([
        'title' => 'test_image', 
        'image_id' => 'img1-slug', 
        'image_name'=> '1234', 
        'img_id' => 'beauty one',
        'img_slug' => '2221'
    ]);
    return $post;
});  */

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all images 
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255'
        ]);

        //create a post request
        return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show a specific image data
        return Post::find($id);
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
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255'
        ]);
        
        //update a specific image data
         $post = Post::find($id);
         $post->update($request->all());

         return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete a specific image data
        return Post::destroy($id);
    }
}
