<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

if (!function_exists('imageTobase64')) {
    function imageTobase64(string $path)
    {
        $type   = pathinfo($path, PATHINFO_EXTENSION);
        $logoData   = file_get_contents($path);
        return 'data:image/' . $type . ';base64,' . base64_encode($logoData);
    }
}

if (!function_exists('toFile')) {
    function toFile($file)
    {
        return file_get_contents($file);
    }
}

if (!function_exists('httpRequest')) {
    function httpRequest(
        string $method, 
        string $url, 
        array $data = [], 
        array $attachments = []
    ) {
        $available_methods = [
            'get',
            'post',
            'put',
            'patch',
            'delete',
        ];

        if (!in_array($method, $available_methods)) {
            throw new \Error(sprintf('Unkown method %s. Available methods are %s', $method, implode(', ', $available_methods)));
        }

        $request = Http::timeout(70)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest']);
        
        if (Auth::check() && Auth::user()->token) {
            $request->withToken(Auth::user()->token);
        }

        if ($attachments) {
            foreach ($attachments as $key => $value) {
                $request->attach($key, toFile($value), Str::random(10) . '.jpg');
            }
        }

        $url = env('API_BASE_URL') . $url;

        if ($data) {
            $response = $request->$method($url, $data);
        } else {
            $response = $request->$method($url);
        }

        return $response;
    }
}

if (!function_exists('httpPost')) {
    function httpPost(string $url, $data = [], $attachments = [])
    {
        return httpRequest('post', $url, $data, $attachments);
    }
}

if (!function_exists('httpGet')) {
    function httpGet(string $url, $data = [], $attachments = [])
    {
        return httpRequest('get', $url, $data, $attachments);
    }
}

if (!function_exists('fetch_preacher_by_id')) {
    function fetch_preacher_by_id($id)
    {
        $url = config('app.api_path') . 'preachers/preacher/'.$id;
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        dd($response->json());
        $preacher = $response['data'];
        return $preacher;

    }
}
