<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    public function event(Request $request,$id){

        $url = config('app.api_path') . 'events/event/'.$id;
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        
        if ($response->successful()) {
            $event = $response;
        }
    
        return view('single-event', ['event'=> $event]);
    }
}
