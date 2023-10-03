<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerRequestsResource;
use App\Http\Resources\CustomersResource;
use App\Http\Resources\TripAndBookingResource;
use App\Http\Resources\TripsResource;
use App\Models\CustomerRequests;
use Illuminate\Http\Request;

class reportController  extends Controller
{
    public function reportcities(Request $request)
    {
        try { {
                $cities = CustomerRequests::withWhereHas('TripsBookings.TripAndBookings.Trips')->get()->pluck(['TripsBookings', 'TripAndBookings',])->flatten();


                // ->getRelation('TripsBookings')->getRelation('TripAndBookings')->getRelation('Trips')->getRelation('FromCity')->get();
                $data = array();
                foreach ($cities as $ist) {
                    array_push($data, $ist['trips']);
                }
                return $this->successRequest(TripAndBookingResource::collection($cities));
                // return $this->successRequest(TripsResource::collection($data));
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function reportCustomurRequest(Request $request)
    {
        try {
            $data = CustomerRequests::all();
            return $this->successRequest(CustomerRequestsResource::collection($data));
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
