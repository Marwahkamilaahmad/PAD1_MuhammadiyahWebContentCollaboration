@extends('layouts.layout')

@section('content')
<main>
    <div class="container-fluid px-5 mt-sm-2 mb-sm-2 justify-content-center">
        <section id="kajian">
            <div class="card justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="content col-md-6 order-md-1 me-5">
                            <div class="row mb-3 ">
                            <div class="col-md-11">
                                <div class="account-detail row align-items-center">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        @if($userkajian->user)
                                            <a href="{{ route('profile.akun_pengguna') }}">
                                                <img class="pp-account" 
                                                    src="{{ asset('storage/' . $userkajian->user->foto_profile) }}" 
                                                    alt="Foto tidak ada" style="border-radius: 50%; width: 50px;">
                                            </a>
                                        @else
                                            <a href="{{ route('profile.akun_pengguna') }}">
                                                <img src="\assets\img\foto_default.png" alt="Foto Profil Default" style="border-radius: 50%; width: 50px;">
                                            </a>
                                        @endif
                                    </div>
                                    @if ($userkajian->user)
                                        <div class="name-account col-md-9 align-items-center" style="display: flex;">
                                            <a style="text-decoration:none; color: #000;" href="{{ route('profile.akun_pengguna') }}">
                                                <div class="nama">{{ $userkajian->user->username }}</div>
                                            </a>
                                        </div>
                                    @else
                                        <div class="name-account col-md-9 mb-5 align-self-center mt-4">
                                            <div class="nama">User tidak ditemukan</div>
                                        </div>
                                    @endif
                                </div>
                                <img src="{{ asset('storage/' . $userkajian->foto_kajian) }}" alt="" class="img-fluid">
                            </div>
                                <div class="desc-kajian col-md-12">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Judul</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->judul_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Pemateri</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->pemateri }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Tanggal</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->tanggal_postingan }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Lokasi</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $userkajian->lokasi_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Deskripsi</strong>
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                        </div>
                                        <p>{!! $userkajian->deskripsi_kajian !!}</p>
                                    </div>

                                    <div class="kategori">
                                        <strong>{{ $userkajian->kategori_kajian }}</strong>
                                    </div>

                                    <div class="mt-4">
                                        <button type="button" class="btn-download-share-kajian btn-block" onclick="window.location.href = '{{ route('kajian.download', $userkajian->id) }}'">
                                            <img src="/assets/img/icon/unduh-kajian.svg" alt="Unduh Icon" class="icon-img"> Unduh File Kajian
                                        </button>
                                        <button type="button" class="btn-download-share-kajian btn-block"
                                            onclick="navigator.clipboard.writeText(window.location.href); alert('URL copied to clipboard.');"
                                            >
                                            <img src="/assets/img/icon/share-kajian.svg" alt="Bagikan Icon" class="icon-img"> Bagikan Tautan Kajian
                                        </button>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-2">
                        <button type="submit" class="btn-green-submit btn-block" onclick="window.location.href = '{{ route('kajian.edit.new_version', $userkajian) }}'">
                            <img src="/assets/img/icon/unggah-baru.svg" alt="Bagikan Icon" class="icon-img"> Unggah Kajian Versi Baru
                        </button>
                            <div class="card mt-4 col-md-12">
                                <div class="bungkus-card">
                                    <div class="card-body-user">
                                        <div class="row mb-4">
                                            <h1 class="heading3 mb-3"><strong>Kajian Versi Baru</strong></h1>
                                            @foreach($userkajian->versions as $version)
                                                <div class="col-md-3">
                                                    <img src="{{ asset('storage/' . $userkajian->user->foto_profile) }}"
                                                        alt="" style="border-radius: 50%; width: 60px; height: 60px;">
                                                </div>
                                                <div class="postingan col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-10 mt-3">
                                                            <p class="username-kajian-baru">{{ $userkajian->user->username }}</p>
                                                        </div>
                                                        <div class="col-md-1 mt-3">
                                                            <a href="{{ route('detailNv', ['id' => $version->id]) }}">
                                                                <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script>
$(document).ready(function() {
    $(".dropdown").on("click", function(event) {
        // Mencegah default behavior dari anchor tag
        event.preventDefault();

        // Menampilkan atau menyembunyikan dropdown
        $(this).find(".dropdown-menu").toggle();
    });
});

document.getElementById('sharesid').addEventListener('click', function() {
    // Buat URL yang ingin Anda bagikan
    var urlToShare = 'https://www.instagram.com/ey_kean/'; // Ganti dengan URL yang sesuai

    // Salin URL ke clipboard
    navigator.clipboard.writeText(urlToShare).then(function() {
        alert('Link telah disalin ke clipboard!');
    }).catch(function(err) {
        console.error('Tidak dapat menyalin teks: ', err);
    });
});

function showDeleteConfirmation() {
    // Implement your delete logic here
    alert("Delete option clicked!");
}
</script>