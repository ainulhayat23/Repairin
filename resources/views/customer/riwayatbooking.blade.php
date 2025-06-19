<div class="table-responsive">
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Waktu Pemesanan</th>
                <th scope="col">Cabang</th>
                <th scope="col">Layanan</th>
                <th scope="col">Barber</th>
                <th scope="col">Metode Layanan</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayatBooking as $i => $booking)
            <tr>
                <td>{{ $riwayatBooking->firstItem() + $i }}</td>
                <td>{{ $booking->created_at->format('d-m-Y H:i') }}</td>
                <td>{{ $booking->cabang->nama }}</td>
                <td>{{ $booking->layanan->nama }}</td>
                <td>{{ $booking->teknisi ? $booking->teknisi->name : 'Tidak ada' }}</td>
                <td>{{ ucfirst($booking->metode_layanan) }}</td>
                <td>{{ $booking->lokasi ?? '-' }}</td>
                <td><span
                        class="badge bg-{{ $booking->status == 'selesai' ? 'success' : ($booking->status == 'dibatalkan' ? 'danger' : 'warning') }}">{{ ucfirst($booking->status) }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $riwayatBooking->links('pagination::bootstrap-5') }}
</div>