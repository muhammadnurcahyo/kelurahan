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
                            <a href="{{URL::to('admin/social/add')}}">
                                <button type="submit" class="btn btn-primary">
                                    Tambah social media
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>nama</th>
                                        <th>url</th>
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
                                            {{$d->link}}
                                        </td>
                                        
                                        <td>
                                        <a href="{{URL::to('/admin/social/edit').'/'.$d->id}}">
                                                <button class="btn btn-warning">
                                                    <i class="bi bi-pencil-square"> Edit</i> 
                                                </button>
                                            </a>
                                                
                                                <form class="mt-1"  action="{{URL::to('/admin/social/delete').'/'.$d->id}}" method="post">
                                                {{@csrf_field()}}
                                                    <button class="btn btn-danger" type="submit">
                                                    <i id="btn-delete" class=" bi bi-trash">hapus </i>
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