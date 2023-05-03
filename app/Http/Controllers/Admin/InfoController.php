<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
    $infos = DB::table('infos')->orderBy('id', 'DESC')->get();
    return view('admin.infos.index', compact('infos'));
    }

    public function create(){
        return view('admin.infos.create');
    }

    public function store(Request $request){
        DB::table('infos')->insert([
            'name' => $request->name,
            "description" => $request->description
        ]);
        return redirect()->route('admin.infos.index');
    }
}
