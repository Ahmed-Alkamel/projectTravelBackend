<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesServicesResource;
use App\Http\Resources\collections\CategoriesServicesCollection;
use App\Models\CategoriesServices;
use App\Models\CategoriesServicesMain;
use Illuminate\Http\Request;

/**
 * Summary of CategoriesServicesController
 */
class CategoriesServicesController extends Controller
{

    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // $data=CategoriesServicesMain::all();
        try {
            $data = CategoriesServicesMain::with('SelfHas')->where('idSubCategory', null)->get();



            $data = CategoriesServicesResource::collection($data);
            return $this->successRequest($data, 'done');
        } catch (\Exception $error) {
            return $this->failureRequest($error);
        }
    }

    public function readCategoryByid(Request $request)
    {
        try {
            if (isset($request['id'])) {
                $data = CategoriesServicesResource::make(CategoriesServicesMain::find($request['id']));

                return $this->successRequest($data, 'secessfuly');
            } else {
                return $this->failureRequest('not found Category');
            }
        } catch (\Exception $erro) {
            return $this->failureRequest('error in server' . $erro);
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
     * @param  \App\Models\CategoriesServices  $categoriesServices
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriesServices $categoriesServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriesServices  $categoriesServices
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesServices $categoriesServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriesServices  $categoriesServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesServices $categoriesServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriesServices  $categoriesServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesServices $categoriesServices)
    {
        //
    }
}
