@extends('guest.template.template')
@section('content')

    <section id="mt_blog" class="" style="margin-top: 100px;">
        <div class="container ">
            <div class="alur">
                <i class='bx bx-home'>Beranda</i>
                <i class='bx bx-chevron-right'>Berita Terbaru</i>
            </div>
            <div class="row bg">
                <div class="col-md-9 col-sm-12 width70">
                    <h2 style="text-align: center; margin-top: 10px;"><a href="#" style="color: white;">BERITA</a>
                        <br><br>
                        <h2 class="	d-none d-lg-flex oke"><a href="#">BERITA TERBARU</a> <br><br>
                            <div class="blog_post_sec">

                            @forelse($data as $b)
                                <div class="blog-post_wrapper">
                                    <div class="blog-post-image">
                                        <img src="{{asset('/images/informations/').'/'.$b->img}}" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                    <div class="post-content" style="text-align: left;">
                                        <h2 class="entry-title">
                                            <a href="{{URL::to('berita').'/'.$b->id}}" class="judul">{{$b->title}}</a>
                                        </h2>
    
                                        <div class="post-date" style="margin-top: -10px;">
                                            <p><a href="#" style="color: rgb(141, 108, 108); font-size: 13px;">{{date('d-M-Y', strtotime($b->created_at));}}</a></p>
                                        </div>
    
                                        <div class="desc">
                                            <p style="text-align: justify;">{{Str::limit(strip_tags($b->desc),90,$end='...')}}</p>
    
                                        </div>
                                        <small>
                                            <div class="mouse">
                                            <a href="{{URL::to('kategori').'/'.$b->slug}}">{{$b->category}}</a>
                                            </div>
                                        </small>
                                    </div>
                                </div>
                                @empty
                                <p>Artikel yang anda inginkan tidak tersedia</p>
                                @endforelse

                                
                               
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
    </section>
    @endsection