@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Profil</h3>
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
                                                <label for="roundText">Nama Lengkap</label>
                                                <input name="name" value="{{$data->name}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Nama">
                                                    @if ($errors->has('name'))
                                                        <div class="mt-2 alert alert-danger">{{ $errors->first('name') }}</div>
                                                        @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">Email</label>
                                                <input name="email" value="{{$data->email}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Email">
                                                    @if ($errors->has('email'))
                                                        <div class="mt-2 alert alert-danger">{{ $errors->first('email') }}</div>
                                                        @endif
                                            </div>
                                        </div>

                                    </div>
                                
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">Alamat</label>
                                                <input name="address" value="{{$data->address}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Alamat">
                                                    @if ($errors->has('address'))
                                                    <div class="mt-2 alert alert-danger">{{ $errors->first('address') }}</div>
                                                    @endif    
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">Nomor HP</label>
                                                <input name="phone" value="{{$data->phone}}" type="text" id="roundText" class="form-control round"
                                                    placeholder="Masukan Nomor">
                                                    @if ($errors->has('phone'))
                                                    <div class="mt-2 alert alert-danger">{{ $errors->first('phone') }}</div>
                                                    @endif
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="roundText">Gambar Profil</label> <br><br>
                                            <img src="{{asset('/images/admin/').'/'.$data->img}}" alt=""
                                                style="width: 100px; border-radius: 50%; width: 100px;">
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