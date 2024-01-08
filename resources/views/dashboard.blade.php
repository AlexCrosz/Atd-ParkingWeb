<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hai! Selamat Datang {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row mt-4 d-flex">
            <div class="col-md-6 col-xl-3 mb-4">
                <form action="" method="POST" >
                    @csrf
                    <div class="card shadow border-start-warning" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">PLAT NOMOR</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="text" name="plat" style="border-style: initial;border-radius: 7px;background: rgb(245,238,238);height: 48px;width: 325.6px;" placeholder="Masukkan plat nomor kendaraan">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">TANGGAL</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="date" name="tanggal" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">JAM MASUK</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="time" name="jam_masuk" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">TIPE KENDARAAN</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                    <select name="jenis_kendaraan" style="width: 144.8px;height: 43.2px;background: rgb(245,238,238);border-style: initial;border-radius: 7px;">
                                        <option value="">Pilih</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Motor">Motor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 px-4 mr-3 btn btn-primary">Parkir</button>
                </form>
            </div>
            <div class="col">
                <div class="card shadow border-start-primary py-2 bg-warning" style="margin-left: 431px;">
                    <div class="card-body">
                        <h6 class="card-title text-primary fw-bold">TOTAL KENDARAAN</h6>
                        <p class="card-text text-black fw-bold fs-4">{{$totalVehicles}}</p>
                    </div>
                     <!-- Popup Parkir Berhasil -->
                        <div id="successPopup" class="popup" style="display:none;">
                            <div class="popup-content">
                                <span class="close" onclick="hideSuccessPopup()">&times;</span>
                                <p>Parkir Berhasil!</p>
                            </div>
                        </div>
                </div>
                <div class="card shadow border-start-info py-2 bg-warning" style="margin-top: 15px;margin-left: 432px;">
                    <div class="card-body">
                        <h6 class="card-title text-primary fw-bold">INSTRUKSI:</h6>
                        <ul id="instruction" class="list-group list-group-flush">
                            <li class="list-group-item bg-warning">1. Masukkan detail kendaraan yang memasuki tempat parkir.</li>
                            <li class="list-group-item bg-warning">2. Klik kirim.</li>
                            <li class="list-group-item bg-warning">3. Buka Halaman Kendaraan untuk mengedit, menghapus, dan mencetak tanda terima parkir.</li>
                        </ul>
                        <style>#instruction {font-size: 10pt}</style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function showSuccessPopup() {
            var popup = document.getElementById("successPopup");
            popup.style.display = "block";
            setTimeout(function() {
                popup.style.display = "none";
            }, 3000); // Sembunyikan popup setelah 3 detik
        }

        function hideSuccessPopup() {
            var popup = document.getElementById("successPopup");
            popup.style.display = "none";
        }
    </script>

</x-app-layout>

@include('layouts.master')
