@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Bumdes</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Input Style start -->
                <section id="input-style">
                    <div class="row">
                        <form action="" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-body">
                                    
                                    <div class="row">
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">Nama Bumdes</label>
                                                <input name="name" value="{{$data->name}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Nama">
                                                    @if ($errors->has('name'))
                                                        <div class="mt-2 alert alert-danger">{{ $errors->first('name') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                @endif
                                                <label for="roundText">Motto Bumdes</label>
                                                <input name="motto" value="{{$data->motto}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan motto bumdes">
                                                    @if ($errors->has('motto'))
                                                        <div class="mt-2 alert alert-danger">{{ $errors->first('motto') }}</div>
                                                        @endif
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="roundText">Logo Bumdes</label><br>
                                            <img class="mt-3" src="{{asset('/images/admin/').'/'.$data->logo}}" alt=""
                                                style="width: 100px; width: 100px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6" style="margin-top: 20px; cursor: pointer;">
                                            <div class="form-group" style="cursor: pointer;">
                                                <label for="roundText">Upload Gambar</label>
                                                <p class="card-text" style="font-size: 13px; font-style: italic;">
                                                    Tambahkan gambar pendukung
                                                </p>
                                                <!-- Auto resize image file uploader -->
                                                <input type="file" name="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            
                                                <button type="submit" class="btn btn-primary" id="background">
                                                    Update
                                                </button>
                                            
                                            <a href="{{URL::to('admin')}}">
                                                <button type="submit" class="btn btn-secondary">
                                                    Cancel
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </section>
                <!-- Input Style end -->
            </div>
@endsection