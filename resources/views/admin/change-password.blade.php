@extends('admin.template.template')
@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Profil</h3>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="roundText">Password Lama</label>
                                                <input name="oldpass" type="password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="roundText">Password Baru</label>
                                                <input name="newpass" type="password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        <button type="submit" class="btn btn-primary">
                                            Ganti
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