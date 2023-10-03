<?php

namespace App\Http\Controllers;


use App\Helpers\constant\Constant;
use App\Http\Resources\collections\ServicesCollection as CollectionsServicesCollection;
use App\Http\Resources\collections\ServicesCollection;
use App\Http\Resources\ServicesResource;
use App\Models\chooseMainRequerment;
use App\Models\chooseSubRequerment;
use App\Models\MainRequiremnts;
use App\Models\Services;
use App\Models\ServicesAndIdentify;
use App\Models\ServicesDetails;
use App\Models\SubRequiremnts;
use App\Models\SubRequiremntsDetails;
use App\Models\TypeOfFild;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Expectation;

class ServicesController extends Controller
{
    public function index()
    {
        try {
            $data = Services::with(['MainRequiremnts.TypeOfFild', 'SubRequiremnts'])->get();
            // return $data;
            $data = ServicesCollection::make($data);
            // $data=TypeOfFild::all();
            return  $this->successRequest($data,);
        } catch (Exception $th) {
            return $this->failureRequest($th->getMessage());
        }
    }

    public function getById(Request $request)
    {
        try {
            if (isset($request['idService'])) {
                return  $this->successRequest(ServicesResource::make(Services::find($request['idService'])));
            }
        } catch (\Exception $e) {
            return $this->failureRequest($e->__toString());
        }
    }
    public function getServicesByCategory(Request $request)
    {
        try {
            if (isset($request['id'])) {
                return  $this->successRequest(ServicesResource::collection(Services::all()->where('idCategoryMain', $request['id'])));
            }
        } catch (\Exception $e) {
            return $this->failureRequest($e->__toString());
        }
    }
    // public function addService(Request $requset)
    // {
    //     try {
    //         if ($requset->isMethod('post')) {
    //             $newServices = new Services();

    //             $newServices->serviceName = $requset->service['name'];
    //             $newServices->idCategoryMain = $requset->service['catagrey'];
    //             $newServices->timeAdd = $requset->timeAdd;
    //             $requement = $requset->service['requermentMain'];
    //             if ($newServices->save()) {
    //                 $idServes = $newServices->idServ;
    //                 try {
    //                     foreach ($requement as $item) {
    //                         $mainRequerment = new MainRequiremnts();
    //                         $mainRequerment->idServ = $idServes;
    //                         $mainRequerment->nameRequirment = $item['name'];
    //                         $mainRequerment->typeFiled = $item['typeFiled'];
    //                         $mainRequerment->timeAdd = $requset['timeAdd'];
    //                         $mainRequerment->save();
    //                     }
    //                 } catch (\Exception $th) {
    //                     return response()->json(['state' => 'faild', 'message' => $th]);
    //                 }

    //                 return  response()->json(['state' => 'success', 'message' => "add serevess is done"]);
    //             } else {
    //                 return  response()->json(['state' => 'faild', 'message' => "find error"]);
    //             }
    //         }
    //     } catch (\Exception $th) {
    //         return  response()->json(['state' => 'faild', 'message' => $th]);

    //         // return $requset->idService;
    //     }
    // }

    public function store(Request $requset)
    {
        try {
            if ($requset->isMethod('post')) {
                $service = new Services();
                $category = $requset->category;
                $serviceDetails = $requset->serviceDetails;
                $identitfyRequerment = $requset->identitfyRequerment;
                $mainRequirment = $requset->mainRequirment;
                $subRequiremnts = $requset->subRequiremnts;

                if (isset($category) && isset($requset->name)) {

                    DB::beginTransaction();

                    $service->serviceName = $requset->name;
                    $service->idCategoryMain = $category['idCategoryMain'];
                    if ($requset->pathImage != null) {
                        $file = base64_decode($requset['pathImage']);
                        $fileName = uniqid() . '.svg';
                        Storage::put(Constant::$pathImageServices . $fileName, $file);
                        $service->pathImage = $fileName;
                        // $requrment->idMainRequire = $detailItem['id'];
                        // $requrment->urlFile = $fileName;
                    }


                    $service->timeAdd = now();

                    $service->save();
                    if ($serviceDetails) {
                        $servdet = new ServicesDetails();
                        $servdet->idServ = $service->idServ;
                        $servdet->priceService = $serviceDetails['priceService'];
                        $servdet->idCurren = $serviceDetails['currencie']['id'];
                        // $servdet->DurationOfServiceByDays = $serviceDetails['durationOfServiceByDays'];
                        $servdet->save();
                    }
                    foreach ($identitfyRequerment as $item) {
                        $servicesAndIdentify = new ServicesAndIdentify();
                        $servicesAndIdentify->idServ = $service->idServ;
                        $servicesAndIdentify->idIdentity = $item['id'];
                        $servicesAndIdentify->save();
                    }
                    foreach ($mainRequirment as $item) {

                        $main = new MainRequiremnts();
                        $main->idServ = $service->idServ;
                        $main->nameRequirment = $item['name'];
                        $main->idTypeFile = $item['typeFiled']['id'];

                        $main->timeAdd = now();

                        $main->save();

                        if ($item['choose'] != null) {
                            if (count($item['choose']) >= 1 || $item['choose'] != null) {
                                foreach ($item['choose'] as $itemChoice) {
                                    $chooseMainRequerment = new chooseMainRequerment();

                                    $chooseMainRequerment->idMainRequire = $main->idMainRequire;
                                    $chooseMainRequerment->containt = $itemChoice['containt'];
                                    $chooseMainRequerment->save();
                                }
                            }
                        }
                    }

                    foreach ($subRequiremnts as $item) {
                        $sub = new SubRequiremnts();
                        $sub->idServ = $service->idServ;
                        $sub->idGender = $item['gender'];
                        $sub->isfamely = $item['isFamely'];
                        $sub->idMartial = $item['idMartial'];
                        $sub->moreThanAge = $item['moreThanAge'];
                        $sub->lessThanAge = $item['lessThanAge'];
                        $sub->save();
                        foreach ($item['detaial'] as $itemDetials) {
                            $subDetails = new SubRequiremntsDetails();
                            $subDetails->idSubRequire = $sub->idSubRequire;
                            $subDetails->idTypeFild = $itemDetials['typeFiled']['id'];
                            $subDetails->textRerequiremnts = $itemDetials['containt'];
                            $subDetails->save();
                            if (count($itemDetials['choose']) >= 1 && $itemDetials['choose'] != null) {
                                foreach ($itemDetials['choose'] as $itemChoice) {
                                    $chooseSubRequerment = new chooseSubRequerment();

                                    $chooseSubRequerment->idSubReqDetail = $subDetails['idSubReqDetail'];
                                    $chooseSubRequerment->containt = $itemChoice['containt'];
                                    $chooseSubRequerment->save();
                                }
                            }
                        }
                    }




                    DB::commit();
                    return $this->successRequest(ServicesResource::make($service),);
                }
            } else {
                return $this->failureRequest('fails');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage() . $th->getLine());
        }
    }
}
