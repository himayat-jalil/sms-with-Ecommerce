<?php

namespace App\Http\Controllers;

use App\Sclass;
use Illuminate\Http\Request;

class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Sclass::all();
        return response()->json($classes,200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function show(Sclass $sclass,$id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function edit(Sclass $sclass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sclass $sclass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sclass $sclass)
    {
        //
    }
}