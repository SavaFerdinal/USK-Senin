@extends('layouts.master')

@section('content')
    <div class="page-heading mb-4">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dahboard</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ Route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            {{-- <li class="breadcrumb-item active" aria-current="page">
          Layout Vertical Navbar
        </li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="card shadow">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="ibi bi-book "></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Buku</h6>
                                <h6 class="font-extrabold mb-0">{{ $buku }} Buku</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="ibi bi-files-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Kategori</h6>
                                <h6 class="font-extrabold mb-0"> {{ $kategori }} Kategori</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="ibi bi-person"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Member</h6>
                                <h6 class="font-extrabold mb-0"> {{ $user }} Member</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="ibi bi-brush"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Penerbit</h6>
                                <h6 class="font-extrabold mb-0"> {{ $penerbit }} Penerbit</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center mt-4">
            <img src="{{ $identitas->foto ?? '/assets/images/not-found.png' }}" alt="" width="200" height="auto"
                class="mb-5">
            <h3 class="mb-4">{{ $identitas->nama_app }}</h3>
            <p>Alamat : {{ $identitas->alamat_app }} | Email : {{ $identitas->email_app }} | Nomor Telp :
                {{ $identitas->nomor_hp }}</p>
        </div>
    </div>
@endsection
