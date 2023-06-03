<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_catin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api as Controller;
use App\Services\CatinService;

class CatinController extends Controller
{
    protected $catin;
    public function __construct(Tbl_catin $catin)
    {
        $this->catin = new CatinService($catin);
    }

    public function index()
    {
        $catin = $this->catin->Query();
        $data['table'] = $catin->paginate(5);
        return view('tpk.catin._data_table', $data);
    }

    public function store(Request $request)
    {
        $data_catin = $this->catin->Query()->where('nik_catin_pria', $request->nik_catin_pria)->first();

        if (!$data_catin) {
            $kunjungan = 1;
            $kode_catin = strtoupper(Str::random(16));
        } else {
            $kunjungan = $data_catin->kunjungan + 1;
            $kode_catin = $data_catin->kode_catin;
        }

        $data = $request->except('_token');
        $data['kode_catin'] = $kode_catin;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = 1;
        $data['tgl_pendampingan'] = now();

        //PROSES DATA
        DB::beginTransaction();

        try {
            $this->catin->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }
}
