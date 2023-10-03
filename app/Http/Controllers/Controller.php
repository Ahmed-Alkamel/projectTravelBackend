<?php

namespace App\Http\Controllers;

use App\Events\RequestCustomerControllEvent;
use App\Helpers\constant\Constant;
use App\Http\Resources\NotificationDeatialsResource;
use App\Http\Resources\RequermentRequstTripBookingResource;
use App\Models\Customers;
use App\Models\NotificationDetails;
use App\Models\RequiremntsCustomerToBooking;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Summary of successRequest
     * @param mixed $data
     * @param mixed $messege
     * @return \Illuminate\Http\JsonResponse
     */
    public function successRequest($data,  $messege = null): JsonResponse
    {
        return response()->json([
            "state" => true,
            "massege" => $messege ?? 'Successfily',
            "data" => $data
        ]);
    }
    public function failureRequest(string $messege = null): JsonResponse
    {
        return response()->json([
            "state" => false,
            "massege" => $messege ?? 'failure',
            "data" => null
        ]);
    }

    public function test(Request $request)
    {


        $data =   Customers::with(['Chat.ChatContaint' => function ($query) {
            $query->where('id', 3);
        }])->where('idCus', 3)->get();
        return $this->successRequest([
            'data' => $data
        ]);

        // $data = RequiremntsCustomerToBooking::all();
        // // // return Storage::url('ahmed');
        // $data = RequermentRequstTripBookingResource::collection($data);
        // // $data = Customers::all();
        // $data = asset(Storage::url(Constant::getPathServicesImage()));
        // //     $image = $request->file('image');
        // //     $name = uniqid('serviceimage') . $image->getClientOriginalName();
        // // $image->storeAs(Constant::$pathImageServices, $name);
        // return $this->dataObject($data, true, 'done');
        // event(new RequestCustomerControllEvent());
    }
}
