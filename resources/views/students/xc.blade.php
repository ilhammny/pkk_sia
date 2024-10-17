@extends('layouts.app')

@section('content')
<h1>Daftar Siswa Kelas X C</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @if($students->isEmpty())
            <tr>
                <td colspan="5">Tidak ada siswa di kelas ini.</td>
            </tr>
        @else
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->status }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<a href="{{ route('students.index') }}">Kembali ke Daftar Siswa</a>
@endsection
