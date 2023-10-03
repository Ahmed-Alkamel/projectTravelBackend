<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompaniesResource;
use App\Models\Companies;
use App\Models\Services;
use App\Models\ServicesCompanies;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Summary of CompaniesController
 */
class CompaniesController extends Controller
{

    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            // $category = CategoriesServicesMain::all()->where('isTrip', 1)->first();

            // $idCtegory = $category->idCategoryMain;
            // $data = Companies::with(['CompaniesServices.Services.CategorServicesDetailRelation.CategoriesServicesMain' => function ($qurey) use ($idCtegory) {
            //     return $qurey->where('isTrip', $idCtegory);
            // }])->whereHas('CompaniesServices.Services.CategorServicesDetailRelation.CategoriesServicesMain', function ($query) use ($idCtegory) {
            //     $query->where('isTrip', $idCtegory);
            // })
            //     ->get(['idCompanes']);

            // $data = $data->where(); // = $data->where();

            $data = Companies::with('CompaniesServices')->get();
            return $this->successRequest(CompaniesResource::collection($data));
        } catch (\Exception $th) {
            return $this->failureRequest($th->getMessage());
        }
        //CompaniesCollection::make(
    }
    public function indexTrip(Request $request)
    {
        try {
            $serviceTest = Services::with(['CompaniesServices.Companies'])->where('idCategoryMain', '>=', 7)->where('isActive', true)->getRelation('CompaniesServices')->getRelation('Companies')->get();

            $company = CompaniesResource::collection($serviceTest);
            return $this->successRequest($company);
        } catch (\Throwable $th) {
            return $this->failureRequest(null);
        }
    }
    public function readCompanyByid(Request $request)
    {
        try {
            if (isset($request['id'])) {
                $data = CompaniesResource::make(Companies::find($request['id']));

                return $this->successRequest($data);
            } else {
                return $this->failureRequest();
            }
        } catch (\Exception $erro) {
            return $this->failureRequest($erro->getMessage());
        }
    }



    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $newCompany = new Companies();
            $newCompany->companiyName = $request['name'];
            $newCompany->numberPhone = $request['phone'];
            $newCompany->addressCompaniy = $request['address'];
            $newCompany->save();
            foreach ($request['servicesCompanyProvider'] as $item) {
                $servicCompany = new ServicesCompanies();

                $servicCompany->idCompanes = $newCompany->idCompanes;
                $servicCompany->idServ = $item['idServ'];
                $servicCompany->save();
            }

            DB::commit();

            return $this->successRequest(CompaniesResource::make($newCompany));
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
