@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Data Informasi</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Informasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Input Style start -->
                <section id="input-style">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="roundText">Judul</label>
                                                <input type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Judul">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="roundText">Isi Informasi</label>
                                                        <textarea id="dark" cols="30" rows="10"
                                                            placeholder="pesan ada disini"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="roundText">Waktu Posting</label>
                                                        <input type="text" id="datetimepicker"
                                                            class="form-control round" placeholder="Masukan Waktu">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="margin-top: 20px; cursor: pointer;">
                                            <div class="form-group" style="cursor: pointer;">
                                                <label for="roundText">Upload Gambar</label>
                                                <p class="card-text" style="font-size: 13px; font-style: italic;">
                                                    Tambahkan gambar pendukung
                                                </p>
                                                <!-- Auto resize image file uploader -->
                                                <input type="file" class="image-resize-filepond">
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <a href="#">
                                                <button type="submit" class="btn btn-primary" id="background">
                                                    Update
                                                </button>
                                            </a>
                                            <a href="informasi-dashboard.html">
                                                <button type="submit" class="btn btn-secondary">
                                                    Cancel
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Style end -->
            </div>

      @endsection