<?php

namespace App\Http\Resources;

use App\Models\Process;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $data =  Process::with(['PermissonEmployee.PermissonAndEmployee' => function ($query) {
            $query->where('idEmp', $this->idEmp);
        }])->get();

        return ([
            'idEmp' => $this->idEmp,
            'name' => $this->EmployeeNames,
            'address' => $this->address,
            'salary' => $this->salary,
            'isAdmin' => $this->isAdmin,
            'numberPhone' => $this->numberPhone,
            "permisstion" => ProcesseResource::collection($data),
        ]);
    }
}
