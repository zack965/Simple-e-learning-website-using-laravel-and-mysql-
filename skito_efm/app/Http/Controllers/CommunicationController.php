<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teatcher;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
//use DB;
use Illuminate\Support\Facades\DB;

class CommunicationController extends Controller
{
    //
    public function get_all_taatcher(){
        /*$teatchers = teatcher::all()
        ->join('users', 'users.id', '=', 'teatchers.id_teatcher');
        */

        $teatchers = DB::table('teatchers')
        ->join('users', 'users.id', '=', 'teatchers.id_teatcher')
        ->get();
        return view('Communication.get_all_taatcher')->with('teatchers',$teatchers);
    }
    public function Send_message_get($id_s){
        return view('Communication.Send_message_get')->with('id_s',$id_s);
    }
    public function Send_message_post(Request $request){
        $userid = Auth::id();
        Message::create([
            'message_text'=>$request->message_text,
            'id_sender'=>$userid,
            'id_receiver'=>$request->id_receiver,
        ]);
        return redirect()->route('get_all_taatcher');
    }
    public function get_student_message($std_id){
        $userid = Auth::id();
        $messages = Message::where('id_sender',$userid)
        ->join('users', 'messages.id_receiver', '=', 'users.id')
        ->get();
        return view('Communication.get_student_message')->with('messages',$messages);
    }
    public function get_teatcher_message(){
        $userid = Auth::id();
        $messages = Message::where('id_receiver',$userid)
        ->join('users', 'messages.id_sender', '=', 'users.id')
        ->get();
        return view('Communication.get_teatcher_message')->with('messages',$messages);
    }
    public function Send_Answer_Get($id_mess){
        $message = Message::find($id_mess);
        return view('Communication.Send_Answer_Get')->with('message',$message);
    }
    public function Send_Answer_Post(Request $request){
        $id_mess = $request->id_mess;
        $message = Message::find($id_mess);
        $message->message_response = $request->message_text;
        $message->save();
        return redirect()->route('get_teatcher_message');
    }
}
