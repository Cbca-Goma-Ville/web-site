<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StaffModel;
use Validator;

class StaffController extends Controller
{
    public function staff(){
        $staffList = StaffModel::paginate(20);
        return response()->json($staffList, 200);
    }

    public function staffById($id){
        $staff = StaffModel::find($id);
        if(is_null($staff)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        return response()->json($staff, 200);
    }

    public function addStaff(Request $request){

        $rules = [
            'staff_name' => 'required',
            'staff_image' => 'required',
            'staff_bio' => 'required',
            'staff_facebook' => 'required',
            'staff_instagram' => 'required',
            'staff_twitter' => 'required',
            'status' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }


        $staff = StaffModel::create($request->all());
        return response()->json($staff, 201);
    }

    public function staffUpdate(Request $request, $id){
        $staff = StaffModel::find($id);

        if(is_null($staff)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        $staff->update($request->all());
        return response()->json($staff, 200);
    }

    public function staffDelete(Request $request, $id){
        $staff = StaffModel::find($id);
        if(is_null($staff)){
            return response()->json(["message" => "Record non trouve"], 404);
        }
        $staff->delete();
        return response()->json(null, 204);
    }

}
