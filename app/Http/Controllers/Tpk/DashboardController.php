<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('tpk.dashboard.index');
    }
}
