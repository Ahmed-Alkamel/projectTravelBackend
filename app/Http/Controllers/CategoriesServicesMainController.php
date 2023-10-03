<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesServicesResource;
use App\Http\Resources\collections\CategoriesServicesCollection;
use App\Models\CategoriesServicesMain;
use Illuminate\Http\Request;

class CategoriesServicesMainController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        try {
            $data = CategoriesServicesMain::all();

            return $this->successRequest(new CategoriesServicesCollection($data), 'done');
        } catch (\Exception $th) {
            return $this->failureRequest($th->getMessage());
        }
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
     * @param  \App\Models\CategoriesServicesMain  $categoriesServicesMain
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriesServicesMain $categoriesServicesMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriesServicesMain  $categoriesServicesMain
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesServicesMain $categoriesServicesMain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriesServicesMain  $categoriesServicesMain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesServicesMain $categoriesServicesMain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriesServicesMain  $categoriesServicesMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesServicesMain $categoriesServicesMain)
    {
        //
    }
}
