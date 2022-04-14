@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Informasi</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        @if(empty($data))
                                        Tambah 
                                        @else
                                        Edit 
                                        @endif  
                                        Informasi</li>
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
                                <form action="" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    @if(empty($data))
                                    
                                    @else
                                    <input type="hidden" name="_method" value="put">
                                    @endif                 
                                    <div class="row">
                                        <div class="col-sm-12">   
                                            <div class="form-group">
                                                <label for="roundText">Nama Lurah</label>
                                                <input name="name" type="text" id="roundText" value="{{$data->name ?? ''}}" class="form-control round"
                                                    placeholder="Masukan Judul">
                                                    @if ($errors->has('name'))
                                                    <div class="mt-2 alert alert-danger">{{ $errors->first('name') }}</div>
                                                    @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="roundText">Isi Informasi</label>
                                                        <textarea id="dark" cols="30" rows="10" name="greeting">{{$data->greeting ?? ''}}</textarea>
                                                        @if ($errors->has('greeting'))
                                                        <div class="mt-2 alert alert-danger">{{ $errors->first('greeting') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="roundText">Gambar</label> <br><br>
                                                <img src="{{asset('/images/admin/').'/'.$data->img}}" alt=""
                                                    style="width: 100px; border-radius: 50%; width: 100px;">
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="margin-top: 20px; cursor: pointer;">
                                            <div class="form-group" style="cursor: pointer;">
                                                <label for="roundText">Upload Gambar</label>
                                                <p class="card-text" style="font-size: 13px; font-style: italic;">
                                                    Tambahkan gambar pendukung
                                                </p>
                                                <!-- Auto resize image file uploader -->
                                                <input type="file" name="img" class="form-control">
                                                @if ($errors->has('img'))
                                                <div class="mt-2 alert alert-danger">{{ $errors->first('img') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            
                                                <button type="submit" class="btn btn-primary">
                                                    @if(empty($data))
                                                    Tambah
                                                    @else
                                                    Edit
                                                    @endif
                                                </button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Style end -->
            </div>

       @endsection