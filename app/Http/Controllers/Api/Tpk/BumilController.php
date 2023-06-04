<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_bumil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\BumilService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api as Controller;

class BumilController extends Controller
{
    protected $bumil;
    public function __construct(Tbl_bumil $bumil)
    {
        $this->bumil = new BumilService($bumil);
    }

    public function index()
    {
        $bumil = $this->bumil->Query();

        $page = request()->get('paginate', 5);
        if (\request('search')) {
            $bumil->where('nama', 'like', '%' . request('search') . '%');
        }

        $data['table'] = $bumil->paginate($page);
        return view('tpk.bumil._data_table', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendResponseError(json_encode($validator->errors()));
        }

        $data_bumil = $this->bumil->Query()->where('nik', $request->nik)->first();

        if (!$data_bumil) {
            $kunjungan = 1;
            $kode_bumil = strtoupper(Str::random(16));
        } else {
            $kunjungan = $data_bumil->kunjungan + 1;
            $kode_bumil = $data_bumil->kode_bumil;
        }

        $data = $request->except('_token');
        $data['kode_bumil'] = $kode_bumil;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = 1;

        //PROSES DATA
        DB::beginTransaction();

        try {
            $this->bumil->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }

    public function show($id)
    {
        $data['bumil'] = $this->bumil->find($id);
        return view('tpk.bumil._show_data', $data);
    }
}
