@extends('guest.template.template')
@section('content')
    <section class="breadcrumb-outer text-center ">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 id="hubkam"><a href="#" style="color: white;">HUBUNGI KAMI</a>
                    <h2 class="	d-none d-lg-flex oke"><a href="#">HUBUNGI KAMI</a>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>

                        <form method="post" name="contactform" >
                            <input type="hidden" name="isread" value="false">
                        {{csrf_field()}}    
                            <div class="row">
                                <div class="form-group col-xs-6">
                                    <label>Nama lengkap:</label>
                                    <input type="text" name="name" class="form-control" id="Name"
                                        placeholder="Masukan nama lengkap" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="contoh@gmail.com" required>
                                </div>
                                <div class="form-group col-xs-12 col-left-padding">
                                    <label>Nomor HP</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber"
                                        placeholder="0812345678910" required>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Pesan:</label>
                                    <textarea name="message" placeholder="masukan pesan minimal 10 huruf" required></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <input type="submit" class="btn-blog" id="submit" value="Kirim">
                                    </div>
                                </div>
                            </div>
                            <!-- <input type="submit" value="submit"> -->
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-about footer-margin">
                        <div class="logo pull-left">
                            <!-- <h1><a href="index.html"><img src="images/logo.png"></a></h1> -->
                            <img id="gmbr" src="{{asset('/images/admin/').'/'.$displays->logo}}" alt=""
                                style="float: left; margin-right: 5px; cursor: pointer;">
                            <span class="deskjudul">Bumdes <br> {{$displays->name}}</span>
                        </div>
                        <br>
                        <p class="p-3" style=" font-weight: bold;">“{{$displays->motto}}”</p>
                        <div class="contact-location">
                            <ul>
                                @foreach($socials as $sos)
                                
                                <a class="" href="{{$sos->link}}" target="_blank">
                                <i class="{{$sos->icon}} "></i> {{$sos->name}}</a><br>
                                @endforeach
                                
                                <li><i class="fas fa-map-marker" aria-hidden="true"></i> Komplek balai Kalurahan
                                    Sidoluhur (Ngabangan V, Sidoluhur, Godean, Sleman, D.I.Yogyakarta)</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7361898966369!2d110.28979828525668!3d-7.766459441947964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af7f601ea3599%3A0xb094c21a174b8d91!2sBUMDES%20Sidoluhur%2C%20Kecamatan%20Godean!5e0!3m2!1sen!2sid!4v1630469887295!5m2!1sen!2sid"
                    id="meps" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection


