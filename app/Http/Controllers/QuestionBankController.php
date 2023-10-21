<?php

namespace App\Http\Controllers;

use App\Models\Question_Bank;
use App\Http\Requests\StoreQuestion_BankRequest;
use App\Http\Requests\UpdateQuestion_BankRequest;

class QuestionBankController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestion_BankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestion_BankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question_Bank  $question_Bank
     * @return \Illuminate\Http\Response
     */
    public function show(Question_Bank $question_Bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question_Bank  $question_Bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Question_Bank $question_Bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestion_BankRequest  $request
     * @param  \App\Models\Question_Bank  $question_Bank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestion_BankRequest $request, Question_Bank $question_Bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question_Bank  $question_Bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question_Bank $question_Bank)
    {
        //
    }
}
