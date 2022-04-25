<?php

namespace App\Http\Controllers;

use App\Models\SolicitorsList;
use Illuminate\Http\Request;

class SolicitorsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SolicitorsList::all());
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
     * @param  \App\Models\SolicitorsList  $solicitorsList
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitorsList $solicitorsList)
    {
        return response()->json($solicitorsList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolicitorsList  $solicitorsList
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitorsList $solicitorsList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolicitorsList  $solicitorsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitorsList $solicitorsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SolicitorsList  $solicitorsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitorsList $solicitorsList)
    {
        //
    }
}
