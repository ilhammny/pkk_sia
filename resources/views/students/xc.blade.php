@extends('layouts.app_modern', ['title' => 'Data Siswa'])

@section('content')
<div class="card">
    <div class="card-header">Daftar Siswa Kelas X C</div>
    <div class="card-body">
        <h3>Data Siswa</h3>
        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <a href="/students/xa_create" class="btn btn-primary btn-sm">Tambah Siswa</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Jenis Kelamin</th>
                    <th>Tgl Lahir</th>
                    <th>Status</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($student->foto)
                                <img src="{{ \Storage::url($student->foto) }}" width="50" />
                            @endif
                            {{ $student->name }}
                        </td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('d-m-Y') }}</td>
                        <td>{{ $student->status }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}/edit" class="btn btn-warning btn-sm ml-2">Edit</a>
                            <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $students->links() !!}  {{-- Untuk pagination jika ada --}}
    </div>
</div>
@endsection
