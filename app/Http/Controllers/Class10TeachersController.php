<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_10_student;

class Class10TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Class_10_student::all ();
        return view ('DaftarSiswa10UTS', compact('data'));
        
    }

     public function index2()
    {

        $data = Class_10_student::all ();
        return view ('DaftarSiswa10UAS', compact('data'));
        
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
     * @param  \App\Class_10_teacher  $class_10_teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Class_10_teacher $class_10_teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class_10_teacher  $class_10_teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_10_teacher $class_10_teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class_10_teacher  $class_10_teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_10_teacher $class_10_teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class_10_teacher  $class_10_teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Class_10_teacher $class_10_teacher)
    {
        //
    }
}
