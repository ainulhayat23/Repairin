<div class="container py-5">

    <div class="mb-5">
        <h2 class="section-title mb-3">Daftar Cabang</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
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

    <div>
        <h2 class="section-title mb-3">Daftar Layanan</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
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
                        <td>Rp{{ number_format($layanan->harga, 0, ',', '.') }}</td>
                        <td>{{ $layanan->durasi }} menit</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>