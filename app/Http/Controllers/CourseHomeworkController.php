<?php

namespace App\Http\Controllers;

use App\Models\course_homework;
use App\Http\Requests\Storecourse_homeworkRequest;
use App\Http\Requests\Updatecourse_homeworkRequest;

class CourseHomeworkController extends Controller
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
     * @param  \App\Http\Requests\Storecourse_homeworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecourse_homeworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_homework  $course_homework
     * @return \Illuminate\Http\Response
     */
    public function show(course_homework $course_homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course_homework  $course_homework
     * @return \Illuminate\Http\Response
     */
    public function edit(course_homework $course_homework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecourse_homeworkRequest  $request
     * @param  \App\Models\course_homework  $course_homework
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecourse_homeworkRequest $request, course_homework $course_homework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course_homework  $course_homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(course_homework $course_homework)
    {
        //
    }
}
