<div class="modal fade action-sheet" id="catinCapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TAMBAH DATA CATIN</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form id="catinStore">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <h5 class="modal-title">BIODATA CATIN PRIA</h5>
                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama_catin_pria">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="number" class="form-control" id="nik" placeholder="NIK" name="nik_catin_pria">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="text" class="form-control"  placeholder="Tempat Lahir" name="alamat_catin_pria">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label for="">Tgl Lahir</label>
                                <input type="date" class="form-control"  placeholder="Tgl Lahir" name="tgl_lahir_catin_pria">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="number" class="form-control" placeholder="No HP (WA)" name="telp_catin_pria">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <textarea id="textarea4" rows="2" class="form-control"
                                    placeholder="Alamat" name="alamat_catin_pria"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <select id="wilayah" class="form-control custom-select" name="wilayah_id">
                                    <option value="1">--Pilih Kecamatan--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group basic mt-3">
                            <div class="input-wrapper">
                                <h5 class="modal-title">BIODATA CATIN WANITA</h5>
                                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="number" class="form-control"  placeholder="NIK" name="nik_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="number" class="form-control" id="ttl" placeholder="No HP (WA)" name="telp_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <textarea id="textarea4" rows="2" class="form-control" name="alamat_catin_wanita"
                                    placeholder="Alamat"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label for="#">Tgl Rencana Pernikahan</label>
                                <input type="date" class="form-control" id="ttl" placeholder="Tgl Rencana Pernikahan" name="tgl_pernikahan">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label for="#">Tgl Kunjungan</label>
                                <input type="date" class="form-control" id="ttl" placeholder="Tgl Kunjungan" name="kunjungan">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="section full mt-2 mb-2">
                            <h5 class="modal-title">HASIL PEMERIKSAAN KESEHATAN CATIN PRIA</h5>
                            <div class="wide-block p-0">
                                <div class="section-title">Apakah Merokok</div>
                                <div class="input-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="merokok_pria" id="radioList1" value="1">
                                        <label class="form-check-label" for="radioList1">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="merokok_pria" id="radioList1.1" value="2">
                                        <label class="form-check-label" for="radioList1.1">Tidak</label>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <div class="form-group basic">
                            <h5 class="modal-title">HASIL PEMERIKSAAN KESEHATAN CATIN WANITA</h5>
                            <div class="input-wrapper">
                                <input type="number" class="form-control" placeholder="Berat badan (kg)" name="bb_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="number" class="form-control" placeholder="Tinggi Badan (cm)" name="tb_catin_wanita">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="number" class="form-control" placeholder="Index Masa Tumbuh" name="imt">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="number" class="form-control" id="ttl" placeholder="Kadar HB (g/dl)" name="kadar_hb">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="number" class="form-control" placeholder="Ukuran Lila (cm)" name="lila">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="wide-block p-0">
                                <div class="section-title">Apakah Terpadar Rokok</div>
                                <div class="input-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2" value="1">
                                        <label class="form-check-label" for="radioList2">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2.1" value="2">
                                        <label class="form-check-label" for="radioList2.1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="section full mt-2 mb-2">
                                <h5 class="modal-title">PENDAMPINGAN CATIN PRIA</h5>
                                <div class="wide-block p-0">
                                    <div class="section-title">Memberikan penyuluhan/KIE</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3" value="1">
                                            <label class="form-check-label" for="radioList3">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3.1" value="2">
                                            <label class="form-check-label" for="radioList3.1">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section full mt-2 mb-2">
                                <h5 class="modal-title">PENDAMPINGAN CATIN WANITA</h5>
                                <div class="wide-block p-0">
                                    <div class="section-title">Memberikan penyuluhan/KIE</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4" value="1">
                                            <label class="form-check-label" for="radioList4">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4.1" value="2">
                                            <label class="form-check-label" for="radioList4.1">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="wide-block p-0">
                                    <div class="section-title">Apakah (sasaran) sudah mendapatkan suplemen makanan?</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5" value="1">
                                            <label class="form-check-label" for="radioList5">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5.1" value="2">
                                            <label class="form-check-label" for="radioList5.1">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="wide-block p-0">
                                    <div class="section-title">Memfasilitasi rujukan layanan</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6" value="1">
                                            <label class="form-check-label" for="radioList6">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6.1" value="2">
                                            <label class="form-check-label" for="radioList6.1">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <textarea id="textarea4" rows="2" class="form-control" name="catatan_pendampingan"
                                        placeholder="Catatan"></textarea>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group basic">
                            @include('components._loading_submit')
                            <button id="btn_submit" type="submit" class="btn btn-primary btn-block btn-lg"
                            >Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript" src="{{ asset('assets/tpk/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(async function wilayah() {
        var param = {
            method: 'GET',
            url: '/api/tpk/wilayah',
        }

        await transAjax(param).then((res) => {
            res.data.forEach(el => {
                $('#wilayah').append(`
                    <option value="${el.id}">${el.nama}</option>      
                `);
            });
        });
    });

    $('#catinStore').submit(async function store(e) {
        e.preventDefault();

        var form 	= $(this)[0]; 
        var data 	= new FormData(form);

        var param = {
            method: 'POST',
            url: '/api/tpk/catin/store',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }

            loadingsubmit(true);
            await transAjax(param).then((res) => {
                loadingsubmit(false);
                $('#catinCapus').modal('hide');
                swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/dashboard';
                });
            }).catch((err) => {
                loadingsubmit(false);
                swal({text: err.message, icon: 'error', timer: 3000,})
            });

        function loadingsubmit(state){
            if(state) {
                $('#btn_loading').removeClass('d-none');
                $('#btn_submit').addClass('d-none');
            }else {
                $('#btn_loading').addClass('d-none');
                $('#btn_submit').removeClass('d-none');
            }
        }  
    });
</script>
@endpush