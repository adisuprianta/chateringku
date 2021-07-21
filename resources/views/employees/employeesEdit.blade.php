@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.partial.sidebar')
            
    <div class="container-fluid">
        <h1 class="mt-4">Sunting Pegawai</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
            <li class="breadcrumb-item active">Sunting</li>
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
                Form Sunting Pegawai
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('employees.update', $data->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama" value="{{ $data->name }}" name="name" required>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" placeholder="Masukkan Alamat" rows="3" name="address" required>{{ $data->address }}</textarea>
                      </div>
                      <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama" value="{{ $data->position }}" name="position" required>
                      </div>
                      <div class="form-group">
                        <label>Salary</label>
                        <input type="number" class="form-control" placeholder="Besaran Gaji" value="{{ $data->salary }}" name="salary" required>
                      </div>
                      <div class="form-group">
                        <img src="{{ url('images/'.$data->foto) }}" class="rounded d-block w-25 mb-3" alt="..." id="blah">
                        <label>Unggah Foto</label>
                        <input type="file" class="form-control" name="foto" onchange="readURL(this);">
                        <small>Kosongi bila tidak mengupdate foto profil</small>
                      </div>
                    <button type="submit" class="btn btn-warning">Sunting</button>
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