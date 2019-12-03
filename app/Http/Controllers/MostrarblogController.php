<?php

namespace App\Http\Controllers;
use App\Blog;
use App\BlogCategory;
use App\User;
use App\Comment;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        $blogs = Blog::limit(3)->get();
        $comentarios = Comment::where('blog_id',$id)
            ->where('status','=','active')
            ->paginate(2);
        return view('user/views/blogview', compact('blog', 'user', 'comentarios','blogs'));
    }
    public function viewblog($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::limit(3)->get();
        $comentarios = Comment::where('blog_id',$id)
            ->where('status','=','active')
            ->paginate(2);
        return view('/visitante/viewblog', compact('blog', 'comentarios','blogs'));
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
    public function vistaComment($id){

        $comments = Comment::where('blog_id', $id )->get();
        $blog = $id;
        return view('/admin/blog/comment', compact('comments', 'blog'));
    }
    public function updatecomment( $id , $blog ){

        $comment = Comment::find($id);

        if ($comment->status == 'active'){

            $comment->status = 'inactive';
            $comment->save();
            return redirect()->route('vistaComment',$blog)->with('alert','El producto fue eliminado correctamente.');
        }else{
         
            $comment->status = 'active';
            $comment->save();
            return redirect()->route('vistaComment',$blog)->with('alert','El producto fue eliminado correctamente.');
        }
    }

}
