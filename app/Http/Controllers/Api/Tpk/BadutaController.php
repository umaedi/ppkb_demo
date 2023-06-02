<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_baduta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\BadutaService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api as Controller;

class BadutaController extends Controller
{
    protected $baduta;
    public function __construct(Tbl_baduta $baduta)
    {
        $this->baduta = new BadutaService($baduta);
    }

    public function store(Request $request)
    {
        $data_baduta = $this->baduta->Query()->where('nik', $request->nik)->first();

        if (!$data_baduta) {
            $kunjungan = 1;
            $kode_baduta = strtoupper(Str::random(16));
        } else {
            $data_kunjungan = $data_baduta->latest()->first();
            $kunjungan = $data_kunjungan->kunjungan + 1;
            $kode_baduta = $data_baduta->kode_baduta;
        }

        $data = $request->except('_token');
        $data['kode_baduta'] = $kode_baduta;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = 1;

        DB::beginTransaction();

        try {
            $this->baduta->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }
}
