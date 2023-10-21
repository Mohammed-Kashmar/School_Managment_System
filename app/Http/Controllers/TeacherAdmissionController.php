<?php

namespace App\Http\Controllers;

use App\Models\Teacher_Admission;
use App\Http\Requests\StoreTeacher_AdmissionRequest;
use App\Http\Requests\UpdateTeacher_AdmissionRequest;

class TeacherAdmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacher_AdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacher_AdmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher_Admission  $teacher_Admission
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher_Admission $teacher_Admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher_Admission  $teacher_Admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher_Admission $teacher_Admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacher_AdmissionRequest  $request
     * @param  \App\Models\Teacher_Admission  $teacher_Admission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacher_AdmissionRequest $request, Teacher_Admission $teacher_Admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher_Admission  $teacher_Admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher_Admission $teacher_Admission)
    {
        //
    }
}
