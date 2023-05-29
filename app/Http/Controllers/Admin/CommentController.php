<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id', 'DESC')->paginate(6);

        return view('admin.comments.index', compact('comments'));
    }

    public function create()
    {
        return view('admin.comments.create');
    }
    public function store(Request $request, Comment $comment)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            $requestData['image'] = $this->file_upload();    
        }
        Comment::create($requestData);
        return redirect()->route('admin.comments.index', compact('comment'));
    }

    public function show(Comment $comment)
    {
        return view('admin.comments.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            if(isset($comment->image) && file_exists(public_path('/comments_img/'.$comment->image)))
            {
                unlink(public_path('/comments_img/'.$comment->image));
            }
          $requestData['image'] = $this->file_upload();
        }

        $comment->update($requestData);

        return redirect()->route('admin.comments.index');
    }

    public function destroy(Comment $comment)
    {
        if(isset($comment->image) && file_exists(public_path('/comments_img/'.$comment->image)))
        {
            unlink(public_path('/comments_img/'.$comment->image));
        }
        $comment->delete();

        return redirect()->route('admin.comments.index');
    }

    public function file_upload() {
        $file = request()->file('image');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('comments_img/', $fileName);
        return $fileName;
    }
}
