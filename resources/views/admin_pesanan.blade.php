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
    <center><h4>Pesanan </h4></center> 
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pesanan</h6>
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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Pesanan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Total</th>
                                            <th>Alamat</th>
                                            <th>Kode Pos</th>
                                            <th>Tanggal Pesanan</th>
                                            <th>Status</th>
                                            <th>Rincian Produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    @foreach($data as $p)
                                        <tr>
                                            <td>{{$p->id_pesanan}}</td>
                                            <td>{{$p->nama_pelanggan}}</td>
                                            <td><img src="{{url('/data_file/bayar/'.$p->file_pembayaran)}}" alt="" height="80"></td>
                                            <td>{{$p->total}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->kode_pos}}</td>
                                            <td>{{$p->tanggal_pesanan}}</td>
                                            <td>{{$p->status}}</td>
                                            <td><a href="{{url('/admin/rincian').'/'.$p->id_pesanan}}" class="btn btn-info" >
                                        Rincian Menu </a></td>
                                            <td>
                                            <div class="d-flex flex-row">
                                                @if($p->status == 'sudah bayar' ||$p->status == 'batal'  )
                                                    <div class="p-1"><button class="btn btn-info " disabled aria-hidden="true" > Sudah Bayar</button></div>
                                                    
                                                    <div class="p-1"><button class="btn btn-danger"  aria-hidden="true" disabled> Batal</button></div>
                                                @else
                                                <div class="p-1"><a class="btn btn-info "  aria-hidden="true" href="/admin/bayar/{{$p->id_pesanan}}"> Sudah Bayar</a></div>
                                                    
                                                    <div class="p-1"><a class="btn btn-danger"  aria-hidden="true" href="/admin/batal/{{$p->id_pesanan}}"> Batal</a></div>
                                                @endif
                                                </div> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
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