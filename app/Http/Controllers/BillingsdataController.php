<?php

namespace App\Http\Controllers;

use App\Models\Billingsdata;
use Illuminate\Http\Request;

class BillingsdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $billingsdata = new Billingsdata($request->input());
        $billingsdata->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Billingsdata  $billingsdata
     * @return \Illuminate\Http\Response
     */
    public function show(Billingsdata $billingsdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Billingsdata  $billingsdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Billingsdata $billingsdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Billingsdata  $billingsdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billingsdata $billingsdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billingsdata  $billingsdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billingsdata $billingsdata)
    {
        //
    }
}
