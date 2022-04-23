<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CommentModel;
use Validator;

class CommentsController extends Controller
{
    public function comments(){
        $commentsList = CommentModel::paginate(20);
        return response()->json($commentsList, 200);
    }

    public function commentById($id){
        $comment = CommentModel::find($id);
        if(is_null($comment)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        return response()->json($comment, 200);
    }

    public function addComment(Request $request){

        $rules = [
            'comment' => 'required',
            'comment_author' => 'required|numeric',
            'sermon_id' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }


        $comment = CommentModel::create($request->all());
        return response()->json($comment, 201);
    }

    public function commentUpdate(Request $request, $id){
        $comment = CommentModel::find($id);

        if(is_null($comment)){
            return response()->json(["message" => "Record non trouvé"], 404);
        }

        $comment->update($request->all());
        return response()->json($comment, 200);
    }

    public function commentDelete(Request $request, $id){
        $comment = CommentModel::find($id);
        if(is_null($comment)){
            return response()->json(["message" => "Record non trouve"], 404);
        }
        $comment->delete();
        return response()->json(null, 204);
    }

}
