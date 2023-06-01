<?php

namespace App\Http\Controllers\Tpk;

use App\Charts\CatinChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BumilController extends Controller
{
    protected $catinChart;
    public function __construct(CatinChart $catinChart)
    {
        $this->catinChart = $catinChart->build();
    }
    public function index()
    {
        $data['catinChart'] = $this->catinChart;
        return view('tpk.bumil.index', $data);
    }
}
