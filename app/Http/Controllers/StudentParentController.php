<?php

namespace App\Http\Controllers;

use App\Models\student_parent;
use App\Http\Requests\Storestudent_parentRequest;
use App\Http\Requests\Updatestudent_parentRequest;

class StudentParentController extends Controller
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
     * @param  \App\Http\Requests\Storestudent_parentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestudent_parentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_parent  $student_parent
     * @return \Illuminate\Http\Response
     */
    public function show(student_parent $student_parent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_parent  $student_parent
     * @return \Illuminate\Http\Response
     */
    public function edit(student_parent $student_parent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestudent_parentRequest  $request
     * @param  \App\Models\student_parent  $student_parent
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestudent_parentRequest $request, student_parent $student_parent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_parent  $student_parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_parent $student_parent)
    {
        //
    }
}
