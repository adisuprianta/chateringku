@extends('layouts.admin')
@section('content')

<div class="wrapper">
        <!-- Sidebar  -->
       @include('layouts.partial.sidebar')
       
       <!-- Content here -->
       <h2>Daftar Menu/Produk</h2>
       <br>
       <div class="container-fluid">
            
       <div class="row">
        <div class="col">
            colom kosong
            </div>
            <div class="col-12 col-md-auto">
            colom search
            </div>
            <div class="col col-lg-2">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_pegawai"><i class='fas fa-plus'></i></i>  Add Menu</button>
            </div>
        </div>
        </div>
        
        <!-- modal add_produk begin -->
        <form action="/admin_produk/tambah" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade" id="add_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class='fas fa-plus'></i>  Tambah Menu/Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3">Foto Makanan</div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="foto">Masukkan Foto</label>
                                        <input type="file" name="file" class="form-control-file" id="foto">
                                    </div>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">Nama Menu</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">Harga</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Harga" name="harga">
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">kategori</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Kategori" name="kategori">
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">Deskripsi</div>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="5" id="comment" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <br>
                        
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Batal</button>
                    <button  class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            </div>
        </div>
        </form>
        <!-- modal add_pegawai end -->
        
        <br><br>
        <!-- tabel begin -->
        <div class="container-fluid">
        <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"><center>No.</center></th>
                    <th scope="col"><center>Nama Menu</center></th>
                    <th scope="col"><center>Harga /porsi</center></th>
                    <th scope="col"><center>Gambar Menu</center></th>
                    <th scope="col"><center>Kategori Menu</center></th>
                    <th scope="col"><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                @if($produk)
                @foreach($produk as $p)
                    <tr>
                    <th scope="row">1</th>
                        <td>{{$p->nama_produk}}</td>
                        <td>{{$p->harga}}</td>
                        <td> <img  src="{{ url('/data_file/produk/'.$p['file']) }}" alt="Card image cap" height="100" ></td>
                        <td>{{$p->kategori}}</td>
                        <td><center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ubah_pegawai{{$p->id_produk}}"><i class='fas fa-pencil-alt'></i>  Ubah</button>
                            <a href="/admin_produk/hapus/{{$p->id_produk}}" class="btn btn-warning"><i class="fas fa-times"></i> Hapus</a>
                        </center></td>
                    </tr>
                <!-- modal ubah begin -->
                    <form action="/admin_produk/edit"method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="modal fade" id="ubah_pegawai{{$p->id_produk}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-edit"></i>  Edit Data Karyawan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="text" name="id" value="{{$p->id_produk}}" hidden>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3">Foto Makanan</div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="foto">Masukkan Foto</label>
                                                    <input type="file" name="file" class="form-control-file" id="foto">
                                                </div>
                                            </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Nama Menu</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$p->nama_produk}}">
                                            </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Harga</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Harga" value="{{$p->harga}}" name="harga">
                                            </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">kategori</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Kategori" name="kategori" value="{{$p->kategori}}">
                                            </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Deskripsi</div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5" id="comment" name="deskripsi">{{$p->deskripsi}} </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    
                                
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Batal</button>
                                <button  class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
                    <!-- modal ubah end -->
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
        </div>
        </div>
        <!-- tabel end -->


@endsection
@push('scripts')
    @include('layouts.partial.script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
@endpush