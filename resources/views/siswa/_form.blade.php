<style>
    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #a8a8b3;
        font-size: 0.9rem;
    }

    .form-input, .form-select, .form-textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 6px;
        color: #ffffff;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.3s;
    }

    .form-input:focus, .form-select:focus, .form-textarea:focus {
        border-color: #ffffff;
    }

    .form-select option {
        background-color: #121214;
        color: #ffffff;
    }

    .error-text {
        color: #ef4444;
        font-size: 0.8rem;
        margin-top: 5px;
    }
</style>

<div class="form-group">
    <label class="form-label">NIS</label>
    <input type="text" name="nis" class="form-input" value="{{ old('nis', $siswa->nis ?? '') }}" placeholder="Masukkan NIS">
    @error('nis') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" class="form-input" value="{{ old('nama', $siswa->nama ?? '') }}" placeholder="Masukkan nama siswa">
    @error('nama') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-select">
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="L" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
        <option value="P" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>
    @error('jenis_kelamin') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-input" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}">
    @error('tanggal_lahir') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Kelas</label>
    <input type="text" name="kelas" class="form-input" value="{{ old('kelas', $siswa->kelas ?? '') }}" placeholder="Contoh: XI RPL 1">
    @error('kelas') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Email (Opsional)</label>
    <input type="email" name="email" class="form-input" value="{{ old('email', $siswa->email ?? '') }}" placeholder="contoh@email.com">
    @error('email') <div class="error-text">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label class="form-label">Alamat (Opsional)</label>
    <textarea name="alamat" rows="3" class="form-textarea" placeholder="Masukkan alamat lengkap">{{ old('alamat', $siswa->alamat ?? '') }}</textarea>
    @error('alamat') <div class="error-text">{{ $message }}</div> @enderror
</div>