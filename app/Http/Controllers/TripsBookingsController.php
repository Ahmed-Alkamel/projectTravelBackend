<?php

namespace App\Http\Controllers;

use App\Events\RequestCustomerControllEvent;
use App\Helpers\constant\Constant;
use App\Models\CustomerName;
use App\Models\CustomerRequests;
use App\Models\CustomerWithIdentity;
use App\Models\IdentityCustomers;
use App\Models\RequiremntsCustomerToBooking;
use App\Models\TripAndBookings;
use App\Models\TripBookingDetails;
use App\Models\TripsBookings;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
// use Illuminate\File

/**
 * Summary of TripsBookingsController
 */
class TripsBookingsController extends Controller
{

    public function store(Request $request)
    {



        try {
            if (isset($request['data'])) {
                $data = $request['data'];

                DB::beginTransaction();
                $reqCutsomer = new CustomerRequests();
                $reqCutsomer->idServ = $data[0]['idServ'];
                $reqCutsomer->idCus = $data[0]['idCust'];

                $reqCutsomer->save();
                $bookingTrip = new TripsBookings();
                // $bookingTrip->idTrips = $item['idTrip'];
                $bookingTrip->idPlan = $data[0]['idPlan'];

                $bookingTrip->BookingTime = now();
                $bookingTrip->idCustomerRequsts = $reqCutsomer->idCustomerRequsts;
                $bookingTrip->save();
                $idTrip = 0;
                foreach ($data[0]['dataTrip'] as $itemTripAnd) {
                    $tripAndBooking = new TripAndBookings();

                    $tripAndBooking->idBooking = $bookingTrip->idBooking;
                    $tripAndBooking->idTrips = $itemTripAnd['idTrips'];
                    $idTrip = $itemTripAnd['price'];
                    $tripAndBooking->dateGo = $itemTripAnd['dateGo'];
                    $tripAndBooking->dataBack = $itemTripAnd['dateBack'];
                    $tripAndBooking->save();
                }
                foreach ($data as $item) {
                    // $reqCutsomer = new CustomerRequests();
                    // $reqCutsomer->idServ = $item['idServ'];
                    // $reqCutsomer->idCus = $item['idCust'];
                    // $reqCutsomer->save();




                    $dataPerson = $item['identityCustomers'];
                    if ($dataPerson['id'] == null) {
                        $fristName = $dataPerson['name']['frisName'];
                        $lasttName = $dataPerson['name']['lastName'];
                        $surName = $dataPerson['name']['surName'];
                        $idGender = $dataPerson['gender']['idGender'];
                        $idTypeIdentity = $dataPerson['typeIdentity']['id'];
                        $idMartial = $dataPerson['martial']['idMartial'];
                        $datePirth =
                            $dataPerson['datePirth'];
                        $releaseDate = $dataPerson['releaseDate'] ?? now();
                        $identitiCard = new IdentityCustomers();
                        $personserver = CustomerName::where('frisName', $fristName)->where('lastName', $fristName)->where('surName', $fristName)->get();
                        // if ($personserver) {
                        //     // $identitiCard ;
                        // } else {
                        $customerName = new CustomerName();
                        $identitiCard->datePirth = $datePirth;
                        $identitiCard->releaseDate = $releaseDate;
                        $identitiCard->idGender = $idGender;
                        $identitiCard->idMartial = $idMartial;
                        $identitiCard->idTypeIdentity = $idTypeIdentity;
                        $identitiCard->save();
                        $customerName->frisName = $fristName;
                        $customerName->lastName = $lasttName;
                        $customerName->surName = $surName;
                        $customerName->idCusIdentity = $identitiCard->ID;
                        $customerName->save();
                        // }

                        $customerandIdentity = new CustomerWithIdentity();
                        $customerandIdentity->identityCustmerId = $identitiCard->ID;
                        $customerandIdentity->idCus = $reqCutsomer->idCus;
                        $customerandIdentity->save();


                        $tripBookingDetails = new TripBookingDetails();
                        $tripBookingDetails->idBooking =  $bookingTrip->idBooking;
                        $tripBookingDetails->price = $idTrip;
                        $tripBookingDetails->identityCustmerId = $identitiCard->ID;
                        $tripBookingDetails->price = $idTrip;

                        $tripBookingDetails->save();
                    } else if ($dataPerson['id'] == -404) {
                        $fristName = $dataPerson['name']['frisName'];
                        $lasttName = $dataPerson['name']['lastName'];
                        $surName = $dataPerson['name']['surName'];
                        $idGender = $dataPerson['gender']['idGender'];
                        $idTypeIdentity = $dataPerson['typeIdentity']['id'];
                        $idMartial = $dataPerson['martial']['idMartial'];
                        $datePirth =
                            $dataPerson['datePirth'];
                        $releaseDate = $dataPerson['releaseDate'] ?? now();
                        $identitiCard = new IdentityCustomers();
                        $personserver = CustomerName::where('frisName', $fristName)->where('lastName', $fristName)->where('surName', $fristName)->get();
                        // if ($personserver) {
                        //     // $identitiCard ;
                        // } else {
                        $customerName = new CustomerName();
                        $identitiCard->datePirth = $datePirth;
                        $identitiCard->releaseDate = $releaseDate;
                        $identitiCard->idGender = $idGender;
                        $identitiCard->idMartial = $idMartial;
                        $identitiCard->idTypeIdentity = $idTypeIdentity;
                        $identitiCard->save();
                        $customerName->frisName = $fristName;
                        $customerName->lastName = $lasttName;
                        $customerName->surName = $surName;
                        $customerName->idCusIdentity = $identitiCard->ID;
                        $customerName->save();

                        //differnt is here
                        $customerandIdentity = new CustomerWithIdentity();
                        $customerandIdentity->identityCustmerId = $identitiCard->ID;
                        $customerandIdentity->idCus = $reqCutsomer->idCus;
                        $customerandIdentity->isMe = true;
                        $customerandIdentity->save();


                        $tripBookingDetails = new TripBookingDetails();
                        $tripBookingDetails->idBooking =  $bookingTrip->idBooking;
                        $tripBookingDetails->identityCustmerId = $identitiCard->ID;
                        $tripBookingDetails->price = $idTrip;

                        $tripBookingDetails->save();
                    } else {

                        $tripBookingDetails = new TripBookingDetails();
                        $tripBookingDetails->idBooking =  $bookingTrip->idBooking;
                        $tripBookingDetails->identityCustmerId = $dataPerson['id'];
                        $tripBookingDetails->price = $idTrip;

                        $tripBookingDetails->save();
                    }




                    $detailMain = $item['detailsMain'];
                    foreach ($detailMain as $detailItem) {
                        $requrment =  new RequiremntsCustomerToBooking();
                        $requrment->idDetailsTripBooking = $tripBookingDetails->idDetailsTripBooking;
                        if ($detailItem['idTypeFiled'] == 1) {
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->textValue = $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 2) {
                            $file = base64_decode($detailItem['file']);
                            $fileName = uniqid() . $detailItem['fileName'];
                            Storage::put(Constant::$pathImageRequestServser . $fileName, $file);
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->urlFile = $fileName;
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 3) {
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->textValue = $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 4) {
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->textValue = $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 5) {
                            $file = base64_decode($detailItem['file']);
                            $fileName = uniqid() . $detailItem['fileName'];
                            Storage::put(Constant::$pathFileRequestServser . $fileName, $file);
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->urlFile = $fileName;
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 8) {
                            $idChoice = $detailItem['choice']['idChooseMain'];
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->idChoice = $idChoice;
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];

                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 9) {
                            $idChoice = $detailItem['choice']['idChooseMain'];
                            $requrment->idMainRequire = $detailItem['id'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];

                            $requrment->idChoice = $idChoice;
                            $requrment->save();
                        }
                    }
                    $detailsSub = $item['detailsSub'];

                    foreach ($detailsSub as $detailItem) {
                        $requrment =  new RequiremntsCustomerToBooking();
                        $requrment->idDetailsTripBooking = $tripBookingDetails->idDetailsTripBooking;

                        if ($detailItem['idTypeFiled'] == 1) {
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->textValue = $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 2) {
                            $file = base64_decode($detailItem['file']);
                            $fileName = uniqid() . $detailItem['fileName'];
                            Storage::put(Constant::$pathImageRequestServser . $fileName, $file);
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->urlFile = $fileName;
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 3) {
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->textValue = $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 4) {
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->textValue = (string) $detailItem['textValue'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 5) {
                            $file = base64_decode($detailItem['file']);
                            $fileName = uniqid() . $detailItem['fileName'];
                            Storage::put(Constant::$pathFileRequestServser . $fileName, $file);
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->urlFile = $fileName;
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 8) {
                            $idChoice = $detailItem['choiceSub']['idChooseSub'];
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->idChoice = $idChoice;
                            $requrment->save();
                        } else  if ($detailItem['idTypeFiled'] == 9) {
                            $idChoice = $detailItem['choiceSub']['idChooseSub'];
                            $requrment->idSubReqDetail = $detailItem['id'];
                            $requrment->idTypeFiled = $detailItem['idTypeFiled'];
                            $requrment->idChoice = $idChoice;
                            $requrment->save();
                        }
                    }
                }

                DB::commit();
                // event(new RequestCustomerControllEvent());
                return $this->successRequest(null);
            } else {
                return $this->failureRequest('the request is no found');
            }
        } catch (Exception $e) {
            return $this->failureRequest($e->getMessage());
        }
    }
}
