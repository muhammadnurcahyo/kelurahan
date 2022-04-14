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
                                                <label for="roundText">Judul</label>
                                                <input name="title" type="text" id="roundText" value="{{$data->title ?? ''}}" class="form-control round"
                                                    placeholder="Masukan Judul">
                                                    @if ($errors->has('title'))
                                                    <div class="mt-2 alert alert-danger">{{ $errors->first('title') }}</div>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-12">   
                                            <div class="form-group">
                                                <label for="roundText">kategori</label>
                                                <input type="text" name="url" placeholder="url" class="form-control" value="{{$data->url ?? ''}}">
                                                @if ($errors->has('url'))
                                                <div class="mt-2 alert alert-danger">{{ $errors->first('url') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        @if(empty($data))
                                        @else
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="roundText">Gambar</label> <br><br>
                                                <img src="{{asset('/images/informations/').'/'.$data->img}}" alt=""
                                                    style="width: 100%;  width: 100%;">
                                            </div>
                                            </div>
                                        </div>                    
                                        @endif
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