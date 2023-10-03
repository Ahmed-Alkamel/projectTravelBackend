<?php

namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use App\Events\updataStateRequestcustomerEvent;
use App\Models\CustomerRequests;
use App\Http\Requests\StoreCustomerRequestsRequest;
use App\Http\Resources\CustomerRequestsResource;
use App\Models\NotificationDetails;
use App\Models\RequermentCustommerServicesBookinng;
use App\Models\RequiremntsCustomerToBooking;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class CustomerRequestsController extends Controller
{
    public function getRequestByCustomer(Request $request)
    {
        try {
            if (isset($request['id'])) {
                $data = CustomerRequests::where('idCus', $request['id'])->get();
                return $this->successRequest(CustomerRequestsResource::collection($data));
            } else {
                return $this->failureRequest('not have request');
            }
        } catch (Exception $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function   updateStatRequest(Request $request)
    {


        try {
            if (isset($request['idCust']) && isset($request['idState']) && isset($request['idReq'])) {
                $idCust = $request['idCust'];
                $idState = $request['idState'];
                $idReq = $request['idReq'];
                $data = CustomerRequests::where('idCustomerRequsts', $idReq)->where('idCus', $idCust)->first();
                // 'idState',
                $data->idState = $idState;
                $data->save();

                if ($idState != 1) {
                    $NOTIFICATON = new NotificationDetails();
                    $NOTIFICATON->idCus = $idCust;
                    $NOTIFICATON->idCustomerRequsts = $idReq;
                    if ($idState == 4) {
                        $NOTIFICATON->idNotificationTemplete = 1;
                    } else if ($idState == 2) {
                        $NOTIFICATON->idNotificationTemplete = 7;
                    } else if ($idState == 3) {
                        $NOTIFICATON->idNotificationTemplete = 2;
                    } else if ($idState == 5) {
                        $NOTIFICATON->idNotificationTemplete = 3;
                    }
                    $NOTIFICATON->save();
                    event(new NotificationEvent($NOTIFICATON));
                }
                // event(new updataStateRequestcustomerEvent($idCust));

                return $this->successRequest(null);
            } else {
                return $this->failureRequest('faild find erro data');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }

    public function index(Request $request)
    {
        try {
            return $this->successRequest(CustomerRequestsResource::collection(CustomerRequests::all()));
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function updateStatRequrment(Request $request)
    {
        try {

            if (isset($request['type'])) {

                if ($request['type'] == 1) {
                    $data = $request['data'];
                    $idreq =  $request['idRequst'];
                    $idState = $request['idStateReq'];

                    DB::beginTransaction();
                    $custreques = CustomerRequests::find($idreq);
                    $custreques->idState = $idState;
                    $custreques->save();
                    foreach ($data as $item) {
                        $dataInput = RequiremntsCustomerToBooking::find($item['id']);
                        try {

                            $dataInput->idState = $item['stateOfRequiremnt']['id'];

                            $dataInput->save();
                        } catch (\Throwable $th) {
                            return $this->failureRequest($th->getMessage());
                        }
                    }
                    if ($idState != 1) {
                        $NOTIFICATON = new NotificationDetails();
                        $NOTIFICATON->idCus = $custreques->idCus;
                        $NOTIFICATON->idCustomerRequsts = $idreq;
                        if ($idState == 4) {
                            $NOTIFICATON->idNotificationTemplete = 1;
                        } else if ($idState == 2) {
                            $NOTIFICATON->idNotificationTemplete = 7;
                        } else if ($idState == 3) {
                            $NOTIFICATON->idNotificationTemplete = 2;
                        } else if ($idState == 5) {
                            $NOTIFICATON->idNotificationTemplete = 3;
                        }
                        $NOTIFICATON->save();
                        event(new NotificationEvent($NOTIFICATON));
                    }
                    DB::commit();
                    return $this->successRequest(CustomerRequestsResource::collection(CustomerRequests::all()));
                } else {
                    $data = $request['data'];
                    $idreq =  $request['idRequst'];
                    $idState = $request['idStateReq'];

                    DB::beginTransaction();
                    $custreques = CustomerRequests::find($idreq);
                    $custreques->idState = $idState;
                    $custreques->save();
                    foreach ($data as $item) {
                        $dataInput = RequermentCustommerServicesBookinng::find($item['id']);
                        try {

                            $dataInput->idState = $item['stateOfRequiremnt']['id'];

                            $dataInput->save();
                        } catch (\Throwable $th) {
                            return $this->failureRequest($th->getMessage());
                        }
                    }
                    if ($idState != 1) {
                        $NOTIFICATON = new NotificationDetails();
                        $NOTIFICATON->idCus = $custreques->idCus;
                        $NOTIFICATON->idCustomerRequsts = $idreq;
                        if ($idState == 4) {
                            $NOTIFICATON->idNotificationTemplete = 1;
                        } else if ($idState == 2) {
                            $NOTIFICATON->idNotificationTemplete = 7;
                        } else if ($idState == 3) {
                            $NOTIFICATON->idNotificationTemplete = 2;
                        } else if ($idState == 5) {
                            $NOTIFICATON->idNotificationTemplete = 3;
                        }
                        $NOTIFICATON->save();
                        event(new NotificationEvent($NOTIFICATON));
                    }
                    DB::commit();
                    return $this->successRequest(CustomerRequestsResource::collection(CustomerRequests::all()));
                }
            } else {
                return $this->failureRequest('error in request 5500');
            }

            // return $this->successRequest(null);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
}
