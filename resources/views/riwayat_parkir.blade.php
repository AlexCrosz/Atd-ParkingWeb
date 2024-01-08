
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Riwayat Parkir
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <!-- Display parking history here -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Plat Nomor</th>
                                <th>Jenis Kendaraan</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Total Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayatParkir as $riwayat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $riwayat->plat }}</td>
                                    <td>{{ $riwayat->jenis_kendaraan }}</td>
                                    <td>{{ $riwayat->tanggal }}</td>
                                    <td>{{ $riwayat->jam_masuk }}</td>
                                    <td>{{ $riwayat->total_pembayaran }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
