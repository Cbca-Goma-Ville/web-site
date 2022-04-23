<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function dashboard()
    {
        return view('agent.dashboard');
    }

    public function create()
    {
        return view('agent.create');
    }

    public function store()
    {
    }
}
