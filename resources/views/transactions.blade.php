<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pembayaran ADT E-Parking
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row mt-4">
            <!-- Bagian form -->
            <div class="col-md-6 col-xl-3 mb-4">
                <form action="/process_payment" method="POST">
                    @csrf
                    <div class="card shadow border-start-warning" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">PLAT NOMOR</span></div>
                                    <input type="text" name="plat" style="border-style: initial;border-radius: 7px;background: rgb(245,238,238);height: 48px;width: 325.6px;" placeholder="Masukkan plat nomor kendaraan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol "Bayar" -->
                    <button type="submit" id="bayarButton" class="mt-2 px-4 mr-3 btn btn-primary">Lihat</button>
                    @error('plat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </form>
            </div>
            
            <!-- Bagian instruksi di sebelah kanan -->
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




