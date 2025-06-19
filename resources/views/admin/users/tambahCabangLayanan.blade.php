<form action="{{ route('admin.cabangLayanan.store') }}" method="POST">
    @csrf

    <h5>Data Cabang</h5>
    <div class="mb-3">
        <label for="nama_cabang" class="form-label">Nama Cabang</label>
        <input type="text" name="nama_cabang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="kota_kab" class="form-label">Kota/Kabupaten</label>
        <input type="text" name="kota_kab" class="form-control" required>
    </div>

    <hr>
    <h5>Data Layanan</h5>
    <div class="mb-3">
        <label for="nama_layanan" class="form-label">Nama Layanan</label>
        <input type="text" name="nama_layanan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="durasi" class="form-label">Durasi (menit)</label>
        <input type="text" name="durasi" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>