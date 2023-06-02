<?php

namespace App\Http\Controllers\Api\Tpk;

use Illuminate\Support\Str;
use App\Services\PpsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_pasca_persalinan;
use App\Http\Controllers\Api  as Controller;

class PpsController extends Controller
{
    protected $pps;
    public function __construct(Tbl_pasca_persalinan $pps)
    {
        $this->pps = new PpsService($pps);
    }

    public function store(Request $request)
    {

        $data_pps = $this->pps->Query()->where('nik', $request->nik)->first();

        if (!$data_pps) {
            $kode_pasca_persalinan = strtoupper(Str::random(16));
            $kunjungan = 1;
        } else {
            $kode_pasca_persalinan = $data_pps->kode_pasca_persalinan;
            $kunjungan = $data_pps->kunjungan + 1;
        }

        $data = $request->except('_token');
        $data['kode_pasca_persalinan'] = $kode_pasca_persalinan;
        $data['pendamping_id'] = 1;
        $data['kunjungan']     = $kunjungan;

        //proses data
        DB::beginTransaction();

        try {
            $this->pps->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }
}
