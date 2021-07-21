@extends('layouts.admin')
@section('content')

<div class="wrapper">
        <!-- Sidebar  -->
       @include('layouts.partial.sidebar')
       
       <!-- Content here -->
       <h2>Daftar Pegawai</h2>
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_pegawai"><i class="fas fa-user-plus"></i>  Add Pegawai</button>
            </div>
        </div>
        </div>
        
        <!-- modal add_pegawai begin -->
        <form action="{{ url('/admin_pegawai/tambah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="add_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i>  Tambah Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3">Nama Lengkap</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nama" name="nama">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">No HP</div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="No Hp" name="no_hp">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">Alamat</div>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="5" id="comment" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">Besaran Gaji Pokok</div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="Besaran Gaji Pokok" name="salary">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">Foto Profil</div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="foto">Masukkan Foto</label>
                                    <input type="file" class="form-control-file" id="foto" name="image">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Batal</button>
                    <button  class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            </div>
        </div>
        </form>
        <!-- modal add_pegawai end -->
        <!-- modal ubah begin -->
        
        <!-- modal ubah end -->
        <br><br>
        <!-- profil begin -->
        <div class="container-fluid">
            <div class="card-deck">
            
        <div class="card">
        <div class="card-body">
            <div class="row">
            @if($pegawai)
                @foreach($pegawai as $p)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('/data_file/pegawai/'.$p['foto']) }}" alt="Card image cap" height="">
                            <div class="card-body">
                                <h5 class="card-title">{{$p['nama_pegawai']}}</h5>
                                <p class="card-text">{{$p['bagian']}}</p>
                                <p class="card-text">{{$p['no_hp']}}</p>
                                <p class="card-text">{{$p['alamat']}}</p>
                                <p class="card-text">{{$p['salary']}}</p>
                            </div>
                        <div class="card-footer">
                            <small><center>
                            <button  class="btn btn-info" data-toggle="modal" data-target="#ubah_pegawai"><i class="fas fa-user-edit"></i>  Ubah</button>
                            <a  class="btn btn-warning" href="/admin_pegawai/hapus/{{$p->id_pegawai}}"><i class="fas fa-times"></i> Hapus</a>
                            </center></small>
                        </div>
                    </div>
                </div>
                <form action="/admin_pegawai/edit" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="modal fade" id="ubah_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-edit"></i>  Edit Data Karyawan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="text" name="id_pegawai" value="{{$p->id_pegawai}}" hidden>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3">Nama Lengkap</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Nama" value="{{$p->nama_pegawai}}" name="nama">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">No HP</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="No Hp" name="no_hp" value="{{$p->no_hp}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Alamat</div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5" id="comment" name="alamat" >{{$p->alamat}}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Besaran Gaji Pokok</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Besaran Gaji Pokok" name="salary" value="{{$p->salary}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">Foto Profil</div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="foto">Masukkan Foto</label>
                                                <input type="file" class="form-control-file" id="foto"  name="file">
                                            </div>
                                        </div>
                                    </div>
                                
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
                @endforeach
            @endif
            </div>
            <br><br>
        </div>
        </div>
        </div>
        <!-- profil end -->


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