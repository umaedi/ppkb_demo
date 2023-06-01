@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
    <div class="section my-3">
        <div class="card text-center">
            <div class="card-header">
                Calon Pengantin Pria Berdasarkan Usia
            </div>
            <div class="card-body">
                {!! $catinChart->container() !!}
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Pria Berdasarkan Keterpaparan Merokok
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Status
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Usia
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Index Masa Tumbuh (IMT)
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Lingkar Lengan Atas (LiLA)
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Kadar HB
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Keterpaparan Merokok
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Status Pernikahan
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Pendampingan Calon Pengantin Wanita
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Pendampingan Calon Pengantin Pria
            </div>
            <div class="card-body">
                data
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ $catinChart->cdn() }}"></script>
{{ $catinChart->script() }}
@endpush
