@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.partial.sidebar')
            
    <div class="container-fluid">
        <h1 class="mt-4">Penggajian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Penggajian</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur provident aut fugit non soluta, laudantium hic, earum vel ducimus eaque repellat eum incidunt fuga repellendus aliquam neque? Deleniti, temporibus repellendus.
            </div>
        </div>
        <div class="mb-4">
            <a href="{{ url('/salaries/create') }}" class="btn btn-success">Tambah</a>
        </div>
        @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
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
                Data Penggajian
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" style="table-layout: fixed;" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 55px;">No</th>
                                <th>Nama</th>
                                <th>Bulan</th>
                                <th style="width: 175px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{  App\Models\Employees::find($d->id_employee)->name }}</td>
                                <td>{{ date('M Y', strtotime($d->month)) }}</td>
                                <td>
                                    <form method="POST" action="{{ route('salaries.destroy',$d->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        {{-- <a href="{{ route('salaries.edit', $d->id) }}" class="btn btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a> --}}
                                        <a href="{{ route('salaries.show', $d->id) }}" class="btn btn-dark">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <button type="submit"  class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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