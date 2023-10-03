<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomersResource;
use App\Models\Chat;
use App\Models\Customers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $data = Customers::all();
        return $this->successRequest(CustomersResource::collection($data));
    }
    public function add(Request $request)
    {
        try {
            $data = new Customers();
            $data->fill($request->all());
            $data->save();
            $chat = new Chat();
            $chat->idCus = $data->idCus;
            $chat->save();
            return $this->successRequest(CustomersResource::make($data));
        } catch (Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }
    public function test(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = new Customers();

            $data->fill($request->all());
            // $data->save();
            // $data->remember_token = \Illuminate\Support\Str::random(60);
            $data->save();
            $data->createToken(Str::random(60))->accessToken;
            $data->save();

            DB::commit();

            return $data;
            // return $this->dataObject(CustomersResource::make($data), true, 'done');
        } catch (Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }
    //23000 uniqu key numberphone

    public function login(Request $request)
    {
        try {
            $data = Customers::where('password', '=', $request['password'])->where(function ($q) use ($request) {
                $q->where('numberPhone', $request['ident'])->orwhere('emailAddress', $request['ident']);
            })->first();

            if ($data) {
                return $this->successRequest(CustomersResource::make($data), 'تم سجيل الدخول');
            } else {
                return $this->failureRequest('فشل تسجيل الدخول');
            }
            // if ($data[0]) {
            //     return 0;
            // }
            // 'emailAddress',
            //         'password',
        } catch (Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }
    public function refresh(Request $request)
    {
        try {
            if (isset($request['id'])) {
                $customer = Customers::find($request['id']);
                return $this->successRequest(CustomersResource::make($customer));
            } else {
                return $this->failureRequest('error from Request');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
