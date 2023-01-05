<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Http\Requests\StorefaqRequest;
use App\Http\Requests\UpdatefaqRequest;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('question', [
            "faq" => faq::all(),
        ]);
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
     * @param  \App\Http\Requests\StorefaqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefaqRequest $request)
    {
        faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect('/faqadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefaqRequest  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefaqRequest $request, $id)
    {
        $faq = faq::findOrFail($id);
        $faq -> update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect('/faqadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = faq::findOrFail($id);
        $faq->delete();
        return redirect("/faqadmin");
    }

    public function admin(Request $request)
    {
        return view('faqadmin', [
            "faq" => faq::all()
        ]);
    }
}
