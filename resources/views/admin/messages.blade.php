@extends('admin.template.template')
@section('content')
    <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pesan Masuk</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pesan Masuk</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section" style="margin-top: 50px;">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data  as $key=> $d)
                                
                                    @if ($d->isread=='true')
                                        <tr>
                                    @else
                                        <tr style="background-color:cornflowerblue; color:#fff;">
                                    @endif
                                        
                                        <td style="width: 5px;">
                                        {{ ($data ->currentpage()-1) * $data ->perpage() + $key + 1 }}
                                        </td>
                                        <td>
                                            {{$d->name}}
                                        </td>
                                        <td>
                                            {{$d->email}}
                                        </td>
                                        <td>
                                            {{$d->phone}}
                                        </td>
                                        <td>
                                            
                                            <form action="{{URL::to('/admin/kontak/delete/').'/'.$d->id}}" method="post">
                                                {{@csrf_field()}}
                                                <button type="submit" class="border-0 mb-1 btn btn-danger">
                                                    <i class=" bi bi-trash"></i>
                                                </button>
                                            </form>
                                            <a href="{{URL::to('/admin/kontak/').'/'.$d->id}}">
                                                <button class="border-0 btn btn-warning">
                                                    <i class=" bi bi-eye"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links('pagination::bootstrap-4') }}
                        </div>
                    </div>

                </section>
            </div>

@endsection