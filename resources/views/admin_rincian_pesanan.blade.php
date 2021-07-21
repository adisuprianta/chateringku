@extends('layouts.admin')
@section('content')

<div class="wrapper">
        <!-- Sidebar  -->
       @include('layouts.partial.sidebar')
       
       <!-- Content here -->
       <div class="modal fade" id="inputresi" tabindex="-1" role="dialog" aria-labelledby="inputresi" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editD">No Resi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            
            
            </div>
        </div>
    </div>
                            <center><h4>Rincian Pesanan</h4></center> 
                                    <div id="content-wrapper" class="d-flex flex-column">
                                        <!-- Begin Page Content -->
                                        <div class="container-fluid">
                                            <!-- DataTales Example -->
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Pesanan Diterima</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                        
                                                        </div>     
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="d-flex flex-row-reverse bd-highlight">
                                                                
                                                                <div class="p-2 bd-highlight">
                                                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                                                </div>
                                                                <div class="p-2 bd-highlight">
                                                                    <label>Search:</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>    
                                                </div>
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
                        </div>
                    </div>

            </div>



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