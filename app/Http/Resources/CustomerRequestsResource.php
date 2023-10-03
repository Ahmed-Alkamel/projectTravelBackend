<?php

namespace App\Http\Resources;

use App\Models\Services;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class CustomerRequestsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (Route::currentRouteName() == 'customerRequest.Admin.index' || Route::currentRouteName() ==  'customerRequest.Admin.updataStateRequement') {
            $services = $this->Services;
            return ([
                'idCustomerRequsts' => $this->idCustomerRequsts,
                'serviceName' => $services->serviceName,
                'serviceDetails' => ServicesDetailstResource::make($services->ServicesDetails),
                'state' => $this->StateRequest,
                'idCus' => $this->idCus,
                'employees' => EmployeesResource::make($this->Employees),
                'requestTrip' => TripBookingResource::make($this->TripsBookings),
                'requestServicePublic' => ServicesBookingResource::make($this->ServicesBookinng),
                'customer' => CustomersResource::make($this->Customers)
            ]);
        } else {
            $services = $this->Services;
            return ([
                'idCustomerRequsts' => $this->idCustomerRequsts,
                'serviceName' => $services->serviceName,
                'serviceDetails' => ServicesDetailstResource::make($services->ServicesDetails),
                'state' => $this->StateRequest,
                'idCus' => $this->idCus,
                'employees' => EmployeesResource::make($this->Employees),
                'requestTrip' => TripBookingResource::make($this->TripsBookings),
                'requestServicePublic' => ServicesBookingResource::make($this->ServicesBookinng)
                //
            ]);
        }
    }
}
