@extends('layouts.tpk.app')
@section('content')
        <div id="appCapsule">
            <div class="section wallet-card-section pt-1">
                <div class="wallet-card">
                    <div class="balance">
                        <div class="left">
                            <span class="title">Hallo</span>
                            <h1 class="total">Umaedi KH</h1>
                        </div>
                        {{-- <div class="right">
                            <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                                <ion-icon name="add-outline"></ion-icon>
                            </a>
                        </div> --}}
                    </div>
                    <div class="wallet-footer">
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#catinCapus">
                                <div class="icon-wrapper bg-danger">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>CATIN</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#bumil">
                                <div class="icon-wrapper">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>BUMIL</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#pascaPersalinan">
                                <div class="icon-wrapper bg-success">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>PPS</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#baduta">
                                <div class="icon-wrapper bg-warning">
                                    <ion-icon name="add-outline"></ion-icon>
                                </div>
                                <strong>BADUTA</strong>
                            </a>
                        </div>
    
                    </div>
                </div>
            </div>
    
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
    
            <!-- MODAL CATIN -->
            @include('components.modal._data_catin')
    
            <!-- MODAL BUMIL -->
            @include('components.modal._data_bumil')
    
            <!-- MODAL PASCAPERSALINAN -->
            @include('components.modal._data_pascapersalinan')

            <!-- MODAL BADUTA -->
            @include('components.modal._data_baduta')
    
            <!-- Stats -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-6">
                        <a href="{{ route('tpk.catin.index') }}">
                        <div class="stat-box">
                            <div class="title">CATIN</div>
                            <div id="data_catin" class="value text-danger">0</div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">PPS</div>
                            <div id="data_pps" class="value text-success">0</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <a href="{{ route('tpk.bumil') }}">
                        <div class="stat-box">
                            <div class="title">BUMIL</div>
                            <div class="value"><span id="data_bumil" class="text-primary">0</span></div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">BADUTA</div>
                            <div class="value"><span class="text-warning" id="data_baduta">0</span></div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="section my-3">
                    <div class="section-heading">
                        <div class="section-title">PERLU KUNJUNGAN</div>
                    </div>
                    <div class="card">
                        @include('components._loading')
                        <div class="table-responsive" id="data-table">
                            
                        </div>
        
                    </div>
                </div>
        </div>
@endsection
@push('js')
    <script type="text/javascript">
     var page = 1;
        $(document).ready(async function dashboard() {
            var param = {
                method: 'GET',
                url: '/api/tpk/data_dashboard',
            }

            await transAjax(param).then((res) => {
                $('#data_catin').html(res.data.catin);
                $('#data_bumil').html(res.data.bumil);
                $('#data_pps').html(res.data.pps);
                $('#data_baduta').html(res.data.baduta);
            });
        });

        $(document).ready(function() {
            loadData();
        });

        async function loadData()
        {
            var param = {
                url: '/api/tpk/catin',
                method: 'GET',
                data: {
                    load: 'table',
                    page: page,
                }
            }

            loading(true);
            await transAjax(param).then((result) => {
                loading(false);
                $('#data-table').html(result);
            });
        }

        function loading(state) {
            if(state) {
                $('#loading').removeClass('d-none');
            } else {
                $('#loading').addClass('d-none');
            }
        }

        function loadPaginate(to) {
            page = to
            loadData();
        }
    </script>
@endpush