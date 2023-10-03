<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesServicesResource;
use App\Http\Resources\CitiesResource;
use App\Http\Resources\CompaniesResource;
use App\Http\Resources\CompanyServicesProviderResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\IdentityResource;
use App\Http\Resources\IdentityTypeResource;
use App\Http\Resources\ProcesseResource;
use App\Http\Resources\ServiceMineResource;
use App\Http\Resources\ServicesResource;
use App\Http\Resources\StateRequestResource;
use App\Http\Resources\TypeOfFiledResouce;
use App\Models\CategoriesServicesMain;
use App\Models\Cities;
use App\Models\Companies;
use App\Models\Countries;
use App\Models\Currencies;
use App\Models\Days;
use App\Models\Gender;
use App\Models\IdentityType;
use App\Models\MartialStatus;
use App\Models\MethodScheduler;
use App\Models\PlanTrips;
use App\Models\Process;
use App\Models\Services;
use App\Models\ServicesAndIdentify;
use App\Models\StateRequerment;
use App\Models\StateRequest;
use App\Models\TypeOfFild;

use Illuminate\Http\Request;
use Exception;

class BaseDataBookingController extends Controller
{
    public function index()
    {
        try {
            $Gender = Gender::all();
            $martialStata = MartialStatus::all();
            $countery = Countries::all();
            $planTrip = PlanTrips::where('isActive', true)->get();
            $currence = Currencies::all();
            $data = ([
                "gender" => $Gender,
                "martialStatus" => $martialStata,
                'countries' => CountryResource::collection($countery),
                "planTrip" => $planTrip,
                'currencies' => $currence

            ]);
            return $this->successRequest($data, 'done');
        } catch (Exception $e) {
            return $this->failureRequest($e->__toString());
        }
    }
    public function getStateRequest(Request $request)
    {
        try {
            if ($request->isMethod('POST')) {
                $data = StateRequest::all();
                return $this->successRequest(StateRequestResource::collection($data),  'done');
            } else {
                return $this->failureRequest('type Request erro');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function dataBasicAddServ(Request $request)
    {
        try {
            if ($request->isMethod('POST')) {

                $category = CategoriesServicesMain::with('SelfHas')->where('idSubCategory', null)->get();
                $category = CategoriesServicesResource::collection($category);

                $typeFiled = TypeOfFild::where('isActive', true)->get();
                $typeFiled = TypeOfFiledResouce::collection($typeFiled);
                $identy = IdentityTypeResource::collection(IdentityType::all());
                $Gender = Gender::all();
                $martialStata = MartialStatus::all();

                $currence = Currencies::all();

                return $this->successRequest([
                    "categories" => $category,
                    "gender" => $Gender,
                    "martialStatus" => $martialStata,
                    'typeFiled' => $typeFiled,
                    'identities' => $identy,
                    'currencies' => $currence



                ],  'done');
            } else {
                return $this->failureRequest('type Request erro');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }


    public function dataBasicAddTrip(Request $request)
    {
        try {
            $methoScheduler = MethodScheduler::where('isActive', true)->get();
            $days = Days::all();
            $serviceTest = Services::with(['CompaniesServices.Companies'])->where('idCategoryMain', '>=', 7)->where('isActive', true)->getRelation('CompaniesServices')->getRelation('Companies')->get();
            $Service = ServiceMineResource::collection(Services::where('idCategoryMain', '>=', 7)->where('isActive', true)->get());
            $company = CompaniesResource::collection($serviceTest);
            $country = CountryResource::collection(Countries::all());
            $cities = CitiesResource::collection(Cities::all());
            $currence = Currencies::all();

            return $this->successRequest([
                'methodScheduler' => $methoScheduler,
                'days' => $days,
                'serviceMine' => $Service,
                'company' => $company,
                'countries' => $country,
                'cities' => $cities,
                'currencies' => $currence
            ]);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }


    public function dataBasicCompanies(Request $request)
    {
        $Service = ServiceMineResource::collection(Services::where('isActive', true)->get());
        try {
            return $this->successRequest(['serviceMine' => $Service]);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }

    public function dataBasicCustomerRequest(Request $request)
    {
        try {
            $data = StateRequerment::all();
            $dataReqeust = StateRequest::all();
            return $this->successRequest([
                'stateRequerment' => $data,
                'stateRequest' => $dataReqeust
            ]);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }

    public function ReportDataBaseic(Request $request)
    {
        try {
            return $this->successRequest(StateRequest::all());
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }


    public function getDataPermission(Request $request)

    {
        try {
            $data = Process::all();
            $data = ProcesseResource::collection($data);

            return $this->successRequest($data);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
