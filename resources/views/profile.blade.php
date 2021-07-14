@extends('layouts.utama')
@section('content')

@include('layouts.partial.navbar')


<!-- rincian modal -->

<!-- rincian modal -->
<!-- rincian bayar -->
<div class="modal fade" id="bayar" tabindex="-1" role="dialog" aria-labelledby="bayar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Pesanan akan diterima apabila anda mengupload bukti pembayaran, Apabila sudah upload maka status pesanan akan berubah
              menjadi lunas.
          </p>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Upload</button>
      </div>
    </div>
  </div>
</div>
<!-- rincian bayar -->
<!-- rincian batal -->
<div class="modal fade" id="batal" tabindex="-1" role="dialog" aria-labelledby="batal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batal">Batalkan Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin <b>Membatalkan Pesanan tersebut?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-success">Iya</button>
            </div>
            </div>
        </div>
        </div>
<!-- rincian batal -->

<br><br>
<div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#diproses" role="tab" aria-controls="diproses" aria-selected="true">Pesanan Diproses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#diterima" role="tab" aria-controls="diterima" aria-selected="false">Pesanan Diterima</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dibatalkan" role="tab" aria-controls="dibatalkan" aria-selected="false">Pesanan Dibatalkan</a>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Total</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Tanggal Kirim</th>
                                <th scope="col">Status Pesanan</th>
                                <th scope="col">Rincian Pesanan</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @if($data)
                                @foreach($data as $d)
                                    @if($d->status == 'belum bayar')
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>{{$total}}</td>
                                        <td>{{$d->tanggal_pesanan}}</td>
                                        @if($d->tanggal_pengiriman ==null)
                                        <td>-</td>
                                        @else
                                        <td>{{$d->tanggal_pengiriman}}</td>
                                        @endif
                                        <td>{{$d->status}}</td>
                                        <td>
                                       
                                    <a href="{{url('/profile/rincian').'/'.$d->id_pesanan}}" class="btn btn-info" >
                                        Rincian Menu </a>

                                    <!-- <div class="modal fade bd-example-modal-lg" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="terima">Rincian Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Gambar Menu</th>
                                                            <th scope="col">Nama Menu</th>
                                                            <th scope="col">Harga</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Kategori</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                            <td>Otto</td>
                                                            <td>Mark</td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div> -->

                                        </td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bayar">
                                        Bayar Pesanan
                                    </button></td>
                                        
                                        </tr>
                                        
                                    </tbody>
                                    @endif
                                @endforeach
                            @endif 
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="diterima" role="tabpanel" aria-labelledby="diterima-tab">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Total</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Tanggal Kirim</th>
                                <th scope="col">Status Pesanan</th>
                                <th scope="col">Rincian Pesanan</th>
                                </tr>
                            </thead>
                            @if($data)
                                @foreach($data as $d)
                                    @if($d->status == 'sudah bayar')
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>{{$total}}</td>
                                        <td>{{$d->tanggal_pesanan}}</td>
                                        @if($d->tanggal_pengiriman ==null)
                                        <td>-</td>
                                        @else
                                        <td>{{$d->tanggal_pengiriman}}</td>
                                        @endif
                                        <td>{{$d->status}}</td>
                                        <td>
                                       
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#lihat">
                                        Rincian Menu
                                    </button>

                                    <!-- <div class="modal fade bd-example-modal-lg" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="terima">Rincian Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Gambar Menu</th>
                                                            <th scope="col">Nama Menu</th>
                                                            <th scope="col">Harga</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Kategori</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                            <td>Otto</td>
                                                            <td>Mark</td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div> -->

                                        </td>
                                        
                                        </tr>
                                        
                                    </tbody>
                                    @endif
                                @endforeach
                            @endif 
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="dibatalkan" role="tabpanel" aria-labelledby="dibatalkan-tab">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Total</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Tanggal Kirim</th>
                                <th scope="col">Status Pesanan</th>
                                <th scope="col">Rincian Pesanan</th>
                                </tr>
                            </thead>
                            @if($data)
                                @foreach($data as $d)
                                    @if($d->status == 'batal')
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>{{$total}}</td>
                                        <td>{{$d->tanggal_pesanan}}</td>
                                        @if($d->tanggal_pengiriman ==null)
                                        <td>-</td>
                                        @else
                                        <td>{{$d->tanggal_pengiriman}}</td>
                                        @endif
                                        <td>{{$d->status}}</td>
                                        <td>
                                       
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#lihat">
                                        Rincian Menu
                                    </button>

                                    <!-- <div class="modal fade bd-example-modal-lg" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="terima">Rincian Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Gambar Menu</th>
                                                            <th scope="col">Nama Menu</th>
                                                            <th scope="col">Harga</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Kategori</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                            <td>Otto</td>
                                                            <td>Mark</td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div> -->

                                        </td>
                                        
                                        </tr>
                                        
                                    </tbody>
                                    @endif
                                @endforeach
                            @endif 
                        </table>
                    </div>
                </div>
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
@endpush