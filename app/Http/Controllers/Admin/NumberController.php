<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Human;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NumberController extends Controller
{
  
    public function index()
    {
        $numbers = DB::table('streets')
        ->LeftJoin('regions', 'streets.id_region', '=', 'regions.id')
        ->LeftJoin('districts', 'streets.id_district', '=', 'districts.id')
        ->select('streets.*', 'regions.reg_name_uz', 'districts.d_name_uz')->offset(0)->limit(100)->get();

        return $numbers ; 
        // $numbers = Number::orderBy('id', 'DESC')->paginate(3);
        return view('admin.numbers.index', compact('numbers'));
    }

  
    public function create()
    { 
        // if (Number::count() >= 3) 
        
        $humans = Human::all();
        return view('admin.numbers.create', compact('humans'));
    }

  
    public function store(Request $request)
    {
      if(Number::where('human_id', $request->human_id)->count() >= 3);
        return back()->with('warning', 'Limit to`lgan');


        Number::create($request->all());
        return redirect()->route('admin.numbers.index')->with('success', 'Success done');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit(Number $number)
    {
        $humans = Human::all();
        return view('admin.numbers.edit', compact('number', 'humans'));
    }

   
    public function update(Request $request, Number $number)
    {
        $number->update($request->all());
        return redirect()->route('admin.numbers.index')->with('success', 'Update done');
    }

    
    public function destroy(Number $number)
    {
        $number->delete();
        return redirect()->route('admin.numbers.index')->with('success', 'Delete done');
    }
}

// anvar narzulayev