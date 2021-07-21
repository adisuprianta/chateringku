@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.partial.sidebar')
            
    <div class="container-fluid">
        <h1 class="mt-4">Detil Penggajian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/move') }}">Penggajian</a></li>
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
                Detil Penggajian
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col-md-4">
                        <img src="{{ url('images/'.$data->foto) }}" class="rounded mx-auto d-block w-100" alt="...">
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <h5><strong>Nama</strong></h5>
                        <p>{{ $data->name }}</p>
                        <h5><strong>Alamat</strong></h5>
                        <p>{{ $data->address }}</p>
                        <h5><strong>Posisi</strong></h5>
                        <p>{{ $data->position }}</p>
                        <h5><strong>Gaji</strong></h5>
                        <p>{{ $data->salary }}</p>
                    </div> --}}
                    @php
                     $employee = App\Models\Employees::find($data->id_employee)   
                    @endphp
                    <table class="table table-bordered">
                        <tr>
                            <td class="w-25">Nama</td>
                            <td>{{$employee->name}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{$employee->address}}</td>
                        </tr>
                        <tr>
                            <td>Posisi</td>
                            <td>{{$employee->position}}</td>
                        </tr>
                        <tr>
                            <td>Gaji</td>
                            <td>{{$employee->salary}}</td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td>{{ date('M Y', strtotime($data->month)) }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Potongan</td>
                            <td>{{$data->cut}}</td>
                        </tr>
                        @php
                            $total = $employee->salary - ($data->cut * ($employee->salary / 30));
                        @endphp
                        <tr>
                            <td>Total</td>
                            <td>{{$total}}</td>
                        </tr>
                    </table>
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