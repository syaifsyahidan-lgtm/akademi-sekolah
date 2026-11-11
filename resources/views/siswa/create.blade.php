@extends('layouts.app')

@section('content')
<div class="glass-card" style="max-width: 650px; margin: 0 auto;">
    <h2 style="font-size: 1.5rem; margin-bottom: 20px; color: #fff;">Tambah Data Siswa</h2>
    
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        @include('siswa._form')

        <div style="margin-top: 30px; display: flex; gap: 12px; justify-content: flex-end;">
            <a href="{{ route('siswa.index') }}" class="btn-secondary-custom">Batal</a>
            <button type="submit" class="btn-primary-custom">Simpan Data</button>
        </div>
    </form>
</div>
@endsection