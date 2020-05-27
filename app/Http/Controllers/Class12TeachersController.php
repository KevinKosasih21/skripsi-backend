<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_12_student;

class Class12TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Class_12_student::all ();
        return view ('DaftarSiswa12UTS', compact('data'));
    }

     public function index2()
    {
        $data = Class_12_student::all ();
        return view ('DaftarSiswa12UAS', compact('data'));
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
     * @param  \App\Class_12_teacher  $class_12_teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Class_12_teacher $class_12_teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class_12_teacher  $class_12_teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_12_teacher $class_12_teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class_12_teacher  $class_12_teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_12_teacher $class_12_teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class_12_teacher  $class_12_teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Class_12_teacher $class_12_teacher)
    {
        //
    }
}
