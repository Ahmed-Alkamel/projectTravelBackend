<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripsResource;
use App\Models\Companies;
use App\Models\DayScheduler;
use App\Models\SchedulerTrip;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripsController extends Controller
{
    public function index()
    {

        try {

            // $data = Trips::with(['SchedulerTrip.MethodScheduler', 'SchedulerTrip.DayScheduler.Days'])->get();
            $data = Trips::all();

            return $this->successRequest(TripsResource::collection($data));
        } catch (\Exception $th) {
            return $this->failureRequest($th->getTraceAsString());
        }
    }
    public function add(Request $request)
    {
        try {

            if ($request->isMethod('post')) {
                DB::beginTransaction();
                $newTrip = new Trips();
                $newTrip->idServ = $request['idService'];
                $currencie = $request['currencie']['id'];
                $newTrip->idCurrencies = $currencie;
                $newTrip->fromCity = $request['fromCity']['id'];
                $newTrip->toCity = $request['toCity']['id'];
                $newTrip->price = $request['price'];
                $newTrip->availableSeats = 1;
                $newTrip->timeLeave = $request['timeLeave'];
                $newTrip->idCompany = $request['company']['id'];
                $newTrip->save();
                $schedulr = new SchedulerTrip();
                $dataScheduler = $request['scheduler'];
                $schedulr->idMethod = $dataScheduler['method']['id'];
                $schedulr->atCount = $dataScheduler['atCount'];
                $schedulr->idTrips = $newTrip->idTrips;
                $schedulr->save();
                foreach ($dataScheduler['days'] as $iteme) {
                    $dayScheduler = new DayScheduler();
                    // 'idScheduler',
                    // 'idDay',
                    $dayScheduler->idScheduler = $schedulr->idScheduler;
                    $dayScheduler->idDay = $iteme['id'];
                    $dayScheduler->save();
                }



                // $newTrip


                DB::commit();

                return $this->successRequest(TripsResource::make($newTrip));
            } else {

                return $this->failureRequest('error in request ');
            }


            // return $this->successRequest(null);
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage() . ' track:' . $th->getTraceAsString());
        }
    }
}
