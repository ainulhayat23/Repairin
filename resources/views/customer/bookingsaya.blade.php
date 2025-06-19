<div class="container py-5">
    <h2 class="mb-4">Form Pemesanan</h2>

    <form action="{{ route('customer.pesan') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cabang" class="form-label">Pilih Cabang:</label>
            <select name="cabang" id="cabang" class="form-select" required>
                <option value="">--pilih--</option>
                @foreach($semuaCabang as $sc)
                <option value="{{ $sc->id }}">{{ $sc->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="layanan" class="form-label">Pilih Layanan:</label>
            <select name="layanan_id" id="layanan" class="form-select" required>
                <option value="">--pilih--</option>
                @foreach($semuaLayanan as $sl)
                <option value="{{ $sl->id }}">{{ $sl->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pilih Teknisi:</label>
            <select name="teknisi_id" id="" class="form-select">
                <option value="">--pilih--</option>
                @foreach($semuaTeknisi as $sb)
                <option value="{{ $sb->id }}">{{ $sb->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pilih Jadwal:</label>
            <input type="date" name="penjadwalan">
        </div>
        <div class="mb-3">
            <label for="">Metode Layanan:</label>
            <select name="metode_layanan" id="">
                <option value="">--pilih--</option>
                <option value="toko">Toko</option>
                <option value="rumah">Rumah</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Masukkan lokasi anda</label>
            <input type="text" name="lokasi" placeholder="isi jika pilih rumah" class="form-control">
        </div>


        <button type="submit" class="btn btn-success">Pesan Sekarang</button>
    </form>
</div>