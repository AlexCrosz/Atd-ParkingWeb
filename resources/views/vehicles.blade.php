<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kendaraan') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div id="wrapper">
            <div class="card shadow card-body mt-4">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    
                    <table class="table text-center" border="1px">
                        <thead>
                            <tr>
                                <th>Plat Nomor</th>
                                <th>Tipe Kendaraan</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->plat }}</td>
                                    <td>{{ $vehicle->jenis_kendaraan }}</td>
                                    <td>{{ $vehicle->tanggal }}</td>
                                    <td>{{ $vehicle->jam_masuk }}</td>
                                    <td class="d-flex justify-content-center">
                                        <form action="{{route('edit', $vehicle)}}" method="get">
                                            @csrf
                                            <button class="btn btn-success mr-2">Ubah</button>
                                        </form>
                                        <form action="{{ route('destroy', $vehicle) }}" method="post">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                        </form>
                                        <form action="{{ route('print', $vehicle)}}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-secondary ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                                </svg>                                                  
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
                <div>
                    <div class="d-flex justify-content-end">
                        {{$vehicles->links('pagination::bootstrap-4')}}
                    </div>
                    <div class="d-flex justify-content-end">
                        <p>Data per Halaman: {{$vehicles->perPage()}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.master')