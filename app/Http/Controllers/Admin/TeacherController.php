<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class TeacherController extends Controller
{
  
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->paginate(6);

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

  
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            $requestData['image'] = $this->file_upload();    
        }
        Teacher::create($requestData);
        return redirect()->route('admin.teachers.index');
    }

    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            if(isset($teacher->image) && file_exists(public_path('/teachers_img/'.$teacher->image)))
            {
                unlink(public_path('/teachers_img/'.$teacher->image));
            }
          $requestData['image'] = $this->file_upload();
        }

        $teacher->update($requestData);

        return redirect()->route('admin.teachers.index', compact('teacher'));
    }

    public function destroy(Teacher $teacher)
    {
        if(isset($teacher->image) && file_exists(public_path('/teachers_img/'.$teacher->image)))
        {
            unlink(public_path('/teachers_img/'.$teacher->image));
        }
        $teacher->delete();

        return redirect()->route('admin.teachers.index', compact('teacher'));
    }


    public function file_upload() {
        $file = request()->file('image');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('teachers_img/', $fileName);
        return $fileName;
    }
}
