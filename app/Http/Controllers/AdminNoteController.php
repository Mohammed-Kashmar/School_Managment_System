<?php

namespace App\Http\Controllers;

use App\Models\Admin_Note;
use App\Http\Requests\StoreAdmin_NoteRequest;
use App\Http\Requests\UpdateAdmin_NoteRequest;

class AdminNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreAdmin_NoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmin_NoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin_Note  $admin_Note
     * @return \Illuminate\Http\Response
     */
    public function show(Admin_Note $admin_Note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin_Note  $admin_Note
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin_Note $admin_Note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmin_NoteRequest  $request
     * @param  \App\Models\Admin_Note  $admin_Note
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin_NoteRequest $request, Admin_Note $admin_Note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin_Note  $admin_Note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin_Note $admin_Note)
    {
        //
    }
}
