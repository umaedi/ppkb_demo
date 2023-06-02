<div class="modal fade action-sheet" id="baduta" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DATA SASARAN BADUTA</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form id="badutaStore">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label for="date">Tgl Kunjungan</label>
                                <input type="date" name="tgl_kunjungan" id="date" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <h5 class="p-1 mb-2 bg-secondary text-white">BIODATA IBU</h5>
                            <div class="input-wrapper">
                                <input type="number" name="nik" class="form-control" placeholder="NIK">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tgl Lahir Ibu">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper">
                                <input type="number" name="no_tlp" class="form-control" placeholder="No HP/WhatsApp">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="penggunaan_kontrasepsi">
                                        <option value="">--Penggunaan Kontrasepsi Saat Ini--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="air_minum_layak">
                                        <option value="">--Akses Air Minum Yang Banyak--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="tempat_bab_layak">
                                        <option value="">--Buang Air Besar Ditempat Yang Layak--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-wrapper mt-3">
                                <h5 class="p-1 mb-2 bg-secondary text-white">DATA BADUTA</h5>
                                <input type="number" name="nik_baduta" id="nik" class="form-control" placeholder="NIK Anak">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mt-3">
                                <input type="text" name="nama_bayi" class="form-control" placeholder="Nama Baduta">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mt-3">
                                <label for="">Tgl Lahir Baduta</label>
                                <input type="date" name="tgl_lahir_bayi" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="jenis_kelamin">
                                        <option value="1">--Jenis Kelamin Baduta--</option>
                                        <option value="2">Laki-Laki</option>
                                        <option value="3">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-wrapper mt-3">
                                <input type="number" name="urutan_anak_ke" class="form-control" placeholder="Urutan Anak Ke">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mt-3">
                                <label for="">Tgl Lahir Anak Sebelumnya</label>
                                <input type="date" name="tgl_lahir_anak_sebelum" class="form-control" placeholder="Tgl Lahir Anak Sebelumnya">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mt-3">
                                <input type="number" name="bb_kehamilan" class="form-control" placeholder="Berat Badan Lahir (kg)">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mt-3">
                                <input type="number" name="pb_lahir" class="form-control" placeholder="Panjang Badan Lahir (cm)">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <h5 class="p-1 mb-2 bg-secondary text-white">DATA DUKUNG LAINNYA</h5>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="kehadiran_posyandu">
                                        <option value="">--Kehadiran Pada Posyandu--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="penyuluhan_kie">
                                        <option value="">--Memberikan Penyuluhan/KIE--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="pemberian_fasilitas_rujukan">
                                        <option value="">--Pemberian Fasilitas Pelayanan Rujukan--</option>
                                        <option value="Ya, Sedang Dalam Proses">Ya, Sedang Dalam Proses</option>
                                        <option value="Ya, Sudah Mendapatkan Pelayanan Rujukan">Ya, Sudah Mendapatkan Pelayanan Rujukan</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <select class="form-control custom-select" name="bansos">
                                        <option value="">--Memfasilitasi Bantuan Sosial--</option>
                                        <option value="Ya, Sedang Dalam Proses">Ya, Sedang Dalam Proses</option>
                                        <option value="Ya, Sudah Mendapatkan Bantuan Sosial">Ya, Sudah Mendapatkan Bantuan Sosial</option>
                                        <option value="Tidak, Karen Tidak Memenuhi Syarat">Tidak, Karen Tidak Memenuhi Syarat</option>
                                        <option value="Tidak, Karena Sudah Mendapatkan Bantuan Sosial">Tidak, Karena Sudah Mendapatkan Bantuan Sosial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <label for="">Tgl Kunjungan Berikutnya</label>
                                <input type="date" name="tgl_kunjungan_berikutnya" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <textarea id="textarea4" rows="2" class="form-control"
                                        placeholder="Catatan TPK" name="catatan_baduta"></textarea>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group basic">
                            @include('components.btn._loading_submit_baduta')
                            <button id="btn_submit_baduta" type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $('#badutaStore').submit(async function store(e) {
        e.preventDefault();

        var form 	= $(this)[0]; 
        var data 	= new FormData(form);

        var param = {
            method: 'POST',
            url: '/api/tpk/baduta/store',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }

            loadingsubmit(true);
            await transAjax(param).then((res) => {
                loadingsubmit(false);
                swal({text: err.message, icon: 'success', timer: 3000,});
                $('#baduta').modal('hide');
                swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/dashboard';
                });
            }).catch((err) => {
                loadingsubmit(false);
                $('#baduta').modal('hide');
                swal({text: err.message, icon: 'error', timer: 3000,});
            });

        function loadingsubmit(state){
            if(state) {
                $('#btn_loading_baduta').removeClass('d-none');
                $('#btn_submit_baduta').addClass('d-none');
            }else {
                $('#btn_loading_baduta').addClass('d-none');
                $('#btn_submit_baduta').removeClass('d-none');
            }
        }  
    });
</script>
@endpush