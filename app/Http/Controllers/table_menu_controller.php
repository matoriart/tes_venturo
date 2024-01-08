<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class table_menu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        
        $table_menu = DB::table('table_menus')->where('menu','like', 'Nasi Goreng')->whereYear('tanggal', '2021')->get();
        $table1 = DB::table('table_menus')->where('menu','like', 'Mie Freno')->whereYear('tanggal', '2021')->get();
        $table2 = DB::table('table_menus')->where('menu','like', 'Nasi Teriyaki')->whereYear('tanggal', '2021')->get();
        $table3 = DB::table('table_menus')->where('menu','like', 'Teh Hijau')->whereYear('tanggal', '2021')->get();
        
        return view('index', 
        ['table_menu'=>$table_menu, 'table1'=>$table1, 'table2'=>$table2, 'table3'=>$table3]);
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
