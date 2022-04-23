<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PreacherModel;
use Validator;

class PreacherController extends Controller
{
    public function preacher(){
        $preachersList = PreacherModel::paginate(20);
        return response()->json($preachersList, 200);
    }

    public function preacherById($id){
        $preacher = PreacherModel::find($id);
        if(is_null($preacher)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        return response()->json($preacher, 200);
    }

    public function addPreacher(Request $request){

        $rules = [
            'preacher_name' => 'required',
            'status' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }


        $preacher = PreacherModel::create($request->all());
        return response()->json($preacher, 201);
    }

    public function preacherUpdate(Request $request, $id){
        $preacher = PreacherModel::find($id);

        if(is_null($preacher)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        $preacher->update($request->all());
        return response()->json($preacher, 200);
    }

    public function preacherDelete(Request $request, $id){
        $preacher = PreacherModel::find($id);
        if(is_null($preacher)){
            return response()->json(["message" => "Record non trouve"], 404);
        }
        $preacher->delete();
        return response()->json(["message" => "Record supprimé"], 204);
    }

}
