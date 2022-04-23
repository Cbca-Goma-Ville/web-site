<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
        return view('auth/login');
    }

    public function loginValidation(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $params = $request->only('email', 'password');

        $url = config('app.api_path') . 'login';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->post($url, $params);

        //dd($response->json());

        if ($response->successful()) {
            //user creation
            $data = $response['data'];
            $user = $data['user'];

            // Creating the user and hiding user password
            $fakePassword = Str::random(10);
            $user['password'] = $fakePassword;
            $user['username'] = $user['email'];
            $user['remember_token'] = null;

            // Token will be accessible via user
            $user['token'] = $data['tokens'];

            Session::put('user', $user);

            // Connecting the user
            $credentials = [
                'username' => $request->get('email'),
                'password' => $fakePassword
            ];

            if (Auth::attempt($credentials)) {
                $route = 'home.dashboard';
                return redirect(route($route));
            }
        }

        // User entered invalid credentials
        return back()
            ->with('status', 'Email ou mot de passe invalide')
            ->withInput();
    
    }

    public function logout(Request $request)
    {
        // Ensure logging out in API before logging out in app
        // $url = config('app.api_path') . '/logout';

        // try {
        //     $response = Http::timeout(200)
        //         ->withToken(Auth::user()->token)
        //         ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        //         ->post($url);
        // } catch (\Exception $e) {}

        // Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
      
    }

    public function dashboard(Request $request){

        $url = config('app.api_path') . 'sermons/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);
            if ($response->successful()) {
                $sermons = $response['data'];
            }

        return view('home/dashboard',['sermons' => $sermons]);
    }

    public function add_sermon(Request $request){

        $url = config('app.api_path') . 'preachers/all';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);

        if ($response->successful()) {
            $preachers = $response['data'];
        }
        return view('home/add_sermon',['preachers' => $preachers]);
    }

    public function add_sermon_validation(Request $request){

        //Validation

        //Validation
        if($request->hasFile('audio_file') 
            && $request->hasFile('pdf_file')
            && $request->hasFile('sermon_cover')){
    
        $audio_file = $request->file('audio_file');
        $pdf_file = $request->file('pdf_file');
        $sermon_cover = $request->file('sermon_cover');

        $audio_new_name = time().'CBCA_GV_SERMONS.'.$audio_file->getClientOriginalExtension();
        $pdf_new_name = time().'CBCA_GV_SERMONS_PDF.'.$pdf_file->getClientOriginalExtension();
        $sermon_cover_new_name = time().'CBCA_GV_SERMONS_COVER.'.$sermon_cover->getClientOriginalExtension();

        $audio_dest = public_path('/sermon/audios');
        $pdf_dest = public_path('sermon/pdf');
        $cover_dest = public_path('sermon/covers');

        $audio_file->move($audio_dest,$audio_new_name);
        $pdf_file->move($pdf_dest,$pdf_new_name);
        $sermon_cover->move($cover_dest,$sermon_cover_new_name);

        }else{
            return redirect(route('home.dashboard'))->with('msg', 'Veuillez uploader un fichier');
        }

        $params = $request->all();
        
        $params["sermon_audio_url"] = "audios/".$audio_new_name;
        $params["sermon_file_url"] = "pdf/".$pdf_new_name;
        $params["sermon_cover"] = "covers/".$sermon_cover_new_name;

        $url = config('app.api_path') . 'sermons/add';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->post($url, $params);
            
        if ($response->successful()) {

            $url = config('app.api_path') . 'sermons/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);

                $sermons = $response['data'];

            return redirect(route('home.dashboard'));

        }
       
    }

    public function preachers_list(Request $request){

        $url = config('app.api_path') . 'preachers/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);
            if ($response->successful()) {
                $preachers = $response['data'];
            }

        return view('home/preachers_list',['preachers' => $preachers]);
    }

    public function add_preacher(Request $request){

        return view('home/add_preacher');
    }

    public function add_preacher_validation(Request $request){

        //Validation

        //Validation
        if($request->hasFile('preacher_image')){
            $preacher_image = $request->file('preacher_image');
    
            $picture_new_name = time().'CBCA_GV_SERMONS_COVER.'.$preacher_image->getClientOriginalExtension();

            $image_dest = public_path('/preachers');

            $preacher_image->move($image_dest,$picture_new_name);
        }

        $params = $request->all();
        $params["preacher_image"] = "preachers/".$picture_new_name;

        if($request['status'] == "on"){
            $params['status'] = "1";
        }else{
            $params['status'] = "0";
        }

        $url = config('app.api_path') . 'preachers/add';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->post($url, $params);

        if ($response->successful()) {

            $url = config('app.api_path') . 'preachers/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);

                $sermons = $response['data'];

            return redirect(route('home.preachers_list'));

        }
       
    }

    public function add_staff(Request $request){

        return view('home/add_staff');
    }

    public function add_staff_validation(Request $request){
        //Validation

        //Validation
        if($request->hasFile('staff_image')){
            $staff_image = $request->file('staff_image');
    
            $picture_new_name = time().'CBCA_GV_STAFF.'.$staff_image->getClientOriginalExtension();

            $image_dest = public_path('/staff');

            $staff_image->move($image_dest,$picture_new_name);
        }

        $params = $request->all();
        $params["staff_image"] = "staff/".$picture_new_name;

        if($request['status'] == "on"){
            $params['status'] = "1";
        }else{
            $params['status'] = "0";
        }

        $url = config('app.api_path') . 'staff/add';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->post($url, $params);

        if ($response->successful()) {

            $url = config('app.api_path') . 'staff/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);

                $staff = $response['data'];

            return redirect(route('home.staff_list'));

        }
    }

    public function staff_list(Request $request){
        $url = config('app.api_path') . 'staff/all';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        if ($response->successful()) {
            $staff = $response['data'];
        }

        return view('home/staff_list',['staff' => $staff]);   
    }

    public function add_event(Request $request){
        return view('home/add_event');
    }

    public function add_event_validation(Request $request){
        //Validation

        //Validation

        if($request->hasFile('event_cover')){
            $event_image = $request->file('event_cover');
    
            $picture_new_name = time().'CBCA_GV_EVENT_COVER.'.$event_image->getClientOriginalExtension();

            $image_dest = public_path('sevent/events');

            $event_image->move($image_dest,$picture_new_name);
        }

        $params = $request->all();
        $params["event_cover"] = "events/".$picture_new_name;

        $url = config('app.api_path') . 'events/add';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->post($url, $params);

        if ($response->successful()) {

            $url = config('app.api_path') . 'events/all';
        
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);

                $events = $response['data'];

            return redirect(route('home.events_list'));

        }

    }

    public function events_list(Request $request){
        $url = config('app.api_path') . 'events/all';
        
        $response = Http::timeout(200)
            ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
            ->get($url);
        if ($response->successful()) {
            $events = $response['data'];
        }

        return view('home/events_list',['events' => $events]);   
    }

}