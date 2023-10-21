<?php

namespace App\Http\Controllers;

use App\Models\student_homework;
use App\Http\Requests\Storestudent_homeworkRequest;
use App\Http\Requests\Updatestudent_homeworkRequest;

class StudentHomeworkController extends Controller
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
     * @param  \App\Http\Requests\Storestudent_homeworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestudent_homeworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_homework  $student_homework
     * @return \Illuminate\Http\Response
     */
    public function show(student_homework $student_homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_homework  $student_homework
     * @return \Illuminate\Http\Response
     */
    public function edit(student_homework $student_homework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestudent_homeworkRequest  $request
     * @param  \App\Models\student_homework  $student_homework
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestudent_homeworkRequest $request, student_homework $student_homework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_homework  $student_homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_homework $student_homework)
    {
        //
    }
}
