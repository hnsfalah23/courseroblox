
<!--Buat Peserta-->
<div class="row page-titles" style="border-radius: 0%">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="color: var(--primary)"><a href="dashboard"
                style="color: var(--primary)">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">COURSE</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-xl-7">
        <div class="card transparent-card">
            <div class="bootstrap-carousel">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('sipenmaru/images/bannerroblox2.jpg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('sipenmaru/images/bannerroblox1.jpg') }}"
                                alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="row">
            <div class="card transparent-card">
                <div class="widget-stat card bg-primary" style="border-radius: 0%">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-users"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Total Pendaftar</p>
                                <h3 class="text-white">3280</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                </div>
                                <small>ditahun ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -2.7rem">
            <div class="card transparent-card">
                <div class="widget-stat card bg-warning" style="border-radius: 0%">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Pendaftar Baru</p>
                                <h3 class="text-white">245</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                </div>
                                <small>ditahun ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="row">
    @foreach ($kursus as $x)
        <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
            <div class="card" style="border-radius: 0%;">
                    <div class="new-arrival-product">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="{{ asset($x->foto_kursus) }}" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <a title="Detail"
                                data-bs-toggle="modal" data-bs-target=".detail{{ $x->id }}">{{$x->nama_kursus}}</a>
                                <p>{{$x->jenjang_kursus}}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal fade detail{{ $x->id }}" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Kursus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <p><b>Nama kursus</b></p>
                                <p><b>Program Kursus</b></p>
                                <p><b>Pengajar</b></p>
                                <p><b>Jam</b></p>
                                <p><b>Hari</b></p>
                                <p><b>Biaya Pendaftaran</b></p>
                                <p><b>Contoh Game</b></p>
                            </div>
                            <div class="col-md-7">
                                <p>: {{$x->nama_kursus}}</p>
                                <p>: {{$x->jenjang_kursus}}</p>
                                <p>: {{$x->pengajar}}</p>
                                <p>: {{$x->jam}}</p>
                                <p>: {{$x->hari}}</p>
                                <p>: {{$x->harga_kursus}}</p>
                                <p>: <a href="{{$x->contoh_game}}" target="_blank">Link demo {{$x->nama_kursus}}</a> </p>
                            </div>
                        </div>
                            <div class="modal-footer border-top-0 d-flex">
                                <button type="button" class="btn btn-danger light"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @endforeach
    {{-- <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%;">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/mesin.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Mesin</h4></a>
                            <p>Diploma 3</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/mekatronika.jpeg') }}"
                            alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Mekatronika</h4></a>
                                <p>Diploma 3</p>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/listrik.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Listrik</h4></a>
                            <p>Diploma 3</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/trpl.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block" >
                            <a href="ecom-product-detail.html"><h4  style="color: whitesmoke">Teknologi Rekayasa Perangkat Lunak</h4></a>
                            <p>Umum</p>
                        </div>
                    </div>
                </div>
        </div>
    </div> --}}
</div>

<div class="row">
    <div class="card transparent-card">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="{{ asset('sipenmaru/images/brosurroblox1.jpg') }}" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid" src="{{ asset('sipenmaru/images/brosurroblox2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="{{ asset('sipenmaru/images/brosurroblox2.jpg') }}" alt="" width="50">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="{{ asset('sipenmaru/images/brosur2.jp3g') }}" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h3>Ketentuan Umum</h3>
                                        <div class="custom-tab-1">
                                                        <h4 class="text-primary mb-4">Persyaratan:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">1. Siswa/ Siswi SMP/SMA/SMK/MA/Sederajat</li><br>
                                                            <li class="list-inline-item">2. Mengisi data pendaftaran</li><br>
                                                            <li class="list-inline-item">3. Melampirkan Surat Slip Gaji Orangtua (Optional)</li><br>
                                                            <li class="list-inline-item">4. Melampirkan pas photo 3×4 atau 4×6 (@ 1 lembar)</li><br>
                                                            <li class="list-inline-item">5. Melampirkan fotokopi dokumen Raport, Ijazah <small>(Jika ada), Sertifikat Prestasi <small>(Jika ada)</small> )</li><br>
                                                        </ul>
                                                    </div>
                                                        <h4 class="text-primary mb-4">Biaya Pendaftaran:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">*BANK BNI: 1395011083 a.n Jasmine Mutiara Bintang (Administrator)</li><br>
                                                            <li class="list-inline-item">*BANK BRI: 154901029296 a.n Jasmine Mutiara Bintang (Administrator)</li><br>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="modal fade" id="reviewModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="text-center mb-4">
                                    <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                </div>
                                <div class="mb-3">
                                    <div class="rating-widget mb-4 text-center">
                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars">
                                            <ul id="stars">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button class="btn btn-success btn-block">RATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
