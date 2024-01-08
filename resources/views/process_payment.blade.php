<x-app-layout>
    <!-- Bagian header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pembayaran ADT E-Parking
        </h2>
    </x-slot>

    <!-- Bagian form -->
    <form action="/process_payment" method="POST" id="paymentForm">
        @csrf
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-warning" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <!-- PLAT -->
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span style="background: #ffffff;color: var(--bs-blue);">PLAT NOMOR</span>
                                    </div>
                                    <input type="text" id="platInput" name="plat" value="{{ $pembayaran->plat ?? '' }}" readonly>
                                </div>
                            </div>
                            <!-- JENIS KENDARAAN -->
                            <div class="row align-items-center no-gutters mt-2">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span style="background: #ffffff;color: var(--bs-blue);">Jenis Kendaraan</span>
                                    </div>
                                    <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" value="{{ $pembayaran->jenis_kendaraan ?? '' }}" readonly>
                                </div>
                            </div>
                            <!-- TANGGAL -->
                            <div class="row align-items-center no-gutters mt-3">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span style="background: #ffffff;color: var(--bs-blue);">Tanggal</span>
                                    </div>
                                    <input type="text" id="tanggal" name="tanggal" value="{{ $pembayaran->tanggal ?? '' }}" readonly>
                                </div>
                            </div>
                            <!-- JAM MASUK -->
                            <div class="row align-items-center no-gutters mt-4">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span style="background: #ffffff;color: var(--bs-blue);">Jam Masuk</span>
                                    </div>
                                    <input type="text" id="jam_masuk" name="jam_masuk" value="{{ $pembayaran->jam_masuk ?? '' }}" readonly>
                                </div>
                            </div>
                            <!-- TOTAL PEMBAYARAN -->
                            <div class="row align-items-center no-gutters mt-4">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <span style="background: #ffffff;color: var(--bs-blue);">Total Pembayaran</span>
                                    </div>
                                    <input type="text" id="totalPembayaran" name="total_pembayaran" value="{{ $pembayaran->total_pembayaran ?? '' }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Button -->
                        <button id="paymentButton">Bayar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bagian instruksi di sebelah kanan -->
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-6 col-xl-9 mb-4">
                <div class="card shadow border-start-info py-2 bg-warning">
                    <div class="card-body">
                        <h6 class="card-title text-primary fw-bold">INSTRUKSI:</h6>
                        <ul id="instruction" class="list-group list-group-flush">
                            <li class="list-group-item bg-warning">1. Isi detail kendaraan yang memasuki tempat parkir.</li>
                            <li class="list-group-item bg-warning">2. Tekan tombol Kirim.</li>
                            <li class="list-group-item bg-warning">3. Buka Halaman Kendaraan untuk mengedit, menghapus, dan mencetak tanda terima parkir.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
