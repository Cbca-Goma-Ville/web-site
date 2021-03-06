<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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

        $url = config('app.api_path') . 'services/all';
        $services = [];
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        if ($response->successful()) {
            $services = $response['data'];
        }

        return view('sermon', ['sermon'=> $sermon, 'comments'=> $comments, 'preachers'=> $preachers, 'services'=>$services]);
    }

    public function sermons_by(Request $request,$id){
        $url = config('app.api_path') . 'preachers/preacher/'.$id;
        $preachers_url = config('app.api_path') . 'preachers/all';
        $services_url = config('app.api_path') . 'services/all';

        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        $preachers_response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($preachers_url);
        $preachers = $preachers_response['data'];

        $services_response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($services_url);
        $services = $services_response['data'];

        if ($response->successful()){
            $sermons = $response['sermons'];
            $author = $response->json();
        }else{
            $sermons = [];
        }

        return view('sermons_by', ['sermons'=> $sermons,'author'=>$author, 'preachers'=>$preachers, 'services'=>$services]);
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => url()->current()]);
    }

    public function services(Request $request,$id){
        $url = config('app.api_path') . 'services/service/'.$id;
        $services_url = config('app.api_path') . 'services/all';
        $preachers_url = config('app.api_path') . 'preachers/all';

        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        $services_response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($services_url);

        $preachers_response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($preachers_url);

        $services = $services_response['data'];
        $preachers = $preachers_response['data'];

        if ($response->successful()){
            $service = $response->json();
            $author = $response->json();
        }

        if($service['id'] == 1){
            $sermons = $services[0];
        }elseif($service['id'] == 2){
            $sermons = $services[1];
        }elseif($service['id'] == 3){
            $sermons = $services[2];
        }elseif($service['id'] == 4){
            $sermons = $services[3];
        }elseif($service['id'] == 5){
            $sermons = $services[4];
        }

        $sermons = $this->paginate($sermons['sermons']);

        return view('services', ['sermons'=> $sermons,'author'=>$author,'preachers'=>$preachers, 'service'=>$service, 'services'=>$services]);
    }

}