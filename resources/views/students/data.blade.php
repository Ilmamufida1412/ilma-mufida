@extends('layout.main')

@section('content')
<h4>Data Santri</h4>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
                <i class="fas fa-plus-circle"></i>Tambah Santri Baru
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form method="GET" action="">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label col-form-label-sm ">Cari</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="search" value="{{ $search }}" placeholder="please input key for serach data" autofocus>
                    </div>
                  </div>
            </form>
            <table class="table table-sm table-strip table-bordered" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Induk</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>NO. Telp</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1 +  (($students->currentPage() - 1) * $students -> perPage());
                    @endphp
                    @foreach ($students as $row)
                    <tr>
                        {{-- <th>{{ $loop->iteration }}</th> --}}
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $row->idstudents }}</td>
                        <td>{{ $row->fullname }}</td>
                        <td>{{ ($row->genre=='M') ? 'Male' : 'Female' }}</td>
                        <td>{{ $row->age }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>
                            <button onclick="window.location='{{ url('students/'.$row->idstudents) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form onsubmit="return deleteData('{{ $row->name }}')" method="POST" style="display: inline" action="{{ url('students/'.$row->idstudents) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $students->links() }} --}}
            {!! $students->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    <script>
        function deleteData(name) {
            pesan =confirm('yakin data santri dengan nama ${name} ini akan dihapus?');
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection