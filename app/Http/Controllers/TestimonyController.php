<?php

namespace App\Http\Controllers;

use App\Models\testimony;
use App\Http\Requests\StoretestimonyRequest;
use App\Http\Requests\UpdatetestimonyRequest;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage', [
            'pageTitle' => 'Dailyslice - Categories',
            'testimony' => testimony::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Http\Requests\StoretestimonyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestimonyRequest $request)
    {
        testimony::create([
            'testimony_image' => $request->testimony_image,
        ]);
        return redirect('/testimonyadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetestimonyRequest  $request
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestimonyRequest $request, $id)
    {
        $testimony = testimony::findOrFail($id);
        $testimony -> update([
            'testimony_image' => $request->testimony_image,
        ]);
        return redirect('/testimonyadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = testimony::findOrFail($id);
        $testimony->delete();
        return redirect("/testimonyadmin");
    }

    public function admin(Request $request)
    {
        return view('testimonyadmin', [
            "testimony" => testimony::all()
        ]);
    }
}
