<?php

namespace App\Http\Controllers;
use App\Blog;
use App\BlogCategory;
use App\User;
use App\Comment;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MostrarblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(6);
        return view('/visitante/blog', compact('blogs'));
    }

    public function indexuser()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(6);
        return view('user/views/bloguser', compact('blogs'));
    }
    public function blogview($id)
    {
        $user = Auth::User();
        $blog = Blog::find($id);
        return view('user/views/blogview', compact('blog', 'user'));
    }
    public function viewblog($id)
    {
        $blog = Blog::find($id);
        $query = Comment::join('comments', 'comments.blog_id', '=', 'blogs.id')
            ->where('comments.blog_id', $id)
            ->select('comments.blog_id' , 'blogs.id' , 'comments.comment', 'comments.status');
        return view('/visitante/viewblog', compact('blog', 'query'));
    }

    public function commentBlog(Request $request , $user, $blog){
        $comment = new Comment;
        $comment->user_id = $user;
        $comment->blog_id = $blog;
        $comment->comment = $request->message;
        $comment->status  = 'active';
        $comment->save();
        return back()->with('agregar','commentario agregado');

    }

}
