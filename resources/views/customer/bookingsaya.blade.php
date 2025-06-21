<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow border-0">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Form Pemesanan Layanan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.pesan') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="cabang" class="form-label">Pilih Cabang</label>
                            <select name="cabang" id="cabang" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                @foreach($semuaCabang as $sc)
                                    <option value="{{ $sc->id }}">{{ $sc->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="layanan" class="form-label">Pilih Layanan</label>
                            <select name="layanan_id" id="layanan" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                @foreach($semuaLayanan as $sl)
                                    <option value="{{ $sl->id }}">{{ $sl->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="teknisi" class="form-label">Pilih Teknisi</label>
                            <select name="teknisi_id" id="teknisi" class="form-select">
                                <option value="">-- Pilih --</option>
                                @foreach($semuaTeknisi as $sb)
                                    <option value="{{ $sb->id }}">{{ $sb->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="penjadwalan" class="form-label">Tanggal Laporan</label>
                            <input type="date" name="penjadwalan" id="penjadwalan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="metode_layanan" class="form-label">Metode Layanan</label>
                            <select name="metode_layanan" id="metode_layanan" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="toko">Toko</option>
                                <option value="rumah">Rumah</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Masukkan Lokasi Anda</label>
                            <input type="text" name="lokasi" id="lokasi" placeholder="Isi jika pilih Rumah" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Lapor Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
