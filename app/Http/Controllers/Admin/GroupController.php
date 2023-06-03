<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::orderBy('id', 'DESC')->paginate(6);

        return view('admin.groups.index', compact('groups'));
    }

    public function create(){
    if (Group::count() >= 3) 

        return redirect()->route('admin.groups.create')->with('warning', 'Malumot yetarli');
    }
    public function store(Request $request, Group $group)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            $requestData['image'] = $this->file_upload();    
        }
        Group::create($requestData);
        return redirect()->route('admin.groups.index')->with('success','Successfully added');
    }

    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    public function edit(Group $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $requestData = $request->all();

        if ($request->hasFile('image'))
         {
            if(isset($group->image) && file_exists(public_path('/groups_img/'.$group->image)))
            {
                unlink(public_path('/groups_img/'.$group->image));
            }
          $requestData['image'] = $this->file_upload();
        }

        $group->update($requestData);

        return redirect()->route('admin.groups.index')->with('success','Successfully Update');
    }

    public function destroy(Group $group)
    {
        if(isset($group->image) && file_exists(public_path('/groups_img/'.$group->image)))
        {
            unlink(public_path('/groups_img/'.$group->image));
        }
        $group->delete();

        return redirect()->route('admin.groups.index');
    }

    public function file_upload() {
        $file = request()->file('image');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('groups_img/', $fileName);
        return $fileName;
    }
}