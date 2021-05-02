<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use Illuminate\Http\Request;

class McqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mcqs.index');
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
     * @param  \App\Models\Mcqs  $mcqs
     * @return \Illuminate\Http\Response
     */
    public function show(Mcqs $mcqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mcqs  $mcqs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcqs $mcqs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mcqs  $mcqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mcqs $mcqs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mcqs  $mcqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mcqs $mcqs)
    {
        //
    }
}
