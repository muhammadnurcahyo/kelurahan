@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Social Media</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Input Style start -->
                <section id="input-style">
                    <form action="" method="post">
                        {{csrf_field()}}
                        @if(empty($data))
                                    
                                    @else
                                    <input type="hidden" name="_method" value="put">
                                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-3" for="roundText">Nama</label>
                                                
                                                <input name="name" type="text" class="form-control" value="{{$data->name ?? ''}}" placeholder="nama" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-3" for="roundText">URL</label>
                                                <input name="link" type="text" class="form-control" value="{{$data->link ?? ''}}" placeholder="url" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-3" for="roundText">jenis social media</label>
                                                <select class="form-control" name="icon" id="exampleFormControlSelect1">
                                                    @foreach($icon as $ic => $i_val)
                                                    <option value="{{$i_val}}">{!! $ic !!}</option>
                                                    @endforeach

                                                    @if(empty($data))
                                                    @foreach($icon as $k=>$val)
                                                    <option value="{{$val}}">{{$k}}</option>
                                                    @endforeach
                                                    @else
                                                    @foreach($icon as $k=>$val)
                                                    @if($val== $data->icon)
                                                    <option selected value="{{$val}}">{{$k}}</option>
                                                    @else
                                                    <option value="{{$val}}">{{$k}}</option>

                                                    @endif
                                                    @endforeach
                                                    @endif
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                        <button type="submit" class="btn btn-primary">
                                            Tambah
                                        </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </section>
                <!-- Input Style end -->
            </div>

      @endsection