@extends('admin.template.template')
@section('content')
            <div class="row atass">
                <div class="page-heading" style="margin-top: 30px;">
                    <h3>Dashboard</h3>
                </div>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-lg-10">
                        <div class="row sini">
                            <h2>SELAMAT DATANG ADMIN!</h2>
                        </div>
                    </div>
                    <div class=" col-lg-2 profil">
                        <div class="d-flex align-items-center d-none d-lg-flex ">
                            <div class="dropdown">
                                <a class="  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-xl" style="float: left;">
                                        <img src="{{asset('/images/admin/').'/'.Auth::user()->img}}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name namaa ">
                                        <h5 class="font-bold">{{Auth::user()->name}}</h5>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{asset('admin/edit-profil')}}">Profil</a>
                                    <a class="dropdown-item" href="{{asset('admin/logout')}}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection
