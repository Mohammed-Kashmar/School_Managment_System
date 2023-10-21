<?php

namespace App\Http\Controllers;

use App\Models\Teacher_Note;
use App\Http\Requests\StoreTeacher_NoteRequest;
use App\Http\Requests\UpdateTeacher_NoteRequest;

class TeacherNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacher_NoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacher_NoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher_Note  $teacher_Note
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher_Note $teacher_Note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher_Note  $teacher_Note
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher_Note $teacher_Note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacher_NoteRequest  $request
     * @param  \App\Models\Teacher_Note  $teacher_Note
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacher_NoteRequest $request, Teacher_Note $teacher_Note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher_Note  $teacher_Note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher_Note $teacher_Note)
    {
        //
    }
}
