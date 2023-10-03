<?php

namespace App\Http\Controllers;

use App\Models\NotificationDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationDetailsController extends Controller
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
     * @param  \App\Models\NotificationDetails  $notificationDetails
     * @return \Illuminate\Http\Response
     */
    public function show(NotificationDetails $notificationDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotificationDetails  $notificationDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(NotificationDetails $notificationDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotificationDetails  $notificationDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotificationDetails $notificationDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotificationDetails  $notificationDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotificationDetails $notificationDetails)
    {
        //
    }
    public function receveNotification(Request $request)
    {
        try {
            $identifier = $request['id'];
            $data = NotificationDetails::find($identifier);
            $data->isRecive = true;
            $data->save();
            return $this->successRequest(null);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->failureRequest($th->getMessage());
        }
    }
}
