@extends('layouts.app')

@section('content')
<style>
    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .title-group h1 {
        font-size: 2rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 6px;
    }

    .title-group p {
        color: #a8a8b3;
        font-size: 0.9rem;
    }

    .search-bar {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .search-input {
        padding: 10px 14px;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 6px;
        color: #ffffff;
        font-size: 0.9rem;
        outline: none;
        width: 100%;
        max-width: 300px;
    }

    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        text-align: left;
    }

    th {
        padding: 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        color: #a8a8b3;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    td {
        padding: 18px 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        color: #e1e1e6;
        font-size: 0.95rem;
    }

    tr:hover td {
        background: rgba(255, 255, 255, 0.02);
    }

    .action-group {
        display: flex;
        gap: 8px;
    }

    .pagination-wrapper {
        margin-top: 20px;
    }
</style>

<div class="glass-card">
    <div class="header-section">
        <div class="title-group">
            <h1>Manajemen Data Siswa</h1>
            <p>Kelola informasi dan profil siswa SMK Senopati</p>
        </div>
        <a href="{{ route('siswa.create') }}" class="btn-primary-custom">
            + Tambah Siswa
        </a>
    </div>

    <!-- Form Pencarian -->
    <form action="{{ route('siswa.index') }}" method="GET" class="search-bar">
        <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari nama atau NIS..." class="search-input">
        <button type="submit" class="btn-secondary-custom">Cari</button>
        @if(request('q'))
            <a href="{{ route('siswa.index') }}" class="btn-secondary-custom" style="text-decoration: none;">Reset</a>
        @endif
    </form>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>L/P</th>
                    <th>Kelas</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswa as $index => $item)
                <tr>
                    <td>{{ $siswa->firstItem() + $index }}</td>
                    <td>{{ $item->nis }}</td>
                    <td style="font-weight: 600; color: #ffffff;">{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td style="text-align: center;">
                        <div class="action-group" style="justify-content: center;">
                            <a href="{{ route('siswa.show', $item->id) }}" class="btn-secondary-custom">Detail</a>
                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn-secondary-custom">Edit</a>
                            <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger-custom">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: #a8a8b3; padding: 40px;">
                        Data siswa tidak ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination-wrapper">
        {{ $siswa->links() }}
    </div>
</div>
@endsection