@extends('layouts.utama')
@section('content')

@include('layouts.partial.navbar')

        <br>
        <br>
        <br>
        <!-- isi keranjang -->
    <div class="container" >
      <div class="card">
        <div class="card-body">
              <div class="card text-center">
                <div class="card-header">
                  <h4 class="judul">Kode Bank / No Rekening</h4>
                </div>
                <div class="card-block">
                  <br>
                  @foreach($bank as $b)
                  <h3 class="card-text">{{$b->nama_bank}}</h3>
                  <h3 class="card-text">{{$b->no_rekening}}</h3>
                  @endforeach
                  <br><br>
                </div>
                <div class="card-body">
                  
                </div>
              </div>
              <br>
                <form method="post"  action="/pembayaran/upload" enctype="multipart/form-data">
                @csrf
                  <input type="hidden"  name="id_pesanan" value="{{$id_pesan}}">
                  <div class="form-group">
                  
                    <label for="exampleFormControlFile1">Bukti Pembayaran</label>
                    <input type="file" class="form-control-file" name="bukti">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            
        </div>
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
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
@endpush