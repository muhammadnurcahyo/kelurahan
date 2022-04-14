@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Blog</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Informasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="card">
                        <div class="card-header" style="padding-top: 40px; text-align: right; margin-right: -30px;">
                            <a href="{{URL::to('admin/slider/add')}}">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Slider
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>url</th>
                                        <th>deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $d)
                                    <tr>
                                        <td style="width: 5px;">
                                        {{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}

                                        </td>
                                        <td>
                                            {{$d->title}}
                                        </td>
                                        <td>
                                            {{$d->url}}
                                        </td>
                                        <td>
                                            {{$d->desc}}
                                        </td>
                                        <td>
                                        <img src="{{ asset('/images/informations/'.$d->img) }}" alt=""
                                                style="width: 100px; height: 100px;">
                                        </td>
                                        <td>
                                        <a href="{{URL::to('/admin/slider/edit').'/'.$d->id}}">
                                                <button class="btn">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </a>
                                            
                                                <form  action="{{URL::to('/admin/slider/delete').'/'.$d->id}}" method="post">
                                                {{@csrf_field()}}
                                                    <button id="btn-delete" class="btn" type="submit">
                                                    <i class=" bi bi-trash"></i>
                                                </button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                            {{ $data ?? ''->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </section>
            </div>

       @endsection