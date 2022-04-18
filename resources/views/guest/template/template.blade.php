<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Website Resmi Berita Terbaru Bumdes Luhur Sembada Hari Ini</title>
    <meta name="description" content="Berita Terbaru Bumdes Luhur Sembada Hari Ini, Informasi Terbaru Tentang Bumdes Luhur Sembada Terkini. Baca Selengkapnya Disini">
    <meta name="keywords" content="Berita Terbaru Bumdes Luhur Sembada Hari Ini, Berita Terbaru Bumdes Sidoluhur Hari ini, Berita Terkini Di Bumdes Luhur Sembada, Informasi Terupdate Bumdes Luhur Sembada, Informasi Terkini Tentang Bumdes Luhur Sembada">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/admin/').'/'.$displays->logo}}"> --}}

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('style/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/77d256aa17.js" crossorigin="anonymous"></script>
    <!--Default CSS-->
    <link href="{{URL::asset('style/default.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/toastify/toastify.css')}}">

    <!--Custom CSS-->
    <link href="{{URL::asset('style/style.css')}}" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{URL::asset('style/plugin.css')}}" rel="stylesheet" type="text/css">

    <link href="{{URL::asset('style/animate.css')}}" rel="stylesheet" type="text/css">

    <link href="{{URL::asset('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>

    <!--Font Icons-->
    <link href="{{URL::asset('/style/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <link href="{{URL::asset('pict/css/fakeLoader.css')}}" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6178fa3351e92e0012f89af0&product=inline-share-buttons' async='async'></script>
</head>


<body class="home-1">
    <div class="fakeLoader"></div>

    <!--*Header*-->
    <header id="inner-navigation" class=" navbar-fixed-top ">
        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-arrow" id="navbar">
            <div class="container">
                <div class="logo pull-left">
                    <!-- <h1><a href="index.html"><img src="images/logo.png"></a></h1> -->
                    {{-- <img id="gmbr" src="{{asset('/images/admin/').'/'.$displays->logo}}" alt=""
                        style="float: left; margin-right: 5px; cursor: pointer;">
                    <span class="deskjudul">BUMDesa<br>{{$displays->name}}</span> --}}
                </div>

                <div id="navbar" class="navbar-nav-wrapper text-center d-none d-lg-flex ">
                    <form action="{{URL::to('/search')}}" action="post" class="form-inline navbar-right d-none d-lg-flex carii ">
                        <p class="waktu"><span id="tanggalwaktu" class="d-none d-lg-flex "></span></p>
                        <input type="text" name="key" class="form-control" placeholder="Cari Informasi"
                            style="border-radius: 15px; margin-top: -10px;">
                        <button style="margin-top: -23px; margin-left: 5px;" type="submit" class="btn btn-primary"
                            id="tombol"><i class='bx bx-search-alt-2'></i></span></button>
                    </form>
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class=" menu-atas"><a href="{{URL::to('/home')}}">Beranda</a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle prof" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil BUMDesa <i class='bx bxs-chevron-down'></i>
                            </a>
                            <div class=""  aria-labelledby="navbarDropdown">
                                <ul>
                                @foreach($abouts as $a)
                                <li>
                                <a class="dropdown-item " id="menuturun" href="{{URL::to('about').'/'.$a->slug}}">{{$a->name}}</a>
                                </li>
                                @endforeach
                                <li>
                                    <a class="dropdown-item " id="menuturun" href="/kategori/unit-usaha-perdagangan">Produk BUMDesa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{URL::to('berita')}}">Berita </a></li>
                        <li><a href="{{URL::to('kontak')}}">Kontak</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>

            <div id="slicknav-mobile" style="color: wheat;"></div>
        </nav>
        <!-- navbar end -->
    </header>

    @yield('content')

        <!--*Footer*-->
        <footer id="mt_footer" class="mt_footer_style1">
        <div class="container">
            <div class="mt_footer_col" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="mt_footer_about">
                            <h2 style="color: white;">{{$displays->name}}</h2>
                            <p style="color: white; font-size:14px; text-align:justify;">
                            {{$displays->motto}}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="mt_footer_list">
                            <h3 style="color: white;">Akses Cepat</h3>
                            <ul class="footer-quick-links-2">
                                <li><a href="{{URL::to('/home')}}"><i class="fa fa-angle-right"></i>
                                        Beranda</a></li> <br>
                                <li><a href="{{URL::to('/berita')}}"><i class="fa fa-angle-right"></i>
                                        Berita</a></li> <br>
                                <li><a href="{{URL::to('/kontak')}}"><i class="fa fa-angle-right"></i>
                                        Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="mt_footer_newsletter">
                            <h3 style="color: white;">Hubungi Kami</h3>
                            <div class="mailpoet_form" style="margin-top: -10px;">
                                @foreach($socials as $sos)

                                <a class="page-scroll" href="{{$sos->link}}" target="_blank">
                                <i class="{{$sos->icon}} "></i> {{$sos->name}}</a><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="okk">
                        <div class="copyright">
                            <hr class="bwh">
                            <p style="text-align: center; color: white; margin-bottom: -30px;">&copy; Copyright All
                                Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--* End Footer*-->

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title=""
        data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>



    <!--*Scripts*-->
    <!-- Latest jquery -->
    <script src="{{URL::asset('javascript/jquery-3.2.1.min.js')}}"></script>
    <!-- Plugin Jquery -->
    <script src="{{URL::asset('javascript/plugin.js')}}"></script>
    <!-- custom nav jquery -->
    <script src="{{URL::asset('javascript/custom-nav.js')}}"></script>
    <!-- main default Jquery -->
    <script src="{{URL::asset('javascript/main.js')}}"></script>

    <script src="{{URL::asset('jquery.easing/jquery.easing.min.js')}}"></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <script src="{{URL::asset('pict/js/fakeLoader.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/toastify/toastify.js')}}"></script>

    <script>
        $(document).ready(function () {
            $.fakeLoader({
                bgColor: '#2ecc71',
                spinner: "spinner1"
            });
        });
        AOS.init();

        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a = tw.getTime() + (7 * 60 * 60 * 1000))
        else (a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" W.I.B ");

    </script>
    <script>

    var msg = '{{Session::get('success')}}';
    var err = '{{Session::get('failed')}}';

    var success = '{{Session::has('success')}}';
    var alert = '{{Session::has('failed')}}';



             if(success){
                 Toastify({
                             text: msg,
                             duration: 3000,
                             backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                         }).showToast();
             }

             if(alert){
                 Toastify({
                             text: err,
                             duration: 3000,
                             backgroundColor: "#ff0000",
                         }).showToast();
             }

                 </script>
</body>

</html>
