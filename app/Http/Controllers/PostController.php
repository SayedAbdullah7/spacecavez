<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        $posts = Post::where('category','event')->latest()->get();
        $head = 'available courses';
        return view('frontend.post.index',compact('posts'));
    }
    public function educations()
    {
        $posts = Post::where('category','education')->latest()->get();
        $head = 'available courses';
        return view('frontend.post.index',compact('posts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.form', [
            'post' => $post = new Post(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $this->handel($request,$post);
        return \redirect()->route('dashboard');
        return redirect()->back()->with('success', 'Content saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('frontend.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.form', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
//        $post->fill($request->all());
        $this->handel($request,$post);
        return Redirect::route('post.edit',$post->id)->with('status', 'post-updated');
    }

    private function handel(Request $request, Post $post){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Resize and save the original image
            $imagePath = 'blog/images/' . $filename;
            Image::make($image)->resize(1200, 400, function ($constraint) {
//                $constraint->aspectRatio();
//                $constraint->upsize();
            })->encode(null, 70)->save(public_path($imagePath));

            // Create and save the thumbnail
            $thumbnailPath = 'blog/thumbnails/' . $filename;
            Image::make(public_path($imagePath))->fit(400, 150)->encode(null, 70)->save(public_path($thumbnailPath));
            $imageData = ['image'=>$filename];
            $post->image = $filename;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard');
    }
}
