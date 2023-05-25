@extends('layouts.tpk.app')
@section('content')
        <!-- App Header -->
        <div class="appHeader bg-primary text-light">
            <div class="left">
                <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                    <ion-icon name="menu-outline"></ion-icon>
                </a>
            </div>
            <div class="pageTitle">
                <img src="{{ asset('assets/tpk/img/logo.png') }}" alt="logo" class="logo">
            </div>
            <div class="right">
                <a href="app-notifications.html" class="headerButton">
                    <ion-icon class="icon" name="notifications-outline"></ion-icon>
                    <span class="badge badge-danger">4</span>
                </a>
                <a href="app-settings.html" class="headerButton">
                    <img src="{{ asset('assets/tpk/img/sample/avatar/avatar1.jpg') }}" alt="image" class="imaged w32">
                    <span class="badge badge-danger">6</span>
                </a>
            </div>
        </div>
        <!-- * App Header -->
    
    
        <!-- App Capsule -->
        <div id="appCapsule">
    
            <!-- Wallet Card -->
            <div class="section wallet-card-section pt-1">
                <div class="wallet-card">
                    <!-- Balance -->
                    <div class="balance">
                        <div class="left">
                            <span class="title">Hallo</span>
                            <h1 class="total">Umaedi KH</h1>
                        </div>
                        <div class="right">
                            <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                                <ion-icon name="add-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <!-- * Balance -->
                    <!-- Wallet Footer -->
                    <div class="wallet-footer">
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                                <div class="icon-wrapper bg-danger">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>Catin/CaPUS</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                                <div class="icon-wrapper">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>Ibu Hamil</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="app-cards.html">
                                <div class="icon-wrapper bg-success">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>Pascapersalinan</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                                <div class="icon-wrapper bg-warning">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>Baduta</strong>
                            </a>
                        </div>
    
                    </div>
                    <!-- * Wallet Footer -->
                </div>
            </div>
            <!-- Wallet Card -->
    
            <!-- Deposit Action Sheet -->
            <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Balance</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="account1">From</label>
                                            <select class="form-control custom-select" id="account1">
                                                <option value="0">Savings (*** 5019)</option>
                                                <option value="1">Investment (*** 6212)</option>
                                                <option value="2">Mortgage (*** 5021)</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addona1">$</span>
                                            <input type="text" class="form-control" placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>
    
    
                                    <div class="form-group basic">
                                        <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Deposit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Deposit Action Sheet -->
    
            <!-- Withdraw Action Sheet -->
            <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Catin</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
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
                                            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik_catin_pria">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control" id="ttl" placeholder="Tempat Lahir" name="alamat_catin_pria">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control" id="ttl" placeholder="No HP (WA)" name="no_tlp_catin_pria">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <textarea id="textarea4" rows="2" class="form-control"
                                                placeholder="Alamat"></textarea>
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <select class="form-control custom-select" id="currency1">
                                                        <option value="1">--Pilih Provinsi--</option>
                                                        <option value="2">USD</option>
                                                        <option value="3">AUD</option>
                                                        <option value="4">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <select class="form-control custom-select" id="currency2">
                                                        <option value="1">--Pilih Kabupaten--</option>
                                                        <option value="1">EUR</option>
                                                        <option value="2">AUD</option>
                                                        <option value="3">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <select class="form-control custom-select" id="currency1">
                                                        <option value="1">--Pilih Kecamatan--</option>
                                                        <option value="2">USD</option>
                                                        <option value="3">AUD</option>
                                                        <option value="4">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <select class="form-control custom-select" id="currency2">
                                                        <option value="1">--Pilih Kelurahan--</option>
                                                        <option value="1">EUR</option>
                                                        <option value="2">AUD</option>
                                                        <option value="3">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group basic mt-3">
                                        <div class="input-wrapper">
                                            <h5 class="modal-title">BIODATA CATIN WANITA</h5>
                                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="nik_2" placeholder="NIK">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control" id="ttl" placeholder="Tempat Lahir">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control" id="ttl" placeholder="Tanggal Lahir">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="No HP (WA)">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <textarea id="textarea4" rows="2" class="form-control"
                                                placeholder="Alamat"></textarea>
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label for="#">Tgl Rencana Pernikahan</label>
                                            <input type="date" class="form-control" id="ttl" placeholder="Tgl Rencana Pernikahan">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label for="#">Tgl Kunjungan</label>
                                            <input type="date" class="form-control" id="ttl" placeholder="Tgl Kunjungan">
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
                                                    <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                    <label class="form-check-label" for="radioList1">Ya</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                    <label class="form-check-label" for="radioList2">Tidak</label>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <h5 class="modal-title">HASIL PEMERIKSAAN KESEHATAN CATIN WANITA</h5>
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="Berat badan (kg)">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="Tinggi Badan (cm)">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="Index Masa Tumbuh">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="Kadar HB (g/dl)">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                        <div class="input-wrapper">
                                            <input type="number" class="form-control" id="ttl" placeholder="Ukuran Lila (cm)">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                        <div class="wide-block p-0">
                                            <div class="section-title">Apakah Terpadar Rokok</div>
                                            <div class="input-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                    <label class="form-check-label" for="radioList1">Ya</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                    <label class="form-check-label" for="radioList2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section full mt-2 mb-2">
                                            <h5 class="modal-title">PENDAMPINGAN CATIN PRIA</h5>
                                            <div class="wide-block p-0">
                                                <div class="section-title">Memberikan penyuluhan/KIE</div>
                                                <div class="input-list">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                        <label class="form-check-label" for="radioList1">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                        <label class="form-check-label" for="radioList2">Tidak</label>
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
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                        <label class="form-check-label" for="radioList1">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                        <label class="form-check-label" for="radioList2">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wide-block p-0">
                                                <div class="section-title">Apakah (sasaran) sudah mendapatkan suplemen makanan?</div>
                                                <div class="input-list">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                        <label class="form-check-label" for="radioList1">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                        <label class="form-check-label" for="radioList2">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wide-block p-0">
                                                <div class="section-title">Memfasilitasi rujukan layanan</div>
                                                <div class="input-list">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList1">
                                                        <label class="form-check-label" for="radioList1">Ya</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radioList" id="radioList2">
                                                        <label class="form-check-label" for="radioList2">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <textarea id="textarea4" rows="2" class="form-control"
                                                    placeholder="Catatan"></textarea>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Withdraw Action Sheet -->
    
            <!-- Send Action Sheet -->
            <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Send Money</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="account2">From</label>
                                            <select class="form-control custom-select" id="account2">
                                                <option value="0">Savings (*** 5019)</option>
                                                <option value="1">Investment (*** 6212)</option>
                                                <option value="2">Mortgage (*** 5021)</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="text11">To</label>
                                            <input type="email" class="form-control" id="text11"
                                                placeholder="Enter bank ID">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
    
                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                            <input type="text" class="form-control" placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>
    
                                    <div class="form-group basic">
                                        <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Send Action Sheet -->
    
            <!-- Exchange Action Sheet -->
            <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Exchange Money</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <label class="label" for="currency1">From</label>
                                                    <select class="form-control custom-select" id="currency1">
                                                        <option value="1">EUR</option>
                                                        <option value="2">USD</option>
                                                        <option value="3">AUD</option>
                                                        <option value="4">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <label class="label" for="currency2">To</label>
                                                    <select class="form-control custom-select" id="currency2">
                                                        <option value="1">USD</option>
                                                        <option value="1">EUR</option>
                                                        <option value="2">AUD</option>
                                                        <option value="3">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon2">$</span>
                                            <input type="text" class="form-control" placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>
    
    
    
                                    <div class="form-group basic">
                                        <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Exchange</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Exchange Action Sheet -->
    
            <!-- Stats -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">CATIN</div>
                            <div class="value text-success">0</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">PAUS</div>
                            <div class="value text-danger">20</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">BUMIL</div>
                            <div class="value">5</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">BADUTA</div>
                            <div class="value">6</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Stats -->
    
            <!-- Transactions -->
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Transactions</h2>
                    <a href="app-transactions.html" class="link">View All</a>
                </div>
                <div class="transactions">
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="{{ asset('assets/tpk') }}/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Amazon</strong>
                                <p>Shopping</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger"> - $ 150</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="{{ asset('assets/tpk') }}/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Apple</strong>
                                <p>Appstore Purchase</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger">- $ 29</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Alex Ljung</strong>
                                <p>Transfer</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price">+ $ 1,000</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Beatriz Brito</strong>
                                <p>Transfer</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger">- $ 186</div>
                        </div>
                    </a>
                    <!-- * item -->
                </div>
            </div>
            <!-- * Transactions -->
    
            <!-- my cards -->
            <div class="section full mt-4">
                <div class="section-heading padding">
                    <h2 class="title">My Cards</h2>
                    <a href="app-cards.html" class="link">View All</a>
                </div>
    
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">
    
                            <li class="splide__slide">
                                <!-- card block -->
                                <div class="card-block bg-primary">
                                    <div class="card-main">
                                        <div class="card-button dropdown">
                                            <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="pencil-outline"></ion-icon>Edit
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="close-outline"></ion-icon>Remove
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                                </a>
                                            </div>
                                        </div>
                                        <div class="balance">
                                            <span class="label">BALANCE</span>
                                            <h1 class="title">$ 1,256,90</h1>
                                        </div>
                                        <div class="in">
                                            <div class="card-number">
                                                <span class="label">Card Number</span>
                                                •••• 9905
                                            </div>
                                            <div class="bottom">
                                                <div class="card-expiry">
                                                    <span class="label">Expiry</span>
                                                    12 / 25
                                                </div>
                                                <div class="card-ccv">
                                                    <span class="label">CCV</span>
                                                    553
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- * card block -->
                            </li>
    
                            <li class="splide__slide">
                                <!-- card block -->
                                <div class="card-block bg-dark">
                                    <div class="card-main">
                                        <div class="card-button dropdown">
                                            <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="pencil-outline"></ion-icon>Edit
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="close-outline"></ion-icon>Remove
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                                </a>
                                            </div>
                                        </div>
                                        <div class="balance">
                                            <span class="label">BALANCE</span>
                                            <h1 class="title">$ 1,256,90</h1>
                                        </div>
                                        <div class="in">
                                            <div class="card-number">
                                                <span class="label">Card Number</span>
                                                •••• 9905
                                            </div>
                                            <div class="bottom">
                                                <div class="card-expiry">
                                                    <span class="label">Expiry</span>
                                                    12 / 25
                                                </div>
                                                <div class="card-ccv">
                                                    <span class="label">CCV</span>
                                                    553
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- * card block -->
                            </li>
    
                            <li class="splide__slide">
                                <!-- card block -->
                                <div class="card-block bg-secondary">
                                    <div class="card-main">
                                        <div class="card-button dropdown">
                                            <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="pencil-outline"></ion-icon>Edit
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="close-outline"></ion-icon>Remove
                                                </a>
                                                <a class="dropdown-item" href="javacript:;">
                                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                                </a>
                                            </div>
                                        </div>
                                        <div class="balance">
                                            <span class="label">BALANCE</span>
                                            <h1 class="title">$ 1,256,90</h1>
                                        </div>
                                        <div class="in">
                                            <div class="card-number">
                                                <span class="label">Card Number</span>
                                                •••• 9905
                                            </div>
                                            <div class="bottom">
                                                <div class="card-expiry">
                                                    <span class="label">Expiry</span>
                                                    12 / 25
                                                </div>
                                                <div class="card-ccv">
                                                    <span class="label">CCV</span>
                                                    553
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- * card block -->
                            </li>
    
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
    
            </div>
            <!-- * my cards -->
    
            <!-- Send Money -->
            <div class="section full mt-4">
                <div class="section-heading padding">
                    <h2 class="title">Send Money</h2>
                    <a href="javascript:;" class="link">Add New</a>
                </div>
                <!-- carousel small -->
                <div class="carousel-small splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                                        <strong>Jurrien</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar3.jpg" alt="img" class="imaged w-100">
                                        <strong>Elwin</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar4.jpg" alt="img" class="imaged w-100">
                                        <strong>Alma</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar5.jpg" alt="img" class="imaged w-100">
                                        <strong>Justine</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar6.jpg" alt="img" class="imaged w-100">
                                        <strong>Maria</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar7.jpg" alt="img" class="imaged w-100">
                                        <strong>Pamela</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar8.jpg" alt="img" class="imaged w-100">
                                        <strong>Neville</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar9.jpg" alt="img" class="imaged w-100">
                                        <strong>Alex</strong>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="user-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar10.jpg" alt="img" class="imaged w-100">
                                        <strong>Stina</strong>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- * carousel small -->
            </div>
            <!-- * Send Money -->
    
            <!-- Monthly Bills -->
            <div class="section full mt-4">
                <div class="section-heading padding">
                    <h2 class="title">Monthly Bills</h2>
                    <a href="app-bills.html" class="link">View All</a>
                </div>
                <!-- carousel multiple -->
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
    
                            <li class="splide__slide">
                                <div class="bill-box">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                                    </div>
                                    <div class="price">$ 14</div>
                                    <p>Prime Monthly Subscription</p>
                                    <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                                </div>
                            </li>
    
                            <li class="splide__slide">
                                <div class="bill-box">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                                    </div>
                                    <div class="price">$ 9</div>
                                    <p>Music Monthly Subscription</p>
                                    <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                                </div>
                            </li>
    
                            <li class="splide__slide">
                                <div class="bill-box">
                                    <div class="img-wrapper">
                                        <div class="iconbox bg-danger">
                                            <ion-icon name="medkit-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="price">$ 299</div>
                                    <p>Monthly Health Insurance</p>
                                    <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                                </div>
                            </li>
    
                            <li class="splide__slide">
                                <div class="bill-box">
                                    <div class="img-wrapper">
                                        <div class="iconbox">
                                            <ion-icon name="card-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="price">$ 962</div>
                                    <p>Credit Card Statement
                                    </p>
                                    <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                                </div>
                            </li>
    
                        </ul>
                    </div>
                </div>
                <!-- * carousel multiple -->
            </div>
            <!-- * Monthly Bills -->
    
    
            <!-- Saving Goals -->
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Saving Goals</h2>
                    <a href="app-savings.html" class="link">View All</a>
                </div>
                <div class="goals">
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Gaming Console</h4>
                                <p>Gaming</p>
                            </div>
                            <div class="price">$ 499</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>New House</h4>
                                <p>Living</p>
                            </div>
                            <div class="price">$ 100,000</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Sport Car</h4>
                                <p>Lifestyle</p>
                            </div>
                            <div class="price">$ 42,500</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">15%</div>
                        </div>
                    </div>
                    <!-- * item -->
                </div>
            </div>
            <!-- * Saving Goals -->
    
    
            <!-- News -->
            <div class="section full mt-4 mb-3">
                <div class="section-heading padding">
                    <h2 class="title">Lastest News</h2>
                    <a href="app-blog.html" class="link">View All</a>
                </div>
    
                <!-- carousel multiple -->
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
    
                            <li class="splide__slide">
                                <a href="app-blog-post.html">
                                    <div class="blog-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                        <div class="text">
                                            <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
    
                            <li class="splide__slide">
                                <a href="app-blog-post.html">
                                    <div class="blog-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                        <div class="text">
                                            <h4 class="title">Rules you need to know in business</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
    
                            <li class="splide__slide">
                                <a href="app-blog-post.html">
                                    <div class="blog-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                        <div class="text">
                                            <h4 class="title">10 easy ways to save your money</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
    
                            <li class="splide__slide">
                                <a href="app-blog-post.html">
                                    <div class="blog-card">
                                        <img src="{{ asset('assets/tpk') }}/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                        <div class="text">
                                            <h4 class="title">Follow the financial agenda with...</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
    
                        </ul>
                    </div>
                </div>
                <!-- * carousel multiple -->
    
            </div>
            <!-- * News -->
    
    
            <!-- app footer -->
            <div class="appFooter">
                <div class="footer-title">
                    Copyright © Finapp 2021. All Rights Reserved.
                </div>
                Bootstrap 5 based mobile template.
            </div>
            <!-- * app footer -->
    
        </div>
        <!-- * App Capsule -->
    
    
        <!-- App Bottom Menu -->
        <div class="appBottomMenu">
            <a href="index-2.html" class="item active">
                <div class="col">
                    <ion-icon name="pie-chart-outline"></ion-icon>
                    <strong>Overview</strong>
                </div>
            </a>
            <a href="app-pages.html" class="item">
                <div class="col">
                    <ion-icon name="document-text-outline"></ion-icon>
                    <strong>Pages</strong>
                </div>
            </a>
            <a href="app-components.html" class="item">
                <div class="col">
                    <ion-icon name="apps-outline"></ion-icon>
                    <strong>Components</strong>
                </div>
            </a>
            <a href="app-cards.html" class="item">
                <div class="col">
                    <ion-icon name="card-outline"></ion-icon>
                    <strong>My Cards</strong>
                </div>
            </a>
            <a href="app-settings.html" class="item">
                <div class="col">
                    <ion-icon name="settings-outline"></ion-icon>
                    <strong>Settings</strong>
                </div>
            </a>
        </div>
        <!-- * App Bottom Menu -->
    
        <!-- App Sidebar -->
        <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <!-- profile box -->
                        <div class="profileBox pt-2 pb-2">
                            <div class="image-wrapper">
                                <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                            </div>
                            <div class="in">
                                <strong>Sebastian Doe</strong>
                                <div class="text-muted">4029209</div>
                            </div>
                            <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                                <ion-icon name="close-outline"></ion-icon>
                            </a>
                        </div>
                        <!-- * profile box -->
                        <!-- balance -->
                        <div class="sidebar-balance">
                            <div class="listview-title">Balance</div>
                            <div class="in">
                                <h1 class="amount">$ 2,562.50</h1>
                            </div>
                        </div>
                        <!-- * balance -->
    
                        <!-- action group -->
                        <div class="action-group">
                            <a href="index-2.html" class="action-button">
                                <div class="in">
                                    <div class="iconbox">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>
                                    Deposit
                                </div>
                            </a>
                            <a href="index-2.html" class="action-button">
                                <div class="in">
                                    <div class="iconbox">
                                        <ion-icon name="arrow-down-outline"></ion-icon>
                                    </div>
                                    Withdraw
                                </div>
                            </a>
                            <a href="index-2.html" class="action-button">
                                <div class="in">
                                    <div class="iconbox">
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                    </div>
                                    Send
                                </div>
                            </a>
                            <a href="app-cards.html" class="action-button">
                                <div class="in">
                                    <div class="iconbox">
                                        <ion-icon name="card-outline"></ion-icon>
                                    </div>
                                    My Cards
                                </div>
                            </a>
                        </div>
                        <!-- * action group -->
    
                        <!-- menu -->
                        <div class="listview-title mt-1">Menu</div>
                        <ul class="listview flush transparent no-line image-listview">
                            <li>
                                <a href="index-2.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="pie-chart-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Overview
                                        <span class="badge badge-primary">10</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-pages.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Pages
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-components.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="apps-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Components
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-cards.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="card-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        My Cards
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- * menu -->
    
                        <!-- others -->
                        <div class="listview-title mt-1">Others</div>
                        <ul class="listview flush transparent no-line image-listview">
                            <li>
                                <a href="app-settings.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="settings-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Settings
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="component-messages.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="chatbubble-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Support
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-login.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="log-out-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Log out
                                    </div>
                                </a>
                            </li>
    
    
                        </ul>
                        <!-- * others -->
    
                        <!-- send money -->
                        <div class="listview-title mt-1">Send Money</div>
                        <ul class="listview image-listview flush transparent no-line">
                            <li>
                                <a href="#" class="item">
                                    <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Artem Sazonov</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Sophie Asveld</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <img src="{{ asset('assets/tpk') }}/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Kobus van de Vegte</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- * send money -->
    
                    </div>
                </div>
            </div>
        </div>
        <!-- * App Sidebar -->
    
    
    
        <!-- iOS Add to Home Action Sheet -->
        <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add to Home Screen</h5>
                        <a href="#" class="close-button" data-bs-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content text-center">
                            <div class="mb-1"><img src="{{ asset('assets/tpk') }}/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                            </div>
                            <div>
                                Install <strong>Finapp</strong> on your iPhone's home screen.
                            </div>
                            <div>
                                Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- * iOS Add to Home Action Sheet -->
    
    
        <!-- Android Add to Home Action Sheet -->
        <div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
            role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add to Home Screen</h5>
                        <a href="#" class="close-button" data-bs-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content text-center">
                            <div class="mb-1">
                                <img src="{{ asset('assets/tpk') }}/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                            </div>
                            <div>
                                Install <strong>Finapp</strong> on your Android's home screen.
                            </div>
                            <div>
                                Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Android Add to Home Action Sheet -->
@endsection