<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Events\NotificationEvent;
use App\Events\ReceiveMassageEvent;
use App\Models\Chat;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChatResourc;
use App\Models\ChatContaint;
use App\Models\Customers;
use App\Models\NotificationDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{

    public function index(Request $request)
    {
        try {
            if (isset($request['idChat'])) {
                $chat = ChatContaint::where('idChat', $request['idChat'])->where('isRecive', false)->get();

                return $this->successRequest($chat);
            }
        } catch (Exception $exc) {
            return $this->faildRequest($exc->getMessage());
        }
    }

    public function sendToServer(Request $request)
    {

        try {
            if (isset($request['containt']) && isset($request['idChat'])) {
                $chat = new ChatContaint();
                $chat->containt = $request['containt'];
                $chat->idChat = $request['idChat'];
                // $chat->isRecive = true;
                $chat->save();
                event(new ReceiveMassageEvent($chat));





                return $this->successRequest($chat);
            } else {
                return $this->failureRequest('data empty');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $this->failureRequest($th->getMessage());
        }
    }
    public function sendToClint(Request $request)
    {
        try {
            if (isset($request['containt']) && isset($request['idChat']) && isset($request['idEmp'])) {
                DB::beginTransaction();
                $chat = new ChatContaint();
                $chat->containt = $request['containt'];
                $chat->idChat = $request['idChat'];
                $chat->idEmp = $request['idEmp'];
                $idCust = Chat::find($chat->idChat);

                $NOTIFICATON = new NotificationDetails();
                $NOTIFICATON->idCus = $idCust->idCus;
                $NOTIFICATON->idNotificationTemplete = 6;
                $NOTIFICATON->save();

                // $chat->isRecive = true;
                $chat->save();
                DB::commit();
                event(new ChatEvent($chat));
                event(new NotificationEvent($NOTIFICATON));
                return $this->successRequest($chat);
            } else {
                return $this->failureRequest('data empty');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $this->failureRequest($th->getMessage());
        }
    }
    public function verifyMesagefromClint(Request $request)
    {
        try {
            if (isset($request['id'])) {
                $data = ChatContaint::find($request['id']);
                if ($data) {
                    $data->isRecive = true;
                    $data->save();
                    return $this->successRequest(null);
                } else {
                    return $this->failureRequest('no found message');
                }
            } else {
                return $this->failureRequest('the require id');
            }
        } catch (\Throwable $th) {
            return $this->failureRequest($th->getMessage());
        }
    }
    public function getAll()
    {
        try {

            $data = Customers::with('Chat.ChatContaint')->get();
            return $this->successRequest(ChatResourc::collection($data));
        } catch (\Throwable $th) {
            return $this->failureRequest($th);
        }
    }
}
