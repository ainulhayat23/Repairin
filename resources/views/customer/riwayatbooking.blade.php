<div class="container py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Riwayat Booking</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Waktu Laporan</th>
                            <th scope="col">Cabang</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Teknisi</th>
                            <th scope="col">Metode</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($riwayatBooking as $i => $booking)
                            <tr>
                                <td class="text-center">{{ $riwayatBooking->firstItem() + $i }}</td>
                                <td>{{ $booking->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $booking->cabang->nama }}</td>
                                <td>{{ $booking->layanan->nama }}</td>
                                <td>{{ $booking->teknisi ? $booking->teknisi->name : 'Tidak ada' }}</td>
                                <td>{{ ucfirst($booking->metode_layanan) }}</td>
                                <td>{{ $booking->lokasi ?? '-' }}</td>
                                <td class="text-center">
                                    <span class="badge px-3 py-2 bg-{{ 
                                        $booking->status === 'selesai' ? 'success' : 
                                        ($booking->status === 'dibatalkan' ? 'danger' : 'warning'
                                    ) }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-3">
                {{ $riwayatBooking->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
