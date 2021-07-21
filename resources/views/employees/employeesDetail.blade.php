@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.partial.sidebar')
            
    <div class="container-fluid">
        <h1 class="mt-4">Detil Pegawai</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/move') }}">Pegawai</a></li>
            <li class="breadcrumb-item active">Detil</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur provident aut fugit non soluta, laudantium hic, earum vel ducimus eaque repellat eum incidunt fuga repellendus aliquam neque? Deleniti, temporibus repellendus.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Detil Pegawai
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ url('images/'.$data->foto) }}" class="rounded mx-auto d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                        <h5><strong>Nama</strong></h5>
                        <p>{{ $data->name }}</p>
                        <h5><strong>Alamat</strong></h5>
                        <p>{{ $data->address }}</p>
                        <h5><strong>Posisi</strong></h5>
                        <p>{{ $data->position }}</p>
                        <h5><strong>Gaji</strong></h5>
                        <p>{{ $data->salary }}</p>
                    </div>
                </div>
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