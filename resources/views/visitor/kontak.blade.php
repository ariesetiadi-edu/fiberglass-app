@extends('visitor.layout.template')

@section('content')
    <div class="page-title position-relative clearfix bg-primary">
        {{-- <img src="{{ asset('assets-2/images/gallery/01.png') }}" alt="Banner"> --}}
        <div class="section-overlay"></div>
        <div class="container">
            <div class="breadcrumbs position-relative">
                <div class="breadcrumbs-wrap">
                    <h1 class="title">Kontak</h1>
                </div>
            </div>
        </div>
    </div><!-- page-title -->
    <div class="contact flat-row-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="get-in-touch get-in-touch-type1">
                        <div class="text-contact">Jangan ragu untuk <a>menghubungi kami untuk informasi
                                apapun.</a></div>
                        <div class="my-5">
                            <p class="text-dark">
                                <strong>Segera Hadir</strong> cabang kami di Semarang
                            </p>
                            <p class="text-dark"><strong>Our Factory</strong> : Tegal Alur, Tangerang</p>
                            <p class="text-dark"><strong>Office</strong> : Jakarta Pusat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <form id="contactform" action="./contact/contact-process.php" method="post"
                        class="form-leave-comment form-submit">
                        <div class="text-wrap d-md-flex clearfix">
                            <div class="w-left position-relative">
                                <input type="text" name="firstname" id="firstname" value="" class="firstname"
                                    placeholder="Nama">
                                <span class="icon-user"></span>
                            </div>
                            <div class="w-right position-relative">
                                <input type="text" name="email" id="email" value="" class="email"
                                    placeholder="Email">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="message-wrap mg-b50" style="height: 150px">
                            <textarea name="message" id="comment-message" rows="6" placeholder="Isi pesan"
                                required="required" style="height: 150px"></textarea>
                        </div>
                        <div class="flat-send-message btn-linear hv-linear-gradient text-center">
                            <button name="submit" type="submit"
                                class="submit btn-block font-style linear-color border-corner" id="submit">Kirim
                                Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <h1 class="text-center h3 text-dark my-5">Social Media</h1>
        <div class="row">
            @foreach ($socials as $social)
                @if ($social->type == 'phone' || $social->type == 'email')
                    <div class="col-lg-3 mb-5">
                        <center>
                            <a>
                                <img width="50px" src="{{ asset('assets/images/icons/') . '/' . $social->type . '.png' }}"
                                    alt="{{ $social->type }}">
                                <small class="text-center d-block mt-2">{{ $social->url }}</small>
                            </a>
                        </center>
                    </div>
                @else
                    <div class="col-lg-3 mb-5">
                        <center>
                            <a target="_blank" href="{{ $social->url }}">
                                <img width="50px" src="{{ asset('assets/images/icons/') . '/' . $social->type . '.png' }}"
                                    alt="{{ $social->type }}">
                                <small class="text-center d-block mt-2">{{ $social->name }}</small>
                            </a>
                        </center>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <hr>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div>
                    <h1 class="text-center text-dark h3">Our Location</h1>
                    <div class="mapouter my-5">
                        <div class="gmap_canvas"><iframe width="1000px" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Tegal%20Alur,%20Tangerang&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi
                                discount</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 1000px;
                                }

                            </style><a href="https://www.embedgooglemap.net">using google maps on websites</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 1000px;
                                }

                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
