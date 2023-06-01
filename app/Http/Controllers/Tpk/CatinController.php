<?php

namespace App\Http\Controllers\Tpk;

use App\Charts\CatinChart;
use App\Http\Controllers\Controller;

class CatinController extends Controller
{
    protected $catinChart;
    public function __construct(CatinChart $catinChart)
    {
        $this->catinChart = $catinChart->build();
    }
    public function index()
    {
        $data['catinChart'] = $this->catinChart;
        return view('tpk.catin.index', $data);
    }
}
