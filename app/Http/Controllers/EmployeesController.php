<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Http\Requests\StoreEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Http\Resources\EmployeesResource;
use App\Models\EmployeeNames;
use App\Models\PermissonAndEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        try {
            return $this->successRequest(EmployeesResource::collection(Employees::all()));
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function login(Request $request)
    {
        try {
            $data = Employees::where('password', '=', $request['password'])->where(function ($q) use ($request) {
                $q->where('numberPhone', $request['ident']);
            })->first();

            if ($data) {
                return $this->successRequest(EmployeesResource::make($data), 'تم سجيل الدخول');
            } else {
                return $this->failureRequest('فشل تسجيل الدخول');
            }
            // if ($data[0]) {
            //     return 0;
            // }
            // 'emailAddress',
            //         'password',
        } catch (\Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }

    public function add(Request $request)
    {
        try {
            $data = new Employees();
            $data->fill($request->all());
            $data->save();

            return $this->successRequest(EmployeesResource::make($data));
        } catch (\Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $nameEmp = new EmployeeNames();
            $employe = new Employees();

            $employe->salary = $request['salary'];
            $employe->numberPhone = $request['numberPhone'];
            $employe->password = $request['password'];
            $employe->address = $request['address'];
            $employe->save();
            $nameEmp->idEmp = $employe->idEmp;
            $nameEmp->frisName = $request['name']['frisName'];
            $nameEmp->lastName = $request['name']['lastName'];
            $nameEmp->surName = $request['name']['surName'];
            $nameEmp->save();
            foreach ($request['permisstion'] as $item) {
                foreach ($item['permission'] as  $value) {
                    $data = new PermissonAndEmployee();
                    $data->idEmp = $employe->idEmp;
                    $data->idPermisson = $value['id'];
                    $data->allow = $value['allow'];
                    $data->deny = $value['deny'];
                    $data->save();
                }
            }
            DB::commit();
            return $this->successRequest(EmployeesResource::make($employe));
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
