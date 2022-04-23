<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SermonController extends Controller
{
    //
    public function sermon(Request $request,$id){

        $url = config('app.api_path') . 'sermons/sermon/'.$id;
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        
        if ($response->successful()) {
            $sermon = $response;
        }

        $url = config('app.api_path') . 'preachers/all';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        if ($response->successful()) {
            $preachers = $response['data'];
        }

        $url = config('app.api_path') . 'comments/all/';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        if ($response->successful()) {
            $comments = $response['data'];
        }
    
        return view('sermon', ['sermon'=> $sermon, 'comments'=> $comments, 'preachers'=> $preachers]);
    }

    public function sermons_by(Request $request,$id){
        $url = config('app.api_path') . 'preachers/preacher/'.$id;
        $preachers_url = config('app.api_path') . 'preachers/all';
       
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        $preachers_response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($preachers_url);

        $preachers = $preachers_response['data'];
        
        if ($response->successful()){
            $sermons = $response['sermons'];
            $author = $response->json();
        }else{
            $sermons = [];
        }
       
        return view('sermons_by', ['sermons'=> $sermons,'author'=>$author, 'preachers'=>$preachers]);
    }

}
