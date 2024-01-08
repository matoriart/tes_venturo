<?php

namespace App\Http\Controllers;

use App\Models\table_menu;
use Illuminate\Http\Request;

class table_menu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $table_menu = table_menu::orderBy('id','desc')->where('menu','like', 'Nasi Goreng')->get();
        
        return view('index', ['table_menu'=>$table_menu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {

        return view('createtable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
