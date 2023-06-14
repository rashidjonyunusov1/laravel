<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){

    $infos = Info::orderBy('id', 'DESC')->paginate(6);
    
    return view('admin.infos.index', compact('infos'));
    }

    public function create(){
        if (Info::count() >= 3) 
        return redirect()->route('admin.infos.index')->with('warning', 'Malumot yetarli');

        return view('admin.infos.create');
    }

    public function store(Request $request)
    {   
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
          $requestData['icon'] = $this->file_upload();
        }
        Info::create($requestData);

        $user = auth()->user()->name;
        event(new AuditEvent($user, 'infos', 'add', $requestData));

        return redirect()->route('admin.infos.index')->with('success','Successfully added');
    }
    public function show(Info $info){

        // $info = Info::find($id);
        return view('admin.infos.show', compact('info'));
    }

    public function edit(Info $info){

        // $info = Info::find($id);
        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, Info $info){

        $requestData = $request->all();

       if($request->hasFile('icon'))
        {
            if(isset($info->icon) && file_exists(public_path('/icons/'.$info->icon))){
                unlink(public_path('/icons/'.$info->icon));
            }
          $requestData['icon'] = $this->file_upload();
        }

        $info->update($requestData);

        // return redirect()->route('admin.infos.index');
        return redirect()->route('admin.infos.index')->with('success','Successfully Update');
    }

    public function destroy(Info $info)
    {
        if(isset($info->icon) && file_exists(public_path('/icons/'.$info->icon)))
        {
            unlink(public_path('/icons/'.$info->icon));
        }

       $info->delete();
       return redirect()->route('admin.infos.index')->with('warning','Successfully Delete');
        // return redirect()->route('admin.infos.index');
    }

    public function file_upload(){
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icons/', $fileName);
        return $fileName;
    }

}
