@extends('guest.template.template')
@section('content')
<section id="mt_blog" class="" style="margin-top: 100px;">

        <div class="container ">
            <div class="alur">
                <i class='bx bx-home'>Beranda</i>
                <i class='bx bx-chevron-right'>Berita</i>
                <i class='bx bx-chevron-right'>{{$data->title}}</i>
            </div>
            <div class="row shadow border-rounded">
                <div class="col-md-9 col-sm-12 width70">
                    <img src="{{asset('/images/informations/').'/'.$data->img}}" width="100%" alt="" id="brta">
                    <div class="blog_post_se1c">
                         {!! $data->desc !!}
                        <blockquote>

                            <p style="font-style: italic;"><b>Baca juga</b>:</p>
                            @foreach($suggest as $s)
                            <li style="margin-top: -10px; margin-left: 15px;">
                                <a href="{{URL::to('berita/').'/'.$s->id}}" style="font-style: italic;" target="_blank">
                                    {{$s->title}}
                                </a>
                                <br>
                            </li>
                            @endforeach

                            <br><br>
                            <span>Admin bumdes {{$displays->name}}</span>
                        </blockquote>

                    </div>
                    <h2 style="margin-top: 40px;">Diskusi</h2>
                    <hr>
                    <div >
                        @foreach($comments as $com)
                        <div class="diskusi border-top">

                            <div class="nama">
                                <h4>{{$com->name}}</h4>
                            </div>
                            <div>
                                <p style="font-size: 12px; color: darkslateblue;" class="komen">{{date('d-M-Y', strtotime($com->created_at));}}</p>
                            </div>
                            <div class="komen">
                                <p>{{$com->comment}}</p>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <!-- <div class="diskusi1">
                        <form class="komennn">
                            <div class="form-group">
                                 <label for="exampleInputEmail1" style="margin-left: 5px;">Nama</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputPassword1" style="margin-left: 5px;">Komentar</label>
                               <textarea name="" placeholder="Komentar" id="" cols="30" rows="40"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br><br>
                       </form>
                    </div>
                  -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambahkan Komentar
                    </button>
                    <br><br>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Komentar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{URL::to('/comment/').'/'.$data->id}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" style="margin-left: 5px;">Nomor Hp</label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Nomor" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1" style="margin-left: 5px;">Nama</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"
                                                style="margin-left: 5px;">Komentar</label>
                                            <textarea name="comment" placeholder="Komentar" id="" cols="30" rows="40"
                                                required></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" value="kirim" class="btn btn-primary">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3 col-sm-12 width30">
                    <div class="sidebar">

                        <!-- widget category -->
                        <div class="widget widget-category" style="margin-top: 20px;">
                            <!-- widget popular post -->
                            <div class="widget widget-popular-post">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h3 class="white"> Berita Terbaru </h3>
                                    </div>
                                    <div class="widget-popular-post-main">


                                        @foreach ($blogs as $d)
                                            <div class="widget-posts" style="margin-bottom: 12px;">
                                                <div class="post-thumb">
                                                    <img src="{{asset('/images/informations/').'/'.$d->img}}" alt="....."
                                                        style="height:90px; width: 90px;">
                                                </div>
                                                <div class="post-title">
                                                    <h5><a href="{{URL::to('berita').'/'.$d->id}}">{{$d->title}}</a></h5>
                                                    <p style="margin-top: -10px; font-size: 13px;">{{date('d-M-Y', strtotime($d->created_at));}}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="widget-content" style="margin-bottom: 35px;">
                                <div class="widget-title">
                                    <h3 class="white">Kategori Berita</h3>
                                </div>
                                <div class="widget-category-main">
                                    <ul class="widget-category-list">
                                    @foreach($categories as $c)
                                    <li><a href="{{URL::to('/kategori').'/'.$c->slug}}">{{$c->category}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>


                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Unit Usaha BUMDesa</h3>
                                </div>
                                <div class="widget-category-main">
                                    <ul class="widget-category-list">
                                        @foreach($product as $p)
                                        <li><a href="{{URL::to('kategori/').'/'.$p->slug}}">{{$p->category}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
