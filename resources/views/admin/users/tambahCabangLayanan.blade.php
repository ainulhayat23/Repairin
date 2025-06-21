<form action="{{ route('admin.cabangLayanan.store') }}" method="POST" class="p-4 bg-light rounded shadow-sm">
    @csrf

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Data Cabang</h5>
        </div>
        <div class="card-body">
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
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Data Layanan</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nama_layanan" class="form-label">Nama Layanan</label>
                <input type="text" name="nama_layanan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="durasi" class="form-label">Durasi (Hari)</label>
                    <input type="text" name="durasi" class="form-control" required>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
