@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Kategori</h3>
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
                                                <label class="mb-3" for="roundText">Kategori</label>
                                                <input name="category_id" type="text" class="form-control" value="{{$data->category_id ?? ''}}" placeholder="kategori" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-3" for="roundText">Jenis</label>
                                                <select class="form-control" name="kind" id="exampleFormControlSelect1">
                                                    @if(empty($data))
                                                    @foreach($kind as $k)
                                                    <option value="{{$k}}">{{$k}}</option>
                                                    @endforeach
                                                    @else
                                                    @foreach($kind as $k)
                                                    @if($k== $data->kind)
                                                    <option selected value="{{$k}}">{{$k}}</option>
                                                    @else
                                                    <option value="{{$k}}">{{$k}}</option>

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
