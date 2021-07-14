@extends('layouts.utama')
@section('content')

@include('layouts.partial.navbar')


<!-- rincian modal -->

<!-- rincian modal -->
<!-- rincian bayar -->
<!-- <br>
        <br>
<div class="row">
       
            <div class="col col-lg-2">
                <button type="button" class="btn btn-success" ><i class="fa fa-long-arrow-alt-left"></i>  Back</button>
            </div>
        </div>
        <br>
        <br> -->
    <div class="card">
        <div class="card-body">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Gambar Menu</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $d)
                <tr>
                    <th scope="row">1</th>
                    <td><img src="{{url('/data_file/produk/'.$d->file)}}" alt="" height="80"></td>
                    <td>{{$d->nama_produk}}</td>
                    <td>{{$d->jumlah}}</td>
                    <td>{{$d->harga}}</td>
                    <td>{{$d->kategori}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>


    <br><br><br>
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