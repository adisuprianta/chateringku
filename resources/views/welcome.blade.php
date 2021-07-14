@extends('layouts.utama')
@section('content')

@include('layouts.partial.navbar')

   
    

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>E-Cateringku</span>
                            <h2>Memudahkan dalam memesan menu makanan untuk acara anda dengan cepat dan efisien</h2>
                        </div>
                        <p>Cateringku melayani anda dalam memesan menu makanan untuk acara anda, seperti pernikahan, prasmanan dan acara-acara lainnya.
                            Pesanan akan diterima apabila ia berada wilayah Surabaya, untuk wilayah lain Surabaya pesanan tidak kami terima karena terkendala jarak yang bisa mempengaruhi rasa dari makanan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Food design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Food Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Food Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="section-title">
                <span>Kategori Menu Makanan yang tersedia</span>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-tumpeng"></span>
                            <h5>Tumpeng</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-034-chocolate-roll"></span>
                            <h5>Prasmanan</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Jajanan</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-030-cupcake-2"></span>
                            <h5>Nikah</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Nasi Kotak</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Paket</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">


            @if($produk)
                @foreach($produk as $p)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <img src="{{url('/data_file/produk/'.$p['file'])}}" alt="">
                        
                        <div class="product__item__text">
                            <h6><a href="#">{{$p->kategori}}</a></h6>
                            <h6><a href="#">{{$p->nama_produk}}</a></h6>
                            <div class="product__item__price">{{$p->harga}}</div>
                            <div class="cart_add">
                                <form action="{{ route('add') }}" method="post">
                                    @csrf
                                    
                                    <input type="hidden" name="product_id" value="{{ $p->id_produk }}" class="form-control">
                                    <button class="btn btn-primary" ><i class="icon-basket"></i>Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
        </div>
    </section>
    <!-- Product Section End -->


    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Mudah cepat dan enak</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @sudimoro</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="{{asset('assets/img/instagram/instagram-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="{{asset('assets/img/instagram/instagram-2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="{{asset('assets/img/instagram/instagram-3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="{{asset('assets/img/instagram/instagram-4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="{{asset('assets/img/instagram/instagram-5.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="{{asset('assets/img/instagram/instagram-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>Surabaya</h6>
                        <ul>
                            <li>Bungkal Sudimoro Surabaya, INA</li>
                            <li>Sudimoro@support.com</li>
                            <li>932472384932</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe src="https://www.bing.com/maps?&ty=18&q=Surabaya%2C%20East%20Java%2C%20Indonesia&satid=id.sid%3A39447d74-ad88-b8fe-9c7b-b46d0c188f4d&vdpid=8687731978931273729&mb=-7.19267~112.583397~-7.3758~112.82048&ppois=-7.284235000610352_112.70193862915039_Surabaya%2C%20East%20Java%2C%20Indonesia_~&cp=-7.284235~112.701939&v=2&sV=1&FORM=MIRE&qpvt=surabaya" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>JAM KERJA</h6>
                        <ul>
                            <li>Senin - Jum'at : 08:00 am – 17:00 pm</li>
                            <li>Saturday : 10:00 am – 15:00 pm</li>
                            <li>Sunday : Off Work</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{asset('assets/img/logo catering footer.png')}}" height="120px" width="150px" alt=""></a>
                        </div>
                        <p>Mudah, cepat, dan enak</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Contact</h6>
                        <h6>Whatshapp</h6><p>08222737377</p>
                        <h6>Instagram</h6><p>@Sudimoro</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                            By Sudimoro Group
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Cara Memesan Menu</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
@endsection
@push('scripts')
    @include('layouts.partial.script')
@endpush
