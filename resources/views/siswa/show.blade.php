@extends('layouts.app')

@section('content')
<div class="glass-card" style="max-width: 650px; margin: 0 auto;">
    <h2 style="font-size: 1.5rem; margin-bottom: 20px; color: #fff;">Detail Siswa</h2>

    <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">NIS</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->nis }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Nama Lengkap</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->nama }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Jenis Kelamin</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Tanggal Lahir</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->tanggal_lahir }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Kelas</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->kelas }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Email</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->email ?? '-' }}</strong>
        </div>
        <div style="border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 10px;">
            <span style="color: #a8a8b3; font-size: 0.85rem; display: block;">Alamat</span>
            <strong style="font-size: 1.1rem; color: #fff;">{{ $siswa->alamat ?? '-' }}</strong>
        </div>
    </div>

    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="{{ route('siswa.index') }}" class="btn-secondary-custom">← Kembali</a>
        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn-primary-custom">Edit Data</a>
    </div>
</div>
@endsection