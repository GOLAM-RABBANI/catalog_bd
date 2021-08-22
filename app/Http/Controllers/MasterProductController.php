<?php

namespace App\Http\Controllers;

use App\Imports\MasterProductsImport;
use App\Models\MasterProduct;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MasterProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_product_form');
    }


    function import(Request $request)
    {
        Excel::import(new MasterProductsImport, \request()->file('select_file'));
        return back()->with('success', 'Excel Data Imported successfully.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('master_product_form');
    }


    public function master_product_list()
    {
        $user_id = auth()->id();
        $master_products = MasterProduct::where('created_by',$user_id)->paginate(30);
        return view('master_product_list',compact('master_products'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterProduct  $masterProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MasterProduct $masterProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterProduct  $masterProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterProduct $masterProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterProduct  $masterProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterProduct $masterProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterProduct  $masterProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterProduct $masterProduct)
    {
        //
    }
}
