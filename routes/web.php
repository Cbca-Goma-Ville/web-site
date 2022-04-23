<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\EventController;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('coming-soon') last;
    $url = config('app.api_path') . 'sermons/last';
    $latest = [];

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $latest = $response;
    }
    return view('home', ['latest_sermon' => $latest]);
})->name('home');

Route::get('/about', function () {

    $url = config('app.api_path') . 'staff/all';

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $staff = $response['data'];
    }

    return view('about', ['staff' => $staff]);
})->name('about');

Route::get('/location', function () {
    return view('contact');
})->name('location');

Route::get('/staff', function () {
    $url = config('app.api_path') . 'staff/all';

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $staff = $response['data'];
    }

    return view('staff', ['staff' => $staff]);
})->name('our-staff');

Route::get('/causes', function () {
    return view('causes');
})->name('our-causes');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/sermons', function (Request $request) {
    $page = $request->get('page');
    $url = config('app.api_path') . 'sermons/all';
    if ($page) {
        $url .= '?page=' . $page;
    }

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $sermons = $response['data'];
    }

    $pagination = new LengthAwarePaginator($response['data'], $response['total'], $response['per_page'], $response['current_page'], ['path' => url()->current()]);

    $url = config('app.api_path') . 'preachers/all';

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $preachers = $response['data'];
    }
    // dd($response->json());
    return view('sermons', ['sermons' => $sermons, 'preachers' => $preachers, 'pagination' => $pagination]);
})->name('sermons');


Route::get('/events-list', function () {

    $url = config('app.api_path') . 'events/all';

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $events = $response['data'];
    }

    return view('events', ['events' => $events]);
})->name('events-list');

Route::get('/this-week', function () {

    $url = config('app.api_path') . 'events/all';

    $response = Http::timeout(200)
        ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
        ->get($url);
    if ($response->successful()) {
        $events = $response['data'];
    }

    return view('chronology', ['events' => $events]);
})->name('this-week');

Route::get('/sermons_by/{id}', [SermonController::class, 'sermons_by'])->name('sermons_by');

Route::get('/sevent/{id}', [EventController::class, 'event'])->name('sevent');

Route::get('/sermon/{id}', [SermonController::class, 'sermon'])->name('sermon');

Route::get('/sermon-albums', function () {
    return view('sermon-albums');
})->name('sermon-albums');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/login', [AdminController::class, 'authenticate'])
            ->name('login');
        Route::post('/login', [AdminController::class, 'loginValidation']);

        Route::get('/logout', [AdminController::class, 'logout'])
            ->name('logout');
    });

Route::prefix('home')
    ->name('home.')
    ->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        Route::get('/add_sermon', [AdminController::class, 'add_sermon'])
            ->name('add_sermon');

        Route::post('/add_sermon_validation', [AdminController::class, 'add_sermon_validation'])
            ->name('add_sermon_validation');

        Route::get('/add_preacher', [AdminController::class, 'add_preacher'])
            ->name('add_preacher');

        Route::get('/preachers_list', [AdminController::class, 'preachers_list'])
            ->name('preachers_list');

        Route::post('/add_preacher_validation', [AdminController::class, 'add_preacher_validation'])
            ->name('add_preacher_validation');

        // ------------ STAFF --------------------- //
        Route::get('/add_staff', [AdminController::class, 'add_staff'])
            ->name('add_staff');

        Route::post('/add_staff_validation', [AdminController::class, 'add_staff_validation'])
            ->name('add_staff_validation');

        Route::get('/staff_list', [AdminController::class, 'staff_list'])
            ->name('staff_list');
        // ---------- STAFF -------------------- //

        // ---------- EVENTS ------------------- //
        Route::get('/add_event', [AdminController::class, 'add_event'])
            ->name('add_event');

        Route::post('/add_event_validation', [AdminController::class, 'add_event_validation'])
            ->name('add_event_validation');

        Route::get('/events_list', [AdminController::class, 'events_list'], function(){
            $url = config('app.api_path') . 'events/all';
            $response = Http::timeout(200)
                ->withHeaders(['X-Requested-With' => 'XMLHttpRequest'])
                ->get($url);
            if ($response->successful()) {
                $events = $response['data'];
            }

            return view('chronology', ['events' => $events]);
        })->name('events_list');
    
        // ---------- EVENTS ------------------- //
    });