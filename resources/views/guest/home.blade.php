@extends('guest.template.template')
@section('content')

      <!-- Slider -->
      <section id="mt_banner">
        <div class="swiper-container" style="height: 589px;">
            <div class="swiper-wrapper">


                @foreach($sliders as $slide)
                <div class="swiper-slide">
                    <div class="slide-inner"

                        {{"style="."background-image:url(images/informations/".$slide->img.");"."cursor:pointer;width:100%;height:100%;"}}>
                        <div data-aos="fade-up" data-aos-duration="3000" data-aos-delay="200ms">
                            <a href="{{$slide->url}}">
                            <h5 class="judul_jmbtrn"
                               >
                                {{$slide->title}} </h5>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="swiper-button-next swiper-button-white" style="color: white;"></div>
        <div class="swiper-button-prev swiper-button-white" style="color: white;"></div>
        </div>
    </section>
    <!-- End Slider -->

    <!--* Blog*-->
    <section id="mt_blog" class="" style="margin-top: 100px;">
        <div class="container ">
            <div class="row bg">
                <div class="col-md-9 col-sm-12 width70 ">
                    <h2 style="text-align: center; margin-top: 10px;"><a href="#" style="color: white;">BERITA</a>
                        <br><br>
                        <h2 class="	d-none d-lg-flex oke"><a href="#">BERITA TERBARU</a> <br><br>
                            <div class="blog_post_sec">

                                @foreach($blogs as $b)
                                <div class="blog-post_wrapper">
                                    <div class="blog-post-image">
                                        <img src="{{asset('/images/informations/').'/'.$b->img}}" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                    <div class="post-content" style="text-align: left;">
                                        <h2 class="entry-title">
                                            <a href="{{URL::to('berita').'/'.$b->titleslug}}" class="judul">{{$b->title}}</a>
                                        </h2>

                                        <div class="post-date" style="margin-top: -10px;">
                                            <p><a href="#" style="color: rgb(141, 108, 108); font-size: 13px;">{{date('d-M-Y', strtotime($b->created_at));}}</a></p>
                                        </div>

                                        <div class="desc">
                                            <p style="text-align: justify;">{{Str::limit(strip_tags($b->desc),90,$end='...')}}</p>

                                        </div>
                                        <small>
                                            <div class="mouse">
                                                Kategori: <a href="{{URL::to('kategori').'/'.$b->slug}}">{{$b->category}}</a>
                                            </div>
                                        </small>
                                    </div>
                                </div>
                                @endforeach
                                <a href="{{URL::to('berita')}}">
                                    <button class="btn btn-primary lengkap" style="margin-bottom: 50px;"> Lihat
                                        Semua</button>
                                </a>
                            </div>

                </div>

                <div class="col-md-3 col-sm-12 width30">
                    <div class="sidebar">
                        <!-- widget author -->

                        @foreach($greet as $g)
                        <div class="widget widget-author text-center" style="margin-top: 45px;">
                            <div class="widget-image">
                                <img src="{{asset('/images/admin/').'/'.$g->img}}" alt="...">
                            </div>
                            <div class="widget-author-content">
                                <div class="widget-author mar-bottom-15">
                                    <h3 class="mar-bottom-5">{{$g->name}}</h3>
                                    <span class="author-profession">{{$g->position}}</span>
                                </div>

                                    {{Str::limit(strip_tags($g->greeting),90,$end='...')}}

                                <div class="follow_us mar-bottom-15" style="text-align: left;">
                                    <a href="{{URL::to('/greeting/').'/'.$g->slug}}">
                                        <p style="text-align:center" class="sambut">Selengkapnya</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <!-- widget category -->
                        <div class="widget widget-category" style="margin-top: -40px;">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Kategori</h3>
                                </div>
                                <div class="widget-category-main">
                                    <ul class="widget-category-list">
                                    @foreach($categories as $c)
                                    <li><a href="{{URL::to('kategori').'/'.$c->slug}}">{{$c->category}}</a></li>
                                    @endforeach
                                </ul>
                                </div>
                            </div>

                            <!-- widget popular post -->
                            <div class="widget widget-popular-post">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h3 class="white">Lokasi Kantor Bumdes </h3>
                                    </div>
                                    <div class="widget-popular-post-main" style="margin-top: 10px;">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7361898966369!2d110.28979828525668!3d-7.766459441947964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af7f601ea3599%3A0xb094c21a174b8d91!2sBUMDES%20Sidoluhur%2C%20Kecamatan%20Godean!5e0!3m2!1sen!2sid!4v1630469887295!5m2!1sen!2sid"
                                            width="400" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--* End Blog*-->

@endsection
