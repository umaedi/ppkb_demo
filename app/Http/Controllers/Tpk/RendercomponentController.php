<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RendercomponentController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {

            $el = request()->element;
            switch ($el) {
                case $el->catin:
                    return view('components.modal._data_catin');
                    break;
                case $el->bumil:
                    return view('components.modal._data_bumil');
                    break;
                case $el->pascapersalinan:
                    return view('components.modal._data_pascapersalinan');
                    break;
                default:
                    return view('components.modal._data_pascapersalinan');
                    break;
            }
        }
    }
}
