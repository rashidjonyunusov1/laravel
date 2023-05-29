<?php

namespace App\Http\Controllers\Admin;

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
        return redirect()->route('admin.infos.index');
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

        return redirect()->route('admin.infos.index');
    }

    public function destroy(Info $info)
    {
        if(isset($info->icon) && file_exists(public_path('/icons/'.$info->icon)))
        {
            unlink(public_path('/icons/'.$info->icon));
        }

       $info->delete();
        
        return redirect()->route('admin.infos.index');
    }

    public function file_upload(){
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icons/', $fileName);
        return $fileName;
    }

}