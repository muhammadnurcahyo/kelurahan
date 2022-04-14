@extends('guest.template.template')
@section('content')
<section id="mt_blog" class="" style="margin-top: 100px;">
 
        <div class="container ">
            <div class="alur">
                <i class='bx bx-home'>Beranda</i>
                <i class='bx bx-chevron-right'>Sambutan 
                    @if($data->id == 1)
                    Kepala Desa
                    @else
                    Direktur Bumdes
                    @endif
                </i>
            </div>
            <div class="row bg">
                <div class="col-md-9 col-sm-12 width70">
                    <img src="{{asset('/images/admin/').'/'.$data->img}}" alt="" id="brta1">
                    <h2 class="m-0 p-0" style="text-align: center;" id="infjud">{{$data->name}}</h2>
                    <div class="blog_post_se1c">
                    <h5 style="text-align: center;" >
                        @if($data->id == 1)
                        Kepala Desa
                        @else
                        Direktur Bumdes
                        @endif
                    </h5>
                    </div>
                 
                    <div class="blog_post_se1c" style="margin:36px">
                        {!!$data->greeting!!}
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
                                        
                                        @foreach ($latest as $d)
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
                                        @foreach($product as $c)
                                        <li><a href="sampah.html">{{$c->category}}</a></li>
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