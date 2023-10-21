<?php

namespace App\Http\Controllers;

use App\Models\Student_Admission;
use App\Http\Requests\StoreStudent_AdmissionRequest;
use App\Http\Requests\UpdateStudent_AdmissionRequest;

class StudentAdmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreStudent_AdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent_AdmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student_Admission  $student_Admission
     * @return \Illuminate\Http\Response
     */
    public function show(Student_Admission $student_Admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student_Admission  $student_Admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Student_Admission $student_Admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudent_AdmissionRequest  $request
     * @param  \App\Models\Student_Admission  $student_Admission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudent_AdmissionRequest $request, Student_Admission $student_Admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student_Admission  $student_Admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student_Admission $student_Admission)
    {
        //
    }
}
