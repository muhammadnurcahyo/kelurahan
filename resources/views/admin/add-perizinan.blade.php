@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@if(empty($data))
                                        Tambah 
                                        @else
                                        Edit 
                                        @endif
                                        Perizinan</h3>
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
                                    Perizinan</li>
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
                                                <label for="roundText">Name</label>
                                                <input name="name" type="text" id="roundText" value="{{$data->name ?? ''}}" class="form-control round"
                                                    placeholder="Masukan Judul">
                                                    @if ($errors->has('name'))
                                                    <div class="mt-2 alert alert-danger">{{ $errors->first('name') }}</div>
                                                    @endif
            </div>     
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="roundText">deskripsi</label>
                                                        <textarea name="desc"   class="form-control" cols="30" rows="10"
                                                            placeholder="pesan ada disini">{{$data->desc ?? ''}}</textarea>
                                                            @if ($errors->has('desc'))
                                                            <div class="mt-2 alert alert-danger">{{ $errors->first('desc') }}</div>
                                                            @endif    
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
                                                <input name="img" type="file" class="form-control">
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
                                               
                                            
                                            <a href="{{URL::to('admin')}}">
                                                <button type="submit" class="btn btn-secondary">
                                                    Cancel
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
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