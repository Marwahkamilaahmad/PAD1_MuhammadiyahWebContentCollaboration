@extends('layouts.layout')
@section('content')
<section id="kajian-hero">
    <div class="container">
        <div id="kajianCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
                                <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
                                <img src="/assets/img/kajiann-1.jpg" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class=" col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
                                <img src="/assets/img/kajiann-3.png" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="control">
                <!-- Controls -->
                <a class="carousel-control-prev" href="#kajianCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#kajianCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="search">
    <div class="row">
        <div class="col-8">
            <div class="search">
                <input type="text" class="search-input" placeholder="search..." name="">
                <a href="#" class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z"
                            fill="#4A5A67" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="btn btn-light unggah-kajian">Unggah Kajian</div>
        </div>
    </div>
</section>

<section id="kajian-home">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Kajian Muhammadiyah</h1>
            </div>
            <div class="col-md-6 text-end" style="font-size: 20px; font-weight: 600;">
                <a href="">Lihat Semua<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                        fill="none">
                        <path d="M14.375 8.75L25.625 20L14.375 31.25" stroke="#04454D" stroke-width="2.8125"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                <div class="card-body">
                    <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                    <button class="btn btn-view">Lihat Selengkapnya</button>
                </div>
            </div>

            <div class="col-md-4">
                <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                <div class="card-body">
                    <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                    <button class="btn btn-view">Lihat Selengkapnya</button>
                </div>
            </div>

            <div class="col-md-4">
                <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                <div class="card-body">
                    <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                    <button class="btn btn-view">Lihat Selengkapnya</button>
                </div>
            </div>
        </div>
</section>

<section id="video-terkini">


</section>

<!-- <section id="poster">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection
