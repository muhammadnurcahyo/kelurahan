@extends('admin.template.template')
@section('content')
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pesan Masuk</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pesan Masuk</li>
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
                                                <label for="roundText">Nama Pengirim</label>
                                                <input readonly type="text" id="roundText" class="form-control round"
                                                    value="{{$data->name}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="roundText">Email Pengirim</label>
                                                <input readonly type="text" id="roundText" class="form-control round"
                                                    value="{{$data->email}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="roundText">Phone</label>
                                                <input readonly type="text" id="roundText" class="form-control round"
                                                    value="{{$data->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="roundText">Isi Pesan</label>
                                                        <textarea readonly class="form-control" rows="3"
                                                            >{{$data->message}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <a href="{{URL::to('admin/kontak')}}">
                                                <button type="submit" class="btn btn-primary" id="background">
                                                    Kembali
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

            <footer>
                <div class="footer clearfix mb-0 text-muted" style="margin-top: 160px;">
                    <div class="float-start">
                        <p>2021 &copy; Sitijaya Perizinan</p>
                    </div>
                </div>
       @endsection