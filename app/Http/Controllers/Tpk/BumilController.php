<?php

namespace App\Http\Controllers\Tpk;

use App\Charts\CatinChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BumilController extends Controller
{
    public function index()
    {
        $data['title'] = 'Ibu Hamil';
        return view('tpk.bumil.index', $data);
    }
}
