@extends('layouts.app_modern', ['title' => 'Hapus Siswa'])

@section('content')
<div class="card">
    <div class="card-header">Hapus Siswa Kelas X A</div>
    <div class="card-body">
        <h5>Apakah Anda yakin ingin menghapus siswa berikut?</h5>
        <p>Nama: {{ $student->name }}</p>
        <p>NIS: {{ $student->nis }}</p>
        
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ route('students.xa') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
