<div class="container py-5">

    <!-- Bagian Cabang -->
    <div class="mb-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Daftar Cabang</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota/Kab</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semuaCabang as $cabang)
                                <tr>
                                    <td>{{ $cabang->nama }}</td>
                                    <td>{{ $cabang->alamat }}</td>
                                    <td>{{ $cabang->kota_kab }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Layanan -->
    <div>
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Daftar Layanan</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semuaLayanan as $layanan)
                                <tr>
                                    <td>{{ $layanan->nama }}</td>
                                    <td>{{ $layanan->deskripsi }}</td>
                                    <td class="text-danger fw-semibold">Rp{{ number_format($layanan->harga, 0, ',', '.') }}</td>
                                    <td><span class="badge bg-secondary">{{ $layanan->durasi }} hari</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
