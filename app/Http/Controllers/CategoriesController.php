<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use App\Models\categories_image;
use App\Models\testimony;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category', [
            'pageTitle' => 'Dailyslice - Categories',
            'categories' => categories::all()
        ]);
    }

    public function home()
    {
        return view('homepage', [
            'pageTitle' => 'Dailyslice - Home',
            'categories' => categories::all(),
            'testimony' => testimony::all()
        ]);
    }

    public function detail(categories $categories){
        return view('category_detail', [
            'category' => $categories,
            'catimg' => categories_image::all()
        ]);
    }

    public function admin(Request $request)
    {
        return view('admin', [
            "category" => categories::all()
        ]);
    }
}