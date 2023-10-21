<?php

namespace App\Http\Controllers;

use App\Models\clasroom_course;
use App\Http\Requests\Storeclasroom_courseRequest;
use App\Http\Requests\Updateclasroom_courseRequest;

class ClasroomCourseController extends Controller
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
     * @param  \App\Http\Requests\Storeclasroom_courseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeclasroom_courseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clasroom_course  $clasroom_course
     * @return \Illuminate\Http\Response
     */
    public function show(clasroom_course $clasroom_course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clasroom_course  $clasroom_course
     * @return \Illuminate\Http\Response
     */
    public function edit(clasroom_course $clasroom_course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateclasroom_courseRequest  $request
     * @param  \App\Models\clasroom_course  $clasroom_course
     * @return \Illuminate\Http\Response
     */
    public function update(Updateclasroom_courseRequest $request, clasroom_course $clasroom_course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clasroom_course  $clasroom_course
     * @return \Illuminate\Http\Response
     */
    public function destroy(clasroom_course $clasroom_course)
    {
        //
    }
}
