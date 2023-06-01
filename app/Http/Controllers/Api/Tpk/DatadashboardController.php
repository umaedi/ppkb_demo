<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Http\Controllers\Api as Controller;
use App\Models\Tbl_bumil;
use App\Models\Tbl_catin;

class DatadashboardController extends Controller
{
    public function index()
    {
        $data['catin']  = Tbl_catin::count();
        $data['bumil']  = Tbl_bumil::count();
        return $this->sendResponseOk($data);
    }
}
