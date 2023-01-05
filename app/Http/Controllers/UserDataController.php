<?php

namespace App\Http\Controllers;

use App\Models\user_data;
use App\Http\Requests\Storeuser_dataRequest;
use App\Http\Requests\Updateuser_dataRequest;

class UserDataController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_dataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_dataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_data  $user_data
     * @return \Illuminate\Http\Response
     */
    public function show(user_data $user_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_data  $user_data
     * @return \Illuminate\Http\Response
     */
    public function edit(user_data $user_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_dataRequest  $request
     * @param  \App\Models\user_data  $user_data
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_dataRequest $request, user_data $user_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_data  $user_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_data $user_data)
    {
        //
    }
}
