@extends('layouts.layout')

@section('style')
    <style>
        .note-editor.fullscreen {
            background-color: white
        }

        .note-editable.fullscreen {
            background-color: white
        }

        .button {
            height: 100% !important;
            width: 100% !important;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">

        <br/><br/>
            <section id="akun-user">
                <div class="card">
                    <div class="container">
                        <div class="card-form">
                            <h1 class="heading3 title-form"><strong>Unggah Kajian</strong></h1>
                            <div class="card-body">
                                <h1 class="heading4 mb-3"><strong>Konten Kajian</strong></h1>

                                <p>Anda dapat mengupload file atau mengetikkan konten kajian secara langsung!</p>
                                <div class="form-validation">

                            
                                    <form class="form-validation" action="{{route('kajian.store.editor', $kajian)}}" method="POST"
                                            enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Document Section -->
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-dokumen">File Kajian</label>
                                            <div class="col-lg-8">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="dokumen-input"
                                                            name="val_dokumen" accept=".pdf, .doc, .docx">
                                                        <label class="custom-file-label-dokumen custom-file-label"
                                                            for="dokumen-input">Choose file</label>
                                                    </div>
                                                </div>
                                                <p class="text-upload-foto">Pastikan untuk mengunggah file Anda dalam salah
                                                    satu format:
                                                    PDF, DOC, DOCX.</p>
                                                <div class="drop-area" id="drop-area-dokumen">
                                                    <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                                    Tarik & Lepas File Disini
                                                </div>
                                            </div>
                                        </div>

                                        <hr/>

                                        <textarea class="form-control" id="editor" name="val_konten" 
                                            style="resize: vertical; min-height: 100vh;"></textarea>

                                        <div class="row">
                                            <div class="col mt-5 mb-4">
                                                <a href="{{route('kajian.edit', $kajian)}}" class="button">Batal</a>
                                            </div>
                                            <div class="col mt-5 mb-4">
                                                <button type="submit" class="button btn-green-submit btn-block">Simpan Konten</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                     
        </div>
    </main>
@endsection