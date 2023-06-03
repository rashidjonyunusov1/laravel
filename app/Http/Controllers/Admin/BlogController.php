<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(6);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request, Blog $blog)
    {

        $requestData = $request->all();

        if($request->hasFile('image'))
        {
          $requestData['image'] = $this->file_upload();
        }
        Blog::create($requestData);
//   dd ($request);

        return redirect()->route('admin.blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        
        $requestData = $request->all();

        if($request->hasFile('image'))
         {
             if(isset($blog->image) && file_exists(public_path('/blog_img/'.$blog->image))){
                 unlink(public_path('/blog_img/'.$blog->image));
             }
           $requestData['image'] = $this->file_upload();
         }
 
         $blog->update($requestData);
 
         return redirect()->route('admin.blogs.index');
    }

 
    public function destroy(Blog $blog)
    {
        if(isset($blog->image) && file_exists(public_path('/blog_img/'.$blog->image)))
        {
            unlink(public_path('/blog_img/'.$blog->image));
        }

       $blog->delete();
        
        return redirect()->route('admin.blogs.index');
    }
    
    public function file_upload(){
        $file = request()->file('image');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('blog_img/', $fileName);
        return $fileName;
    }
}
