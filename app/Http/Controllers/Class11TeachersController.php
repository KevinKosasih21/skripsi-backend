<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_11_student;

class Class11TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Class_11_student::all ();
        return view ('DaftarSiswa11UTS', compact('data'));
    }

    public function index2()
    {
        $data = Class_11_student::all ();
        return view ('DaftarSiswa11UAS', compact('data'));
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
     * @param  \App\Class_11_teacher  $class_11_teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Class_11_teacher $class_11_teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class_11_teacher  $class_11_teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_11_teacher $class_11_teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class_11_teacher  $class_11_teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_11_teacher $class_11_teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class_11_teacher  $class_11_teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Class_11_teacher $class_11_teacher)
    {
        //
    }
}
