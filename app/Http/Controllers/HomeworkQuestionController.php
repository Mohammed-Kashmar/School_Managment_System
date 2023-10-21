<?php

namespace App\Http\Controllers;

use App\Models\Homework_Question;
use App\Http\Requests\StoreHomework_QuestionRequest;
use App\Http\Requests\UpdateHomework_QuestionRequest;

class HomeworkQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreHomework_QuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomework_QuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework_Question  $homework_Question
     * @return \Illuminate\Http\Response
     */
    public function show(Homework_Question $homework_Question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework_Question  $homework_Question
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework_Question $homework_Question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomework_QuestionRequest  $request
     * @param  \App\Models\Homework_Question  $homework_Question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomework_QuestionRequest $request, Homework_Question $homework_Question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework_Question  $homework_Question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework_Question $homework_Question)
    {
        //
    }
}
