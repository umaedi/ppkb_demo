@extends('layouts.tpk.app')
@section('content')
    <div id="appCapsule">
        <div class="section mt-2 text-center">
            <h1>Log in</h1>
            <h4>Silahkan Masukan Akses Login Anda</h4>
        </div>
        <div class="section mb-5 p-2">
        <div id="alert" class="alert small text-center alert-danger d-none">Pastikan username dan password yang anda masukan benar !</div>
            <form id="formSignin" novalidate="">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail / No Telp</label>
                                <input name="email" type="email" class="form-control" id="email1" placeholder="e-mail / no telp">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input name="password" type="password" class="form-control" id="password1" autocomplete="off"
                                    placeholder="Your password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-links mt-2">
                    <div>
                    </div>
                    <div><a href="{{ url('/lupa-password') }}" class="text-muted">Forgot Password?</a></div>
                </div>
                <div class="form-button-group  transparent">
                    <button id="btn-login" type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                </div>
            </form>
        </div>
    </div>
@endsection