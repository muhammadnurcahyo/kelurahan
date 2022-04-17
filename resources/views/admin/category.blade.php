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
                                    <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="card">
                        <div class="card-header" style="padding-top: 40px; text-align: right; margin-right: -30px;">
                            <a href="{{URL::to('/admin/categories/add')}}">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Kategori
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Slug</th>
                                        <th>Jenis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $t)
                                    <tr>
                                        <td style="width: 5px;">
                                        {{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}
                                        </td>
                                        <td>
                                            {{$t->name}}
                                        </td>
                                        <td>
                                            {{$t->slug}}
                                        </td>
                                        <td>
                                            {{$t->kind}}
                                        </td>

                                        <td>
                                            <a href="{{URL::to('/admin/categories/edit/').'/'.$t->id}}">
                                                <button class="btn">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </a>

                                                <form  action="{{URL::to('/admin/categories/delete/').'/'.$t->id}}" method="post">
                                                {{@csrf_field()}}
                                                    <button class="btn" type="submit">
                                                    <i class=" bi bi-trash"></i>
                                                </button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between">
                                <p class="d-none d-sm-inline-block m-0 text-muted ">
                                    Showing {{ ( $data->currentpage()-1)*$data->perpage()+1}} to {{ $data->currentpage()*$data->perpage() }} from {{ $data->total() }}record

                                </p>
                                @if (!empty ($data->links()))
                                    @if (!empty($filter))
                                    <nav class="m-0">
                                        {!! $data->appends($filter)->links() !!}
                                    </nav>
                                    @else
                                    <nav class="m-0">
                                        {!! $data->links() !!}
                                    </nav>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>

                </section>
            </div>

       @endsection
