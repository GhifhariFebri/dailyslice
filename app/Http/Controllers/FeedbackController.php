<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Http\Requests\StorefeedbackRequest;
use App\Http\Requests\UpdatefeedbackRequest;
use App\Models\faq;
use Illuminate\Http\Request;

class FeedbackController extends Controller
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

    public function admin(Request $request)
    {
        return view('feedbackadmin', [
            "feedback" => feedback::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefeedbackRequest $request)
    {
        feedback::create([
            'sender_name' => $request->sender_name,
            'comment' => $request->comment,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefeedbackRequest  $request
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefeedbackRequest $request, feedback $feedback)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = feedback::findOrFail($id);
        $feedback->delete();
        return redirect("/feedbackadmin");
    }
}
