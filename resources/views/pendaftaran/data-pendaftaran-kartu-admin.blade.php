@extends('master.master-admin')

@section('title')
    COURSE
@endsection

@section('header')
@endsection

@section('navbar')
    @parent
@endsection

@section('menunya')
    Kartu Pendaftaran
@endsection

@section('menu')
@auth
<ul class="metismenu" id="menu">
    <li><a href="{{route('dashboard')}}">
            <i class="fas fa-home"></i>
            <span class="nav-text">Beranda</span>
        </a>
    </li>
    @if (auth()->user()->role == 'Administrator')
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Data Master </span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{route('data-user')}}">Pengguna</a></li>
            <li><a href="{{route('data-sekolah')}}">Sekolah</a></li>
            <li><a href="{{route('data-kursus')}}">Kursus</a></li>
            <li><a href="{{route('data-jadwal')}}">Jadwal Kegiatan</a></li>
        </ul>
    </li>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-database"></i>
        <span class="nav-text">Data History</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{route('data-registration')}}">Pendaftaran</a></li>
            <li><a href="{{route('data-pembayaran')}}">Pembayaran</a></li>
        </ul>
    </li>
    <li><a href="{{route('data-pengumuman')}}" aria-expanded="false">
            <i class="fa fa-file"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>
    @else
    <li class="mm-active"><a href="{{route('data-registration')}}" aria-expanded="false">
        <i class="fa fa-database"></i>
            <span class="nav-text">Pendaftaran</span>
        </a>
    </li>
    @endif
</ul>
@endauth
@endsection

@section('content')
    <div class="row">
        <form action="/update-registration/{{ $viewData->id_pendaftaran }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xl-12">
                <div class="card card-body" id="cetak" style="margin-bottom: -1rem">
                    <div class="p-4">
                        <div class="d-flex">
                            <div class="col-lg-3" style="text-align: center; margin-right:25px; margin-left:25px;">
                                <img width="110px" src="{{ asset('sipenmaru/images/logoroblox.jpg') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <center>
                                    <h4 class="form-label" style="margin-top: -0.5rem"><strong class="d-block">KARTU
                                            PESERTA</strong></h4>
                                    <h4 style="margin-top: -0.5rem"> <strong class="d-block">PENERIMAAN PESERTA KURSUS BARU</strong></h4>
                                        <h3 style="margin-top: -0.5rem"><strong class="d-block">PROGRAMMING COURSE ROBLOX</strong></h3>
                                            <p style="margin-top: -0.5rem"><strong class="d-block">Jln. Sariasih IV, No.54, Kota Bandung, Jawa Barat, 40151, Indonesia<br></strong></p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="margin-bottom: -4rem;">
                        <div class="p-4" style="border-top: 2px solid black!important; margin-top:-2.5rem;">
                            <div class="d-flex">
                                <div class="col-lg-4" style="text-align: center; margin-right:25px;">
                                    <img src="{{ asset($viewData->pas_foto) }}" width="250px" height="300" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="row mb-2">
                                        <div class="col-sm-12"><h4><strong>DATA PESERTA</strong></h4><br>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-400">NOMOR PESERTA</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-500">: {{ $viewData->id_pendaftaran }}</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-400">NAMA PESERTA</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-500">: {{ $viewData->nama_siswa }}</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-400">TANGGAL LAHIR</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-500">: {{ $viewData->tanggal_lahir }}</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-400">NISN</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-500">: {{ $viewData->nisn }}</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-400">ASAL SEKOLAH</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <h5 class="f-w-500">: @foreach ($viewSekolah as $z)
                                                @if ($z->id == $viewData->sekolah)
                                                {{ $z->nama_sekolah }}
                                                @endif
                                        @endforeach</h5>
                                        </div>
                                         </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="d-flex">
                                <div class="col-lg-6" style="width: 50%">
                                    <div class="mb-3 mb-4">
                                        <strong>PILIHAN 1</strong><br>
                                        <h5><strong>{{$viewData->pilihan1->nama_kursus}}
                                            </strong></h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="mb-4">
                                <h4><strong>PERNYATAAN</strong></h4>
                                <h5 style="text-indent: 0.5in;text-align: justify;">Saya yang menyatakan bahwa data yang
                                    saya isikan dalam formulir pendaftaran penerimaan peserta kursus baru Programming Course Roblox tahun 2023 adalah benar dan saya bersedia menerima ketentuan yang berlaku. Saya
                                    bersedia menerima sanksi pembatalan apabila melanggar pernyataan ini.</h5>
                            </div>
                            <div class="d-flex">
                                <div class="col-lg-6" style="width:50%; text-align: right; margin:15px;">
                                    <img width="150px" src="{{ asset('sipenmaru/images/qr.png') }}" alt="">
                                </div>
                                <div class="col-lg-6" style="width:50%;">
                                    <br>
                                    <center>
                                        <h5><label class="form-label"><strong
                                                    class="d-block">...............................,2022</strong></label>
                                        </h5>
                                        <br>
                                        <p style="color: rgb(156, 156, 156)">ttd</p>
                                        <br>
                                        <h5><strong class="d-block">{{ $viewData->nama_siswa }}</strong></h5>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <div class="text-end mt-2 mt-sm-0">
                        <button class="btn btn-success waves-effect waves-light me-1" onclick="printDiv('cetak')"><i
                                class="fa fa-print"> </i></button>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->
        </form>
    </div>
    <!-- end row -->
@endsection

@section('footer')
@endsection
