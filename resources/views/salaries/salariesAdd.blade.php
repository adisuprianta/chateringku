@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.partial.sidebar')
    
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Penggajian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Penggajian</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur provident aut fugit non soluta, laudantium hic, earum vel ducimus eaque repellat eum incidunt fuga repellendus aliquam neque? Deleniti, temporibus repellendus.
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <strong>Perhatian!</strong> {{ $error }}.
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Form Tambah Penggajian
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('salaries.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Pegawai</label>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="dropdown">
                    <div class="selected">Pilih Pegawai</div>
                    <input class="selected-inp" type="hidden" name="idEmployee">
                    <ul class="options">
                        @foreach ($data as $d)
                        <li data-value="{{ $d->id }}">{{ $d->name }}</li>
                        @endforeach 
                    </ul>
                    </div>
                  </div>
                      <div class="form-group">
                        <label>Jumlah Potongan</label>
                        <input type="number" class="form-control" placeholder="Jumlah Potongan" name="cut" required>
                      </div>
                      <div class="form-group">
                        <label>Pilih Tanggal berdasarkan Bulan</label>
                        <input type="date" class="form-control" name="month" required>
                      </div>
                    <button type="submit" class="btn btn-warning">Tambah</button>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>

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