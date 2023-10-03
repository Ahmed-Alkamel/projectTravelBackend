<?php

namespace App\Http\Controllers;

use App\Models\PermissonEmployee;
use App\Http\Controllers\Controller;
use App\Models\PermissonAndEmployee;
use App\Models\Process;
use Illuminate\Http\Request;

class PermissonEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Process::all();
        $data = PermissonEmployee::all();
        $data = PermissonAndEmployee::all();
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
     * @param  \App\Models\PermissonEmployee  $permissonEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(PermissonEmployee $permissonEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissonEmployee  $permissonEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissonEmployee $permissonEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermissonEmployee  $permissonEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissonEmployee $permissonEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissonEmployee  $permissonEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissonEmployee $permissonEmployee)
    {
        //
    }
}
