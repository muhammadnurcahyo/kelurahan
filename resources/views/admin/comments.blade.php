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
                            <a href="{{URL::to('admin/blogs/add')}}">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Artikel
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Pesan</th>
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
                                            {{$d->name}}
                                        </td>
                                       
                                        <td>
                                            {{$d->email}}
                                        </td>
                                        <td>
                                        {{date('d-M-Y', strtotime($d->created_at));}}  
                                        </td>
                                        <td>
                                            {{$d->comment}}
                                        </td>
                                        <td>
                                        <form  action="{{URL::to('/admin/blogs/comment/delete').'/'.$d->id}}" method="post">
                                                {{@csrf_field()}}
                                                    <button class="btn btn-danger" type="submit">
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