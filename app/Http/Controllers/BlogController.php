<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogPost;
use App\Models\CoverTypes;
use App\Http\Requests\BlogPostRequest;
use App\Repositories\ImageRepository;
use App\Models\Image;
use App;

class BlogController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function list(){
        $total = count(BlogPost::all());
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(10);
        return view('criador/blog/list', compact('posts', 'total'));
    }

    public function publish($id){
        $post = BlogPost::find($id);
        if($post){
            $post->status = 1;
            $post->save();
        }

        return redirect()->action('BlogController@list');
    }

    public function hide($id){
        $post = BlogPost::find($id);
        if($post){
            $post->status = 0;
            $post->save();
        }

        return redirect()->action('BlogController@list');
    }

    

    public function create(BlogPostRequest $request, ImageRepository $repo){
        $postData = $request->all();
        $cover_type = $postData['cover_type_id'];
        if($cover_type == 1){
            $post = BlogPost::create($request->except('cover'));

            if ($request->hasFile('cover')) {
                $post->path_image = $repo->saveImage($request->cover, $post->id, 'posts', 250);
                
                $originalName = basename($post->path_image).PHP_EOL;
                $post = BlogPost::find($post->id);
                $post->cover = $originalName;
                $post->save();
            }
        }
        else if($cover_type == 2){
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $postData['cover'], $matches);
            $postData['cover'] = $matches[1];

            $post = BlogPost::create($postData);
        }else {
            BlogPost::create($postData);
        }
        
        return redirect()->action('BlogController@list');
    }

    public function new(){
        $cover_types = CoverTypes::all();
        return view('criador/blog/new', compact('cover_types'));
    }

    public function destroy (Request $request, $id) {        
        $item = BlogPost::find($id);
        $item->delete();

        return redirect()->action('BlogController@list');
    }

    public function edit ($id) {
        $post = BlogPost::find($id);
        $cover_types = CoverTypes::all();
        return view('criador/blog/edit', compact('post', 'cover_types'));
    }
    
    public function update(BlogPostRequest $request, ImageRepository $repo, $id){
        $post = BlogPost::findOrFail($id);

        $newData = $request;

        $post->title        = $newData['title'];
        $post->call         = $newData['call'];
        $post->content      = $newData['content'];
        $post->status       = ($newData['status'] == "on") ? 1 : 0;
        $post->cover_type_id = $newData['cover_type_id'];
        $post->save();

        $cover_type = $post->cover_type_id;
        if($cover_type == 1){
            if ($request->hasFile('cover')) {
                $originalName = basename($repo->saveImage($request->cover, $post->id, 'posts', 250)).PHP_EOL;
                $post->cover = $originalName;
                $post->save();
            }
        }
        else if($cover_type == 2){
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $newData->cover, $matches);
            if(count($matches) >= 2) {
                $post->cover = $matches[1];
            }
                
            $post->save();
        }
        
        return redirect()->action('BlogController@list');
    }
}
