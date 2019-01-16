<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function showPost() {
        return view('post.post');
    }

    public function submitPost(Request $request) {
//        dd($request->all());
        $post = new Post([
            'title' => $request['title'],
            'description' =>$request->input('description'),
            'body' => $request['body'],
            'authorName' => $request['authorName']
        ]);
        $post->save();
        return redirect()->back()->with('success', 'Form submitted successfully');
    }

    public function viewPosts() {
        $posts = DB::table('posts')->get();
        return view('post.view', compact('posts'));
    }

    public function editPost($id) {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function postEditForm(Request $request,$id) {
        DB::table('posts')->where('id', $id)->update([
           'title' =>  $request['title'],
            'description' => $request['description'],
            'body' => $request['body'],
            'authorName' => $request['authorName']
        ]);
        return redirect()->back()->with('success', 'Form edited successfully');
    }

    public function deletePost($id) {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
