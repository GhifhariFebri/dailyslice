<?php

namespace App\Http\Controllers;
use App\Models\categories_image;
use App\Http\Requests\Storecategories_imageRequest;
use App\Http\Requests\Updatecategories_imageRequest;

class CategoriesImageController extends Controller
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
     * @param  \App\Http\Requests\Storecategories_imageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecategories_imageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories_image  $categories_image
     * @return \Illuminate\Http\Response
     */
    public function show(categories_image $categories_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories_image  $categories_image
     * @return \Illuminate\Http\Response
     */
    public function edit(categories_image $categories_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecategories_imageRequest  $request
     * @param  \App\Models\categories_image  $categories_image
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecategories_imageRequest $request, categories_image $categories_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories_image  $categories_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories_image $categories_image)
    {
        //
    }
}
