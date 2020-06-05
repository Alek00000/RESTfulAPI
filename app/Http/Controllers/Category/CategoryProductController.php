<?php

namespace App\Http\Controllers\Category;

use App\Category;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class CategoryProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $products = $category -> products;
        return $this -> showAll($products);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoryr  $categoryr
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryr $categoryr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoryr  $categoryr
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryr $categoryr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoryr  $categoryr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryr $categoryr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoryr  $categoryr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryr $categoryr)
    {
        //
    }
}
