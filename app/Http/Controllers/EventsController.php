<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventModel;
use Validator;

class EventsController extends Controller
{
    public function events(){
        $eventsList = EventModel::paginate(20);
        return response()->json($eventsList, 200);
    }

    public function eventById($id){
        $event =EventModel::find($id);
        if(is_null($event)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        return response()->json($event, 200);
    }

    public function addevent(Request $request){

        $rules = [
            'event_name' => 'required|min:5',
            'event_description' => 'required',
            'event_cover' => 'required',
            'event_starting_date' => 'required',
            'event_ending_date' => 'required',
            'event_starting_time' => 'required',
            'event_ending_time' => 'required',
            'event_adress' => 'required',
            'contact' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }


        $event = EventModel::create($request->all());
        return response()->json($event, 201);
    }

    public function eventUpdate(Request $request, $id){
        $event = EventModel::find($id);

        if(is_null($event)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        $event->update($request->all());
        return response()->json($event, 200);
    }

    public function eventDelete(Request $request, $id){
        $event = EventModel::find($id);
        if(is_null($event)){
            return response()->json(["message" => "Record non trouve"], 404);
        }
        $event->delete();
        return response()->json(null, 204);
    }
}
