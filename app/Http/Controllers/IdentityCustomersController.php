<?php

namespace App\Http\Controllers;

use App\Http\Resources\IdentityCustomersResource;
use App\Http\Resources\IdentityResource;
use App\Models\IdentityCustomers;
use Exception;
use Illuminate\Http\Request;


class IdentityCustomersController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = IdentityCustomersResource::collection(IdentityCustomers::all());
            // $data = IdentityCustomers::with([
            //     'Gender',
            //     'IdentityType',
            //     'MartialStatus',
            //     'CustomerName'
            // ])->get();

            return $this->successRequest($data);
        } catch (Exception $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
